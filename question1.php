<html>
    <head></head>
    <body>
        <!-- this is using for loop for the list out stars exercise -->
        <?php
        // for($i = 1; $i <= 5; $i ++){
        //     echo str_repeat("* ", $i).str_repeat(" ", 5-$i)."<br>";
        // }
        
        ?>
        <!-- this is using while loop for the list out stars exercise -->
        <?php
        $i = 1;
        while($i <= 5){
                echo str_repeat("* ", $i).str_repeat(" ", 5-$i)."<br>";
                $i+=1;
            }    
        ?>
    
    </body>
</html>