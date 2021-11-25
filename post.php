<?php 
session_start();
require_once 'model/tbl_category.php';
require_once 'model/tbl_tag.php';
require_once 'model/tbl_flie.php';

$title = "Đăng bài - Dự án miễn phí php";

if (isset($_SESSION['user'])) {
    require_once 'header-admin.php';
    $Category = new Category();
    $Category->Connect();
    $data_Category = $Category->List_category();

    $List_tag = new Tag();
    $List_tag->Connect();
    $data_tag = $List_tag->List_tag(); 

    $List_tag = new Tag();
    $List_tag->Connect();
    $data_tag = $List_tag->List_tag();

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
    <div class="container">
        <div class="row">
            .
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect02">
                    <option selected>Lựa chọn ...</option>
                    <?php foreach ($data_Category as $dl_Category) { ?>
                     <option value="<?php echo $dl_Category['url_category']; ?>"><?php echo $dl_Category['name_category']; ?></option>
                    <?php } ?>
                </select>
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Danh mục</label>
                </div>
            </div>
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect02">
                    <option selected>Lựa chọn ...</option>
                    <?php foreach ($data_tag as $dl_tag) { ?>
                    <option value="<?php echo $dl_tag['url_tag']; ?>"><?php echo $dl_tag['name_tag']; ?></option>
                    <?php } ?>
                </select>
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Thể loại</label>
                </div>
            </div>
        </div>
    </div>

    <textarea name="area" id="area" style="width:100%;height:300px;">
      Đây là nội dung...
    </textarea>
</div>

<?php require_once 'footer.php'; ?>