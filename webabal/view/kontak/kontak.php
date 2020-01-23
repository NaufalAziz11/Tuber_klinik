<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-left">
                <h2>Kontak</h2>
                <div class="page_link">
                    <a href="index.php">Beranda</a>
                    <a href="index.php?page=kontak">Kontak</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_120">
    <div class="container">
        <div id="mapBox" class="mapBox">
        </div>
        <div class="row">
		<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_kontak where jenis_kontak = 'No.Telepon' ");
					while($data = mysqli_fetch_array($sql)){
				?>
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
									<h6><?php echo $data['jenis_kontak'] ?></h6></center>
									<h7><?php echo $data['no/alamat_kontak'] ?></h7></center>
								</div>
							</div><!--/.media -->
						</div>
					<!--/.col-lg-4 -->
					<?php } ?>
                    </div>
					<br>

					<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_kontak where jenis_kontak = 'Email' ");
					while($data = mysqli_fetch_array($sql)){
				?>
           
                <div class="contact_info">
                    <div class="info_item">
					<i class="lnr lnr-envelope"></i>
									<h6><?php echo $data['jenis_kontak'] ?></h6></center>
									<h7><?php echo $data['no/alamat_kontak'] ?></h7></center>
							
					<?php } ?>
                    </div>
					<br>
					
					
					
                <div class="contact_info">
                    <div class="info_item">
					<i class="lnr lnr-home"></i>
					<h6>Alamat </h6>
					<h7>Jl. Raya Doro - Pekalongan </h7>
					<h7>Siumbung, Doro,Jawa Tengah 51191</h7></center>
							
			
                    </div>
					<br>
					<div class="contact_info">
                    <div class="info_item">
                        <i class="fa fa-facebook"></i>
						<h6>Facebook</h6>
                        <h7>Graha Medika Doro</h7>
                        
                    </div>
							</div><!--/.media -->
						</div>
					<!--/.col-lg-4 -->
			
                   
                </div>
            </div>
        </div>
    </div>
</section>

<!--================Contact Area =================-->

