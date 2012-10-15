
function getTime_h(spielzeit) {
c1 = new Image(); c1.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/1c.gif";
c2 = new Image(); c2.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/2c.gif";
c3 = new Image(); c3.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/3c.gif";
c4 = new Image(); c4.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/4c.gif";
c5 = new Image(); c5.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/5c.gif";
c6 = new Image(); c6.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/6c.gif";
c7 = new Image(); c7.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/7c.gif";
c8 = new Image(); c8.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/8c.gif";
c9 = new Image(); c9.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/9c.gif";
c0 = new Image(); c0.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/0c.gif";
Cc = new Image(); Cc.src = "http://www.scwipkingen.ch/04_mysql/countdown/image/Cc.gif";
now = new Date();

//ENTER BELOW THE DATE YOU WISH TO COUNTDOWN TO

later = new Date(spielzeit);
days = (later - now) / 1000 / 60 / 60 / 24;
daysRound = Math.floor(days);
hours = (later - now) / 1000 / 60 / 60 - (24 * daysRound);
hoursRound = Math.floor(hours);
minutes = (later - now) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
minutesRound = Math.floor(minutes);
seconds = (later - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
secondsRound = Math.round(seconds);

if (secondsRound <= 9) {
document.images.gh.src = c0.src;
document.images.hh.src = eval("c"+secondsRound+".src");
}
else {
document.images.gh.src = eval("c"+Math.floor(secondsRound/10)+".src");
document.images.hh.src = eval("c"+(secondsRound%10)+".src");
}
if (minutesRound <= 9) {
document.images.dh.src = c0.src;
document.images.eh.src = eval("c"+minutesRound+".src");
}
else {
document.images.dh.src = eval("c"+Math.floor(minutesRound/10)+".src");
document.images.eh.src = eval("c"+(minutesRound%10)+".src");
}
if (hoursRound <= 9) {
document.images.yh.src = c0.src;
document.images.zh.src = eval("c"+hoursRound+".src");
}
else {
document.images.yh.src = eval("c"+Math.floor(hoursRound/10)+".src");
document.images.zh.src = eval("c"+(hoursRound%10)+".src");
}
if (daysRound <= 9) {
//document.images.x.src = c0.src;
document.images.ah.src = c0.src;
document.images.bh.src = eval("c"+daysRound+".src");
}
if (daysRound <= 99) {
//document.images.x.src = c0.src;
document.images.ah.src = eval("c"+Math.floor((daysRound/10)%10)+".src");
document.images.bh.src = eval("c"+Math.floor(daysRound%10)+".src");
}
if (daysRound <= 999){
//document.images.x.src = eval("c"+Math.floor(daysRound/100)+".src");
document.images.ah.src = eval("c"+Math.floor((daysRound/10)%10)+".src");
document.images.bh.src = eval("c"+Math.floor(daysRound%10)+".src");
}
newtime = window.setTimeout("getTime_h('" + spielzeit + "');", 1000);
}

