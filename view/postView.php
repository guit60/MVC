<?php ob_start(); ?>
<div>
	<div><?= $post['title']?></div>
	<div><?= $post['content']?></div>
</div>
<?php 
$content = ob_get_clean(); 
require('template.php');
?>

