<div id="container">
    <div id="formmain">    
    <div id="formleft">
    <form name="myForm" action="index.php?page=threadlogin&thread-id=1" method="post">
        <h1>NEW</h1><br/>
        name of post <input type="text" name="postName" value='<?php if(isset($_POST['postName'])) echo $_POST['postName']; ?>'><br/>
        thread  <select>
            <option value="1">Teething</option>
            <option value="2">Walking</option>
            <option value="3">Eating</option>
            <option value="4">Terrible Twos</option>
                </select>
        <br/>
        comment <textarea name="postComment" id="postComment" cols='50' rows='10'></textarea><br/>
        <input type="submit" name="submit" value="submit">
    

    
    
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
</div>
