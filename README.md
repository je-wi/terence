# Publius Terentius Afer (Terence)
## Corpus statistics from the six plays of Terence[^1]

Works are from The Packard Humanities Institute's CD ROM 5.3 (published in 1991)[^2] and exported to XML with Diogens[^3] 

| title | orginal filename  | filename | Source Description |
| :--- | :--- | :--- | :--- |
| Adelphoe | phi0134006.xml | Adelphoe.xml | P. Terentius Afer. Adelphoe (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 006) |
| Andria | phi0134001.xml | Andria.xml | P. Terentius Afer. Andria (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 001) |
| Eunuchus | phi0134003.xml | Eunuchus.xml | P. Terentius Afer. Eunuchus (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 003) |
| Heauton Timorumenos | phi0134002.xml | Heauton_Timorumenos.xml | P. Terentius Afer. Heauton Timorumenos (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 002) |
| Hecyra | phi0134005.xml | Hecyra.xml | P. Terentius Afer. Hecyra (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 005) |
| Phormio | phi0134004.xml | Phormio.xml | P. Terentius Afer. Phormio (P. Terenti Afri Comoediae, ed. R. Kauer; W. M. Lindsay; O. Skutsch, 1958).  (0134: 004) |

## Files and folders
- data: Folder for the XML files and the statistics in CSV format (tab-delimited). The XML files of the six plays are not part of this repository.
- functions.php: Some separated functions.
- phi5_readTerenceSpeakers.php: Counts words:
  - from the author
  - from a play
  - from a role in a play
- terenti_personae.json: A configuration file in JSON format in which the abbreviations of the speaker elements are resolved per scene
```
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
    
```
## CSV files
- Adelphoe_Aeschinvs_words.csv
- Adelphoe_Canthara_words.csv
- Adelphoe_Cantor_words.csv
- Adelphoe_Ctesipho_words.csv
- Adelphoe_Demea_words.csv
- Adelphoe_Dromo_words.csv
- Adelphoe_Geta_words.csv
- Adelphoe_Hegio_words.csv
- Adelphoe_Micio_words.csv
- Adelphoe_Pamphila_words.csv
- Adelphoe_Parmeno_words.csv
- Adelphoe_Prologvs_words.csv
- Adelphoe_Sannio_words.csv
- Adelphoe_Sostrata_words.csv
- Adelphoe_Syrvs_words.csv
- Adelphoe_percentage.csv
- Adelphoe_words.csv
- Andria_Byrria_words.csv
- Andria_Cantor_words.csv
- Andria_Charinvs_words.csv
- Andria_Chremes_words.csv
- Andria_Crito_words.csv
- Andria_Davos_words.csv
- Andria_Dromo_words.csv
- Andria_Glycerivm_words.csv
- Andria_Lesbia_words.csv
- Andria_Mysis_words.csv
- Andria_Pamphilvs_words.csv
- Andria_Prologvs_words.csv
- Andria_Simo_words.csv
- Andria_Sosia_words.csv
- Andria_percentage.csv
- Andria_words.csv
- Eunuchus_Antipho_words.csv
- Eunuchus_Cantor_words.csv
- Eunuchus_Chaerea_words.csv
- Eunuchus_Chremes_words.csv
- Eunuchus_Dorias_words.csv
- Eunuchus_Dorvs_words.csv
- Eunuchus_Gnatho_words.csv
- Eunuchus_Parmeno_words.csv
- Eunuchus_Phaedria_words.csv
- Eunuchus_Prologvs_words.csv
- Eunuchus_Pythias_words.csv
- Eunuchus_Sanga_words.csv
- Eunuchus_Senex_words.csv
- Eunuchus_Sophrona_words.csv
- Eunuchus_Thais_words.csv
- Eunuchus_Thraso_words.csv
- Eunuchus_percentage.csv
- Eunuchus_words.csv
- Heauton_Timorumenos_Antiphila_words.csv
- Heauton_Timorumenos_Bacchis_words.csv
- Heauton_Timorumenos_Cantor_words.csv
- Heauton_Timorumenos_Chremes_words.csv
- Heauton_Timorumenos_Clinia_words.csv
- Heauton_Timorumenos_Clitipho_words.csv
- Heauton_Timorumenos_Dromo_words.csv
- Heauton_Timorumenos_Menedemvs_words.csv
- Heauton_Timorumenos_Nvtrix_words.csv
- Heauton_Timorumenos_Phrygia_words.csv
- Heauton_Timorumenos_Prologvs_words.csv
- Heauton_Timorumenos_Sostrata_words.csv
- Heauton_Timorumenos_Syrvs_words.csv
- Heauton_Timorumenos_percentage.csv
- Heauton_Timorumenos_words.csv
- Hecyra_Bacchis_words.csv
- Hecyra_Cantor_words.csv
- Hecyra_Laches_words.csv
- Hecyra_Myrrina_words.csv
- Hecyra_Pamphilvs_words.csv
- Hecyra_Parmeno_words.csv
- Hecyra_Phidippvs_words.csv
- Hecyra_Philotis_words.csv
- Hecyra_Prologvs_words.csv
- Hecyra_Sosia_words.csv
- Hecyra_Sostrata_words.csv
- Hecyra_Syra_words.csv
- Hecyra_percentage.csv
- Hecyra_words.csv
- Phormio_Antipho_words.csv
- Phormio_Cantor_words.csv
- Phormio_Chremes_words.csv
- Phormio_Cratinvs_words.csv
- Phormio_Crito_words.csv
- Phormio_Davos_words.csv
- Phormio_Demipho_words.csv
- Phormio_Dorio_words.csv
- Phormio_Geta_words.csv
- Phormio_Hegio_words.csv
- Phormio_Navsistrata_words.csv
- Phormio_Phaedria_words.csv
- Phormio_Phormio_words.csv
- Phormio_Prologvs_words.csv
- Phormio_Sophrona_words.csv
- Phormio_percentage.csv
- Phormio_words.csv
- terence_words.csv

[^1]: https://en.wikipedia.org/wiki/Terence.
[^2]: For the digital resources see: https://wiki.digitalclassicist.org/Greek_and_Latin_texts_in_digital_form.
[^3]: Version 4: https://d.iogen.es/d/.
