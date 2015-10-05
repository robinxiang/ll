<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>LaravelLearn</title>
  <meta name="description" content="">
  <meta name="author" content="robinxiang">
  <link rel="stylesheet" style="text/css" href="">
  <script type="text/javascript" src="" charset="utf8"></script>
</head>
<body>
<header>
  <h1>Learvel 5.1的学习</h1>
</header>

<article>
  <header><h2>简单的变量传递</h2></header>
  <p class='note'>
    直接通过路由(route)页面的with方法将变量传递给视图(view)
  </p>
<p class="result">
  传递过来的变量“first name”=<?php echo $first_name ?>
  传递过来的变量“last_name”=<?php echo $last_name ?>
</p>
</article>
<footer>
  <p><a href="<?php echo URL::route('lhome')?>"><<<< 返回</a></p>
   <p>&copy; Copyright  by Thomas.Xiang</p>
</footer>


</body>
</html>