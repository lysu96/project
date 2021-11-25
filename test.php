<?php 
session_start();
require_once 'model/tbl_posts.php';
require_once 'model/tbl_category.php';
require_once 'model/tbl_tag.php';
$title = "Dự án miễn phí php";

$project = new Posts();
$project->Connect();
$datas = $project->List_post();

$Category = new Category();
$Category->Connect();
$data_Category = $Category->List_category();

$List_tag = new Tag();
$List_tag->Connect();
$data_tag = $List_tag->List_tag();

echo "<pre>";
print_r($data_Category); 

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

?>