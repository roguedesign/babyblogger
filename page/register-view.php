<div id='container'>
    <div id="registermain">
       
    <div id="registerleft">
        <br/><br/><img src="../web/images/image2.jpg">
    </div>
    <div id="registerright">
        
        <h1>register</h1>
        <form name="myForm" action="index.php?page=register" method="post">
            first name <br/><input id="firstName" type='text'  name='firstName' value='<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>'><br/><br/>
            last name <br/><input type='text'  name='lastName' value='<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>'><br/><br/>
            email <br/><input type='text'  name='email' value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><br/><br/>
            password <br/><input type='password'  name='password' value='<?php if(isset($_POST['password'])) echo $_POST['password']; ?>'><br/><br/>
            birth date <br/><input type='text'  name='birthdate' value='<?php if(isset($_POST['birthdate'])) echo $_POST['birthdate']; ?>'><br/><br/>
        
            <input type='submit' name='submit' value='submit'>
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
                            
            </div></form>
        </form>
    </div>
        
    </div>
</div>
