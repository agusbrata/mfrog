<?php
/*
 *
 * - PopojiCMS Front End File
 *
 * - File : contact.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman kontak.
 * This is a php file for handling front end process for contact page.
 *
*/

/**
 * Router untuk memproses request $_POST[] komentar.
 *
 * Router for process request $_POST[] comment.
 *
*/
$router->match('GET|POST', '/bantuan', function() use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('bantuan', WEB_LANG);
	if (!empty($_POST)) {
		$core->poval->validation_rules(array(
			'gudangproject_sektor_project' => 'required',
			'gudangproject_keterangan_project' => 'required',
			'gudangproject_nilai_project' => 'required'
		));
		$core->poval->filter_rules(array(
			'gudangproject_sektor_project' => 'trim|sanitize_string',
			'gudangproject_keterangan_project' => 'trim|sanitize_string',
			'gudangproject_nilai_project' => 'trim|sanitize_string'	
		));
		$validated_data = $core->poval->run($_POST);
		if ($validated_data === false) {
			$alertmsg = '<div id="gudangproject-form-result">
				<div class="alert alert-warning" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					'.$lang['front_gudangproject_error'].'
				</div>
			</div>';
		} else {
			$data = array(
				'sektor_project' => $_POST['gudangproject_sektor_project'],
				'keterangan_project' => $_POST['gudangproject_keterangan_project'],
				'nilai_project' => $_POST['gudangproject_nilai_project'],
				
			);
			$query = $core->podb->insertInto('bantuan')->values($data);
			$query->execute();
			unset($_POST);
			$alertmsg = '<div id="gudangproject-form-result">
				<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					'.$lang['front_gudangproject_success'].'
				</div>
			</div>';
		}
	}
	$info = array(
		'page_title' => $lang['front_contact'],
		'page_desc' => $core->posetting[2]['value'],
		'page_key' => $core->posetting[3]['value'],
		'social_mod' => $lang['front_contact'],
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'],
		'social_title' => $core->posetting[0]['value'],
		'social_desc' => $core->posetting[2]['value'],
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('bantuan', compact('lang'));
});



	
	