<html>
    <head></head>
    <body>
        <!-- this is using for loop for the reverse stars exercise -->
        <?php
        // for($i = 1; $i <= 5; $i ++){
        //     echo str_repeat("* ", $i).str_repeat(" ", 5-$i)."<br>";            
        //     if ($i == '5'){                
        //         for($j = 5; $j >= 1; $j --){
        //             echo str_repeat("* ", $j).str_repeat(" ", 5-$j)."<br>";
        //         }
        //     }
        // }
        
        ?>
       <!-- this is using while loop for the reverse stars exercise -->
        <?php
        $i = 1;
        $j = 5;        
        while($i <= 5){
                echo str_repeat("* ", $i).str_repeat(" ", 5-$i)."<br>";
                if ($i == 5){
                    while($j >= 1){
                        echo str_repeat("* ", $j).str_repeat(" ", 5-$j)."<br>";
                        $j-=1;
                    }
                }
                $i+=1;
                
            }    
        ?>
    
    </body>
</html>