<?php 
session_start();
require_once 'model/tbl_posts.php';

$title = "Dự án miễn phí php";

$project = new Posts();
$project->Connect();
$datas = $project->List_post();

// liên hệ
if (isset($_POST['send'])) {
    $err = '';
    if (empty($_POST['yourname'])) {
        $err = 'Rỗng tên';
    }else {
        $txtyourname = $_POST['yourname'];
    }

    if (empty($_POST['yourname'])) {
        $err = 'Rỗng email';
    }else {
        $txtemail = $_POST['youremail'];
    }

    if (empty($_POST['yourname'])) {
        $err = 'Rỗng Nội dung';
    }else {
        $txtyourtext = $_POST['yourtext'];
    }

    


    if ($data = $project->loginUser()){

        // $_SESSION['hoten'] = $data[0]['hoten'];
        // $_SESSION['phanquyen'] = $data[0]['phanquyen'];
        // $_SESSION['idnd'] = $data[0]['idnd'];

        // if ($data[0]['phanquyen'] ==0) {
        //     //echo $_SESSION['hoten'];
        //     header("location: admin");
        // }else {
        //     header("location: client");
        // }
    }else {
        $err = "Email hoặc mật khẩu của bạn không chính xác";
    }
}
require_once 'head.php';
?>

<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                Chào mừng
                <span class="text-success">Bạn Đã Đến Đây</span>
            </h1>
            <div class="subheading mb-5">
                Thái nguyên · Ngày 21 tháng 11 năm 2021 . Dự Án được thực hiện bởi: 
                <a href="http://hmooblee.co" target="_bank">Hmooblee.co</a>
            </div>
            <p class="lead mb-5">Hmooblee.co được tạo với mục đích chia sẻ các dự án demo miễn phí giúp các bạn có thêm tài liệu học tâp một cách hiểu quả hơn.</p>
            <div class="social-icons">
                <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <!-- ======= Portfolio Section ======= -->
    <section class="resume-section" id="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Dự án của tôi</h2>
          <?php 

          ?>
          <p data-aos="fade-up" >Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php foreach ($datas as $dl) {

           ?>

           <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="download.php?id=<?php echo $dl['url_post']; ?>" style="text-decoration: none;">
                <img src="assets/img/<?php echo $dl['thumbnail_post']; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4><?php echo $dl['title_post']; ?></h4></a>
                    <p>App</p>
                    
                    <a href="assets/img/<?php echo $dl['thumbnail_post']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
        <?php } ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="https://i.ytimg.com/vi/uHQIByoRdL8/maxresdefault.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Quia fugiat sit in iste officiis commodi quidem hic quas</h4>
              <p>Web</p>
              <a href="https://i.ytimg.com/vi/uHQIByoRdL8/maxresdefault.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="https://i.ytimg.com/vi/xJeJcx235l0/maxresdefault.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <a href="https://i.ytimg.com/vi/xJeJcx235l0/maxresdefault.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
      </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
    <img src="https://1.bp.blogspot.com/-AsJBjGnl9Vs/VuQJWJCJerI/AAAAAAAAABc/ILhvz6fTNKwb9eVNc8qB8thWNGCTeAFuw/s1600/12642603_480065792177760_2865281893508279826_n.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Card 2</h4>
      <p>Card</p>
      <a href="https://1.bp.blogspot.com/-AsJBjGnl9Vs/VuQJWJCJerI/AAAAAAAAABc/ILhvz6fTNKwb9eVNc8qB8thWNGCTeAFuw/s1600/12642603_480065792177760_2865281893508279826_n.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-web">
    <img src="https://i.ytimg.com/vi/HxPohUuzcIo/maxresdefault.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Web 2</h4>
      <p>Web</p>
      <a href="https://i.ytimg.com/vi/HxPohUuzcIo/maxresdefault.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="https://i.ytimg.com/vi/h-FLmj0xObk/maxresdefault.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>App 3</h4>
      <p>App</p>
      <a href="https://i.ytimg.com/vi/h-FLmj0xObk/maxresdefault.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-card">
    <img src="https://i.ytimg.com/vi/uqEfML_fUWc/maxresdefault.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Card 1</h4>
      <p>Card</p>
      <a href="https://i.ytimg.com/vi/NfLTWlrKTVk/maxresdefault.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
      <a href="https://i.ytimg.com/vi/NfLTWlrKTVk/maxresdefault.jpg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-card">
    <img src="https://i.ytimg.com/vi/fsM7cBMmNq0/maxresdefault.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Card 3</h4>
      <p>Card</p>
      <a href="https://i.ytimg.com/vi/quvtZQ1yrMw/maxresdefault.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
      <a href="https://i.ytimg.com/vi/quvtZQ1yrMw/maxresdefault.jpg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
  </div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-web">
    <img src="https://i.ytimg.com/vi/OM_myC7iQ98/maxresdefault.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Web 3</h4>
      <p>Web</p>
      <a href="https://i.ytimg.com/vi/OM_myC7iQ98/maxresdefault.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
  </div>
</div>

</div>

</div>
</section><!-- End Portfolio Section -->
<hr class="m-0" />
<!-- Education-->
<section class="resume-section" id="education">
    <div class="resume-section-content">
        <h2 class="mb-5">Education</h2>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">University of Colorado Boulder</h3>
                <div class="subheading mb-3">Bachelor of Science</div>
                <div>Computer Science - Web Development Track</div>
                <p>GPA: 3.23</p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">August 2006 - May 2010</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="flex-grow-1">
                <h3 class="mb-0">James Buchanan High School</h3>
                <div class="subheading mb-3">Technology Magnet Program</div>
                <p>GPA: 3.56</p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">August 2002 - May 2006</span></div>
        </div>
    </div>
</section>
<hr class="m-0" />
<!-- Skills-->
<section class="resume-section" id="skills">
    <div class="resume-section-content">
        <h2 class="mb-5">Liên hệ</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="yourname">Họ Tên</label>
                <input type="text" class="form-control" id="yourname" name="yourname" placeholder="Họ tên" required>
            </div>
            <br/>
            <div class="form-group">
                <label for="youremail">Email</label>
                <input type="youremail" class="form-control" id="youremail" name="youremail" placeholder="demo@gmail.com" required>
            </div>
            <br/>
            <div class="form-group">
                <label for="yourtext">Nội dung liên hệ</label>
                <textarea class="form-control" id="yourtext" name="yourtext" rows="3" required></textarea>
            </div>
            <br/>
            <div class="form-group">
                <input type="submit" class="form-control bg-success p-2 mb-3 text-white

                " id="send" name="send" value="Gửi">
            </div>
        </form>
    </div>
</section>

</div>

<?php 
require_once 'footer.php';
?>