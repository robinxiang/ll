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
<HR style="border:1 dashed #987cb9" width="99.5%" color=#987cb9 SIZE=1></HR>
<article>
  <header><h2>blade模板引擎中php代码的用法</h2></header>
  <p class="note">循环显示传递的数组内容</p>
  <p>
      <?php $count=0; ?>
      @foreach($data as $dataitem)
        <?php $count++;?>
        内容{{$count}}: {{ $dataitem }}<br>
      @endforeach
  </p>
</article>

<footer>
  <p><a href="{{ URL::route('lhome') }}"><<<< 返回</a></p>
   <p>&copy; Copyright  by Thomas.Xiang</p>
</footer>


</body>
</html>
