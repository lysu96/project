<?php 
session_start();
require_once 'model/tbl_posts.php';

if (isset($_GET['id'])) {
    $project = new Posts();
    $project->Connect();

    $err = '';


    if ($datas = $project->List_user_to_url_post($_GET['id'])){
        $title = $datas[0]['title_post'];
        require_once 'head.php';
        $err = "Thành công";
    }else {
        $title = $_GET['id'];
        require_once 'head.php';
        $err = "Lỗi SQL";
    }
}

?>

<div class="container-fluid">
    <?php foreach ($datas as $dl) {
        echo $dl['content_post'];
    }    
    ?>

</div>

<?php require_once 'footer.php'; ?>