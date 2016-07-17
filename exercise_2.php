<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        ?>
        <table>
            <form action="exercise_02.php" method="POST">
            <label>
             <?php
             for($i = 1; $i <= 49; $i = $i + 1){
                 ?>
                 <input type = 'Checkbox' Name = 'lotto[]' value ="<?php echo $i ?>" /><?php echo($i) ?>
           <?php if($i%7 ==0) {
                      echo("<br>");
                  }
             }
             
            
            ?>
                  
                 <button type="submit">Losuj</button>
            </label>
                
        
                 
                 
                 
                 
             
                
        </table>
    </body>
</html>
