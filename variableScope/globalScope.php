<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Scope Variable</title>
</head>
<body>
    <h1>Global Scope Variable</h1>
    <hr>
    <?php
    $name = "Md.Parvez Ahamed";

    function info(){
        global $name;
        // $GLOBALS['name'];
        echo "<h2>My name is $name</h2>";
       
    };
    info();
    ?>
</body>
</html>