<?php 

	// multi-dimensional arrays
	
	$blogs = [
		['title' => 'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
		['title' =>'mairo kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
		['title' =>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
	];

	// print_r($blogs[1][1]);
	// echo $blogs[2]['author'];
	// echo count($blogs);
	$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content'=> 'lorem', 'likes'=>100];
	// print_r($blogs);
	$popped = array_pop($blogs);
	print_r($blogs);


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	

</body>
</html>