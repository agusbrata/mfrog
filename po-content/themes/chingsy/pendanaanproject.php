<?=$this->layout('index');?>

<html>
<head>
<script>

function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
one = document.autoSumForm.angsuran_pokok.value;
two = 12;
three = 23;
document.autoSumForm.jumlah.value = (one * 1) + (two * 1) - (three * 1);}
function stopCalc(){
clearInterval(interval);}
</script>

<script>
function tandaPemisahTitik(b){
var _minus = false;
if (b<0) _minus = true;
b = b.toString();
b=b.replace(".","");
b=b.replace("-","");
c = "";
panjang = b.length;
j = 0;
for (i = panjang; i > 0; i--){
j = j + 1;
if (((j % 3) == 1) && (j != 1)){
c = b.substr(i-1,1) + "." + c;
} else {
c = b.substr(i-1,1) + c;
}
}
if (_minus) c = "-" + c ;
return c;
}

function numbersonly(ini, e){
if (e.keyCode>=49){
if(e.keyCode<=57){
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode):b + String.fromCharCode(e.keyCode);
ini.value = tandaPemisahTitik(b);
return false;
}
else if(e.keyCode<=105){
if(e.keyCode>=96){
//e.keycode = e.keycode - 47;
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode-48):b + String.fromCharCode(e.keyCode-48);
ini.value = tandaPemisahTitik(b);
//alert(e.keycode);
return false;
}
else {return false;}
}
else {
return false; }
}else if (e.keyCode==48){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==95){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode-48);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==8 || e.keycode==46){
a = ini.value.replace(".","");
b = a.replace(/[^\d]/g,"");
b = b.substr(0,b.length -1);
if (tandaPemisahTitik(b)!=""){
ini.value = tandaPemisahTitik(b);
} else {
ini.value = "";
}

return false;
} else if (e.keyCode==9){
return true;
} else if (e.keyCode==17){
return true;
} else {
//alert (e.keyCode);
return false;
}

}



</script>
</head>



<section id="page-title" class="page-title-mini" style="margin-top:-80px;">
	<div class="container clearfix">
		<ol class="breadcrumb">
			<li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
			<li><a>Pendanaan Proyek</a></li>
		</ol>
	</div>
</section>

<table id="table-post" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0" width="80%" style="text-align: center;" >
	<body>
	
	  <tr>
		
		<td alt="back" width="100" height="300" bgcolor="#FFFFFF" style="background-repeat:no repeat; background-position:center;">
		<td class="transparan2" alt="back" width="1000" height="300" background="http://localhost:88/mfrog/po-content/uploads/back4.JPG" style="background-repeat:no repeat; background-position:center; opacity: 0.9; filter: alpha(opacity=90);">
		
		<!-- style="text-align: center;"><img src="http://localhost:88/mfrog/po-content/uploads/back.JPG" alt="back" width="1150" height="500"/> -->
		
		
		<br>
		<br>
		<h3 style="color: #ffffff; text-align: center;"> <i>Solusi Untuk Keberhasilan Proyek Anda</i> </h3> 
			
		<br>
		<br>
		
		
		
		
			<form class="nobottommargin" id="autoSumForm" name='autoSumForm' action="<?=BASE_URL;?>/pendanaanproject" method="post">
					
					<div class="col_one_third">
						<label for="template-contactform-name"> <span style="color: #000000;">Jenis Jaminan</label></span> 
						 <br>
						 <form  method="post" id="template-contactform-name" name="contact_name" >   
							 <select name="jenis pinjaman" class="sm-form-control required">  
							 <option value="">Silahkan Pilih</option>  
							 <option value="1">Surat Perintah Kerja/Purchase Order</option>  
							 <option value="2">Invoice</option>  
							 <option value="3">Giro Mundur</option> 
							 <option value="4">Delivery Order/BAST/BAPP</option>
							 <option value="5">Lain-Lain</option>  							 
							 </select>   
						 </form>  						
					</div>
					
					
					<div class="col_one_third">
						<label for="template-contactform-name"> <span style="color: #000000;">Lama Pinjaman</label></span> 
						 <br>
						 <form name='lama_pinjaman' size='23' onFocus="startCalc();" onBlur="stopCalc();">   
							 <select name="lama_pinjaman" class="sm-form-control required">  
								 <option value="">Silahkan Pilih</option>  
								 <option value="1">1 Bulan</option>  
								 <option value="2">2 Bulan</option>  
								 <option value="3">3 Bulan</option>
								 <option value="4">4 Bulan</option>
								 <option value="5">5 Bulan</option>
								 <option value="6">6 Bulan</option>
								 <option value="7">7 Bulan</option>							 
							 </select>   
						 </form>  	
					</div>
					
					
					
					
					<div class="col_one_third col_last">
						<label for="template-contactform-name"> <span style="color: #000000;">Jumlah Pinjaman (Rp)</label></span> 
						<input type="text" id="template-contactform-name" name="angsuran_pokok" value="0" class="sm-form-control required" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);"/>
					</div>
					
					
					
					
					<div class="col_full">
						<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="contact_submit" value="submit" onclick="window.location.href='http://localhost:88/mfrog/member/register'">Ajukan Pinjaman</button>
						
						<br>
						<br>
						<h5 style="color: #FFFF00; text-align: center;">Untuk melanjutkan permohonan, pengguna harus melakukan login terlebih dahulu </h5>
					</div>			
				
				</form>
			</td>
			<td alt="back" width="100" height="500" bgcolor="#FFFFFF" style="background-repeat:no repeat; background-position:center;">
			</tr>
	
		</td>
	  </tr>
	  
	 </body>
</table>


</html>
