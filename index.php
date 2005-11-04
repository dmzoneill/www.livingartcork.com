<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Living Art Tattoos & peircing</title>
<style>
.para1 { margin-top: -42px; margin-left: 145px; margin-right: 10px; font-family: "font2, Arial"; font-size: 30px; line-height: 35px; text-align: left; color: #E1E1E1; }
.para2 { margin-top: 15px; margin-left: 15px; margin-right: 50px; font-family: "font1, Arial Black"; font-size: 50px; line-height: 40px; text-align: left; color: #004080; }
.date{font-family:Verdana;font-weight:bold;font-size:10px;color:#ffffff;}
.cap{font-family:Verdana;font-weight:bold;font-size:9px;color:#D3D7DC;}
.news{font-family:Verdana;font-size:9px;color:#B4B9C2;padding-left:15px;padding-right:15px;padding-bottom:5px;}
.txt{font-family:Verdana;font-size:9px;color:#B4B9C2;padding-left:30px;padding-right:20px;padding-bottom:5px;}
.capt{font-family:Verdana;font-weight:bold;font-size:9px;color:#F3F3F3;padding-left:5px;padding-top:5px;}
.txtt{font-family:Verdana;font-size:9px;color:#ffffff;padding-left:20px;padding-right:10px;padding-bottom:5px;}
.footer{font-family:Verdana;font-size:9px;color:#ffffff;padding-right:15px;padding-top:5px;}
.menu{font-family:Sevenet 7 Cyr;font-size:10px;color:#97999B;padding-right:5px;padding-left:5px;text-decoration:none;}
</style>
<script language="javascript">
alert("For Demonstration purposes only\nThis site has no functionality.\nThis is the only page and there is no other content.\nThe Final Product has yet to be decided....\nMore info dave@feeditout.com");
</script>
<SCRIPT LANGUAGE="JavaScript">
<!--
floatX=10;
floatY=10;
layerwidth=180;
layerheight=180;
halign="right";
valign="top";
delayspeed=1;

// This script is copyright (c) Henrik Petersen, NetKontoret
// Feel free to use this script on your own pages as long as you do not change it.
// It is illegal to distribute the script as part of a tutorial / script archive.
// Updated version available at: http://www.echoecho.com/toolfloatinglayer.htm
// This comment and the 4 lines above may not be removed from the code.

NS6=false;
IE4=(document.all);
if (!IE4) {NS6=(document.getElementById);}
NS4=(document.layers);

function adjust() {
if ((NS4) || (NS6)) {
if (lastX==-1 || delayspeed==0)
{
lastX=window.pageXOffset + floatX;
lastY=window.pageYOffset + floatY;
}
else
{
var dx=Math.abs(window.pageXOffset+floatX-lastX);
var dy=Math.abs(window.pageYOffset+floatY-lastY);
var d=Math.sqrt(dx*dx+dy*dy);
var c=Math.round(d/10);
if (window.pageXOffset+floatX>lastX) {lastX=lastX+delayspeed+c;}
if (window.pageXOffset+floatX<lastX) {lastX=lastX-delayspeed-c;}
if (window.pageYOffset+floatY>lastY) {lastY=lastY+delayspeed+c;}
if (window.pageYOffset+floatY<lastY) {lastY=lastY-delayspeed-c;}
}
if (NS4){
document.layers['floatlayer'].pageX = lastX;
document.layers['floatlayer'].pageY = lastY;
}
if (NS6){
document.getElementById('floatlayer').style.left=lastX;
document.getElementById('floatlayer').style.top=lastY;
}
}
else if (IE4){
if (lastX==-1 || delayspeed==0)
{
lastX=document.body.scrollLeft + floatX;
lastY=document.body.scrollTop + floatY;
}
else
{
var dx=Math.abs(document.body.scrollLeft+floatX-lastX);
var dy=Math.abs(document.body.scrollTop+floatY-lastY);
var d=Math.sqrt(dx*dx+dy*dy);
var c=Math.round(d/10);
if (document.body.scrollLeft+floatX>lastX) {lastX=lastX+delayspeed+c;}
if (document.body.scrollLeft+floatX<lastX) {lastX=lastX-delayspeed-c;}
if (document.body.scrollTop+floatY>lastY) {lastY=lastY+delayspeed+c;}
if (document.body.scrollTop+floatY<lastY) {lastY=lastY-delayspeed-c;}
}
document.all['floatlayer'].style.posLeft = lastX;
document.all['floatlayer'].style.posTop = lastY;
} 
setTimeout('adjust()',50);
}

function define()
{
if ((NS4) || (NS6)) 
{ 
if (halign=="left") {floatX=ifloatX};
if (halign=="right") {floatX=window.innerWidth-ifloatX-layerwidth-20};
if (halign=="center") {floatX=Math.round((window.innerWidth-20)/2)-Math.round(layerwidth/2)};
if (valign=="top") {floatY=ifloatY};
if (valign=="bottom") {floatY=window.innerHeight-ifloatY-layerheight};
if (valign=="center") {floatY=Math.round((window.innerHeight-20)/2)-Math.round(layerheight/2)};
}
if (IE4) 
{
if (halign=="left") {floatX=ifloatX};
if (halign=="right") {floatX=document.body.offsetWidth-ifloatX-layerwidth-20}
if (halign=="center") {floatX=Math.round((document.body.offsetWidth-20)/2)-Math.round(layerwidth/2)}
if (valign=="top") {floatY=ifloatY};
if (valign=="bottom") {floatY=document.body.offsetHeight-ifloatY-layerheight}
if (valign=="center") {floatY=Math.round((document.body.offsetHeight-20)/2)-Math.round(layerheight/2)}
}
}
//-->
</script>

</head>
<script>
if (NS4) {document.write('<LAYER NAME="floatlayer" LEFT="'+floatX+'" TOP="'+floatY+'">');}
if ((IE4) || (NS6)) {document.write('<div id="floatlayer" style="position:absolute; left:'+floatX+'; top:'+floatY+';">');}
</script>
<img src='images/hornet.gif'>
<script>
if (NS4) 
{
document.write('</LAYER>');
}
if ((IE4) || (NS6)) 
{
document.write('</DIV>');
}
ifloatX=floatX;
ifloatY=floatY;
define();
window.onresize=define;
lastX=-1;
lastY=-1;
adjust();
</script> 

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">

<table cellpadding="0" cellspacing="0" border="0" height="100%">
<tr>
	<td colspan="3">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td><img src="images/name1.jpg"></td>
		</tr>
		<tr>
			<td><img src="images/01.jpg"><a href=""><img src="images/02.jpg" border="0"></a><a href=""><img src="images/03.jpg" border="0"></a><a href=""><img src="images/04.jpg" border="0"></a><a href=""><img src="images/05.jpg" border="0"></a><a href=""><img src="images/06.jpg" border="0"></a><a href=""><img src="images/07.jpg" border="0"></a></td>
		</tr>
		<tr>
			<td><img src="images/p1.jpg"></td>
		</tr>
	</table>
	</td>
	<td width="1" rowspan="3" bgcolor="#2A2E34"><img src="images/spacer.gif" width="1"></td>
	<td width="36" rowspan="3" background="images/tile.jpg"><img src="images/spacer.gif" width="1"></td>
	<td width="100%" rowspan="3" bgcolor="#82868E"></td>
</tr>

<tr>
  <td valign="top" height="100%">
<table cellpadding="0" cellspacing="0" border="0" height="100%">
  <tr>
    <td><img src="images/capnews.jpg"></td>
  </tr>
  <tr>
    <td><img src="images/top.jpg"></td>
  </tr>
  <tr>
    <td width="155" height="256" background="images/bgnews.jpg" valign="top"><div style="padding-left:10px;padding-top:5px;">
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td><img src="images/y.gif" hspace="5" vspace="3"></td>
            <td class="date">13:00 ; 07.02. 2003</td>
          </tr>
          <tr>
            <td height="5"></td>
          </tr>
          <tr>
            <td><img src="images/x.gif" hspace="5" vspace="3"></td>
            <td class="cap">Title of current news</td>
          </tr>
        </table>
      </div>
      <img src="images/line.jpg">
      <div class="news">Tattoos are more popular now than at any time in recorded history. Current estimates have one in seven or over 39 million people in North America who have at least one tattoo.</div>
      <a href=""><img src="images/more.jpg" border="0" hspace="15"></a><br>
      <a href=""><img src="images/photo.jpg" border="0" hspace="15"></a><br>
      <a href=""><img src="images/print.jpg" border="0" hspace="15"></a> </td>
  </tr>
  <tr>
    <td><img src="images/bottom.jpg"></td>
  </tr>
  <tr>
    <td><img src="images/top.jpg"></td>
  </tr>
    <tr>
    <td width="155" height="256" background="images/bgnews.jpg" valign="top"><div style="padding-left:10px;padding-top:5px;">
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td><img src="images/y.gif" hspace="5" vspace="3"></td>
            <td class="date">13:00 ; 07.02. 2003</td>
          </tr>
          <tr>
            <td height="5"></td>
          </tr>
          <tr>
            <td><img src="images/x.gif" hspace="5" vspace="3"></td>
            <td class="cap">Title of current news</td>
          </tr>
        </table>
      </div>
      <img src="images/line.jpg">
      <div class="news">Tattoos are more popular now than at any time in recorded history. Current estimates have one in seven or over 39 million people in North America who have at least one tattoo.</div>
      <a href=""><img src="images/more.jpg" border="0" hspace="15"></a><br>
      <a href=""><img src="images/photo.jpg" border="0" hspace="15"></a><br>
      <a href=""><img src="images/print.jpg" border="0" hspace="15"></a> </td>
  </tr>
  <tr>
    <td><img src="images/bottom.jpg"></td>
  </tr>
  <tr>
    <td><img src="images/top.jpg"></td>
  </tr>
  <tr>
    <td width="155" height="100%" background="images/bgnews.jpg"><div style="padding-left:10px;padding-top:5px;">
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td><img src="images/y.gif" hspace="5" vspace="3"></td>
            <td class="date">13:00 ; 07.02. 2003</td>
          </tr>
          <tr>
            <td height="5"></td>
          </tr>
          <tr>
            <td><img src="images/x.gif" hspace="5" vspace="3"></td>
            <td class="cap">Title of current news</td>
          </tr>
        </table>
      </div>
      <img src="images/line.jpg">
      <div class="news">After you’ve inserted several hotspots on top of a desired graphic, you must export the graphic as an image map so it will function in</div>
      <a href=""><img src="images/more.jpg" border="0" hspace="15"></a><br>
      <a href=""><img src="images/photo.jpg" border="0" hspace="15"></a><br>
      <a href=""><img src="images/print.jpg" border="0" hspace="15"></a> </td>
  </tr>
  <tr>
    <td><img src="images/leftbot.jpg"></td>
  </tr>
</table>
</td>

<td valign="top" height="100%">
  <table cellpadding="0" cellspacing="0" border="0" height="100%">
      <tr>
        <td><img src="images/title1.jpg"></td>
      </tr>
      <tr>
        <td width="415" height="100%" background="images/bgmid.jpg" valign="top"><div style="padding-left:30px;padding-top:5px;padding-bottom:5px;padding-right:5px;">
            <table cellpadding="0" cellspacing="0" border="0" align="left">
              <tr>
                <td colspan="4" width="259" height="1" bgcolor="#72767E"></td>
              </tr>
              <tr>
                <td width="1" height="108" bgcolor="#72767E"></td>
                <td><img src="images/tattoor.jpg" align="left" vspace="2" hspace="2"></td>
                <td width="168" valign="top"><div class="capt">Get Your tattoo now!</div>
                  <div class="txtt">Some shit about tattoo prices or what not</div>
                  <div style="padding-left:20px;">
                    <table cellpadding="0" cellspacing="0" border="0">
                      <tr>
                        <td><a href=""><img src="images/more2.jpg" border="0" vspace="3"></a></td>
                        <td><a href=""><img src="images/print2.jpg" border="0" vspace="3"></a></td>
                      </tr>
                    </table>
                  </div></td>
                <td width="1" height="108" bgcolor="#72767E"></td>
              </tr>
              <tr>
                <td colspan="4" width="259" height="1" bgcolor="#72767E"></td>
              </tr>
            </table>
          </div>
          <div class="txt">The origin of the word tattoo is usually traced to the Tahitian tatu or tatau, meaning to mark or strike (the latter referring to traditional methods of applying the designs). In Japanese the word used for traditional designs or those that are applied using traditional methods is irezumi ("insertion of ink"), while "tattoo" is used for non-Japanese designs. Most tattoo enthusiasts refer to tattoos as art or (art)work, and to tattooists as artists. This usage is gaining support, with mainstream art galleries holding exhibitions of tattoo designs and photographs of tattoos. Tattoo designs that are mass produced and sold to tattoo artists and studios and displayed in shop are known as flash. Tattoo Flash is also the name of an American tattoo magazine. </div>
<script language=javascript>

setTimeout("halign='left'; valign='bottom'; define(); return false;", 10000);
setTimeout("halign='right'; valign='bottom'; define(); return false;", 12000);
setTimeout("halign='left'; valign='top'; define(); return false;", 15000);

</script>
          <div style="padding-left:30px;padding-top:5px;padding-bottom:5px;padding-right:5px;">
            <table cellpadding="0" cellspacing="0" border="0" align="left">
              <tr>
                <td colspan="4" width="259" height="1" bgcolor="#72767E"></td>
              </tr>
              <tr>
                <td width="1" height="108" bgcolor="#72767E"></td>
                <td><img src="images/pictable.jpg" align="left" vspace="2" hspace="2"></td>
                <td width="168" valign="top"><div class="capt">Get Your piercing now</div>
                  <div class="txtt">Some shit about pircing prices or what not</div>
                  <div style="padding-left:20px;">
                    <table cellpadding="0" cellspacing="0" border="0">
                      <tr>
                        <td><a href=""><img src="images/more2.jpg" border="0" vspace="3"></a></td>
                        <td><a href=""><img src="images/print2.jpg" border="0" vspace="3"></a></td>
                      </tr>
                    </table>
                  </div></td>
                <td width="1" height="108" bgcolor="#72767E"></td>
              </tr>
              <tr>
                <td colspan="4" width="259" height="1" bgcolor="#72767E"></td>
              </tr>
            </table>
          </div>
          <div class="txt"> Evidence suggests that body piercing (including ear piercing) has been practiced by peoples all over the world from ancient times. Mummified bodies with piercings have been discovered, including the oldest mummified body discovered to date, which was found in an Austrian glacier. This mummy had an ear piercing 7–11 mm in diameter. Nose piercing and ear piercing are mentioned in the Bible. In Genesis 24:22 Abraham's servant gave a nose ring and bracelets to Rebekah, wife of his son Isaac. Nose piercing has been common in India since the 16th century. Tongue piercing was popular with the elite of Aztec and Maya civilization, though it was carried out as part of a blood ritual and such piercings were not intended to be permanent. Ancient Mesoamericans wore jewelry in their ears, noses, and lower lips, and such decorations continue to be popular amongst indigenous peoples in these regions. In Dreamtime by Hans Peter Duerr, it is claimed that nipple piercing became popular in 14th century Europe. It is sometimes claimed that the Romans invented nipple piercing and that soldiers attached their capes to the piercings (for example, see Doug Malloy). This is a controversial theory that seems rather unplausible given the sensitivity of the area and the ease with which such a practice could have caused injury; it is much more plausible that capes may have been hung from rings attached to soldiers' armor. </div></td>
      </tr>
      <tr>
        <td valign="bottom"><img src="images/mid1.jpg"><a href=""><img src="images/more3.jpg" border="0"></a><a href=""><img src="images/print3.jpg" border="0"></a><img src="images/mid2.jpg"></td>
      </tr>
    </table></td>
	
  <td valign="top" height="100%"><table cellpadding="0" cellspacing="0" border="0" height="100%">
      <tr>
        <td valign="top"><img src="images/capgall.jpg"></td>
      </tr>
      <tr>
        <td valign="top"><img src="images/topr.jpg"></td>
      </tr>
      <tr>
        <td width="210" height="100%" background="images/bgright.jpg" valign="top"><div style="padding-left:15px;">
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td colspan2><a href='' class="date">View Gallerys</a></td>
              </tr>
            </table>
          </div>
          <img src="images/liner.jpg">
          <div style="padding-left:15px;">
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td><img src="images/tattoos/chinese_life_symbol_tattoo.jpg"></td>
                <td><a href=""><img src="images/view.jpg" hspace="5" border="0"></a><br>
                  <a href=""><img src="images/buy.jpg" border="0" hspace="5"></a><br>
                  <a href=""><img src="images/info.jpg" border="0" hspace="5"></a><br>
                  <a href=""><img src="images/down.jpg" border="0" hspace="5"></a></td>
              </tr>
            </table>
          </div>
          <img src="images/liner.jpg">
          <div style="padding-left:15px;">
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td><img src="images/tattoos/devotion1.jpg"></td>
                <td><a href=""><img src="images/view.jpg" hspace="5" border="0"></a><br>
                  <a href=""><img src="images/buy.jpg" border="0" hspace="5"></a><br>
                  <a href=""><img src="images/info.jpg" border="0" hspace="5"></a><br>
                  <a href=""><img src="images/down.jpg" border="0" hspace="5"></a></td>
              </tr>
            </table>
          </div>
          <img src="images/liner.jpg">
          <div style="padding-left:15px;">
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td><img src="images/tattoos/Life.jpg"></td>
                <td><a href=""><img src="images/view.jpg" hspace="5" border="0"></a><br>
                  <a href=""><img src="images/buy.jpg" border="0" hspace="5"></a><br>
                  <a href=""><img src="images/info.jpg" border="0" hspace="5"></a><br>
                  <a href=""><img src="images/down.jpg" border="0" hspace="5"></a></td>
              </tr>
            </table>
          </div>
          <img src="images/liner.jpg">
          <div style="padding-left:15px;">
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td><img src="images/tattoos/normal_comic40.jpg"></td>
                <td><a href=""><img src="images/view.jpg" hspace="5" border="0"></a><br>
                  <a href=""><img src="images/buy.jpg" border="0" hspace="5"></a><br>
                  <a href=""><img src="images/info.jpg" border="0" hspace="5"></a><br>
                  <a href=""><img src="images/down.jpg" border="0" hspace="5"></a></td>
              </tr>
            </table>
          </div>
          <img src="images/liner.jpg">
          <div style="padding-left:15px;">
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td><img src="images/tattoos/religious01-large.jpg"></td>
                <td><a href=""><img src="images/view.jpg" hspace="5" border="0"></a><br>
                  <a href=""><img src="images/buy.jpg" border="0" hspace="5"></a><br>
                  <a href=""><img src="images/info.jpg" border="0" hspace="5"></a><br>
                  <a href=""><img src="images/down.jpg" border="0" hspace="5"></a></td>
              </tr>
            </table>
          </div>
          <img src="images/liner.jpg"> </td>
      </tr>
      <tr>
        <td valign="top"><img src="images/bottomr.jpg"></td>
      </tr>
    </table></td>  
</tr>
<tr>
  <td colspan="3" height="50" background="images/footer.jpg"><table cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td width="155" class="footer" align="right"><b>Living Art<br>
"It's Your Body"</b><br>
          Copyright 2005</td>
        <td class="menu" align="center" style="padding-top:33px;padding-left:200px;"><a href="" class="menu">FAQ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="" class="menu">Site map</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="" class="menu">Extranet</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="" class="menu">Brochure</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="" class="menu">contacts</a> </td>
      </tr>
    </table></td>
</tr>
</table>
</body></html>