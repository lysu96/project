<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo($title); ?></title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- soạn thảo -->
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
      bkLib.onDomLoaded(function() {
        new nicEditor({maxHeight : 300}).panelInstance('area');
    });
    </script>


</head>
<body id="page-top">
<!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Hmoob lee</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="https://simgbb.com/avatar/5WgJywVdW3c9.jpg" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="post.php">Đăng bài</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="list_post.php">Quản lý bài viết</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Quản lý Danh mục</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Quản lý Thẻ</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Quản lý file</a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="list_user.php">Quản lý người dùng</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./#portfolio">Dự Án</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./#education">Tài Liệu</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Đăng xuất</a></li>
            </ul>
        </div>
    </nav>