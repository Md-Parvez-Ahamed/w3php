<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Variable Scope</title>
</head>
<body>
    <h1>Static Variable Scope</h1>
    <hr>
    <?php
    
    function countNumbers(){
        static $num = 0;  // Declare $num as a static variable
        echo $num . "<br>";
        $num++;
    };
    
    countNumbers();
    countNumbers();
    countNumbers();
    
    ?>
</body>
</html>
