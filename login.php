<?php 
session_start();
if (isset($_SESSION['user'])) {
    header('location:router.php');
}else{
    $title = "Đăng nhập";
}

if (isset($_POST['Login'])) {
    $_SESSION['user'] = 'hmooblee';
    $_SESSION['email'] = 'hmooblee@gmail.com';
    $_SESSION['level'] = 0;

    $email = $_POST['txtEmail'];
    $pass = md5($_POST['txtPassword']);
    $err = '';
    header('location:router.php');
}
require_once 'head.php';
 ?>

    <!-- Page Content-->

<section class="resume-section" id="skills">
    <div class="resume-section-content">
        <h2 class="mb-5">Đăng nhập</h2>
        <form method="POST">
            <div class="form-group">
                <label for="youremail">Email</label>
                <input type="email" class="form-control" id="youremail" name="txtEmail" placeholder="demo@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="yourpass">Mật khẩu</label>
                <input type="password" class="form-control" id="yourpass" name="txtPassword" placeholder="12345" required>
            </div>
            <br/>
            <div class="form-group">
                <input type="submit" class="form-control bg-success p-2 mb-3 text-white

                " id="Login" name="Login" value="Đăng nhập">
            </div>
        </form>
    </div>
</section>
</div>

<?php 
require_once 'footer.php';
?>