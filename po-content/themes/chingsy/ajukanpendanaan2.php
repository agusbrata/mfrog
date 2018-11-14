<?=$this->layout('index2');?>



<script>
function tandaPemisahTitik(b){
var _minus = false;
if (b<0) _minus = true;
b = b.toString();
b=b.replace(".","");
b=b.replace("-","");
c = "";
panjang = b.length;
j = 0;
for (i = panjang; i > 0; i--){
j = j + 1;
if (((j % 3) == 1) && (j != 1)){
c = b.substr(i-1,1) + "." + c;
} else {
c = b.substr(i-1,1) + c;
}
}
if (_minus) c = "-" + c ;
return c;
}

function numbersonly(ini, e){
if (e.keyCode>=49){
if(e.keyCode<=57){
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode):b + String.fromCharCode(e.keyCode);
ini.value = tandaPemisahTitik(b);
return false;
}
else if(e.keyCode<=105){
if(e.keyCode>=96){
//e.keycode = e.keycode - 47;
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode-48):b + String.fromCharCode(e.keyCode-48);
ini.value = tandaPemisahTitik(b);
//alert(e.keycode);
return false;
}
else {return false;}
}
else {
return false; }
}else if (e.keyCode==48){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==95){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode-48);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==8 || e.keycode==46){
a = ini.value.replace(".","");
b = a.replace(/[^\d]/g,"");
b = b.substr(0,b.length -1);
if (tandaPemisahTitik(b)!=""){
ini.value = tandaPemisahTitik(b);
} else {
ini.value = "";
}

return false;
} else if (e.keyCode==9){
return true;
} else if (e.keyCode==17){
return true;
} else {
//alert (e.keyCode);
return false;
}

}



</script>
</head>	
	
	<body>
		
	  <h4 text style=" text-align: center; font-size: 24px; color: #000000;"><i class="fa fa-money">&nbsp;</i><b> Form Permohonan Pendanaan Project</h4></b></a>
			<hr>
			<p style=" text-align: center;"><img src="http://localhost:88/mfrog/po-content/uploads/langkah2.JPG" alt="Langkah 2" width="400" height="90"/></p>
			<p style=" text-align: center;"><small> 2 dari 3 langkah </small></p>
			
		<hr>
	
						<div class="container">
						  <ul class="nav nav-pills nav-justified">
							
							<li class="active"><a data-toggle="pill" href="#home"><b>Kebutuhan Pendanaan</b></a></li>
							<li><a data-toggle="pill" href="#menu1"><b>Informasi Proyek</b></a></li>
							<li><a data-toggle="pill" href="#menu2"><b>Dokumen Pendukung</b></a></li>
							
						  </ul>
						  
						  <div class="tab-content">
							<div id="home" class="tab-pane fade in active" role="tabpanel">
											<div class="page-header col-md-offset-1" >
												<h3><i class="fa fa-list-alt"></i> Masukan Kebutuhan Pendanaan Anda</h3>
											</div>
									
									<div class="col-md-6">
												<div class="row">
													<div class="col-md-8 col-md-offset-2">
														<div class="form-group">
															<label>Nilai Project<span class="text-danger">*</span></label>
															<input class="form-control" type="text" name="nilaiproject" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8 col-md-offset-2">
														<div class="form-group">
															<label>Modal Kerja<span class="text-danger">*</span></label>
															<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" />
														<small><i style="color: #FF0000;">maksimum pinjaman modal kerja Rp.1.000.000.000</i></small>
														</div>
														
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8 col-md-offset-2">
														<div class="form-group">
															<label>Jangka Waktu Pinjaman (Bulan) <span class="text-danger">*</span></label>
															<select class="form-control">
																 <option value="">Silahkan Pilih</option>  
																 <option value="1">1 Bulan</option>  
																 <option value="2">2 Bulan</option>  
																 <option value="3">3 Bulan</option>
																 <option value="4">4 Bulan</option>  
																 <option value="5">5 Bulan</option>
															</select>
														
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8 col-md-offset-2">
														<div class="form-group">
															<label>Skema Keuntungan <span class="text-danger">*</span></label>
															<select class="form-control">
																 <option value="">Silahkan Pilih</option>  
																 <option value="1">Bagi Hasil</option>  
																 <option value="2">Bunga</option>  
															</select>
														
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-4 col-md-offset-2">
														<div class="form-group">
															<label>Jml. Keuntungan (%)<span class="text-danger">*</span></label>
															<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Hari Peminjaman<span class="text-danger"></span></label>
															<input class="form-control" value="60 Hari" type="text" aria-describedby="inputGroupSuccess3Status" readonly/>
														</div>
													</div>
												</div>
											
										</div>
									
									<div class="col-md-5">
										<div>
											<div class="panel panel-info">
												<div class="panel-heading">
													<b>Simulasi Pembayaran</b>
												</div>
												<div class="panel-body" style="min-height: 100; max-height: 400;">
													
													<div class="col-sm-6">
														<label class="f-14"> Nilai Project</label>
														<h5 class="color: #000080;"><b>Rp.100.000.000</b></h5>
													</div>
													<div class="col-sm-6">
														<label class="f-14"> Pinj. Modal Kerja</label>
														<h5 class="color: #000080;"><b>Rp.80.000.000</b></h5>
													</div>
													
													
													
													
													<div class="col-sm-6">
														<label class="f-14"> Biaya Marketplace</label>
														<h5 class="color: #000080;"><b>3 - 5%</b></h5>
													</div>
													
													<div class="col-sm-6">
														<label class="f-14"> Skema</label>
														<h5 class="color: #000080;"><b>Bunga 12-20%</b></h5>
													</div>
																							
												<hr>
													<div class="col-sm-12">
														<label class="f-14"> Nilai Pembiayaan</label>
														<h5 class="color: #000080;"><b>Rp.77.600.000 - Rp.76.000.000</b></h5>
													</div>
												<hr>
													<div class="col-sm-12">
														<label class="f-14"> Nilai Pengembalian</label>
														<h5 class="color: #000080;"><b>Rp.84.000.000 - Rp.86.400.000</b></h5>
													</div>
													
												</div>
												</div>
											</div>
										</div>
									</div>
								
							
							
							
							<div id="menu1" class="tab-pane fade">
						  
								<div class="page-header col-md-offset-1">
									<h3><i class="fa fa-list-alt"></i> Informasi Proyek</h3>
								</div>
									
									<div class="col-md-6">										
												<div class="row">
												<h5 style="text-align: center; color: #006400;"><b>Informasi Pemberi Pekerjaan </b> </h5>
												<br>
													<div class="col-md-8 col-md-offset-2">
														<div class="form-group">
															<label>Jenis Instansi<span class="text-danger">*</span></label>
																<select class="form-control" >
																	<option value="">Silahkan Pilih</option>
																	<option value="1">Pemerintah</option>
																	<option value="2">Swasta</option>
																	<option value="3">BUMN</option>
																	<option value="4">Lain-Lain</option>
																	
																</select>
														
														</div>
													</div>
													<div class="col-md-8 col-md-offset-2">
														<div class="form-group">
															<label>Pemberi Pekerjaan<span class="text-danger">*</span></label>
																<select class="form-control" >
																	<option value="">Silahkan Pilih</option>
																	<option value="1">Otoritas Jasa Keuangan</option>
																	<option value="2">Amari Creation</option>
																	<option value="3">Bank Indonesia</option>
																	<option value="4">Prudential</option>
																	<option value="5">Fujitsu Indonesia</option>
																	<option value="6">Freeport</option>
																	<option value="7">Ace Hardware</option>
																</select>
																
															
														
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8 col-md-offset-2">
														<div class="form-group">
															<label>Lokasi<span class="text-danger">*</span></label>
															<select class="form-control">
																 <option value="">Silahkan Pilih</option>  
																 <option value="1">Jakarta Pusat</option>  
																 <option value="2">Jakarta Selatan</option>  
																  <option value="1">Jakarta Barat</option>  
																 <option value="2">Jakarta Timur</option>  
																  <option value="1">Bekasi</option>  
																 <option value="2">Tanggerang</option>  
															</select>
														
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8 col-md-offset-2">
														<div class="form-group">
															<label>Alamat Perusahaan Pemberi Kerja<span class="text-danger">*</span></label>
															<input class="form-control" type="text-area">															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8 col-md-offset-2">
														<div class="form-group">
															<label>Website Pemberi Kerja<span class="text-danger">*</span></label>
															<input class="form-control" type="text-area">															
														</div>
													</div>
												</div>
												
												
											
									
											<div class="row">
												<h5 style="text-align: center; color: #006400;"><b>Informasi Proyek </b> </h5>
												<br>
													<div class="col-md-8 col-md-offset-2">
														
														<div class="form-group">
															<label>Nama Proyek<span class="text-danger">*</span></label>
															<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/>															
														</div>
													</div>
													
													
														<div class="col-md-8 col-md-offset-2">
															<div class="form-group">
																<label>Lokasi Proyek<span class="text-danger">*</span></label>
																<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/>															
															</div>
														</div>
														
														<div class="col-md-4 col-md-offset-2">
															<div class="form-group">
																<label>Jangka Waktu Proyek<span class="text-danger">*</span></label>
																<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/>															
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label><span class="text-danger">*</span></label><br>
																<select class="form-control">
																 <option value="">Silahkan Pilih</option>  
																 <option value="1">Hari</option>  
																 <option value="2">Bulan</option>
																</select>
															</div>
														</div>
												
														
														<div class="col-md-4 col-md-offset-2">
															<div class="form-group">
																<label>Termin Proyek<span class="text-danger"></span></label>
																<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/> 														
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label><span class="text-danger">*</span></label><br>
																<input class="form-control" value="Termin" type="text" aria-describedby="inputGroupSuccess3Status" readonly/>															
															</div>
														</div>
											</div>
										</div>	
									
												
									<div class="col-md-6">										
												<div class="row">
												<h5 style="text-align: center; color: #006400;"><b>Kontak Perusahaan Yang Dapat Dihubungi</b> </h5>
												<br>
													<div class="col-md-4">
														<div class="form-group">
															<label>Gelar<span class="text-danger">*</span></label>
															<select class="form-control">
																 <option value="">Silahkan Pilih</option>  
																 <option value="1">Bapak</option>  
																 <option value="2">Ibu</option>  
															</select>
														</div>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<label>Nama Personil<span class="text-danger">*</span></label>
															<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/>
														</div>
													</div>
													
													<div class="col-md-12">
														<div class="form-group">
															<label>Divisi<span class="text-danger">*</span></label>
															<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/>
														</div>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<label>Nomor Telp<span class="text-danger">*</span></label>
															<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Ekstension<span class="text-danger"></span></label>
															<input class="form-control" type="text" aria-describedby="inputGroupSuccess3Status"/>
														</div>
													</div>
													
													
													<br>
													<br>
													<br>
													<br>
													<div class="row">
													
														<h5 style="text-align: center; color: #006400;"><b>Dokumen Proyek</b> </h5>
														<br>
														<div class="col-md-6">
															<div class="form-group">
																<label>Upload SPK/Purchase Order <span class="text-danger">*</span></label>
																<div class="input-group">
																	<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
																</div>
																<span class="help-block text-danger"><small><i></i></small></span>
															</div>
														</div>
													
													
													
														<div class="col-md-6">
															<div class="form-group">
																<label>Kontrak <span class="text-danger">*</span></label>
																<div class="input-group">
																	<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
																</div>
																<span class="help-block text-danger"><small><i></i></small></span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label>Upload BAST/BAPP/PO <span class="text-danger"></span></label>
																<div class="input-group">
																	<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
																</div>
																<span class="help-block text-danger"><small><i></i></small></span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label>Invoice / Invoice Receipt <span class="text-danger"></span></label>
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
									
									<div class="container-fluid">
										<div class="container member-page">
												<div class="page-header col-md-offset-1">
												<h3><i class="fa fa-list-alt"></i> Masukan Dokumen Pendukung</h3>
												</div>
											<div class="col-md-12">										
												<div class="row">											
														<div class="col-md-6">
															<div class="form-group">
																<label>Rekening Koran <span class="text-danger">*</span></label>
																<div class="input-group">
																	<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
																</div>
																<span class="help-block text-danger"><small><i> 3 Bulan Terakhir</i></small></span>
															</div>
														
														
															<div class="form-group">
																<label>Company Profile <span class="text-danger">*</span></label>
																<div class="input-group">
																	<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
																</div>
																<span class="help-block text-danger"><small><i>Company Profile Terkini</i></small></span>
															</div>
														
												
															<div class="form-group">
																<label>Laporan Keuangan<span class="text-danger"></span></label>
																<div class="input-group">
																	<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
																</div>
																<span class="help-block text-danger"><small><i></i></small></span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label>Dokumen Pendukung 1<span class="text-danger"></span></label>
																<div class="input-group">
																	<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
																</div>
																<span class="help-block text-danger"><small><i></i></small></span>
															</div>
															
															<div class="form-group">
																<label>Dokumen Pendukung 2<span class="text-danger"></span></label>
																<div class="input-group">
																	<input class="form-control" type="file" name="picture" class="filestyle" data-buttonText="" />
																</div>
																<span class="help-block text-danger"><small><i></i></small></span>
															</div>
														</div>
												</div>
											</div>
												
											
							  
							  
							  
							  
							
								<div class="page col-md-offset-5" >
								<button  class="btn btn-success" type="submit" name="submit"><a href="<?=BASE_URL;?>/ajukanpendanaan3" style="color: #ffffff;"><i class="fa fa-user"></i>Lanjutkan Permohonan</a></i></button>
								<button class="btn btn-warning" type="submit" name="submit"><a href="<?=BASE_URL;?>/ajukanpendanaan" style="color: #ffffff;"><i class="fa fa-arrow-left"></i> Kembali</a></i></button>
								</div>
							
							
								</div>
								
							  </div>
							  
							</div>
						</div>
													
						
						
							
							
						<form>	
							
						</form>
					</div>
				</div>
			</div>
		</div>
	 
</table>
</body>

