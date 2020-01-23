<?php 
    require "pdo/Fasilitas.php";     // Import file User.php
	$objuser = new Fasilitas();      // Membuat objek user, agar function yang ada di dalam class bis digunakan
	include "../admin/koneksi.php"
?>
<!--================ Banner Area =================-->
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-left">
				<h2>Fasilitas</h2>
				<div class="page_link">
					<a href="index.php">Beranda</a>
					<a href="index.php?page=fasilitas">Fasilitas</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Banner Area =================-->
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
								<br><center>
								
							</div><!--/.media -->
							</div>

						</div>
					</div><!--/.col-lg-4 -->
					<?php } ?>
				</div>	<!--/.row-->
			</div>
	</div>
</section>

