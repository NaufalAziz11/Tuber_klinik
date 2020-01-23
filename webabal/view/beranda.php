
<?php include "../../admin/koneksi.php"

?>
<!--================ Home Banner Area =================-->
<section class="home_banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content row">
				<div class="col-lg-12">
					<h1>Melayani dengan Hati, Meraih Ridho Ilahi</h1>
					<p>Klinik Graha Medika Merupakan klinik yang berlokasi
						di Doro, Kab. Pekalongan. KIlink tersebut di bangun pada tahun
						........ dan mulai beroperasi di tahun .........</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Home Banner Area =================-->
<!--================ Sambutan =================-->

<section class="about_myself pad_bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 pr-0">
				<div class="about_img">
					<img class="img-fluid w-100" src="../menusidebar/img/about-me.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-6 pl-0">
				<div class="about_box">
					<div class="section-title-wrap text-left">
						<h1>Sambutan</h1>
						<p>
							Assalamu'alaikum Wr. Wb.

							Puji syukur kehadirat Tuhan Yang Maha Esa...
							Klinik Merupakan.....
							sekian
							wassalamu'alaikum Wr. Wb
						</p>
					</div>
					<a class="main_btn mr-10" href="index.php?page=sambutan">Selengkapnya...</a>

				</div>
			</div>
		</div>
	</div>
</section>

<!--================ Dokter =================-->
<section class="feedback_area section_gap relative">
	<div class="container">
		<div class="row justify-content-center section-title-wrap">
			<div class="col-lg-12">
				<h1>Dokter</h1>
			</div>
		</div>
		
				
		<div class="row justify-content-center d-flex align-items-center">
		<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_dokter ");
					while($data = mysqli_fetch_array($sql)){
				?>
			<div class="col-lg-3 col-md-6 ">
				<div class="categories_post">
					<div class="blog_right_sidebar">
					
									<a href="#"><center><img class="author_img rounded-circle" height = "200px" width="200px" src="../admin/images/dokter/<?php echo $data['foto'] ?>"></center></a>	
								<div class="media-body">
									<br><center><h4><?php echo $data['nama'] ?></h4><br>
									<h6>Jam Praktek</h6>
									<h7><?php echo $data['jam_prak'] ?>.</p></h7></center>
								</div>
								<a class="btn btn-primary readmore" href="index.php?page=tampdokter&id=<?php echo $data['id_user'] ?>">Selengkapnya <i class="fa fa-angle-right"></i></a>
							</div><!--/.media -->
							
						</div>
					</div><!--/.col-lg-4 -->
					<?php } ?>
				</div>	<!--/.row-->
			</div>
			
	</div>
</section>

<!--================ pelayanan =================-->
<section class="service_area section_gap">
	<div class="container">
		<div class="row justify-content-center section-title-wrap">
				<h1>Pelayanan</h1>
			</div>
			
			<div class="team">
				<div class="row clearfix">
				
				<?php
				
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_pelayanan ");
					while($data = mysqli_fetch_array($sql)){
				?>
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-right">
									<a href="index.php?page=tamppelayanan&id=<?php echo $data['id_pelayanan'] ?>"><center><img class="media-object" src="../admin/images/pelayanan/<?php echo $data['gambar'] ?>" alt="<?php echo $data['gambar'] ?>"></center></a>	
								<div class="media-body">
								<a href="index.php?page=tamppelayanan&id=<?php echo $data['id_pelayanan'] ?>"><center><h5><?php echo $data['jenis_pelayanan'] ?></h5><br></a>
									<h7><?php echo $data['deskripsi'] ?>.</p></h7></center><br>
								</div>
								
							</div><!--/.media -->
							</div>
						</div>
					</div><!--/.col-lg-4 -->
					<?php } ?>
				</div>	<!--/.row-->
			</div>
	</div>
</section>
<!--================ jam kerja =================-->

<section class="appointment-area">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6 col-md-6 appointment-left">
			<h1>
					Jam Kerja
				</h1>

			<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_dokter ");
					while($data = mysqli_fetch_array($sql)){
				?>
				<ul class="time-list">
					<li class="d-flex justify-content-between">
						<span><h5><?php echo $data['nama'] ?></h5></span>
						<span><?php echo $data['jam_prak'] ?></span>
					</li>
					
				</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<!--================ fasilitas =================-->

<section class="recent-blog-area section_gap">
	<div class="container">
		<div class="row justify-content-center section-title-wrap">
			<div class="col-lg-12">
				<h1>Fasilitas</h1>
			</div>
		</div>
		<div class="team">
				<div class="row clearfix">
				<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas ");
					while($data = mysqli_fetch_array($sql)){
				?>
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-right">
									<a href="index.php?page=tampfasilitas&jenis_fasilitas=<?php echo $data['jenis_fasilitas'] ?>"><center><img class="media-object" src="../admin/images/fasilitas/<?php echo $data['gambar'] ?>" width ="300px" height = "200px" alt="<?php echo $data['gambar'] ?>"></center></a>	
								<div class="media-body">
									<br><a href="index.php?page=tampfasilitas&jenis_fasilitas=<?php echo $data['jenis_fasilitas'] ?>"><center><h5><?php echo $data['jenis_fasilitas'] ?></h5></a>
									<h7><?php echo $data['deskripsi'] ?>.</p></h7></center>
								</div>
								<br>
								
							</div><!--/.media -->
							</div>

						</div>
					</div><!--/.col-lg-4 -->
					<?php } ?>
				</div>	<!--/.row-->
			</div>
	</div>
</section>