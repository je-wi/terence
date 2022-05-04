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

[^1]: https://en.wikipedia.org/wiki/Terence.
[^2]: For the digital resources see: https://wiki.digitalclassicist.org/Greek_and_Latin_texts_in_digital_form.
[^3]: Version 4: https://d.iogen.es/d/.
