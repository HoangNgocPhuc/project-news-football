
<!DOCTYPE html>
<html>
<head>
  <title>Admin page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="active"><a href="index.php?controller=category_news_parent">Category Tin tức lớn</a></li>
            <li class="active"><a href="index.php?controller=category_news_child">Category Tin tức con</a></li>
            <li class="active"><a href="index.php?controller=news">Tin tức bình thường</a></li>
             <li class="active"><a href="index.php?controller=featured_news">Tin tức nổi bật</a></li>
            <li class="active"><a href="index.php?controller=user_write">Tin bạn đọc viết</a></li> 
             <li class="active"><a href="index.php?controller=adv">Adv</a></li>
            <li class="active"><a href="index.php?controller=user">Admin</a></li>
            <li class="active"><a href="index.php?controller=logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" style="margin-top:80px;">
      <?php
        if(file_exists($controller)){
          include $controller;
        }
      ?>
    </div>
</body>
</html>