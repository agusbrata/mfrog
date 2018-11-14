<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="Copyright" content="<?=CONF_STRUCTURE;?>" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Member Area <?=CONF_STRUCTURE;?>" />
    <meta name="generator" content="<?=CONF_STRUCTURE;?> <?=CONF_VER;?>.<?=CONF_BUILD;?>" />
    <meta name="author" content="Amari" />
    <meta name="language" content="Indonesia" />
    <meta name="revisit-after" content="7" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />
	<title><?=$this->e($page_title);?></title>

	<!-- Stylesheets -->
	<link type="text/css" rel="stylesheet" href="<?=BASE_URL.'/'.DIR_INC;?>/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="<?=BASE_URL.'/'.DIR_INC;?>/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="<?=BASE_URL.'/'.DIR_INC;?>/css/member.css" />
	<!--
	<link rel="stylesheet" href="<?=$this->asset('/css/style.css')?>" type="text/css" />
	-->
	<link type="text/css" rel="stylesheet" href="<?=BASE_URL.'/'.DIR_INC;?>/css/dataTables.bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="<?=BASE_URL.'/'.DIR_INC;?>/css/responsive.bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="<?=BASE_URL.'/'.DIR_INC;?>/css/bootstrap-tagsinput.css" />
	<link type="text/css" rel="stylesheet" href="<?=BASE_URL.'/'.DIR_INC;?>/css/bootstrap-datetimepicker.min.css" />
	<link type="text/css" rel="stylesheet" href="<?=BASE_URL.'/'.DIR_INC;?>/css/bootstrapValidator.min.css" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />

	<!-- Javascript -->
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/bootstrap/bootstrap.min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	

    <!-- Stylesheets -->
	


	

	
	
	
</head>
<?php if (empty($_SESSION['namauser_member']) AND empty($_SESSION['passuser_member']) AND empty($_SESSION['login_member'])) {
	$bodycolor = "background-color: #f5f5f5;";
} else {
	$bodycolor = "";
} ?>

		
<header>
	<div class="cd-logo">
		<a href="<?=BASE_URL;?>/m-forg.jpg">
		</a>
	</div>
	<nav class="cd-main-nav-wrapper">
		<ul class="cd-main-nav">	
			<li><a href="<?=BASE_URL;?>/member"><i class="fa fa-dashboard">&nbsp;</i> <?=$this->e($front_member_dashboard);?></a></li>
			<li><a href="<?=BASE_URL;?>/statistik"><i class="fa fa-spinner">&nbsp;</i> Statistik</a></li>
			<li><a href="<?=BASE_URL;?>/rekapitulasi"><i class="fa fa-bitbucket">&nbsp;</i> Rekapitulasi</a></li>
			<li><a href="<?=BASE_URL;?>" target="_blank"><i class="fa fa-home">&nbsp;</i> <?=$this->e($front_member_mainweb);?></a></li>
			<li><a href="<?=BASE_URL;?>/bantuan"><i class="fa fa-question">&nbsp;</i> Bantuan</a></li>
			<li><a href="<?=BASE_URL;?>/member/logout"><i class="fa fa-power-off">&nbsp;</i> <?=$this->e($front_member_logout);?></a></li>
			<li>
				<a href="#0" class="cd-subnav-trigger"><span><i class="fa fa-bars">&nbsp;</i> <?=$this->e($front_member_menu);?></span></a>
				<!--
				<ul>
					<li class="go-back"><a href="#0"><?=$this->e($front_member_back);?></a></li>
					<li><a href="<?=BASE_URL;?>/mfrog"><i class="fa fa-pencil">&nbsp;</i> <?=$this->e($front_member_allpost);?></a></li>
					<li><a href="<?=BASE_URL;?>/mfrog"><i class="fa fa-plus">&nbsp;</i> <?=$this->e($front_member_addpost);?></a></li>
					<li><a href="<?=BASE_URL;?>/mfrog"><i class="fa fa-user">&nbsp;</i> <?=$this->e($front_member_edit_account);?></a></li>
					<li><a href="<?=BASE_URL;?>/mfrog"><i class="fa fa-unlock-alt">&nbsp;</i> <?=$this->e($front_member_change_password);?></a></li>
					<li><a href="<?=BASE_URL;?>/mfrog"><i class="fa fa-user-times">&nbsp;</i> <?=$this->e($front_member_delete_account);?></a></li>
					<li><a href="#0" class="placeholder">Placeholder</a></li>
				</ul>
				-->
			</li>
		</ul>
	</nav>
	<a href="#0" class="cd-nav-trigger">&nbsp;<span></span></a>
</header>

	<br>	
	<br><br>	
	<br>
	
	<br>
	

		<section id="content">
			<div class="content-wrap">
				<!-- Insert Content -->
				<?=$this->section('content');?>
			</div>
		</section>

		
		
	<br>	
	<br>
	<br>
	<br>
	<br>
	<br>
		
		<!-- Insert Footer -->
		<footer>
	<div class="container-fluid">
		<div class="container footer-page">
			<div class="row">
				<p class="text-center"> &copy; <?=date('Y');?> &nbsp All Rights Reserved M-FROG Investment Indonesia</p>
			</div>
		</div>
	</div>
</footer>




	<div id="alertalldel" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="modal-title"><i class="fa fa-exclamation-triangle text-danger"></i><?=$this->e($dialogdel_1);?></h4>
				</div>
				<div class="modal-body"><?=$this->e($dialogdel_2);?></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-danger" id="confirmdel"><i class="fa fa-trash-o"></i> <?=$this->e($dialogdel_3);?></button>
					<button type="button" class="btn btn-sm btn-default" data-dismiss="modal" aria-hidden="true"><i class="fa fa-sign-out"></i> <?=$this->e($dialogdel_4);?></button>
				</div>
			</div>
		</div>
	</div>

	<a href="#0" class="cd-top">Top</a>

	<!-- Javascript -->
	<script type="text/javascript">
		var BASE_URL = '<?=BASE_URL;?>';
	</script>

	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/datatables/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/tagsinput/bootstrap-tagsinput.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/tagsinput/typeahead.bundle.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/datetime/moment.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/datetime/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/maskedinput/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/filestyle/bootstrap-filestyle.min.js"></script>
	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/bootstrapvalidator/bootstrapValidator.min.js"></script>

	<script type="text/javascript" src="<?=BASE_URL.'/'.DIR_INC;?>/js/member-core.js"></script>

	<script type="text/javascript">
		function initMCEall(){
			tinymce.init({
				mode: "textareas",
				editor_deselector : "mceNoEditor",
				skin: "lightgray",
				height: "450",
				content_css : "<?=BASE_URL.'/'.DIR_INC;?>/css/bootstrap.min.css,<?=BASE_URL.'/'.DIR_INC;?>/css/font-awesome.min.css",
				plugins: [
					"advlist autolink link image lists charmap print preview hr anchor pagebreak",
					"searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
					"table contextmenu directionality emoticons paste textcolor",
					"code fullscreen youtube codemirror codesample"
				],
				menubar : false,
				toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent table",
				toolbar2: "| fontsizeselect | styleselect | link unlink anchor image media youtube | forecolor backcolor | code codesample fullscreen ",
				image_advtab: true,
				fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
				relative_urls: false,
				remove_script_host: false,
				codemirror: {
					indentOnInit: true,
					path: "<?=BASE_URL.'/'.DIR_INC;?>/js/codemirror"
				}
			});
		}
	</script>

	<script type="text/javascript">
		tinymce.init({
			selector: "#po-wysiwyg",
			editor_deselector : "mceNoEditor",
			skin: "lightgray",
			content_css : "<?=BASE_URL.'/'.DIR_INC;?>/css/bootstrap.min.css,<?=BASE_URL.'/'.DIR_INC;?>/css/font-awesome.min.css",
			plugins: [
				"advlist autolink link image lists charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
				"table contextmenu directionality emoticons paste textcolor",
				"code fullscreen youtube autoresize codemirror codesample"
			],
			menubar : false,
			toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent table",
			toolbar2: "| fontsizeselect | styleselect | link unlink anchor image media youtube | forecolor backcolor | code codesample fullscreen ",
			image_advtab: true,
			fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
			relative_urls: false,
			remove_script_host: false,
			codemirror: {
				indentOnInit: true,
				path: "<?=BASE_URL.'/'.DIR_INC;?>/js/codemirror"
			}
		});
	</script>
</body>
</html>