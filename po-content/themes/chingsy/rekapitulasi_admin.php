<?=$this->layout('index3');?>

<section id="page-title" class="page-title-mini" style="margin-top:-80px;">
	<div class="container clearfix">
		<ol class="breadcrumb">
			<li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
			<li><a>Pinjaman Personal</a></li>
		</ol>
	</div>
</section>
	
	<body>
			<div class="container">
				<ul class="nav nav-pills nav-justified">	
					<li class="active"><a data-toggle="pill" href="#home"><b></b></a></li>
					<li><a data-toggle="pill" href="#menu1"><b>Informasi Proyek</b></a></li>
					<li><a data-toggle="pill" href="#menu2"><b>Dokumen Pendukung</b></a></li>	
				</ul>
	
	
	  <h4 text style=" text-align: center; font-size: 24px; color: #000000;"><a href="<?=BASE_URL;?>/rekapitulasi_admin"><i class="fa fa-google-wallet">&nbsp;</i><b> Status Portofolio &nbsp <small> <br>(update:  <?php $tgl=date('d-m-Y'); echo $tgl; ?>) </small></span></h4></b>
			<br> 
			<a style="text-align: center;"> <b> &nbsp; Semua Pinjaman </b>| Pendanaan Project | Pinjaman Bisnis | Pinjaman Personal</a>
			

