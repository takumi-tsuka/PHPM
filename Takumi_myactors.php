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
                <th>actor's name</th>
                <th>Where is he/she/they from?</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $actors = ["Emma Watson"=>"Great Britain","Tom Hanks"=>"The US","Benedict Cumberbatch"=>"Great Britain","Morgan Freeman"=>"The US","Tom Holland"=>"Great Britain"]; //made associate array
            foreach($actors as $name =>$where){
                echo "<tr><td>$name</td><td>$where</td></tr>";
            } //used foreach loop and echo the key and value.
            ?>
        </tbody>
    </table>
    
</body>
</html>