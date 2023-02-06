//Calculate for general counter 
var now = Date.now();
var januaryFirst = 1672527600000;
var dayYear2022 = 365;
var seconds = 86400;
var numberDayFromJanuaryFirst = (now - januaryFirst) /86400000;

// Migrant Part With General Counter
var migrantsByDay = 1370;
var allMigrantsCounter = (numberDayFromJanuaryFirst * migrantsByDay);
var allMigrantsCounterNode = document.getElementById('allMigrantsCounterCounter');
allMigrantsCounterNode.innerHTML = Math.round(allMigrantsCounter);

setInterval(function() {
    allMigrantsCounter += migrantsByDay / seconds;
    allMigrantsCounterNode.innerHTML = Math.round(allMigrantsCounter);
}, 1000);

// Illegal Migrants
var illegalMigrantsByDay = 274;
var illegalGeneralMigrantsCounter = (numberDayFromJanuaryFirst * illegalMigrantsByDay);
var illegalGeneralMigrantsCounterNode = document.getElementById('illegalGeneralMigrantsCounter');
illegalGeneralMigrantsCounterNode.innerHTML = Math.round(illegalGeneralMigrantsCounter);
setInterval(function() {
    illegalGeneralMigrantsCounter += (illegalMigrantsByDay / seconds);
    illegalGeneralMigrantsCounterNode.innerHTML = Math.round(illegalGeneralMigrantsCounter);
}, 1000);

// Legal Migrants
var legalImmigrationTotal2022 = 320330;
var legalImmigrationByDay2022 = legalImmigrationTotal2022 / dayYear2022;
//console.log(legalImmigrationByDay2022);
var legalImmigrationCounter = (numberDayFromJanuaryFirst * legalImmigrationByDay2022);
var legalImmigrationCounterNode = document.getElementById('legalImmigrationCounter');
legalImmigrationCounterNode.innerHTML = Math.round(legalImmigrationCounter);
setInterval(function() {
    //LegalGeneralMigrants
    legalImmigrationCounter += legalImmigrationByDay2022 / seconds;
    legalImmigrationCounterNode.innerHTML = Math.round(legalImmigrationCounter);
}, 1000);




// New calcule about total migrant from year
var generalMigrantsCounter = legalImmigrationCounter + illegalGeneralMigrantsCounter;
var generalMigrantsCounterNode = document.getElementById('generalMigrantsCounter');

// Immigration Zemmour Counter

    // Economique Immigration 
    var economicImmigrationTotal2022 = 52570;
    var economicImmigrationByDay2022 = economicImmigrationTotal2022 / dayYear2022;
    var economicGeneralImmigrationCounter = (numberDayFromJanuaryFirst * economicImmigrationByDay2022);
    var economicGeneralImmigrationCounterNode = document.getElementById('economicGeneralImmigrationCounter');
    economicGeneralImmigrationCounterNode.innerHTML = Math.round(economicGeneralImmigrationCounter);
    setInterval(function() {
        economicGeneralImmigrationCounter += (economicImmigrationByDay2022 / seconds);
        economicGeneralImmigrationCounterNode.innerHTML = Math.round(economicGeneralImmigrationCounter);
    }, 1000);

    // Familial Regroupement
    var familialImmigrationTotal2022 = 90385;
    var familialImmigrationByDay2022 = familialImmigrationTotal2022 / dayYear2022;
    //console.log(familialImmigrationByDay2022);
    var familialGeneralImmigrationCounter = (numberDayFromJanuaryFirst * familialImmigrationByDay2022);
    //console.log(familialGeneralImmigrationCounter)
    var familialGeneralImmigrationCounterNode = document.getElementById('familialGeneralImmigrationCounter');
    familialGeneralImmigrationCounterNode.innerHTML = Math.round(familialGeneralImmigrationCounter);
    setInterval(function() {
        familialGeneralImmigrationCounter += (familialImmigrationByDay2022 / seconds);
        familialGeneralImmigrationCounterNode.innerHTML = Math.round(familialGeneralImmigrationCounter);
    }, 1000);
    //console.log(familialImmigrationByDay2022 / seconds)

    // Studient Regroupement
    var studientImmigrationTotal2022 = 108340;
    var studientImmigrationByDay2022 = studientImmigrationTotal2022 / dayYear2022;
    // console.log(studientImmigrationByDay2022);
    var studientGeneralImmigrationCounter = (numberDayFromJanuaryFirst * studientImmigrationByDay2022);
    // console.log(studientGeneralImmigrationCounter);
    var studientGeneralImmigrationCounterNode = document.getElementById('studientGeneralImmigrationCounter');
    studientGeneralImmigrationCounterNode.innerHTML = Math.round(studientGeneralImmigrationCounter);
    setInterval(function() {
        studientGeneralImmigrationCounter += (studientImmigrationByDay2022 / seconds);
        studientGeneralImmigrationCounterNode.innerHTML = Math.round(studientGeneralImmigrationCounter);
    }, 1000);
    //console.log(studientImmigrationByDay2022 / seconds);

    // Humanitaire Immigration
    var humanitaireImmigrationTotal2022 = 40490;
    var humanitaireImmigrationByDay2022 = humanitaireImmigrationTotal2022 / dayYear2022;
    //console.log(humanitaireImmigrationByDay2022);
    var humanitaireGeneralImmigrationCounter = (numberDayFromJanuaryFirst * humanitaireImmigrationByDay2022);
    //console.log(humanitaireGeneralImmigrationCounter);
    var humanitaireGeneralImmigrationCounterNode = document.getElementById('humanitaireGeneralImmigrationCounter');
    humanitaireGeneralImmigrationCounterNode.innerHTML = Math.round(humanitaireGeneralImmigrationCounter);
    setInterval(function() {
        humanitaireGeneralImmigrationCounter += (humanitaireImmigrationByDay2022 / seconds);
        humanitaireGeneralImmigrationCounterNode.innerHTML = Math.round(humanitaireGeneralImmigrationCounter);
    }, 1000);
    //console.log(humanitaireImmigrationByDay2022 / seconds);



    // Divers Immigration
    var diversImmigrationTotal2022 = 28545;
    var diversImmigrationByDay2022 = diversImmigrationTotal2022 / dayYear2022;
    // console.log(diversImmigrationByDay2022);
    var diversGeneralImmigrationCounter = (numberDayFromJanuaryFirst * diversImmigrationByDay2022);
    // console.log(diversGeneralImmigrationCounter);
    var diversGeneralImmigrationCounterNode = document.getElementById('diversGeneralImmigrationCounter');
    diversGeneralImmigrationCounterNode.innerHTML = Math.round(diversGeneralImmigrationCounter);
    setInterval(function() {
        diversGeneralImmigrationCounter += (diversImmigrationByDay2022 / seconds);
        diversGeneralImmigrationCounterNode.innerHTML = Math.round(diversGeneralImmigrationCounter);
    }, 1000);
    //console.log(diversImmigrationByDay2022 / seconds);

    // Divers Immigration
    var britishImmigrationTotal2022 = 10386;
    var britishImmigrationByDay2022 = britishImmigrationTotal2022 / dayYear2022;
    // console.log(britishImmigrationByDay2022);
    var britishGeneralImmigrationCounter = (numberDayFromJanuaryFirst * britishImmigrationByDay2022);
    // console.log(britishGeneralImmigrationCounter);
    var britishGeneralImmigrationCounterNode = document.getElementById('britishGeneralImmigrationCounter');
    britishGeneralImmigrationCounterNode.innerHTML = Math.round(britishGeneralImmigrationCounter);
    setInterval(function() {
        britishGeneralImmigrationCounter += (britishImmigrationByDay2022 / seconds);
        britishGeneralImmigrationCounterNode.innerHTML = Math.round(britishGeneralImmigrationCounter);
    }, 1000);
    // console.log(britishImmigrationByDay2022 / seconds);


    // AME
    var ameTotal2023 = 1212300000 ;
    var ameTotal2023ByDay = ameTotal2023 / dayYear2022;
    // console.log(britishImmigrationByDay2022);
    var ameTotal2023Counter = (numberDayFromJanuaryFirst * ameTotal2023ByDay);
    //console.log(ameTotal2023Counter);
    var ameTotal2023CounterNode = document.getElementById('ameTotal2023Counter');
    ameTotal2023CounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(ameTotal2023Counter);
    setInterval(function() {
        ameTotal2023Counter += (ameTotal2023ByDay / (seconds * 20));
        ameTotal2023CounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(ameTotal2023Counter);
    }, 1000 / 20);
    // console.log(britishImmigrationByDay2022 / seconds);

// Share the main Page

 const fb = document.getElementById('fb');
 fb.addEventListener('click', () => {
     const navUrl = 'https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/';
     window.open(navUrl , '_blank');
 });
 
 const tweet = document.getElementById('twitter');
 tweet.addEventListener('click', () => {
     const navUrl =
     'https://twitter.com/intent/tweet?text=' +
     'Va visiter ce lien http://127.0.0.1:8000/, actuellement il y a '+Math.round(generalMigrantsCounter)+' migrants en France en 2023';
     window.open(navUrl, '_blank');
 });
 
 
 const telegram = document.getElementById('telegram');
 telegram.addEventListener('click', () => {
     const navUrl = 'https://t.me/share/url?url={http://127.0.0.1:8000/}&text={Nombre actuel de migrants en France en 2023 : '+Math.round(generalMigrantsCounter)+'}';
     window.open(navUrl, '_blank');
 });
 
 const whatsapp = document.getElementById('whatsapp');
 whatsapp.addEventListener('click', () => {
     const navUrl = 'whatsapp://send?text=Regarde l\'état de la France,'+Math.round(generalMigrantsCounter)+' migrants en France depuis le 1er janvier. D\'autre chiffres alarmants sur ce lien http://www.website.com';
     window.open(navUrl, '_blank');
 });