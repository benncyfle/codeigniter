<html>
<head>
</head>
<body>

<h1>Welcome <?php echo $v1; ?></h1>
<p>Codeigniter</p>

<ul>
	<?php foreach($row as $user): ?>
		<li><?php echo $user; ?></li>
	<?php endforeach; ?>
</ul>

<p>Blog</p>

<ul>
	<?php foreach($blog as $entry): ?>
		<li><a href="/hello/blog/<?php echo $entry->slug; ?>"><?php echo $entry->slug; ?></a></li>
	<?php endforeach; ?>
</ul>

</body>
</html>