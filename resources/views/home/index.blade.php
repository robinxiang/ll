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

  <ul>
    <li class="menu"><a href="<?php echo URL::route('l001')?>">With方法传递变量</a></li>
    <li class="menu"><a href="<?php echo URL::route('l002')?>">Make方法传递变量</a></li>
  </ul>
</article>
<HR style="border:1 dashed #987cb9" width="99.5%" color=#987cb9 SIZE=1></HR>
<article>
  <header><h2>blade模板引擎中php代码的用法</h2></header>
  <p class="note">在Blade模板引擎中插入PHP代码，只需要在代码前加入@语句</p>
  <p class="result"><a href="{{URL::route('l003')}}">演示>>></a></p>
</article>

<footer>
   <p>&copy; Copyright  by Thomas.Xiang MAC/WIN BY LAMP</p>
</footer>


</body>
</html>
