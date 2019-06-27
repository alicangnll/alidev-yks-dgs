<script>
function hesapla(){
var v1,v2,v3,v4,v5,v6,v7,a,aa,p1,p2,ek,tyt,ea,say,obp,yks1,yks2;
var tar=$('.table');
var formul={'ek':100,'tyt':{'trk':3.333,'sos':3.333,'mat':3.333,'fen':3.333},'ayt':{'say':{'tyt':{'trk':1.851,'mat':1.851,'sos':0.997,'fen':0.997},'ayt':{'mat':3.421,'fiz':1.88,'kim':1.88,'bio':1.88}},'ea':{'tyt':{'trk':1.851,'mat':1.851,'sos':0.997,'fen':0.997},'ayt':{'mat':3.275,'trk':2.849,'tar':0.885,'cog':0.635}}}};
var sonc=$('.table').eq(2);
obp=(parseFloat($('.diploma').val())*0.12)*5;
if($.isNumeric(obp)==false){obp=0;}
ek=formul.ek;

yks1=0;yks2=0;
ea=0;say=0;

p1=0;
tar.eq(0).find('input').each(function(a,aa){
if($(aa).attr('data-kod')){
	v3=$(aa).val();
	v1=$(aa).attr('data-kod');
	v2=eval("formul.tyt."+v1);
	if($.isNumeric(v2) && $.isNumeric(v3)){
		p1=p1+(parseFloat(v2)*parseFloat(v3));
	}
}
});
tyt=(p1+ek).toFixed(3);

p1=0;
tar.eq(1).find('input').each(function(a,aa){
if($(aa).attr('data-kod')){
	v3=$(aa).val();
	v1=$(aa).attr('data-kod');
	v2=eval("formul.ayt.say.ayt."+v1);
	if($.isNumeric(v2) && $.isNumeric(v3)){
		p1=p1+(parseFloat(v2)*parseFloat(v3));
	}
}
});
say=(p1+ek).toFixed(3);

p1=0;
tar.eq(1).find('input').each(function(a,aa){
if($(aa).attr('data-kod')){
	v3=$(aa).val();
	v1=$(aa).attr('data-kod');
	v2=eval("formul.ayt.ea.ayt."+v1);
	if($.isNumeric(v2) && $.isNumeric(v3)){
		p1=p1+(parseFloat(v2)*parseFloat(v3));
	}
}
});
ea=(p1+ek).toFixed(3);

yks1=((tyt/100*40)+((ea/100)*60*1.121)+obp).toFixed(3);
yks2=((tyt/100*40)+((say/100)*60*1.121)+obp).toFixed(3);

sonc.find('tbody tr').eq(0).find('td:last-child').text(tyt);
sonc.find('tbody tr').eq(1).find('td:last-child').text(ea);
sonc.find('tbody tr').eq(2).find('td:last-child').text(say);
sonc.find('tbody tr').eq(3).find('td:last-child').text(obp);
sonc.find('tbody tr').eq(4).find('td:last-child').text(yks1);
sonc.find('tbody tr').eq(5).find('td:last-child').text(yks2);
}


</script>
<script language="JavaScript">
function topla()
{
if ((document.savarona.aobp.value.length)<1)
	{ 
		alert("AÖBP boş olamaz")	
		document.savarona.aobp.focus();
		return;	
	}
if ((document.savarona.aobp.value*1)>80)
	{ 
		alert("AÖBP 80 'i geçemez")	
		return;	
	}


if (((document.savarona.sayisal_dogru.value*1)+(document.savarona.sayisal_yanlis.value*1))>80)
	{
		alert("Sayısal Doğru ve Sayısal Yanlışın toplamı 80'i geçemez")
		return;
	}
if (((document.savarona.sozel_dogru.value*1)+(document.savarona.sozel_yanlis.value*1))>80)
{
alert("Sözel Doğru ve Sözel Yanlışın toplamı 80'i geçemez")
return;
}

//st=(document.savarona.sayisal_dogru.value*1)+(document.savarona.sayisal_yanlis.value*1);
//if (st>=80){alert("Doğru ve Yanlış Soruların Toplamı 80 i Geçemez")}

if (document.savarona.sayisal_yanlis.value=='') {document.savarona.sayisal_yanlis.value=0;}
if (document.savarona.sozel_yanlis.value=='') 	{document.savarona.sozel_yanlis.value=0;}

if ((document.savarona.sayisal_dogru.value)	&&	(document.savarona.sayisal_yanlis.value))
	{
		sayisal_net_=(document.savarona.sayisal_dogru.value*1)-((document.savarona.sayisal_yanlis.value*1)/4)
		document.savarona.sayisal_net.value=sayisal_net_			
	}

if ((document.savarona.sozel_dogru.value)	&&	(document.savarona.sozel_yanlis.value))
	{
		sozel_net_=(document.savarona.sozel_dogru.value*1)-((document.savarona.sozel_yanlis.value*1)/4)
		document.savarona.sozel_net.value=sozel_net_			
	}

if (document.savarona.aobp.value)
{
sayisal_puan_=145.584304+(3.2254144*(document.savarona.sayisal_net.value*1))+((0.4500924)*(document.savarona.sozel_net.value*1))+((document.savarona.aobp.value*1)*(0.60))
sayisal_puan_1 = sayisal_puan_.toFixed(5);

if (document.savarona.sg1.checked)
	{
		sayisal_puan.innerHTML="<font color=red><b>"+sayisal_puan_1+"</b></font>";
	}else{sayisal_puan.innerHTML="<font color=red><b></b></font>";}
 
esit_agirlik_puan_=(136.0007408)+(document.savarona.sayisal_net.value*1)*(1.9352496)+(document.savarona.sozel_net.value*1)*(1.35028)+(document.savarona.aobp.value*1)*(0.60)
esit_agirlik_puan_1 = esit_agirlik_puan_.toFixed(5);
if (document.savarona.ess1.checked)
	{
		esit_agirlik_puan.innerHTML="<font color=red><b>"+esit_agirlik_puan_1+"</b></font>";
	}else{esit_agirlik_puan.innerHTML="<font color=red><b></b></font>";}

sozel_puan_=(126.4323915)+(document.savarona.sayisal_net.value*1)*(0.645083)+(document.savarona.sozel_net.value*1)*(2.25046)+(document.savarona.aobp.value*1)*(0.60)
sozel_puan_1 = sozel_puan_.toFixed(5);
if (document.savarona.soz1.checked)
	{
		sozel_puan.innerHTML="<font color=red><b>"+sozel_puan_1+"</b></font>";
	}else {sozel_puan.innerHTML="<font color=red><b></b></font>";}
}


}

</script>
<?php
if(!isset($_GET['y'])) { // eğer boşsa anasayfa varsayalım.
   $sayfa = 'hakkinda';
} else {
   $sayfa = $_GET['y'];
}
 
switch($sayfa) {
case 'ykspuan':
        echo '<title>YKS 2019 Puan Hesaplama</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<div class="post">
        <div class="post-header"><center><h2>2018 - KATSAYILARI</h2></center>
		</div>
        <div class="post-meta"><hr></hr>
		</div>
		<div class="post-text">

<center>
<table class="table table-hover w3-white">
<thead><tr><th>TYT-Sınavı</th><th>Net</th></tr></thead>
<tbody>
<tr><td>Türkçe</td><td><input type="number" value="3" data-kod="trk" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>Sosyal</td><td><input type="number" value="3" data-kod="sos" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>Matematik</td><td><input type="number" value="3" data-kod="mat" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>Fen</td><td><input type="number" value="3" data-kod="fen" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
</tbody>
</table>
</center>

<table class="table table-hover w3-white" >
<thead><tr><th>AYT-Sınavı</th><th>Net</th></tr></thead>
<tbody>
<tr><td>TÜRK DİLİ Ve EDEBİYAT <span class="badge1">24 Soru</span></td><td><input value="3" data-kod="trk" type="number" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>TARİH-1 <span class="badge1">10 Soru</span></td><td><input value="3" type="number" data-kod="tar" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>COĞRAFYA-1 <span class="badge1">6 Soru</span></td><td><input value="3" type="number" data-kod="cog" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>TARİH-2 <span class="badge1">11 Soru</span></td><td><input value="3" type="number" data-kod="tar" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>COĞRAFYA-2 <span class="badge1">11 Soru</span></td><td><input value="3" type="number" data-kod="cog" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>FELSEFE <span class="badge1">12 Soru</span></td><td><input value="3" type="number" data-kod="fel" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>DİN KÜLTÜRÜ <span class="badge1">6 Soru</span></td><td><input value="3" type="number" data-kod="din" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>MATEMATİK <span class="badge1">40 Soru</span></td><td><input value="3" type="number" data-kod="mat" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>FİZİK <span class="badge1">14 Soru</span></td><td><input value="3" type="number" data-kod="fiz" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>KİMYA <span class="badge1">13 Soru</span></td><td><input value="3" type="number" data-kod="kim" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td>BİYOLOJİ <span class="badge1">13 Soru</span></td><td><input value="3" type"number" data-kod="bio" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
<tr><td><b>Diploma Notu(Tahmin)</b></td><td><input class="diploma" value="" type="number" data-kod="bio" style="width:100px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" /></td></tr>
</tbody>
</table>

<button onclick="hesapla();" type="button">HESAPLA!</button>
<table class="table table-bordered w3-red" style="border:1px solid grey;margin-top:32px;width:100%;" >
<thead><tr><th>Sonuç:</th><th>Puan</th></tr></thead>

<tbody>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>TYT-Sonuç:</b></td><td></td></tr>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>AYT EA:</b></td><td></td></tr>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>AYT Say:</b></td><td></td></tr>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>Diploma notu:</b></td><td></td></tr>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>YKS-EA:</b></td><td></td></tr>
<tr style="background:rgba(233,233,233,0.3);" ><td><b>YKS-Say:</b></td><td></td></tr>
</tbody>
</table>
</div>
</div>';
   break;
   case 'dgshesap':
echo '
<title>DGS Hesabı</title>
<div class="post">
<div class="post-header">
<center><h1>2018 - KATSAYI</h1>
</div>

<div class="post-meta">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<center>
<tbody>
<b>2018 DGS Puan Hesaplama</b>
</tbody>
</center>
</div>

<div class="post-text">
<center><form name="savarona">

<table class="table table-hover w3-white">
<tr>
<td></td>
<td align="center"><b>Doğru</b></td>
<td align="center"><b>Yanlış</b></td>
<td align="center"><b>Net</b></td>
</tr>
</table>


<table class="table table-hover w3-white">
<tr>
<td align="right"><b>SAY:</b></td>
<td align="center"><input type="text" name="sayisal_dogru"  style="width:40px;" class="w3-border w3-margin-1 w3-light-grey w3-padding-3" ></td>
<td align="center"><input type="text" name="sayisal_yanlis" style="width:40px; class="w3-border w3-margin-1 w3-light-grey w3-padding-3" ></td>
<td align="center"><input type="text" name="sayisal_net" readonly style="width:40px; class="w3-border w3-margin-1 w3-light-grey w3-padding-3" ></td>
</tr></table>

<tr><td colspan="4" align="center"><hr></td></tr>

<table class="table table-hover w3-white">
<tr>
<td align="right"><b>SÖZ:</b></td>
<td align="center"><input type="text" name="sozel_dogru"  style="width:40px; class="w3-border w3-margin-1 w3-light-grey w3-padding-3" ></td>
<td align="center"><input type="text" name="sozel_yanlis"  style="width:40px; class="w3-border w3-margin-1 w3-light-grey w3-padding-3" ></td>
<td align="center"><input type="text" name="sozel_net" readonly  style="width:40px; class="w3-border w3-margin-1 w3-light-grey w3-padding-3" ></td>
</tr></table>

<tr><td colspan="4" align="center"><hr></td></tr>

<table class="table table-hover w3-white">
<tr>
<td align="right"><b>AÖBP:</b></td>
<td align="center"><input type="text" name="aobp" value="65" style="width:40px; class="w3-border w3-margin-1 w3-light-grey w3-padding-3"></td>
<td colspan="2"><font size="1" color="red">AÖBP Girilmez ise 65 olarak alınacaktır</font></td>
</td>
</tr></table>
<tr><td colspan="4" align="center"><hr></td></tr>

<tr><td colspan="4" align="center"><hr></td></tr>
<tr><td colspan="4"><b>Hangi puan veya puan türlerini istiyorsanız işaretleyin</b></td></tr>
<tr><td colspan="4"><hr></td></tr>

<table class="table table-hover w3-white">
<tr bgcolor="#ffffff">
<td align="center"><input type="Checkbox" name="sg1" style="width:20"> Göster</td>
<td style="background:rgba(233,233,233,0.3);" align="right"><b>Sayısal Puan :</b></td>
<td colspan="2" id="sayisal_puan"></td>
</tr></table>

<tr><td colspan="4" align="center"><hr></td></tr>

<table class="table table-hover w3-white">
<tr bgcolor="#ffffff">
<td align="center"><input type="Checkbox" name="ess1" style="width:20"> Göster</td>
<td style="background:rgba(233,233,233,0.3);" align="right"><b>Eşit Ağırlık Puan :</b></td>
<td colspan="2" id="esit_agirlik_puan"></td>
</tr></table>

<tr><td colspan="4" align="center"><hr></td></tr>

<table class="table table-hover w3-white">
<tr bgcolor="#ffffff">
<td align="center"><input type="Checkbox" name="soz1" style="width:20"> Göster</td>
<td style="background:rgba(233,233,233,0.3);" align="right"><b>Sözel Puan :</b></td>
<td colspan="2" id="sozel_puan"></td>
</tr></table>

</table>

<table class="table table-hover w3-white">
<tr>
<td colspan="4" align="center">
<input type="button" onClick="topla();" value="Hesapla" style="border-style: solid; border-width: 1;  width: 200; height:25; background-color:silver"></td>
</tr></table>

</form></center>
</div>';
break;

default:
   echo '
   <title>Bulunamadı!</title>
   <h2>Bulunamadı!</h2>
   <p>Böyle bir sayfamız henüz yok, değiştirilmiş ya da silinmiş olabilir.</p>'; // hiç birisi değilse 404 varsayalim
break;
}
   
