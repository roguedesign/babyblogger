<?php
//**************************FIRST TABLE
$threadId = stripslashes($_GET['thread-id']);

if (array_key_exists("submit", $_POST)) {
    $post = new Post();
    var_dump($_POST);
    //dirty work around
    //$_POST['id'] = $_POST['post-id'];
    //echo $_POST['id'];
    //$postArray = array('id'=>$_POST['post-id'], 'postName'=>$_POST['postName'], 'postComment'=>$_POST['postComment']);
    Mapper::mapPost($post, $_POST);
    $errors = UserRegistrationValidator::validating($post);
    
    if (empty($errors)) {
        //echo $_POST['id'].$post->getId();
        $flashes = null;
        $postDao = new PostDao();
        $savedPost = $postDao->save($post);
        //Flash::addFlash('you have now submited a post');

        Utils::redirect('threadlogin', array('thread-id' => $threadId));
    }
} 

$postDao = new PostDao();



if ($threadId != null) {
    //create post dao object
//get lists of posts using thread id
    $posts = $postDao->findPostsByThreadId($threadId);
}



//**************************SECOND TABLE
//if (array_key_exists("submit", $_POST)) {
//    $thread = new Thread();
//} else if (array_key_exists('submit', $_POST)) {
//    $thread->getThreadName('');
//    $thread->getPostComment('');
//}


if ($threadId != null) {
    
    $threadPosts = $postDao->findPostsWithThreadNameByThreadId($threadId);
}




//**************************EDIT/DELETE

$post = new Post();
$post->setPostName('');
$post->setPostComment('');
$post->setThreadName('Teething');
if (array_key_exists('post-id', $_GET)) {
    $postId = stripslashes($_GET['post-id']);
    if ($postId != null) {
        if (array_key_exists('cmd', $_GET)) {
            $cmd = stripslashes($_GET['cmd']);
            
            if ($cmd === 'edit') {
                
                    
                    $post = $post->findById($postId);

                    
                        
                        //Flash::addFlash('Post edited successfully.');
                    
                
            } else if ($cmd === 'delete') {
                
                
                $post->delete($post->findById($postId));
                //Flash::addFlash('Post deleted successfully.');
                Utils::redirect('threadlogin', array('thread-id' => $threadId));
            }
        }
    }
}
?>
