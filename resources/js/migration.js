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