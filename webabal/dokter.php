<?php include "../admin/koneksi.php"?>

<!--================ Banner Area =================-->
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-left">
				<h2>Dokter</h2>
				<div class="page_link">
					<a href="index.php">Beranda</a>
					<a href="index.php?page=dokter">Dokter</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Banner Area =================-->
<section class="procedure_category section_gap">
<div class="container">
	<div class="row justify-content-center section-title-wrap">
			<div class="col-lg-12">
				<h1>Dokter</h1>
			</div>
		</div>	
		<div class="row justify-content-center d-flex align-items-center" >
		<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_dokter ");
					while($data = mysqli_fetch_array($sql)){
				?>
			<div class="col-6 col-md-3 single-team mb-60" >
				<div class="categories_post">
					<div class="blog_right_sidebar" >
					
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