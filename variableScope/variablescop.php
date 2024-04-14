<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variable Scope</h1>
    <hr>
    <p>PHP has a Three Variable Scope</p>
    <ul>
        <li>Local Variable</li>
        <li>Global Variable</li>
        <li>Static Variable</li>
    </ul>
    <?php
    
    //Global Variable

    $subject = "PHP";

    function mySub(){
        // $GLOBALS['subject'];
        global $subject;
        echo "<h1>My Favorite Programming language is  : $subject</h1>";
    };
    mySub()
    ?>
</body>
</html>