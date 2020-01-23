<div class="col-lg-4">
	<div class="blog_right_sidebar">
		<aside class="single_sidebar_widget popular_post_widget">
			<h3 class="widget_title">Tips & Trik</h3>
			
			<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_berita where kategori = 'tips & trik' ");
					while($data = mysqli_fetch_array($sql)){
				?>
				<div class="media post_item">
				<a href="#"><img class="media-object" src="../admin/images/berita/<?php echo $data['gambar'] ?>" width ="100px" height = "80px" alt="<?php echo $data['gambar'] ?>"></a>	
				<div class="media-body">
								<h5><?php echo $data['judul'] ?></h5>
								<p><?php echo $data['tanggal'] ?></p>
								<br>
					</div>
					</div>
				
					<?php } ?>
				



            <div class=" br"></div>
		</aside>
		<aside class="single_sidebar_widget popular_post_widget">
			<h3 class="widget_title">Artikel</h3>
			<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_berita where kategori = 'artikel' ");
					while($data = mysqli_fetch_array($sql)){
				?>
				<div class="media post_item">
				<a href="#"><img class="media-object" src="../admin/images/berita/<?php echo $data['gambar'] ?>" width ="100px" height = "80px" alt="<?php echo $data['gambar'] ?>"></a>	
				<div class="media-body">
								<h5><?php echo $data['judul'] ?></h5>
								<p><?php echo $data['tanggal'] ?></p>
								<br>
					</div>
					</div>
				
					<?php } ?>
				


				</div>
				<div class=" br"></div>
		</aside>
	</div>
</div>