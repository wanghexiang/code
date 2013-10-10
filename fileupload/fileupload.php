<?php
/**
* author : PHP100.com
* date :2012-9-15 经典的文件上传类
**/
if (!empty($_POST['sub'])) {
    include("up.class.php");

    $up = new up($_FILES['up']);
//参数，文件流必选，【指定目录，指定大小，指定文件名】可选
}
?>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <title></title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="up" /> 
    <input type="submit" name="sub" value="上传" /></form>
  </body>
</html>
