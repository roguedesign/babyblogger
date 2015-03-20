
    <div id='container'>
        <br/>
    <div id='mainbox'>
        <div id='leftmainbox'>
            <br/><br/><img src="../web/images/image.jpg">
        </div>
        
        <div id='rightmainbox'>
            <h1>login</h1> 

            
            
            <form id="login" name='login' method='post' action='index.php?page=home'>
            email <input id='email' type='email' name='email' value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><br>
            password <input id='password' type='password' name='password' value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"><br/><br/> 
            
            <input type='submit' name='submit' value='login'>
            <div id="incomplete">
                
                                <?php if (!empty($errors)): ?>
                                    <ul class="errors">
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
            </form>
            
            <a href='index.php?page=register'><h5>NOT YET REGISTERED?</h5></a><a href='index.php?page=thread&id=1'><h5>DON'T WISH TO REGISTER?</h5></a> 
            
                
        </div>
    </div>
    </div>

 