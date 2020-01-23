

<!--================ Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content text-left">
        <h2>Dokter</h2>
        <div class="page_link">
          <a href="index.php">Beranda</a>
          <a href="index.php?page=dokter">Berita</a>
          <a href="index.php?page=detaildokter"><?php echo $data['judul'] ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Banner Area =================-->
<section class="feedback_area section_gap relative">
	<div class="container">
		<div class="row justify-content-center d-flex align-items-center">
		<?php
          $id = $_GET['id'];
				  $sql = mysqli_query($koneksi, "SELECT * FROM tb_berita where id_berita = '$id'");
					while($data = mysqli_fetch_array($sql)){
				?>
			<div class="col-lg-8 col-md-6 ">
      
			
					<div class="blog_right_sidebar">
					
								<a href="#"><center><img class="author_img" height = "300px" width="800px" src="../admin/images/berita/<?php echo $data['gambar'] ?>"></center></a>	
								<div class="media-body">
									<br>
                <h3><?php echo $data['judul'] ?></h3>
                <h7>kategori : <?php echo $data['kategori'] ?></h7><br><br>
									<h7><?php echo $data['isi_berita'] ?>.</p></h7>
								</div>
								
                <div class="col-xs-12 col-sm-10 blog-content">
               
                                <h2><a href="index.php?page=detail_berita&id=<?php echo $data['id_post'] ?>"><?php $data['judul'] ?></a></h2>
                                <h3><?php echo $data['isi_post'] ?></h3>
                            </div>
                        </div>   
					<?php } ?>
         
				</div>	<!--/.row-->
			</div>
			
	</div>
</section>