<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
                if(file_exists("./myfiles/mygoals.json")){ //checking there is the file
                    $file = fopen("./myfiles/mygoals.json",'r'); //open the file
                    $data = fread($file,filesize("./myfiles/mygoals.json")); //read the file
                    $data = json_decode($data,true); //encode the file from json to array
                    fclose($file); //close the file
                }else{
                    echo "<h1>no goals listed</h1>"; //if there isn't the file, echo h1
                }
            ?>
    <table border="1">
        <thead>
            <tr>
                <th>goal</th>
                <th>achive</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    foreach($data as $val){
                        echo "<tr><td>".$val['goal']."</td><td>".$val['achiev']."</td></tr>";
                    } //use foreach loop and echo goal and achiev in $data
                ?>
        </tbody>
    </table>
</body>
</html>