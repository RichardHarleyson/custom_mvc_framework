<p><b>Main Page</b></p>

<!-- <p>Name: <?php echo $name; ?></p>
<p>Age: <?php echo $age ?></p>
<p>Content: <?php var_dump($array) ?></p> -->

<?php foreach ($news as $value): ?>
	<h3><?php echo $value['title']; ?></h3>
	<p><?php echo $value['text']; ?></p>
<?php endforeach; ?>
