@extends('layout.default_page_templet')
@section('content')
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

<HR style="border:1 dashed #987cb9" width="99.5%" color=#987cb9 SIZE=1></HR>
<article>
  <header><h2>blade模板引擎中表单的用法</h2></header>
  <p class="note">在Blade模板中用FROM方法来设置表单，</p>
  <p class="result"><a href="{{URL::route('l004')}}">演示>>></a></p>
</article>

<HR style="border:1 dashed #987cb9" width="99.5%" color=#987cb9 SIZE=1></HR>
<article>
  <header><h2>laravel数据库的使用</h2></header>
  <p class="note">在Blade模板中用FROM方法来设置表单，</p>
  <p class="result"><a href="{{URL::route('l005')}}">演示>>></a></p>
</article>


@stop



