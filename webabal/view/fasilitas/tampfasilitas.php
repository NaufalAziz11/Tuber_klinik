

<!--================ Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content text-left">
        <h2>Fasilitas</h2>
        <div class="page_link">
          <a href="index.php">Beranda</a>
          <a href="index.php?page=dokter">Fasilitas</a>
          <a href="index.php?page=detaildokter">dr. Charlie Barber</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--================End Banner Area =================-->
<section class="feedback_area section_gap relative">
	<div class="container">
            <div class="row">
						<div class="col-lg-3 col-md-6 single-team mb-50">
  <div class="blog_right_sidebar">
    <aside class="single_sidebar_widget post_category_widget">
      <h4>Fasilitas :</h4>
      <hr>
			<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas ");
					while($data = mysqli_fetch_array($sql)){
				?>
      <ul class="list cat-list">
        <li>
				<h4> <a href="index.php?page=tampfasilitas&jenis_fasilitas=<?php echo $data['jenis_fasilitas'] ?>"><?php echo $data['jenis_fasilitas'] ?></a></h4><br><br>
<?php } ?>
        </li>
       
      </ul>
    </aside>
  </div>
</div>


<div class="col-md-5 col-md-3">
		<?php
          $id = $_GET['jenis_fasilitas'];
				  $sql = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas where jenis_fasilitas = '$id'");
					while($data = mysqli_fetch_array($sql)){
				?>
				
									<a href="#"><center><img class="author_img" height = "300px" width="450px" src="../admin/images/fasilitas/<?php echo $data['gambar'] ?>"></center></a>	
							
									<br>
                <h4><?php echo $data['jenis_fasilitas'] ?></h4><br>
                 
							
									<h4><?php echo $data['deskripsi'] ?>.</h4>
						
								
              
                        
					<?php } ?>
				</div>	<!--/.row-->
        <?php include "navberita.php"; ?>
			</div>
			  
	</div>
</section>