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
				<div class="text-center"><h4 class="text-uppercase"><?=$this->e($front_member_forgot);?></h4></div>
				<?=htmlspecialchars_decode($this->e($alertmsg));?>
				<form role="form" id="forgot-form" method="post" action="<?=BASE_URL;?>/member/forgot" autocomplete="off">
					<div class="form-group">
						<label for="email"><?=$this->e($front_member_email);?></label>
						<input type="text" class="form-control login-input" id="email" name="email" />
					</div>
					<button type="submit" class="btn btn-success btn-full"><i class="fa fa-info"></i>&nbsp;&nbsp;<?=$this->e($front_member_recover);?></button>
				</form>
				<div class="login-or">
					<hr class="hr-or"><span class="span-or"><?=$this->e($front_member_or);?></span>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="<?=BASE_URL;?>/member/login" class="btn no-bg btn-block"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;<?=$this->e($front_member_login);?></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="http://localhost:88/mfrog/" ><i class="fa fa-sign-in"></i>&nbsp; kembali</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>