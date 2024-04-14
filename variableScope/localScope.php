<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Scope Variable PHP</title>
</head>
<body>
    <h1>Local Variable </h1>
    <hr>
    <?php
    
    $person_Name = "Rakibul Islam";// Global Scope

    echo $person_Name."<br/>";

    function getAddress(){
        $address = "34/1 North Bashaboo";
     
        echo $address;
       
    }
    getAddress()

    
    ?>
</body>
</html>