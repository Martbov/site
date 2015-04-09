// JavaScript Document
/*
Drop Down World Clock- By JavaScript Kit (http://www.javascriptkit.com)
Portions of code by Kurt @ http://www.btinternet.com/~kurt.grigg/javascript
This credit notice must stay intact
*/

if (document.all||document.getElementById)
document.write('<span class="wereldklok "id="worldclock"></span><br>')

zone=0;
isitlocal=true;
ampm='';

function updateclock(z){
zone=z.options[z.selectedIndex].value;
isitlocal=(z.options[0].selected)?true:false;
}

function WorldClock(){
now=new Date();
ofst=now.getTimezoneOffset()/60;
secs=now.getSeconds();
mins=now.getMinutes();


hr=(isitlocal)?now.getHours():(now.getHours() + parseInt(ofst)) + parseInt(zone);
if (zone.length > 2) {mins+= 30}
	if (mins >= 60) {
		hr+=1
		mins-=60
	}

if (hr < 0) hr+=24;
if (hr > 23) hr-=24;
ampm = (hr > 11)?"PM":"AM";
statusampm = ampm.toLowerCase();

hr2 = hr;
if (hr2 == 0) hr2=12;
(hr2 < 13)?hr2:hr2 %= 12;
if (hr2<10) hr2="0"+hr2

var finaltime=hr2+':'+((mins < 10)?"0"+mins:mins)+':'+((secs < 10)?"0"+secs:secs)+' '+statusampm;

if (document.all)
worldclock.innerHTML=finaltime
else if (document.getElementById)
document.getElementById("worldclock").innerHTML=finaltime
else if (document.layers){
document.worldclockns.document.worldclockns2.document.write(finaltime)
document.worldclockns.document.worldclockns2.document.close()
}

setTimeout('WorldClock()',1000);
}

window.onload=WorldClock