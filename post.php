<?php 
session_start();
require_once 'model/tbl_category.php';
require_once 'model/tbl_tag.php';
require_once 'model/tbl_flie.php';

$title = "Đăng bài - Dự án miễn phí php";

if ($_SESSION['email'] && $_SESSION['level'] == 0) {

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

<div class="container-fluid p-3">
    <div class="form-group">
        <input type="text" class="form-control" id="youremail" name="txtTitle" placeholder="Tiêu đề bài viết" required>
    </div><br/>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect02">
                        <option selected>Lựa chọn ...</option>
                                <?php foreach ($data_Category as $dl_Category) { ?>
                        <option value="<?php echo $dl_Category['url_category']; ?>"><?php echo $dl_Category['name_category']; ?></option><?php } ?>
                    </select>
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Danh mục</label>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect02">
                        <option selected>Lựa chọn ...</option>
                                <?php foreach ($data_tag as $dl_tag) { ?>
                        <option value="<?php echo $dl_tag['url_tag']; ?>"><?php echo $dl_tag['name_tag']; ?></option><?php } ?>
                    </select>
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Thể loại</label>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="txtFile" name="txtFile" placeholder="Tiêu đề bài viết" required>
                </div>
            </div>

        <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="txtFile" name="txtFile" placeholder="Tiêu đề bài viết" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect02">
                        <option selected>Lựa chọn ...</option>
                                <?php foreach ($data_tag as $dl_tag) { ?>
                        <option value="<?php echo $dl_tag['url_tag']; ?>"><?php echo $dl_tag['name_tag']; ?></option><?php } ?>
                    </select>
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Thể loại</label>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="txtFile" name="txtFile" placeholder="Đường dẫn bài viết" required>
                </div>
            </div>
        </div>
    </div><br/>
    
    <textarea name="area" id="area" style="width:100%;height:300px; border: 1px solid #0ea;"></textarea>

</div>


<?php require_once 'footer.php'; ?>