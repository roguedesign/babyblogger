<?php

$threadId = stripslashes($_GET['id']);

if ($threadId != null){
   
$postDao = new PostDao();


$posts = $postDao->findPostsByThreadId($threadId);

}

?>