<?=$this->layout('index2');?>



	<table id="table-post" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0" width="80%" style="text-align: center;" >
	<body>
	
	  <h4 text style=" text-align: center; font-size: 24px; color: #000000;"><a href="<?=BASE_URL;?>/statistik"><i class="fa fa-area-chart">&nbsp;</i><b> Statistik Portofolio Pinjaman &nbsp <small> <br>(update:  <?php $tgl=date('d-m-Y'); echo $tgl; ?>) </small></span></h4></b>
	  
			<br> 
			
			<div class="container clearfix">
			<span class="label label-danger bnews-title"> <!-- <?=$this->e($front_breaking_news);?> --> M-FROG Indikator:</span> &nbsp  BI Rate 6.50 % Pranala  &nbsp  | &nbsp Kurs Tengah JISDOR (USD - IDR)<?php $tgl=date('d-m-Y'); echo $tgl; ?> Rp 13,321 &nbsp | &nbsp IHSG 3,37% | &nbsp Pendanaan M-FROG Rp. 678.000.000,-
			<div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
				<div class="flexslider">
					<div class="slider-wrap">
					
					
					<!--
					<?php
						$headlines = $this->post()->getHeadline('5', 'DESC', WEB_LANG_ID);
						foreach($headlines as $headline){
					?>
						<div class="slide"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $headline);?>"><strong><?=$headline['title'];?>:</strong> <?=$this->pocore()->call->postring->cuthighlight('post', $headline['content'], '80');?>...</a></div>
					<?php } ?>
					-->
					
					</div>
				</div>
			</div>
		</div>
			
			</a>
						
			<br>
			<br>
			<div class="ipost clearfix">
					<div class="col_half bottommargin-sm">
					<p style="text-align: center;"><img src="http://localhost:88/mfrog/po-content/uploads/chart.JPG" alt="chart" width="900" height="450" /></p>
					<br>
					<p style="text-align: center;"><img src="http://localhost:88/mfrog/po-content/uploads/chart2.JPG" alt="chart2" width="900" height="550" /></p>
			
					</div>
			</div>		
					
	  </body>
	  </table>