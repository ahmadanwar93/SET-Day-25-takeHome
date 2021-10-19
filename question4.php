<html>
    <head></head>
    <body>
        <?php
            $nameStr = 'Hello there my name is Kevin';
            $spaceCounter = substr_count($nameStr, " ");
            $nameStr = str_replace(" ", "%", $nameStr);
            echo 'The string after the space character has been replaced is '.$nameStr."<br>";
            echo 'The count of the space character is '.$spaceCounter;
        ?>   
    </body>
</html>