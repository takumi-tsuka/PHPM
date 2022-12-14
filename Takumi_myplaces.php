<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <thead>
        <tr>
            <th>Country</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
    <?php

        $places = ["Japan"=>"TOKYO","USA"=>"New York","Mexice"=>"Cancun","Ireland"=>"Dublin"]; //make assoiciate array
        foreach($places as $con =>$city){
            echo "<tr><td>$con</td><td>$city</td></tr>";
        }  //use foreach loop and echo key and value
    ?>
    </tbody>
</table>    
</body>
</html>