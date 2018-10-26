<?php

namespace www\html\controler;			

require('model/PostManager.php');
function listPosts()
{
	$postManager = new \www\html\model\PostManager(); 	//création d'un objet
	$posts = $postManager->getPosts();	//appel d'un fonction de cet objet
	require('view/listPostsView.php');	// affuche la vue listPostView
}
function post()
{
	$postManager = new \www\html\model\PostManager(); 		//création d'un objet
	$post = $postManager->getPost($_GET['id']);	
	require('view/postView.php');
	
}

?>
