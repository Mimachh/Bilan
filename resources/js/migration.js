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
setInterval(function() {
    //IllegalGeneralMigrants
    illegalGeneralMigrantsCounter += (illegalGeneralMigrantsCounter / seconds );
    illegalGeneralMigrantsCounterNode.innerHTML = Math.round(illegalGeneralMigrantsCounter);
}, 1000);

// Legal Migrants
var legalMigrantsByDay = 1095.89;
var legalGeneralMigrantsCounter = (numberDayFromJanuaryFirst * legalMigrantsByDay);
var legalGeneralMigrantsCounterNode = document.getElementById('legalGeneralMigrantsCounter');
legalGeneralMigrantsCounterNode.innerHTML = Math.round(legalGeneralMigrantsCounter);
setInterval(function() {
    //LegalGeneralMigrants
    legalGeneralMigrantsCounter += (legalMigrantsByDay / seconds);
    legalGeneralMigrantsCounterNode.innerHTML = Math.round(legalGeneralMigrantsCounter);
}, 1000);




// New calcule about total migrant from year
var generalMigrantsCounter = legalGeneralMigrantsCounter + illegalGeneralMigrantsCounter;
var generalMigrantsCounterNode = document.getElementById('generalMigrantsCounter');

// // Share the main Page

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