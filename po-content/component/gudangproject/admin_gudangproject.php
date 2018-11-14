<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_gudangproject.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman kontak.
 * This is a php file for handling admin process for gudangproject page.
 *
*/

/**
 * Fungsi ini digunakan untuk mencegah file ini diakses langsung tanpa melalui router.
 *
 * This function use for prevent this file accessed directly without going through a router.
 *
*/
if (!defined('CONF_STRUCTURE')) {
	header('location:index.html');
	exit;
}

/**
 * Fungsi ini digunakan untuk mencegah file ini diakses langsung tanpa login akses terlebih dahulu.
 *
 * This function use for prevent this file accessed directly without access login first.
 *
*/
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']) AND $_SESSION['login'] == 0) {
	header('location:index.php');
	exit;
}

class gudangproject extends PoCore
{

	/**
	 * Fungsi ini digunakan untuk menginisialisasi class utama.
	 *
	 * This function use to initialize the main class.
	 *
	*/
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan halaman index kontak.
	 *
	 * This function use for index gudangproject page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'gudangproject', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle($GLOBALS['_']['component_name']);?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=gudangproject&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => $GLOBALS['_']['gudangproject_name'], 'options' => ''),
								array('title' => $GLOBALS['_']['gudangproject_email'], 'options' => ''),
								array('title' => $GLOBALS['_']['gudangproject_subject'], 'options' => ''),
								array('title' => $GLOBALS['_']['gudangproject_action'], 'options' => 'class="no-sort" style="width:120px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-gudangproject', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('gudangproject');?>
		<div id="viewdata" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 id="modal-title"><?=$GLOBALS['_']['gudangproject_dialog_title_1'];?></h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-hidden="true"><i class="fa fa-sign-out"></i> <?=$GLOBALS['_']['action_10'];?></button>
					</div>
				</div>
			</div>
		</div>
		<div id="alertreply" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=gudangproject&act=reply', 'autocomplete' => 'off'));?>
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 id="modal-title"><?=$GLOBALS['_']['gudangproject_dialog_title_2'];?></h4>
						</div>
						<div class="modal-body">
							<?=$this->pohtml->inputHidden(array('name' => 'name', 'value' => '', 'options' => 'id="name"'));?>
							<?=$this->pohtml->inputHidden(array('name' => 'email', 'value' => '', 'options' => 'id="email"'));?>
							<?=$this->pohtml->inputText(array('type' => 'text', 'label' => $GLOBALS['_']['gudangproject_subject'], 'name' => 'subject', 'id' => 'subject', 'mandatory' => true, 'options' => 'required'));?>
							<div class="form-group">
								<label for="message"><?=$GLOBALS['_']['gudangproject_message'];?> <span class="text-danger">*</span></label>
								<textarea id="message" name="message" class="form-control textarea-editor" style="width:100%; height:300px;"></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> <?=$GLOBALS['_']['action_5'];?></button>
							<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i> <?=$GLOBALS['_']['action_6'];?></button>
						</div>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?php
	}
	}
	
