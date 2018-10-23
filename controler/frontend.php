<?php
require('model/PostManager.php');
function listPosts()
{
	$postManager = new PostManager(); 	//création d'un objet
	$posts = $postManager->getPosts();	//appel d'un fonction de cet objet
	require('view/listPostsView.php');	// affuche la vue listPostView
}
function post()
{
	$postManager = new PostManager(); 		//création d'un objet
	$post = $postManager->getPost($_GET['id']);	
	require('view/postView.php');
	
}

?>
