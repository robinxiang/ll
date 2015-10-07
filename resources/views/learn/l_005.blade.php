@extends('layout.default_page_templet')

@section('content')
	<p class="note">通过larave的数据库的DB类实现基础的查询<br>
	以下通过sqlite驱动查询了数据库文件中的user表中的数据
	</p>
	<pre>
	<?php
		$select_results=DB::select('select * from user');
		var_dump($select_results);
	?>
	<pre>
	</p>

@stop