<?=$this->layout('index2');?>

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
	
	  <h4 text style=" text-align: center; font-size: 24px; color: #000000;"><a href="<?=BASE_URL;?>/rekapitulasi"><i class="fa fa-google-wallet">&nbsp;</i><b> Status Portofolio &nbsp <small> <br>(update:  <?php $tgl=date('d-m-Y'); echo $tgl; ?>) </small></span></h4></b>
			<br> 
			<a style="text-align: center;"> <b> &nbsp; Semua Pinjaman </b>| Pendanaan Project | Pinjaman Bisnis | Pinjaman Personal</a>
			<br>
			<br>
			<div class="row">
							
											<tr>									
												<th style="width:15px; text-align: center;">No.</th>
												
												<th style="width:30px; text-align: center;">Jenis Pinjaman</th>
												
												<th style="width:15px; text-align: center;">Tanggal Aplikasi</th>
												
												<th class="no-sort" style="width:20px; text-align: center;">Jumlah Pinjaman</th>
												
												<th class="no-sort" style="width:20px; text-align: center;">Sisa Pokok</th>
												
												<th class="no-sort" style="width:10px; text-align: center;">Sisa Tenor/Tenor</th>
												
												<th class="no-sort" style="width:10px;text-align: center;">Angsuran</th>
												
												<th class="no-sort" style="width:10px;text-align: center;">Jatuh Tempo</th>
												
												<th class="no-sort" style="width:10px;text-align: center;">Status</th>
											</tr>
											
											
											<tr style="text-align: center;">
												
												<th style="width:30px; text-align: center;">1.</th>
												
												<th style="width:30px; text-align: center;">Pendanaan Project</th>
												
												<th style="width:15px; text-align: center;">1 Mei 2017</th>
												
												<th class="no-sort" style="width:20px;">Rp. 150.000.000</th>
												
												<th class="no-sort" style="width:20px;">Rp. 150.000.000</th>
												
												<th class="no-sort" style="width:10px;">180 hari</th>
												
												<th class="no-sort" style="width:10px;">Rp. -</th>
												
												<th class="no-sort" style="width:10px;">30 Juni 2017</th>
												
												<th class="no-sort" style="width:10px;">Dalam Pekerjaan</th>
												
											</tr>
											
											<tr style="text-align: center;">
												
												<th style="width:30px; text-align: center;">2.</th>
												
												<th style="width:30px; text-align: center;">Pinjaman Bisnis</th>
												
												<th style="width:15px; text-align: center;">1 Juni 2017</th>
												
												<th class="no-sort" style="width:20px;">Rp. 50.000.000</th>
												
												<th class="no-sort" style="width:20px;">Rp. 50.000.000</th>
												
												<th class="no-sort" style="width:10px;">6/6 Bulan</th>
												
												<th class="no-sort" style="width:10px;">Rp. 10.000.000</th>
												
												<th class="no-sort" style="width:10px;">1 Juli 2017</th>
												
												<th class="no-sort" style="width:10px;">Aplikasi Baru</th>
												
											</tr>
											
											<tr style="text-align: center;">
												
												<th style="width:30px; text-align: center;">3.</th>
												
												<th style="width:30px; text-align: center;">Pinjaman Personal</th>
												
												<th style="width:15px; text-align: center;">1 Juni 2017</th>
												
												<th class="no-sort" style="width:20px;">Rp. 100.000.000</th>
												
												<th class="no-sort" style="width:20px;">Rp. 50.000.000</th>
												
												<th class="no-sort" style="width:10px;">6/12 Bulan</th>
												
												<th class="no-sort" style="width:10px;">Rp. 7.000.000</th>
												
												<th class="no-sort" style="width:10px;">1 Juli 2017</th>
												
												<th class="no-sort" style="width:10px;">Lancar</th>
												
											</tr>
											
										</thead>
										<tfoot>
											<tr>
												
												
											</tr>
										</tfoot>
									</table>
								</form>
							</div>
						</div>
					</div>
	  
	 </body>
</table>

