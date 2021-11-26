<?php 
session_start();
require_once 'model/tbl_user.php';

if (isset($_SESSION['user'])) {
    header('location:router.php');
}else{
    $title = "Đăng nhập - Dự án miễn phí php";
}

// Login
if (isset($_POST['Login'])) {
    $email = $_POST['txtEmail'];
    $pass = md5($_POST['txtPassword']);
    $err = '';

    $List_user = new Users();
    $List_user->Connect();
    $data_user = $List_user->loginUser($email, $pass);

    foreach ($data_user as $dl_user) {
        // code...
    }

    if ($email == isset($dl_user['email']) && $pass == isset($dl_user['pass'])){

        $_SESSION['id'] = $dl_user['id'];
        $_SESSION['user'] = $dl_user['user'];
        $_SESSION['email'] = $dl_user['email'];
        $_SESSION['pass'] = $dl_user['pass'];
        $_SESSION['name'] = $dl_user['name'];
        $_SESSION['address'] = $dl_user['address'];
        $_SESSION['token'] = $dl_user['token'];
        $_SESSION['level'] = $dl_user['level'];

        header('location:router.php');
    }else {
        $err = "Email hoặc mật khẩu của bạn không chính xác";
    }
}

// Register
if (isset($_POST['Register'])) {
    $email = $_POST['txtEmail'];
    $pass = md5($_POST['txtPassword']);
    $pass1 = md5($_POST['txtPassword1']);
    $rg_err = '';

    $user = ''; 
    $name = ''; 
    $address = ''; 
    $telephone = ''; 
    $token = '';
    $level = 1;

    $List_user = new Users();
    $List_user->Connect();

    if ($pass == $pass1){
        if ($List_user->Ckeck_email($email) == 0) {
            if ($List_user->Add_user($user, $email, $pass, $name, $address, $telephone, $token, $level)) {
                
                $_SESSION['email'] = $email;
                $_SESSION['level'] = $level;

                header('location:router.php');
                
            }else {
                $rg_err = "Đăng ký thất bại";
            }
            
        } else {
            $rg_err = "Email của bạn đã đã đăng ký tài khoản";
        }
        
    }else {
        $rg_err = "Mật khẩu nhập của bạn không khớp !";
    }
} 

require_once 'head.php';
 ?>
<section class="resume-section" id="about">
    <!-- Page Content-->
    <div class="resume-section-content">
        <div class="row" >
            <div class="col-xl-6" style="border: 1px solid #0ae;">
                <section class="resume-section" id="skills">
                    <div class="resume-section-content">
                        <h2 class="mb-5">Đăng nhập</h2>
                        <form method="POST">
                            <?php if (isset($err)) { ?>
                               <span class="text-primary"><?php  echo $err; ?></span><br/>
                            <?php  } ?>
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

            <div class="col-xl-6" style="border: 1px solid #0ea;">
                <section class="resume-section" id="skills">
                    <div class="resume-section-content">
                        <h2 class="mb-5">Đăng Ký</h2>
                        <form method="POST">
                            <?php if (isset($rg_err)) { ?>
                               <span class="text-primary"><?php  echo $rg_err; ?></span><br/>
                            <?php  } ?>
                            <div class="form-group">
                                <label for="youremail">Email</label>
                                <input type="email" class="form-control" id="youremail" name="txtEmail" placeholder="demo@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="yourpass">Mật khẩu</label>
                                <input type="password" class="form-control" id="yourpass" name="txtPassword" placeholder="12345" required>
                            </div>
                            <div class="form-group">
                                <label for="yourpass1">Nhập lại Mật khẩu</label>
                                <input type="password1" class="form-control" id="yourpass1" name="txtPassword1" placeholder="12345" required>
                            </div>
                            <br/>
                            <div class="form-group">
                                <input type="submit" class="form-control bg-success p-2 mb-3 text-white

                                " id="Login" name="Register" value="Đăng Ký">
                            </div>
                        </form>
                    </div>
                </section> 
            </div>

       </div>
   </div>
</section>


<?php 
require_once 'footer.php';
?>