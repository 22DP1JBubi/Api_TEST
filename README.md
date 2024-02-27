
Kas ir API?
API ir saīsījums vārdu "Application Programming Interface" (lietojumprogrammu programmēšanas interfeiss). Tas ir veids, kā programmētāji var komunicēt ar datorprogrammām vai platformām, lai piekļūtu datiem un funkcijām, kas tiek piedāvātas. API nodrošina noteiktas instrukcijas un protokolus, pēc kuriem programmētāji var izveidot savienojumus, pieprasīt informāciju un izmantot funkcijas no citām programmām vai sistēmām. 


Kā deklarēt mainīgo PHP valodā?
PHP valodā mainīgo var deklarēt, norādot mainīgā nosaukumu un vērtību. PHP ir dinamiski tipizēta valoda, kas nozīmē, ka mainīgajiem nav nepieciešams deklarēt tipu pirms to izmantošanas. 

<?php
// Deklarējam mainīgo $x un piešķiram tam vērtību 10
$x = 10;

// Izvadam mainīgā vērtību uz ekrāna
echo $x; // izvadīs "10"
?>

Šajā piemērā $x ir mainīgais, un tam ir piešķirta vērtība 10. Pēc tam, izmantojot echo funkciju, mēs izvadam šī mainīgā vērtību uz ekrāna.

Mainīgos PHP var deklarēt arī tukšus vai ar nulles vērtībām un vēlāk piešķirt tiem vērtības, kā arī mainīgos var izmantot dažādās operācijās un funkcijās, atkarībā no nepieciešamības.


Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
Laravel izmanto MVC (Model-View-Controller) arhitektūras modeli, kas ir viens no populārākajiem un plaši izmantotajiem veidiem, kā organizēt lietojumprogrammu kodu. Šeit ir paskaidrojums, kā darbojas MVC arhitektūra Laravel ietvaros:

1. **Modelis (Model)**:
   - Modeļi ir atbildīgi par datu glabāšanu, ieguvi un manipulāciju. Tie pārstāv datu struktūras un uzņemas uzdevumu sazināties ar datu bāzi.
   - Laravel modelis parasti ir atbildīgs par saziņu ar datu bāzi, veicot vaicājumus, iegūstot vai saglabājot datus.
   - Modeļi tiek definēti Laravel kā PHP klases, kas ietver datu bāzes tabulas struktūras un atbilstošos metodus, lai veiktu datu manipulācijas operācijas.

2. **Skats (View)**:
   - Skati ir atbildīgi par informācijas attēlošanu lietotājam. Tie rāda datus, ko izvada no modeliem un nodrošina interaktīvu lietotāja saskarni.
   - Skatus var definēt, izmantojot Laravel šablonu sistēmu, kas ļauj izveidot dinamiskus un atkārtoti izmantojamus skatus.

3. **Kontrolieris (Controller)**:
   - Kontrolieri ir starpnieki starp modeli un skatu. Tie apstrādā lietotāja pieprasījumus, interpretē tos un atbilstoši maina modeļa stāvokli vai atgriež skatus.
   - Kontrolieri tiek izmantoti, lai izpildītu biznesa loģiku, kā arī lai saskaņotu datu apstrādi un skatu attēlošanu.
   - Kontrolierus definē arī kā PHP klases, kas piedāvā dažādus darbību metodus, kuri tiek izpildīti, kad tiek saņemts pieprasījums no lietotāja.

Darbības secība parasti ir šāda:
- Lietotājs veic pieprasījumu, kas tiek nosūtīts uz serveri.
- Kontrolieris saņem pieprasījumu un izlemj, kā to apstrādāt.
- Kontrolieris izsauc nepieciešamos modeļa metodus, lai iegūtu vai saglabātu datus.
- Kontrolieris pēc tam izvēlas atbilstošo skatu un padod tam dati, lai tas varētu tos attēlot lietotājam.
- Skats attēlo datus lietotājam, pamatojoties uz sniegtajiem datiem.

Tādējādi, izmantojot MVC arhitektūru, Laravel ļauj veidot labi strukturētas un uzticamas lietotnes, kurās loģika, dati un prezentācija ir skaidri atdalīti un organizēti.



Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM ir saīsinājums no "Object-Relational Mapping" jeb "Objektu-relāciju attēlošana". Tas ir programmēšanas tehnoloģijas veids, kas ļauj attēlot datu bāzes ierakstus kā objektus jūsu programmēšanas valodā (piemēram, PHP, Java, Python utt.). Katrs datu bāzes ieraksts tiek pārveidots par attiecīgu objektu, kas atvieglo darbu ar datiem, ļaujot izmantot objektu orientētu pieeju datiem, nevis tiešu SQL darbību veikšanu.

Šeit ir dažas priekšrocības, kāpēc cilvēki izmanto ORM tīra SQL vietā:

Objektu orientēta pieeja: ORM ļauj attēlot datu bāzes ierakstus kā objektus, kas atbilst objektu orientētai programmēšanas paradigmai. Tas padara kodu lasāmāku un saprotamāku, jo darbs ar objektiem ir dabiskāks un ērtāks programmētājiem.

Platformu neatkarība: ORM bieži vien piedāvā iespēju izstrādāt kodu, kas ir neatkarīgs no konkrētas datu bāzes platformas. Tas nozīmē, ka, izmantojot ORM, jūs varat izvairīties no tiešas saistības ar konkrētu SQL dialektu vai datu bāzes pieteikumu, kas var būt noderīgi, ja jums nākas mainīt datu bāzes platformu nākotnē.

Ērtība un produktivitāte: ORM piedāvā daudz iebūvētu funkciju un metožu, kas atvieglo darbu ar datiem. Tā kā ORM piedāvā augstāk līmeņa interfeisu datu bāzes operācijām, tas bieži vien var samazināt izstrādes laiku un pūles, kas nepieciešamas, lai izveidotu un uzturētu kodu.

Drošība un SQL injekcijas novēršana: ORM var palīdzēt novērst SQL injekcijas, jo tas pats rūpējas par parametrizēšanu un drošības aspektiem, kas saistīti ar datu bāzes darbībām.

Kopumā ORM ir noderīgs rīks, kas var būt ļoti noderīgs, it īpaši lielākos un sarežģītos projektos, jo tas var uzlabot kodu lasāmību, uzturēšanu un pārnesamību starp dažādām datu bāzēm. Tomēr ir svarīgi saprast, ka ORM nav universāls risinājums, un dažreiz tīrs SQL var būt piemērotāks atkarībā no projektēšanas prasībām un konteksta.




Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus
lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:

$users = User::where('rating', '>', 4)->get();
