<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $userNumbers = $_POST['lotto'];
        $item = [];
        $lotto = range(1, 49);
        shuffle($lotto);
        echo("Wylosowane w totalizatorze numery to: <br>");
        $lottoNumbers = array_slice($lotto, 0, 6);
        foreach($lottoNumbers as $number){
            echo("$number, ");
        }
        echo("<br>");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(count($userNumbers) == 6){
              echo("Wybrane przez Ciebie numery to: <br>");
               foreach($userNumbers as $item){
               echo($item.", ");
            }
          }
          elseif(count($userNumbers) > 6) {
                echo("Wybrales zbyt wiele liczb. Cofnij i losuj ponownie.");
          }
          elseif(count($userNumbers) < 6){
                echo("Wybrales zbyt malo liczb. Cofnij i losuj ponownie.");
            }
        }
        echo("<br>Numery, ktore sie pokrywaja to: <br>");
        
        foreach($lottoNumbers as $number){
            foreach($userNumbers as $number2){
                if($number == $number2){
                    echo("$number2, ");
                }
            }
        }
        
        
        
        
        
        
        
        
        ?>
       
    </body>
</html>
