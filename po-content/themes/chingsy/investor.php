<?=$this->layout('index');?>

<section id="page-title" class="page-title-mini" style="margin-top:-80px;">
	<div class="container clearfix">
		<ol class="breadcrumb">
			<li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
			<li><a>Pinjaman Personal</a></li>
		</ol>
	</div>
</section>

<table id="table-post" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0" width="80%" style="text-align: center;" >
	<body>
	
	  <tr>
		
		<td alt="back" width="100" height="300" bgcolor="#FFFFFF" style="background-repeat:no repeat; background-position:center;">
		<td class="transparan2" alt="back" width="1000" height="300" background="http://localhost:88/mfrog/po-content/uploads/back3.JPG" style="background-repeat:no repeat; background-position:center; opacity: 0.9; filter: alpha(opacity=90);">
		
		<!-- style="text-align: center;"><img src="http://localhost:88/mfrog/po-content/uploads/back.JPG" alt="back" width="1150" height="500"/> -->
		<br>
		<br>
		<h4 style="color: #00008B; text-align: left;"> <i>Mau Bisnis Dan Jaminan Uang Kembali? Invest di M-Frog Yuk..</i> </h4> 
			
		<br>
		<br>
		<br>
		<br>
		
		
		
			<form class="nobottommargin" id="template-contactform" name="template-contactform" action="<?=BASE_URL;?>/contact" method="post">
					
					<div class="col_one_third">
						<label for="template-contactform-name"> <span style="color: #00008B;">Jenis Jaminan</label></span> 
						 <br>
						 <form action="" method="post" id="template-contactform-name" name="contact_name" >   
							 <select name="jenis pinjaman" class="sm-form-control required">  
							 <option value="">Silahkan Pilih</option>  
							 <option value="Apel">SPK</option>  
							 <option value="Jeruk">Non-SPK</option>  
							 <option value="Semangka">Lain-lain</option>  
							 </select>   
						 </form>  						
					</div>
					
					<div class="col_one_third">
						<label for="template-contactform-name"> <span style="color: #00008B;">Lama Pinjaman</label></span> 
						 <br>
						 <form action="" method="post" id="template-contactform-name" name="contact_name" >   
							 <select name="jenis pinjaman" class="sm-form-control required">  
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
						<label for="template-contactform-name"> <span style="color: #00008B;">Jumlah Pinjaman (Rp)</label></span> 
						<input type="text" id="template-contactform-name" name="contact_name" value="Rp. 0,-" class="sm-form-control required" />
					</div>
					
					
					<div class="col_full">
						<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="contact_submit" value="submit" onclick="window.location.href='http://localhost:88/mfrog/member/register'">Mulai Investasi</button>
						
						<br>
						<br>
						<h5 style="color: #00008B;">Untuk melanjutkan permohonan, pengguna harus melakukan login terlebih dahulu </h5>
						<br>
						<br>
						<h6 style="color:  #800000; text-align: right;"> *) Pendapatan yang diperoleh dari hasil pengembalian adalah belum termasuk pajak </h6>
					</div>			
				
				</form>
			</td>
			<td alt="back" width="100" height="500" bgcolor="#FFFFFF" style="background-repeat:no repeat; background-position:center;">
			</tr>
	
		</td>
	  </tr>
	  
	 </body>
</table>

