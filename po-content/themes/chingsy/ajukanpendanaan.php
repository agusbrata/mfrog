<?=$this->layout('index2');?>
	
	  <h4 text style=" text-align: center; font-size: 24px; color: #000000;"><a href="<?=BASE_URL;?>/ajukanpendanaan"><i class="fa fa-money">&nbsp;</i><b> Form Permohonan Pendanaan Project </span></h4></b></a>
			<hr>
			<p style=" text-align: center;"><img src="http://localhost:88/mfrog/po-content/uploads/langkah1.JPG" alt="Langkah 1" width="400" height="90"/></p>
			<p style=" text-align: center;"><small> 1 dari 3 langkah </small></p>
		<hr>
	
	<table id="table-post" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0" width="80%" style="text-align: center;" >	

	<body>
	
	
	<div class="container-fluid">
		<div class="container member-page">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="page-header">
						<h3><i class="fa fa-user"></i> Data Pemohon</h3>
					</div>
					<div class="member-content">
					
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Gelar <span class="text-danger">*</span></label>
										<select class="form-control">
											 <option value="">Silahkan Pilih</option>  
											 <option value="1">Bapak</option>  
											 <option value="2">Ibu</option>  
											 <option value="2">Bro</option>
										</select>
									
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label>Nama Lengkap <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Alamat Email <span class="text-danger">*</span></label>
										<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/>
																													
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Nomor Kontak/Hanphone <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Jabatan <span class="text-danger">*</span></label>
										
										<select class="form-control">
											<option value="">Silahkan Pilih</option>  
											 <option value="1">Direktur Utama</option>  
											 <option value="2">Komisaris</option>  
											
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat Sesuai KTP<span class="text-danger">*</span></label>
										<input class="form-control" type="text">
										
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
									<div class="form-group">
										<label>Upload KTP <span class="text-danger">*</span></label>
										<div class="input-group">
											<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
										</div>
										<span class="help-block text-danger"><small><i></i></small></span>
									</div>
							</div>
							
							<div class="col-md-6">
									<div class="form-group">
										<label>Upload Kartu Keluarga <span class="text-danger">*</span></label>
										<div class="input-group">
											<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
										</div>
										<span class="help-block text-danger"><small><i></i></small></span>
									</div>
							</div>
							
							<!-- 
							---------------------------------------------------------------------------------------------------------------------
							Data Perusahaan 
							-->
							<br>
							<br>
							
							<br>
							<br>
							
							<div class="page-header">
						<h3><i class="fa fa-hospital-o"></i> Profile Perusahaan dan Bidang Usaha</h3>
					</div>
					<div class="member-content">
					
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Tipe Perusahaan <span class="text-danger">*</span></label>
										<select class="form-control">
											 <option value="">Silahkan Pilih</option>  
											 <option value="1">CV</option>  
											 <option value="2">PT.</option>  
											 <option value="2">Lainnya</option>
										</select>
									
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label>Nama Perusahaan <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Kategori Bisnis <span class="text-danger">*</span></label>
										
										<select class="form-control">
											 <option value="">Silahkan Pilih</option>  
											 <option value="1">Perikanan</option>  
											 <option value="2">Teknologi Informasi</option>  
											 <option value="2">Multimedia</option>
										</select>
																													
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Tipe Bisnis<span class="text-danger">*</span></label>
										<select class="form-control">
											 <option value="">Silahkan Pilih</option>  
											 <option value="1">Ikan Asin</option>  
											 <option value="2">Ikan Lele</option>  
											 <option value="2">Ikan Cupang</option>
										</select>
									</div>
								</div>
								
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Deskripsi Perusahaan <span class="text-danger">**</span></label>
										<textarea class="form-control mceNoEditor"></textarea>
										<span class="help-block text-danger text-right"><small><i></i></small></span>
										
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Status Kantor <span class="text-danger">*</span></label>
										<select class="form-control">
											 <option value="">Silahkan Pilih</option>  
											 <option value="1">Milik Sendiri</option>  
											 <option value="2">Sewa/Kontrak</option>  
										</select>
																													
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Jumlah Karyawan<span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Tahun Berdiri <span class="text-danger">*</span></label>
										
										<select class="form-control">
											<option value="">Silahkan Pilih</option>  
											<option value="1">2013</option>  
											<option value="2">2014</option>  
											<option value="3">2015</option> 
											<option value="4">2016</option> 
											<option value="5">2017</option> 
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat Perusahaan <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
										
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Provinsi <span class="text-danger">*</span></label>
										<select class="form-control">
											 <option value="">Silahkan Pilih</option>  
											 <option value="1">DKI Jakarta</option>  
											 <option value="2">Jawa Barat</option>  
										</select>
																													
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Kota<span class="text-danger">*</span></label>
										<select class="form-control">
											<option value="">Silahkan Pilih</option>  
											<option value="1">Jakarta Pusat</option>  
											<option value="2">Jakarta Timur</option>  
											<option value="3">Jakarta Selatan</option> 
											<option value="4">Jakarta Utara</option> 
											<option value="5">Jakarta Barat</option> 
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Kecamatan<span class="text-danger">*</span></label>
										
										<select class="form-control">
											<option value="">Silahkan Pilih</option>  
											<option value="1">Gambir</option>  
											<option value="2">Petojo</option>  
											<option value="3">Tanah Abang</option> 
											<option value="4">Kemayoran</option> 
											
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nomor Telepon Perusahaan <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
																													
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Alamat Website<span class="text-danger"></span></label>
										<input class="form-control" type="text">
																													
									</div>
								</div>
								
								
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Upload SIUP <span class="text-danger">*</span></label>
										<div class="input-group">
											<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
										</div>
										<span class="help-block text-danger"><small><i></i></small></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Upload NPWP <span class="text-danger">*</span></label>
										<div class="input-group">
											<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
										</div>
										<span class="help-block text-danger"><small><i></i></small></span>
									</div>
								</div>
								
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Upload PKP <span class="text-danger">*</span></label>
										<div class="input-group">
											<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
										</div>
										<span class="help-block text-danger"><small><i></i></small></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Upload TDP <span class="text-danger">*</span></label>
										<div class="input-group">
											<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
										</div>
										<span class="help-block text-danger"><small><i></i></small></span>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Upload SK Kumham <span class="text-danger">*</span></label>
										<div class="input-group">
											<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
										</div>
										<span class="help-block text-danger"><small><i></i></small></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Upload Akte Perusahaan <span class="text-danger">*</span></label>
										<div class="input-group">
											<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
										</div>
										<span class="help-block text-danger"><small><i></i></small></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Upload SKDP <span class="text-danger">*</span></label>
										<div class="input-group">
											<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
										</div>
										<span class="help-block text-danger"><small><i></i></small></span>
									</div>
								</div>
								
							</div>
							
							
							<!-- 
							---------------------------------------------------------------------------------------------------------------------
							Data Akun Bank
							-->
							
							
					<div class="page-header">
						<h3><i class="fa fa-university"></i>Data Akun Bank</h3>
					</div>
					<div class="member-content">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Bank <span class="text-danger">*</span></label>
										<select class="form-control">
											<option value="">Silahkan Pilih</option>  
											<option value="1">Bank Mandiri</option>  
											<option value="2">Bank BNI</option>  
											<option value="3">Bank CIMB Niaga</option> 
											<option value="4">Bank BRI</option> 
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nomor Rekening<span class="text-danger">*</span></label>
										<input class="form-control" type="text">
																													
									</div>
								</div>
								
								
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Pemilik Rekening<span class="text-danger">*</span></label>
										<input class="form-control" type="text">
																													
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Upload Halaman Depan Buku Rekening</label>
										<div class="input-group">
											<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="<?=$this->e($action_7);?>" />
										</div>
										
									</div>
								</div>
							</div>	
							
							<div class="checkbox">
							<label>
								<input type="checkbox" value=""> Saya menyatakan bahwa data-data ini valid
							</label>
							<br>
							<label>
								<input type="checkbox" value=""> Dengan mengisi formulir ini, saya menyatakan
							</label>
							</div>
							
							<div class="action-border">&nbsp;</div>
						
							<button style="text-align: center;" class="btn btn-success" type="submit" name="submit"><i class="fa fa-user"><a href="<?=BASE_URL;?>/ajukanpendanaan2"style="color: #ffffff;"></i> Daftarkan Perusahaan</a></button>
							
							
						</form>
						
						
						
						<!--
						<div class="container">
						  <ul class="nav nav-pills nav-justified">
							<li class="active"><a data-toggle="pill" href="#home"><b>Data Pemohon</b></a></li>
							<li><a data-toggle="pill" href="#menu1"><b>Profile Perusahaan dan Bidang Usaha</b></a></li>
							<li><a data-toggle="pill" href="#menu2"><b>Akun Bank</b></a></li>		
						  </ul>
						  
						  <div id="home" class="tab-pane fade">
							  <div class="row">
								<div class="col-md-8 col-md-offset-2">
									<div class="page-header">
										<h3><i class="fa fa-user"></i> Data Pemohon</h3>
									</div>
									<div class="member-content">
									
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Gelar <span class="text-danger">*</span></label>
														<select class="form-control">
															 <option value="">Silahkan Pilih</option>  
															 <option value="1">Bapak</option>  
															 <option value="2">Ibu</option>  
															 <option value="2">Bro</option>
														</select>
													
													</div>
												</div>
												<div class="col-md-8">
													<div class="form-group">
														<label>Nama Lengkap <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Alamat Email <span class="text-danger">*</span></label>
														<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/>
																																	
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Nomor Kontak/Hanphone <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Jabatan <span class="text-danger">*</span></label>
														
														<select class="form-control">
															<option value="">Silahkan Pilih</option>  
															 <option value="1">Direktur Utama</option>  
															 <option value="2">Komisaris</option>  
															
														</select>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Alamat <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
														
													</div>
												</div>
											</div>
										</div>			
									</div>
								</div>
							</div>
						
						
						
							<div id="menu1" class="tab-pane fade">
							  <div class="row">
								<div class="col-md-8 col-md-offset-2">
											<div class="page-header">
												<h3><i class="fa fa-hospital-o"></i> Profile Perusahaan dan Bidang Usaha</h3>
											</div>
									
									
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Tipe Perusahaan <span class="text-danger">*</span></label>
														<select class="form-control">
															 <option value="">Silahkan Pilih</option>  
															 <option value="1">CV</option>  
															 <option value="2">PT.</option>  
															 <option value="2">Lainnya</option>
														</select>
													
													</div>
												</div>
												<div class="col-md-8">
													<div class="form-group">
														<label>Nama Perusahaan <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Kategori Bisnis <span class="text-danger">*</span></label>
														
														<select class="form-control">
															 <option value="">Silahkan Pilih</option>  
															 <option value="1">Perikanan</option>  
															 <option value="2">Teknologi Informasi</option>  
															 <option value="2">Multimedia</option>
														</select>
																																	
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Tipe Bisnis<span class="text-danger">*</span></label>
														<select class="form-control">
															 <option value="">Silahkan Pilih</option>  
															 <option value="1">Ikan Asin</option>  
															 <option value="2">Ikan Lele</option>  
															 <option value="2">Ikan Cupang</option>
														</select>
													</div>
												</div>
												
											</div>
											
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Deskripsi Perusahaan <span class="text-danger">**</span></label>
														<textarea class="form-control mceNoEditor"></textarea>
														<span class="help-block text-danger text-right"><small><i></i></small></span>
														
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Status Kantor <span class="text-danger">*</span></label>
														<select class="form-control">
															 <option value="">Silahkan Pilih</option>  
															 <option value="1">Milik Sendiri</option>  
															 <option value="2">Sewa/Kontrak</option>  
														</select>
																																	
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Jumlah Karyawan<span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Tahun Berdiri <span class="text-danger">*</span></label>
														
														<select class="form-control">
															<option value="">Silahkan Pilih</option>  
															<option value="1">2013</option>  
															<option value="2">2014</option>  
															<option value="3">2015</option> 
															<option value="4">2016</option> 
															<option value="5">2017</option> 
														</select>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Alamat Perusahaan <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
														
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>Provinsi <span class="text-danger">*</span></label>
														<select class="form-control">
															 <option value="">Silahkan Pilih</option>  
															 <option value="1">DKI Jakarta</option>  
															 <option value="2">Jawa Barat</option>  
														</select>
																																	
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Kota<span class="text-danger">*</span></label>
														<select class="form-control">
															<option value="">Silahkan Pilih</option>  
															<option value="1">Jakarta Pusat</option>  
															<option value="2">Jakarta Timur</option>  
															<option value="3">Jakarta Selatan</option> 
															<option value="4">Jakarta Utara</option> 
															<option value="5">Jakarta Barat</option> 
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Kecamatan<span class="text-danger">*</span></label>
														
														<select class="form-control">
															<option value="">Silahkan Pilih</option>  
															<option value="1">Gambir</option>  
															<option value="2">Petojo</option>  
															<option value="3">Tanah Abang</option> 
															<option value="4">Kemayoran</option> 
															
														</select>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Nomor Telepon Perusahaan <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
																																	
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Upload SIUP <span class="text-danger">*</span></label>
														<div class="input-group">
															<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
														</div>
														<span class="help-block text-danger"><small><i></i></small></span>
													</div>
												</div>
												
											</div>
											
											
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Upload PKP <span class="text-danger">*</span></label>
														<div class="input-group">
															<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
														</div>
														<span class="help-block text-danger"><small><i></i></small></span>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Upload TDP <span class="text-danger">*</span></label>
														<div class="input-group">
															<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
														</div>
														<span class="help-block text-danger"><small><i></i></small></span>
													</div>
												</div>
										
									</div>
								</div>
							  </div>
							</div>
						  
						  
						  
							<div id="menu2" class="tab-pane fade">
							  <div class="row">
								<div class="col-md-8 col-md-offset-2">
									  <h3>Skema Keuntungan</h3>
									  <p>Skema Keuntungan adalah</p>
									
									
										<div class="page col-md-offset-5" >
											<button  class="btn btn-success" type="submit" name="submit"><a href="<?=BASE_URL;?>/ajukanpendanaan3" style="color: #ffffff;"><i class="fa fa-user"></i>Lanjutkan Permohonan</a></i></button>
											<button class="btn btn-warning" type="submit" name="submit"><a href="<?=BASE_URL;?>/ajukanpendanaan" style="color: #ffffff;"><i class="fa fa-arrow-left"></i> Kembali</a></i></button>
										</div>
								</div>
							   </div>
							</div>
						</div>
						
						</form>
						
						-->
						
					</div>
				</div>
			</div>
		</div>
	 
</table>
</body>