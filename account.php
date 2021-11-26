<?php 
session_start();
require_once 'model/tbl_user.php';

$title = "Cài đặt tài khoản - Dự án miễn phí php";

if (isset($_SESSION['email'])) {
    require_once 'head.php';
    $User = new Users();
    $User->Connect();
    $data_User = $User->getEmail($_SESSION['email']);
    foreach ($data_User as $dl_User) {}
}else{
    header('location:../project');
}

if (isset($_POST['Update'])) {

    $id = dl_User['id'];
    $user = $_POST['txtUser']; 
    $email = $_POST['txtEmail'];
    $name = $_POST['txtName']; 
    $address = $_POST['txtAddress']; 
    $telephone = $_POST['txtTelephone'];

    $err_upload = '';

    $update_user = new Users();
    $update_user->Connect();

    if ($update_user->Edit_user($id, $user, $email, $name, $address, $telephone)){
        
        $err_upload = "<span class=\"text-success\">Cập nhập tài khoản thành công</span><br/>";

    }else {
        
        $err_upload = "<span class=\"text-primary\">Cập nhập thất bại</span><br/>";
    }
}

?>

<section class="resume-section" id="about">
    <!-- Page Content-->
    <div class="resume-section-content">
        <div class="row" >
            <div class="col-xl-6" style="border: 1px solid #0ae;">
                <section class="resume-section" id="skills">
                    <div class="resume-section-content">
                        <h2 class="mb-5">Cập nhập tài khoản</h2>
                        <form method="POST">
                            <?php if (isset($err_upload)) {
                                echo $err_upload;
                            }?>
                            <div class="form-group">
                                <label for="txtUser">Username</label>
                                <input type="text" class="form-control" id="txtUser" name="txtUser" value="<?php echo $dl_User['user']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="txtEmail">Email</label>
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail" value="<?php echo $dl_User['email']; ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="yourpass">Họ và tên</label>
                                <input type="text" class="form-control" id="txtName" name="txtName" value="<?php echo $dl_User['name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="txtAddress">Địa chỉ</label>
                                <input type="text" class="form-control" id="txtAddress" name="txtAddress" value="<?php echo $dl_User['address']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="txtTelephone">Điện thoại</label>
                                <input type="text" class="form-control" id="txtTelephone" name="txtTelephone" value="<?php echo $dl_User['telephone']; ?>" required>
                            </div>
                            <br/>
                            <div class="form-group">
                                <input type="submit" class="form-control bg-success p-2 mb-3 text-white

                                " id="Update" name="Update" value="Cập nhập tài khoản">
                            </div>
                        </form>
                    </div>
                </section>
            </div>

            <div class="col-xl-6" style="border: 1px solid #0ea;">
                <section class="resume-section" id="skills">
                    <div class="resume-section-content">
                        <h2 class="mb-5">Thay đổi mật khẩu</h2>
                        <form method="POST">
                            <?php if (isset($err_upload)) {
                                echo $err_upload;
                            }?>
                            
                            <div class="form-group">
                                <label for="txtPass">Mật khẩu cũ</label>
                                <input type="password" class="form-control" id="txtPass" name="txtPass"  required>
                            </div>
                            <div class="form-group">
                                <label for="txtPass1">Mật khẩu mới</label>
                                <input type="password" class="form-control" id="txtPass1" name="txtPass1" required>
                            </div>
                            <div class="form-group">
                                <label for="txtPass2">Nhập lại mật khẩu mới</label>
                                <input type="password" class="form-control" id="txtPass2" name="txtPass2" required>
                            </div>
                            <br/>
                            <div class="form-group">
                                <input type="submit" class="form-control bg-success p-2 mb-3 text-white

                                " id="UpdatePass" name="UpdatePass" value="Thay đổi mật khẩu">
                            </div>
                        </form>
                    </div>
                </section> 
            </div>

       </div>
   </div>
</section>

<?php require_once 'footer.php'; ?>