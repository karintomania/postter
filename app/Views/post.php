<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/post.css" >
	<title>Postter</title>
</head>
<body>
<div class="header">
	<h1>ポスッター！！</h1>
</div>
<div class="container">
	<form class="post" method="post">
		<p>心の叫びをポストしよう！</p>
		<label>名前</label>
		<input type="text" name="name" id="name"></input>
		<label>ポスト</label>
		<textarea name="post" id="post" row="4"></textarea>
		<input type="submit" value="ポスト" />
	</form>
	<div class="card-list">
		<?php
		foreach($posts as $post){ 
			print("<div class=\"card\">
					<p>{$post['name']} @ ".date("Y/m/d H:i:s",$post['posted'])."</p>
					<p class=\"content\">{$post['post']}</p>
					</div>");
		}?>
	</div>
<div>
</body>
</html>