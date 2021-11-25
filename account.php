<?php 
require_once 'model/tbl_user.php';

if (isset($_SESSION['user'])) {
    require_once 'head.php';
    $User = new Users();
    $User->Connect();
    $data_User = $User->getUser($_SESSION['user']);
    foreach ($data_User as $dl_User) {}
}else{
    header('location:../project');
}

if (isset($_POST['id'])) {


    $err = '';


    if ($datas = $project->getUser($_SESSION['user'])){
        $title = $datas[0]['title_post'];
        require_once 'head.php';
        $err = "Thành công";
    }else {
        $title = $_GET['id'];
        
        $err = "Lỗi SQL";
    }
}

?>

<div class="container-fluid">
<section class="resume-section" id="skills">
    <div class="resume-section-content">
        <h2 class="mb-5">Cài đặt tài khoản</h2>
        <form method="POST">
            <div class="form-group">
                <label for="youruser">Username</label>
                <input type="text" class="form-control" id="youruser" name="youruser" value="<?php echo $dl_User['user']; ?>" required>
            </div>
            <div class="form-group">
                <label for="youremail">Email</label>
                <input type="email" class="form-control" id="youremail" name="youremail" value="<?php echo $dl_User['address']; ?>" required>
            </div>
            <div class="form-group">
                <label for="yourpass">Mật khẩu</label>
                <input type="password" class="form-control" id="yourpass" name="yourpass" value="<?php echo $dl_User['pass']; ?>" required>
            </div>
            <div class="form-group">
                <label for="yourpass">Họ và tên</label>
                <input type="text" class="form-control" id="yourpass" name="yourpass" value="<?php echo $dl_User['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="yourpass">Địa chỉ</label>
                <input type="text" class="form-control" id="yourpass" name="yourpass" value="<?php echo $dl_User['address']; ?>" required>
            </div>
            <div class="form-group">
                <label for="yourpass">Điện thoại</label>
                <input type="text" class="form-control" id="yourpass" name="yourpass" value="<?php echo $dl_User['telephone']; ?>" required>
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
<?php require_once 'footer.php'; ?>