

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
<section class="feedback_area section_gap relative">
	<div class="container">
		<div class="row justify-content-center d-flex align-items-center">
		<?php
          $id = $_GET['id'];
				  $sql = mysqli_query($koneksi, "SELECT * FROM tb_dokter where id_user = '$id'");
					while($data = mysqli_fetch_array($sql)){
				?>
			<div class="col-md-8 ">
      <center><h2>Dr.<?php echo $data['nama'] ?></h4><br></center>
				<div class="categories_post">
					<div class="blog_right_sidebar">
					
									<a href="#"><center><img class="author_img rounded-circle" height = "200px" width="200px" src="../admin/images/dokter/<?php echo $data['foto'] ?>"></center></a>	
								<div class="media-body">
									<br>
                  <h3>Pendidikan Kedokteran</h3>
									<h7><?php echo $data['pendidikan/tahun'] ?>/2009</p></h7></center><br>
									<h3>Jam Praktek</h3>
									<h7><?php echo $data['jam_prak'] ?>.</p></h7></center>
								</div>
								
                <div class="col-xs-12 col-sm-10 blog-content">
               
                                <h2><a href="index.php?page=detail_berita&id=<?php echo $data['id_post'] ?>"><?php $data['judul'] ?></a></h2>
                                <h3><?php echo $data['isi_post'] ?></h3>
                            </div>
                        </div>   
					<?php } ?>
				</div>	<!--/.row-->
			</div>
			<?php include "navberita.php"; ?>
	</div>

</section>