<?=$this->layout('index');?>

<html>
<body>
<div class="container-fluid">
	<div class="container login-page">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="<?=BASE_URL;?>/<?=DIR_INC;?>/images/m-forg.jpg" class="logo" width="300" />
					</div>
				</div>
				
					
					<div class="form-group">
						<label for="no_telp">Nomor HP Yang Telah Didaftarkan</label>
						<input class="form-control login-input" id="no_telp" name="no_telp" value="0811228984" readonly/>
					</div>
					<div class="form-group">
						<label for="no_telp">Verifikasi Nomor HP</label>
						<input type="text" class="form-control login-input" id="no_telp" name="no_telp" value="" />
					</div>
					
					<div>
					<form><input style="width: 420px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background:#FFCC00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Aktifasi Akun" onclick="window.location.href='http://localhost:88/mfrog/member/login'" />
					</div>
				
				<br>
				<div class="row" >
					<div class="col-md-12 text-center">
						<a href="http://localhost:88/mfrog/" ><i class="fa fa-sign-in"></i>&nbsp; kembali ke Beranda</a> &nbsp;&nbsp;| &nbsp;&nbsp;<a href="http://localhost:88/mfrog/member/login" ><i class="fa fa-sign-in"></i>&nbsp; login</a>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
</div>