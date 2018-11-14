<?=$this->layout('index');?>

<main class="cd-main-content">
	<div class="container-fluid">
		<div class="container member-page">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="page-header">
						<h3><?=$this->e($front_member_welcome);?>, <small><a color:"green"> Bapak <?=$user['nama_lengkap'];?> di M-FROG Investment Indonesia</a></small></h3>
					</div>
					<div class="box-home-btn text-justify">
					
						<ul class="ds-btn">
							<li>
							<!--success : ijo, danger : merah, warning : orange, info : biru" -->
								<a class="btn btn-danger" href="<?=BASE_URL;?>/member">
								<i class="fa fa-pencil pull-left"></i><span>Akun<br><small> Verifikasi Profile</small></span></a>
							
								<a class="btn btn-info" href="<?=BASE_URL;?>/member/post">
								<i class="fa fa-pencil pull-left"></i><span>Rekening<br><small>Rekening Bank  </small></span></a>
								
								<a class="btn btn-danger" href="<?=BASE_URL;?>/member/user/changepass">
								<i class="fa fa-unlock-alt pull-left"></i><span>Mutasi<br><small>Daftar Mutasi</small></span></a>
								
								<a class="btn btn-info" href="<?=BASE_URL;?>/member/user/edit">
								<i class="fa fa-user pull-left"></i><span>Top Up<br><small>Top Up Saldo</small></span></a>
																							
								<a class="btn btn-danger" href="<?=BASE_URL;?>/member/post">
								<i class="fa fa-pencil pull-left"></i><span>Project<br><small>Gudang Project  </small></span></a>
														
							</li>
						</ul>
						
						<ul class="ds-btn">
							<li>	
								<a class="btn btn-primary" href="<?=BASE_URL;?>/ajukanpendanaan">
								<i class="fa fa-usd pull-left"></i><span>Debitur<br><small> Ajukan Pinjaman</small></span></a>
							
								<a class="btn btn-warning" href="<?=BASE_URL;?>/ajukanpendanaan2">
								<i class="fa fa-usd pull-left"></i><span>Debitur<br><small>Ajukan Pinjaman Baru</small></span></a>
								
								<a class="btn btn-success" href="<?=BASE_URL;?>/member/post">
								<i class="fa fa-pencil pull-left"></i><span>Status<br><small>Status Portofolio </small></span></a>
							
								<a class="btn btn-warning" href="<?=BASE_URL;?>/member/post">
								<i class="fa fa-pencil pull-left"></i><span><?=$this->e($front_member_post);?><br><small><?=$this->e($front_member_allpost);?></small></span></a>
							
								<a class="btn btn-primary" href="<?=BASE_URL;?>/member/post/addnew">
								<i class="fa fa-plus pull-left"></i><span><?=$this->e($front_member_post);?><br><small><?=$this->e($front_member_addpost);?></small></span></a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
			
	
			
			
			
			
		</div>
	</div>
</main>