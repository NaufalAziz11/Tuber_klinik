<?php include "../admin/koneksi.php"

?>

<!--================ Banner Area =================-->
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-left">
				<h2>Pelayanan</h2>
				<div class="page_link">
					<a href="index.php">Beranda</a>
					<a href="index.php?page=pelayanan">Pelayanan</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Banner Area =================-->

<!-- Start Offered Services Area -->
<section class="service_area section_gap">
	<div class="container">
		<div class="row justify-content-center section-title-wrap">
			<div class="col-lg-12">
				<h1>Pelayanan</h1>
			</div>
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
									<a href="index.php?page=tamppelayanan&jenis_pelayanan=<?php echo $data['jenis_pelayanan'] ?>"><center><img class="media-object" src="../admin/images/pelayanan/<?php echo $data['gambar'] ?>" alt="<?php echo $data['gambar'] ?>"></center></a>	
								<div class="media-body">
								<br><a href="index.php?page=tamppelayanan&jenis_pelayanan=<?php echo $data['jenis_pelayanan'] ?>"><center><h5><?php echo $data['jenis_pelayanan'] ?></h5></a>
									<h7><?php echo $data['deskripsi'] ?>.</p></h7></center>
								</div>
							</div>
						</div>
						</div>
						</div>
					<?php } ?>
				</div>	<!--/.row-->
			</div>
	</div>
</section>
<!-- End Offered Services Area -->

