# Publius Terentius Afer (Terence)
## Corpus statistics from the six plays of Terence[^1]

Digital Texts are from The Packard Humanities Institute's CD ROM 5.3 (published in 1991)[^2] and exported to XML with Diogens[^3] 

| title | orginal filename  | filename | Source Description |
| :--- | :--- | :--- | :--- |
| Adelphoe | phi0134006.xml | Adelphoe.xml | P. Terentius Afer. Adelphoe (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 006) |
| Andria | phi0134001.xml | Andria.xml | P. Terentius Afer. Andria (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 001) |
| Eunuchus | phi0134003.xml | Eunuchus.xml | P. Terentius Afer. Eunuchus (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 003) |
| Heauton Timorumenos | phi0134002.xml | Heauton_Timorumenos.xml | P. Terentius Afer. Heauton Timorumenos (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 002) |
| Hecyra | phi0134005.xml | Hecyra.xml | P. Terentius Afer. Hecyra (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 005) |
| Phormio | phi0134004.xml | Phormio.xml | P. Terentius Afer. Phormio (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 004) |

## Files and folders
- data: Folder for the XML files and the statistics in TSV format. **The XML files of the six plays are not part of this repository.**
- functions.php: Some separated functions.
- phi5_readTerenceSpeakers.php: Counts words:
  - from the author
  - from a play
  - from a role in a play
```php            
# mb_chr needs PHP 7 >= 7.2.0
$nodeValue = str_replace( mb_chr(0x2014), mb_chr(0x0020), $nodeValue );
```
- terenti_personae.json: A configuration file in JSON format in which the abbreviations of the speaker elements are resolved per scene. The attribution of text passages to the speaking persons is problematic across the works, since the persons are only named in abbreviated form, and the abbreviations are not used unambiguously per piece, but are only understandable in the context of individual scenes. For example, the abbreviation CH. in Andria can stand for both Chremes (e.g. verse 533) and Charinvs (e.g. verse 301).
```json
{
	"Adelphoe.xml": {
		"Demea Micio": {
			"De.": "Demea",
			"Mi.": "Micio"
		},
		"Sannio Aeschinvs Parmeno (Bacchis)": {
			"Sa.": "Sannio",
			"Ae.": "Aeschinvs",
			"Pa.": "Parmeno"
		},
		"Syrvs Sannio": {
			"Sy.": "Syrvs",
			"Sa.": "Sannio"
		},
		"Ctesipho Sannio Syrvs": {
			"Sy.": "Syrvs",
			"Sa.": "Sannio",
			"Ct.": "Ctesipho"
		},
		
		.
		.
		.
		
    
```
## TSV files in data folder
- Adelphoe_Aeschinvs_words.tsv
- Adelphoe_Canthara_words.tsv
- Adelphoe_Cantor_words.tsv
- Adelphoe_Ctesipho_words.tsv
- Adelphoe_Demea_words.tsv
- Adelphoe_Dromo_words.tsv
- Adelphoe_Geta_words.tsv
- Adelphoe_Hegio_words.tsv
- Adelphoe_Micio_words.tsv
- Adelphoe_Pamphila_words.tsv
- Adelphoe_Parmeno_words.tsv
- Adelphoe_Prologvs_words.tsv
- Adelphoe_Sannio_words.tsv
- Adelphoe_Sostrata_words.tsv
- Adelphoe_Syrvs_words.tsv
- Adelphoe_percentage.tsv
- Adelphoe_words.tsv
- Andria_Byrria_words.tsv
- Andria_Cantor_words.tsv
- Andria_Charinvs_words.tsv
- Andria_Chremes_words.tsv
- Andria_Crito_words.tsv
- Andria_Davos_words.tsv
- Andria_Dromo_words.tsv
- Andria_Glycerivm_words.tsv
- Andria_Lesbia_words.tsv
- Andria_Mysis_words.tsv
- Andria_Pamphilvs_words.tsv
- Andria_Prologvs_words.tsv
- Andria_Simo_words.tsv
- Andria_Sosia_words.tsv
- Andria_percentage.tsv
- Andria_words.tsv
- Eunuchus_Antipho_words.tsv
- Eunuchus_Cantor_words.tsv
- Eunuchus_Chaerea_words.tsv
- Eunuchus_Chremes_words.tsv
- Eunuchus_Dorias_words.tsv
- Eunuchus_Dorvs_words.tsv
- Eunuchus_Gnatho_words.tsv
- Eunuchus_Parmeno_words.tsv
- Eunuchus_Phaedria_words.tsv
- Eunuchus_Prologvs_words.tsv
- Eunuchus_Pythias_words.tsv
- Eunuchus_Sanga_words.tsv
- Eunuchus_Senex_words.tsv
- Eunuchus_Sophrona_words.tsv
- Eunuchus_Thais_words.tsv
- Eunuchus_Thraso_words.tsv
- Eunuchus_percentage.tsv
- Eunuchus_words.tsv
- Heauton_Timorumenos_Antiphila_words.tsv
- Heauton_Timorumenos_Bacchis_words.tsv
- Heauton_Timorumenos_Cantor_words.tsv
- Heauton_Timorumenos_Chremes_words.tsv
- Heauton_Timorumenos_Clinia_words.tsv
- Heauton_Timorumenos_Clitipho_words.tsv
- Heauton_Timorumenos_Dromo_words.tsv
- Heauton_Timorumenos_Menedemvs_words.tsv
- Heauton_Timorumenos_Nvtrix_words.tsv
- Heauton_Timorumenos_Phrygia_words.tsv
- Heauton_Timorumenos_Prologvs_words.tsv
- Heauton_Timorumenos_Sostrata_words.tsv
- Heauton_Timorumenos_Syrvs_words.tsv
- Heauton_Timorumenos_percentage.tsv
- Heauton_Timorumenos_words.tsv
- Hecyra_Bacchis_words.tsv
- Hecyra_Cantor_words.tsv
- Hecyra_Laches_words.tsv
- Hecyra_Myrrina_words.tsv
- Hecyra_Pamphilvs_words.tsv
- Hecyra_Parmeno_words.tsv
- Hecyra_Phidippvs_words.tsv
- Hecyra_Philotis_words.tsv
- Hecyra_Prologvs_words.tsv
- Hecyra_Sosia_words.tsv
- Hecyra_Sostrata_words.tsv
- Hecyra_Syra_words.tsv
- Hecyra_percentage.tsv
- Hecyra_words.tsv
- Phormio_Antipho_words.tsv
- Phormio_Cantor_words.tsv
- Phormio_Chremes_words.tsv
- Phormio_Cratinvs_words.tsv
- Phormio_Crito_words.tsv
- Phormio_Davos_words.tsv
- Phormio_Demipho_words.tsv
- Phormio_Dorio_words.tsv
- Phormio_Geta_words.tsv
- Phormio_Hegio_words.tsv
- Phormio_Navsistrata_words.tsv
- Phormio_Phaedria_words.tsv
- Phormio_Phormio_words.tsv
- Phormio_Prologvs_words.tsv
- Phormio_Sophrona_words.tsv
- Phormio_percentage.tsv
- Phormio_words.tsv
- terence_words.tsv

[^1]: https://en.wikipedia.org/wiki/Terence.
[^2]: For the digital resources see: https://wiki.digitalclassicist.org/Greek_and_Latin_texts_in_digital_form. There is an online version from the texts onthe website https://latin.packhum.org/author/134.
[^3]: Version 4: https://d.iogen.es/d/.
