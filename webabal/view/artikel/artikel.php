<?php include "../admin/koneksi.php"

?>

<!--================ Banner Area =================-->
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-left">
				<h2>Berita</h2>
				<div class="page_link">
					<a href="index.php">Beranda</a>
					<a href="index.php?page=pelayanan">Berita</a>
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
				<h1>Berita</h1>
			</div>
		</div>

		<div class="team">
				<div class="row clearfix">
				<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_berita ");
					while($data = mysqli_fetch_array($sql)){
				?>
					 <div class="col-xs-12 col-sm-8 blog-content">	
							<div class="media">
								<div class="pull-right">
								<a href="#"><img class="media-object" src="../admin/images/berita/<?php echo $data['gambar'] ?>" width ="300px" height = "200px" alt="<?php echo $data['gambar'] ?>"></a>	
								<br><br>
								</div>
								
								<br><div class="col-xs-12 col-sm-8 blog-content">	
								<h5><?php echo $data['judul'] ?></h5>
								<h7>dipost pada : <?php echo $data['tanggal'] ?></h7><br><br>
								<h7><?php echo substr($data['isi_berita'], 0, 100) ?>"..."</h7><br><br>
									
								
								<a class="btn btn-primary readmore" href="index.php?page=tamp-artik&id=<?php echo $data['id_berita'] ?>">Selengkapnya <i class="fa fa-angle-right"></i></a><br>
							</div>
						
						</div>
						</div>
					
					<?php } ?>
				</div>	<!--/.row-->
			</div>
	</div>
</section>
<!-- End Offered Services Area -->

