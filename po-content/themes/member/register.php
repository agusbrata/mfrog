<?=$this->layout('index');?>

<div class="container-fluid">
	<div class="container login-page">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="<?=BASE_URL;?>/<?=DIR_INC;?>/images/m-forg.jpg" class="logo" width="300" />
					</div>
				</div>
				<div class="text-center"><h4 class="text-uppercase"><b>Daftarkan Diri Anda</b></h4></div><br>
				<?=htmlspecialchars_decode($this->e($alertmsg));?>
				<form role="form" id="register-form" method="post" action="<?=BASE_URL;?>/member/register" autocomplete="off">
					
					<div class="col_one_third">
						<label for="username">Gelar</label> 
						 <br>
						 <form action="" method="post" id="template-contactform-name" name="contact_name" >   
							 <select name="jenis pinjaman" class="form-control login-input required">  
								 <option value="">Silahkan Pilih</option>  
								 <option value="1">Bapak</option>  
								 <option value="2">Ibu</option>  
								 <option value="3">Mas</option>
								 <option value="4">Nona</option>
														 
							 </select>   
						 </form>  	
					</div>
					<br>
					<div class="form-group">
						<label for="username">Nama Lengkap</label>
						<input type="text" class="form-control login-input" id="username" name="username" value="" />
					</div>
										
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control login-input" id="username" name="username" value="<?=(isset($_POST['username']) ? $_POST['username'] : '');?>" />
					</div>
					<div class="form-group">
						<label for="email"><?=$this->e($front_member_email);?></label>
						<input type="text" class="form-control login-input" id="email" name="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" />
					</div>
					<div class="form-group">
						<label for="no_telp">Nomor Telepon</label>
						<input type="text" class="form-control login-input" id="no_telp" name="no_telp" value="<?=(isset($_POST['no_telp']) ? $_POST['no_telp'] : '');?>" />
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="password"><?=$this->e($front_member_password);?></label>
								<input type="password" class="form-control login-input" id="password" name="password" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="repassword"><?=$this->e($front_member_repassword);?></label>
								<input type="password" class="form-control login-input" id="repassword" name="repassword" />
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-full"><i class="fa fa-user"></i>&nbsp;&nbsp;<?=$this->e($front_member_register);?></button>
				</form>
				
				
				<div class="login-or">
					<hr class="hr-or"><span class="span-or"><?=$this->e($front_member_or);?></span>
				</div>
				<div class="col-md-12 text-center">
				<a style="text-align: center;">Apabila telah memiliki akun, silahkan login!</a>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<a href="<?=BASE_URL;?>/member/login" class="btn btn-warning btn-full"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;<?=$this->e($front_member_login);?></a>
					</div>
				</div>
				<br>
				<div class="row" >
					<div class="col-md-12 text-center">
						<a href="http://localhost:88/mfrog/" ><i class="fa fa-sign-in"></i>&nbsp; kembali ke Beranda</a> &nbsp;&nbsp;| &nbsp;&nbsp;<a href="http://localhost:88/mfrog/member/aktivasi" ><i class="fa fa-sign-in"></i>&nbsp;&nbsp; verifikasi nomor handphone</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>