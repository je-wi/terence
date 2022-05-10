<?php


function readDocFolder($dir)
  {
  $files = scandir($dir);
  $r = array();
  
  if( is_array($files) )
    {
    foreach ($files as $key => $value)
       {
          if ( !in_array($value,array(".","..")) AND !is_dir($dir.'/'.$value) )
          {
          $r[] = $value;
          }
       } 
    
    }
  return $r;  
  } 


function removeLBs($line)
  {
  $line = str_replace("\r\n",'',$line);
  $line = str_replace("\n",'',$line);
  $line = str_replace("\r",'',$line);
  $line = str_replace(chr(13), "", $line);
  $line = preg_replace('/ {2,}/', ' ', $line); 
  $line = str_replace("\t",' ',$line);   
  return trim($line);
  }
  
function translitString($str,$ruleset="Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC;")
  {
   # for more infos about the translitare see
   # ICU User Guide
   # https://unicode-org.github.io/icu/userguide/transforms/general/
   # http://www.eki.ee/wgrs/
 
  $str = transliterator_transliterate($ruleset, $str);
  
  return $str;
  }//end function  


 function writeCalcWordList($filename,$r,$delim="\t")
  {
  $content = '';
  
  if(file_exists($filename))
    return false;
    
  $percent_this = $percent_this_round = $percent_all = $percent_all_round = $zipf = $zipf2 = $wordlength = 0;
  $rang = 1;
  $allwords = 0;
  foreach($r as $word=>$word_count)
    {
    $allwords+=$word_count;
    }//end foreach     
  
  $content.="rank".$delim."word".$delim."wordlength".$delim."count".$delim."frequency(count*100/".$allwords.")".$delim."sum frequency".$delim."zipf(rank*count)".$delim."zipf(max/rank)\r\n";  

  if( count($r) == 0 ) return;
  
  arsort($r); # should be redundant - but we need it for the next step
  
  foreach($r as $word=>$word_count)
    {
    $lastwordcount=$word_count;
    break;
    }
  $highestwordcount = $lastwordcount;
  
  foreach($r as $word=>$word_count)
    {
    if($word_count < $lastwordcount)
      $rang+=1;  
    
    $lastwordcount = $word_count;
  
    $percent_this = $word_count * 100 / $allwords;
    $percent_this_round = round( $percent_this, 4 );
    $percent_all+=$percent_this;
    $percent_all_round = round( $percent_all, 4 );
    $zipf = $rang * $word_count;
    
    $zipf2 = $highestwordcount / $rang;
    $zipf2 = round($zipf2, 1);
    
    # polytonic needs multibype
    $wordlength = mb_strlen($word);
    
    if($word=='"') $word ='""""';
    
    $content.=$rang.$delim.$word.$delim.$wordlength.$delim.$word_count.$delim.$percent_this_round.$delim.$percent_all_round.$delim.$zipf.$delim.$zipf2."\r\n";
    }//end foreach
    
  return file_put_contents($filename, $content ,FILE_APPEND | LOCK_EX);
  }//end function

?>
