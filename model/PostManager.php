<?php
class PostManager
{
	public function getPost($postId)
	{
	$db = $this->dbConnect();
	$req = $db->prepare('SELECT id, title, content FROM posts WHERE id = ?');
	$req->execute(array($postId));
	$post = $req->fetch();
	return $post;
	}

	public function getPosts()
	{
	$db = $this->dbconnect();
	$req = $db->query('SELECT id, title, content FROM posts');
	return $req;
	}
	private function dbConnect()
	{
		try
		{
			$db = new PDO('mysql:host=localhost;dbname=base_tuto_MVC;charset=utf8', 'magna', 'magna');
			return $db;
		}
		catch(Exception $e)
		{
			die("Erreur : ". $e->getMessage());
		}
	}
}
