<?php
	
	namespace www\html;

	require ("controler/frontend.php");
	if(isset($_GET['action']))
	{
		if($_GET['action'] == "listPosts")
		{
			\www\html\controler\listPosts();
		}
		elseif ($_GET['action'] == "post")
		{
			if(isset($_GET['id']) && $_GET['id'] > 0)
			{
				\www\html\controler\post();
			} 
			else
			{
				echo "aucun id";
			}
		}	
	}
	else
	{
		\www\html\controler\listPosts();
	}
?>
