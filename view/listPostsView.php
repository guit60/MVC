
		<?php
		ob_start();
		while($post = $posts-> fetch())
		{
		?>
			<div class="post">
				<div class="title"><?= $post['title'];?></div>
				<div class="content"><?= $post['content'];?>
			</div>
		<?php
		}
		$content = ob_get_clean();
		require('template.php');
		 ?>
