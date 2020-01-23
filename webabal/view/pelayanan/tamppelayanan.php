
<!--================ Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content text-left">
        <h2>pelayanan</h2>
        <div class="page_link">
          <a href="index.php">Beranda</a>
          <a href="index.php?page=dokter">pelayanan</a>
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
      <h4>pelayanan :</h4>
      <hr>
			<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM tb_pelayanan ");
					while($data = mysqli_fetch_array($sql)){
				?>
      <ul class="list cat-list">
        <li>
				<h4> <a href="index.php?page=tamppelayanan&jenis_pelayanan=<?php echo $data['jenis_pelayanan'] ?>"><?php echo $data['jenis_pelayanan'] ?></a></h4><br><br>
<?php } ?>
        </li>
       
      </ul>
    </aside>
  </div>
</div>


<div class="col-md-5 col-md-3">
<a href="#"><center><img class="author_img" height = "300px" width="450px" src="../admin/images/fasilitas/persalinan.jpg"></center></a>								
									<br>
		<?php
          $id = $_GET['jenis_pelayanan'];
				  $sql = mysqli_query($koneksi, "SELECT * FROM tb_pelayanan where jenis_pelayanan = '$id'");
					while($data = mysqli_fetch_array($sql)){
				?>
				
									
                <h4><?php echo $data['jenis_pelayanan'] ?></h4><br>
                 
							
									<h7><?php echo $data['deskripsi'] ?>.</h7>
						
								
              
                        
					<?php } ?>
				</div>	<!--/.row-->
        <?php include "navberita.php"; ?>
			</div>
			  
	</div>
</section>