<?php
# intl
# mbstring 

exit('phi5_readSpeakers allways done');

# some functions
require_once('functions.php');


# Andria has an alternative ending
# it has to removed first
# <l n="977t"><label type="head" rend="indent(4)">EXITVS ALTER SVPPOSITICIVS</label> </l>

# the six xml-files are seperated in one folder 
# they are not part of the repository - can be exportet from CD-ROM via diogenes https://d.iogen.es/ (Version 4)
# also see: https://latin.packhum.org/author/134

$destfolder = 'data/';
$speakersAbbr = json_decode(file_get_contents( 'terenti_personae.json' ),true);

$words2speaker = array();
$words2author = array();

$allfiles = readDocFolder($destfolder);  # functions.php 


foreach($allfiles as $file)
  {
  $filename = $destfolder.$file;  
  $speaker = 'Prologvs';
  $speaker2array = array();

  if( strpos($filename,'.xml')==false )
    continue;
  
  $words2speaker[$file] = array();
  $words2work = array();
  
  $doc = new DOMDocument();
  if($doc->load($filename))
    {
    $lines =  $doc->getElementsByTagName('body')->item(0)->getElementsByTagName('l');    
    foreach( $lines as $line )
      {
      $nr = $line->getAttribute('n');

      if( !$line->hasChildNodes() )
        {
        # empty node
        }
      else
        {
   
        foreach( $line->childNodes as $childnode1 )
          {
          
          $nodeName = $childnode1->nodeName;
          if( $nodeName=='#text' )
            {
            $nodeValue = $childnode1->nodeValue;
            $nodeValue = removeLBs($nodeValue);  # functions.php 

            # foursquare is replaced with unprotected space character
            $nodeValue = str_replace( mb_chr(0x2014), mb_chr(0x0020), $nodeValue );
            
            # U+003C / U+003E arn't in the ruleset
            $nodeValue = str_replace( array('&lt;','&gt;','<','>')  , '', $nodeValue );
            
            $ruleset = 'Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; [:Punctuation:] Remove; Lower();';  
            $nodeValue = translitString($nodeValue,$ruleset); # functions.php            
            $nodeValue = trim($nodeValue);          
            
            if(!empty($nodeValue))
              {
              # line to array
              if(!array_key_exists($speaker,$speaker2array) )
                {
                $speaker2array[$speaker] = array();
                }

              $value = array($nr=>$nodeValue);
              array_push($speaker2array[$speaker],$value);
             
             # count every single word 
             if(!array_key_exists($speaker,$words2speaker[$file]) )
                {
                $words2speaker[$file][$speaker] = array();
                } 
                
              $wordsFromLine = explode(' ',$nodeValue);
              foreach($wordsFromLine as $singleWord) 
                {
                if( !empty($singleWord) )
                  {
                  # speakers words list
                  if( !array_key_exists($singleWord,$words2speaker[$file][$speaker]) )
                     $words2speaker[$file][$speaker][$singleWord] =  0;                     
                  $words2speaker[$file][$speaker][$singleWord]++;                         
                  
                  # work words list
                  if( !array_key_exists($singleWord,$words2work) )
                    $words2work[$singleWord] =  0;   
                  $words2work[$singleWord]++;                                         
                 
                  # author words list
                  if( !array_key_exists($singleWord,$words2author) )
                    $words2author[$singleWord] =  0;   
                  $words2author[$singleWord]++;   

                  }//end if

                }//end foreach            
              
              }//end if !empty

            }//end if
          elseif( $nodeName=='pb' )
            {
             # pagebreak
                          
            }
          elseif( $nodeName=='label' AND $childnode1->getAttribute('type')=='head' )
            {
            # title / header
            
            }
          elseif( $nodeName=='label' AND $childnode1->getAttribute('type')=='speaker' AND strpos($nr,'t')!==false )
            {
            # <l n="28t"><label type="head" rend="indent(4)">ACTVS I</label> 
            # <label type="speaker" rend="indent(4)"><hi rend="small-caps">Simo Sosia</hi></label> </l>
            # <l n="28"><label type="speaker"><hi rend="small-caps">Si.</hi></label> Vos istaec intro auferte: abite.—Sosia, </l> 
            $speakerstitle = $childnode1->nodeValue;
            
            $speakerstitle = removeLBs($speakerstitle); # functions.php 
            $speakers = explode(' ', $speakerstitle);
            if( count($speakers) == 1 )
              $speaker = $speakers[0];
            else
              {
              
              }//end else    
            }
          elseif($nodeName=='label' AND $childnode1->getAttribute('type')=='speaker')
            {
            $speaker = $childnode1->nodeValue;
            if( array_key_exists($file,$speakersAbbr) )
              {
              if( array_key_exists($speakerstitle,$speakersAbbr[$file]) )
                {
                if(  array_key_exists($speaker, $speakersAbbr[$file][$speakerstitle] ) )
                   $speaker = $speakersAbbr[$file][$speakerstitle][$speaker];
                }
              }           
            # Cantor.   
            $speaker = str_replace('.','',$speaker); 
            }          
          }
        }
      }

      
      
/*
this would imply making a copy of the text, since all lines are listed sorted by their speaker

      # speaker sentences with linenumbers
      $senfile = str_replace('.xml','_sentences.tsv',$file);
      $delim = "\t";
      $nl = "\r\n";
      $csv = "speaker".$delim."line".$delim."sentence".$nl;       
      foreach($speaker2array as $speaker => $sentences)
        {
        foreach($sentences as $number => $value)
          {
          foreach($value as $linenumber => $sentence)
            {
            $csv.= $speaker.$delim.$linenumber.$delim.$sentence.$nl;
            }//end foreaach          
          }//end foreach       
        }//end foreach
     file_put_contents($destfolder.$senfile,$csv);

*/     
     
    
    # word list for work
    $workfile = str_replace('.xml','_words.tsv',$file);
    writeCalcWordList($destfolder.$workfile,$words2work); # functions.php

    }//end if  
  }//end foreach



$speakersPercentage = array();

foreach($words2speaker as $file => $speakers)
  {
  $workWordsCount = 0;
  $speakersPercentage[$file] = array();
  
  ksort($speakers);  
  
  foreach($speakers as $speaker => $words)
    {
    $speakersWordsCount = 0;
    foreach( $words as $word => $count )
      {
      $speakersWordsCount = $speakersWordsCount + $count;
      $workWordsCount = $workWordsCount + $count;
      }
      
    $speakersPercentage[$file][$speaker] = $speakersWordsCount;
    
    # word list for speaker
    $newfile = str_replace('.xml','_'.$speaker.'_words.tsv',$file);
    writeCalcWordList($destfolder.$newfile,$words); # functions.php
    }//end foreach
  $speakersPercentage[$file]['all'] = $workWordsCount;
  }//end foreach


# author words list
writeCalcWordList($destfolder.'terence_words.tsv',$words2author);

# speaking portion
foreach($speakersPercentage as $file => $speakers)
  {
  $csvfile = str_replace('.xml','_percentage.tsv',$file);
  $delim = "\t";
  $nl = "\r\n";
  $csv = "speaker".$delim."wordcount".$delim."percentage".$nl;
  
  $allwords = $speakersPercentage[$file]["all"];
  
  foreach($speakers as $speaker=>$count)
    {
    if( $speaker == "all" ) continue;
    
    $speakerspercentage = $count * 100 / $allwords;
    $speakerspercentage = round( $speakerspercentage, 2 );
    
    $csv.= $speaker.$delim.$count.$delim.$speakerspercentage.$nl;
    } 
  
  file_put_contents($destfolder.$csvfile,$csv);
  }


?>