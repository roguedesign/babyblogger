<div id='threadsnav'>
    <ul id='threads'>
        <li><a href="index.php?page=thread&id=1">teething</a></li>
        <li><a href="index.php?page=thread&id=2">walking</a></li>
        <li><a href="index.php?page=thread&id=3">eating</a></li>
        <li><a href="index.php?page=thread&id=4">terrible twos</a></li>
    </ul>
<table id="table">
        <tr>
            <th>T I T L E</th>
            <th>P O S T</th>
            <th>D A T E</th>
        </tr>
        
             
             <?php foreach ($posts as $post) { 
                echo '<tr><td>'.$post->getPostName().'</td>'.'<td>'.$post->getPostComment().'</td>'.'<td>'.$post->getDate().'</td></tr>'; 
            } 
            ?>
         
           
            
        
    </table>
</div>
