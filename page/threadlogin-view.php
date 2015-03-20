
<div id='container'>
<div id="formmain">    
    <div id="formleft">
    <form name="myForm" action="index.php?page=threadlogin&thread-id=1" method="post">
        <h1>NEW</h1><br/>
        name of post <input type="text" name="postName" value='<?php echo $post->getPostName()?>'><br/>
        thread  <select name="threadName">
            <option value="teething">Teething</option>
            <option value="walking">Walking</option>
            <option value="eating">Eating</option>
            <option value="terrible_twos">Terrible Twos</option>
                </select>
        <br/>
        comment <textarea name="postComment" id="postComment" cols='50' rows='10'><?php echo $post->getPostComment()?></textarea><br/>
         
        <input type="submit" name="submit" value="submit">
    
        <?php if ($post->getId() != null): ?>
               <input type="hidden" name="id" value='<?php echo $post->getId()?>'>
         
        <?php endif; ?>

    
    
    <div id="incomplete">
        
            <?php if (!empty($errors)): ?>
                <ul id="errors">
            <?php foreach ($errors as $error): ?>
                    <li><?php echo $error->getMessage(); ?></li>
            <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if (!empty($flashes)): ?>
                <ul id="flashes">
            <?php foreach ($flashes as $flash): ?>
                    <li><?php echo $flash; ?></li>
            <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        
    </div>
    </form></div>
    <div id="formright"><br/><br/><br/><br/><br/><img src='../web/images/image.jpg'></div><br/><br/><br/>
    </div>
    
    
    
    
    
<br/><br/><br/><br/><br/>
<div id='threadsnav'>
    <ul id='threads'>
        <li><a href="index.php?page=threadlogin&thread-id=1">teething</a></li>
        <li><a href="index.php?page=threadlogin&thread-id=2">walking</a></li>
        <li><a href="index.php?page=threadlogin&thread-id=3">eating</a></li>
        <li><a href="index.php?page=threadlogin&thread-id=4">terrible twos</a></li>
    </ul>


    <table id="table">
        <tr>
            <th>T I T L E</th>
            <th>P O S T</th>
            <th>D A T E</th>
            <th>E D I T | D E L E T E</th>
        </tr>
        
             
             <?php foreach ($posts as $post) { 
                echo '<tr><td>'.$post->getPostName().'</td>'.'<td>'.$post->getPostComment().'</td>'.'<td>'.$post->getDate().'</td>'.'<td><a href="index.php?page=threadlogin&post-id='.$post->getId().'&cmd=edit&thread-id=1">EDIT</a> | <a href="index.php?page=threadlogin&post-id='.$post->getId().'&cmd=delete&thread-id=1">DELETE</a></td>'.'</tr>'; 
            } 
            ?>
 
    </table>
    
    <table id='table'>
        <tr>
            <th>T H R E A D</th>
            <th>P O S T</th>
        </tr>
        
        <?php foreach ($threadPosts as $threadPost) {
        echo '<tr><td>'.$threadPost['threadName'].'</td>'.'<td>'.$threadPost['postComment'].'</td>'.'</tr>';
        }
        ?>
        
    </table>
</div>
</div>
