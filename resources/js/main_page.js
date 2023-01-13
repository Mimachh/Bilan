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
 
// Counters 



 

//Calculate for general counter 
var now = Date.now();
var januaryFirst = 1672527600000;
var dayYear = 365;
var seconds = 86400;
var numberDayFromJanuaryFirst = (now - januaryFirst)/86400000;


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

// Legal Migrants
var legalMigrantsByDay = 1095.89;
var legalGeneralMigrantsCounter = (numberDayFromJanuaryFirst * legalMigrantsByDay);
var legalGeneralMigrantsCounterNode = document.getElementById('legalGeneralMigrantsCounter');
legalGeneralMigrantsCounterNode.innerHTML = Math.round(legalGeneralMigrantsCounter);
    
// New calcule about total migrant from year
var generalMigrantsCounter = legalGeneralMigrantsCounter + illegalGeneralMigrantsCounter;
var generalMigrantsCounterNode = document.getElementById('generalMigrantsCounter');

// Violence Part
// Coups et blessures
var delinquanceByDay = 843.01;
var delinquanceTotalCounter = (numberDayFromJanuaryFirst * delinquanceByDay);
var delinquanceTotalCounterNode = document.getElementById('delinquanceTotalCounter');
delinquanceTotalCounterNode.innerHTML = Math.round(delinquanceTotalCounter);     
// Viols 
var rapeByDay = 205;
var rapeTotalCounter = (numberDayFromJanuaryFirst * rapeByDay);
var rapeTotalCounterNode = document.getElementById('rapeTotalCounter');
rapeTotalCounterNode.innerHTML = Math.round(rapeTotalCounter);
    

// ECONOMY PART        
// Deficit Cumul
var deficitByDay = 452054794.5;
var deficitTotalCounter = (numberDayFromJanuaryFirst * deficitByDay);
var deficitTotalCounterNode = document.getElementById('deficitTotalCounter');
deficitTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(deficitTotalCounter)
    
// Dette
var detteStart = 2956800000000;
var detteTotalCounter = detteStart + (numberDayFromJanuaryFirst * deficitByDay);
var detteTotalCounterNode = document.getElementById('detteTotalCounter');
detteTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(detteTotalCounter)


// 25 AVRIL 2027 Destitution 
var oldElection = 1650758400000;
var nextElection = 1808604000000;
var numberDayFromOldElection = (now - oldElection)/86400000;
var diffDays = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60 * 60 * 24));
//var diffHours = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60 * 60));
//var diffMinutes = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60));
var diffDaysNode = document.getElementById('destitution');
diffDaysNode.innerHTML = diffDays;
var percentNextElection = (numberDayFromOldElection / diffDays) * 100;
// PROGRESS BAR
    const progressElection = document.querySelector('.progress-election-value');

    function changeWidthProgressElection() {
        progressElection.style.width = `${percentNextElection}%`;
        progressElection.innerText = `${Math.round((percentNextElection) * 100) / 100}%`;
    }

    setInterval(function() {

    }, 1000, changeWidthProgressElection());


// GROUP ALL COUNTERS

setInterval(function() {
    //IllegalGeneralMigrants
    illegalGeneralMigrantsCounter += (illegalGeneralMigrantsCounter / seconds );
    illegalGeneralMigrantsCounterNode.innerHTML = Math.round(illegalGeneralMigrantsCounter);
}, 1000);
setInterval(function() {
    //LegalGeneralMigrants
    legalGeneralMigrantsCounter += (legalMigrantsByDay / seconds);
    legalGeneralMigrantsCounterNode.innerHTML = Math.round(legalGeneralMigrantsCounter);
}, 1000);


//Violences Counters
//Counter
setInterval(function() {
    //Coups et Blessures general
    delinquanceTotalCounter += (delinquanceByDay / seconds);
    delinquanceTotalCounterNode.innerHTML = Math.round(delinquanceTotalCounter);
    //Rape general
    rapeTotalCounter += (rapeByDay / seconds);
    rapeTotalCounterNode.innerHTML = Math.round(rapeTotalCounter);
}, 1000);

// Economy counters
//
setInterval(function() {
    //Deficit general
    deficitTotalCounter += (deficitByDay / (seconds * 20));
    deficitTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(deficitTotalCounter);
    //Dette total
    detteTotalCounter += (deficitByDay / (seconds * 20));
    detteTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(detteTotalCounter);
}, (1000 / 20));

 