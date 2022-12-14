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
                <th>ID</th>
                <th>product</th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $file = fopen('data/sell_report.json','r'); //open the json file
                $datas = fread($file,filesize('data/sell_report.json')); //read the file
                $datas = json_decode($datas,true); //decode the jsonfile
                fclose($file); //close the file
                $sum =0; // set $sum as 0
                $max = $datas[0]['price']; //set $max as first item of $datas of price
                $min = $datas[0]['price']; //set $min as first item of $datas of price
                foreach($datas as $data){  //use foreach loop
                    echo "<tr><td>".$data['id']."</td><td>".$data['item_name']."</td><td>$".$data['price']."</td></tr>"; //echo each number and name and price of $datas
                    $sum += $data['price']; //sum each price to $sum
                    if($max<$data['price']){ //set condition and if $data['price'] is bigger than $max
                        $max = $data['price']; //set $max as the $data['price']
                        $maxPro = $data['item_name']; //set $maxPro as $data['item_name']
                    }
                    if($min>$data['price']){//set condition and if $data['price'] is smaller than $max
                        $min = $data['price'];//set $min as the $data['price']
                        $minPro = $data['item_name'];//set $minPro as $data['item_name']
                    }
                    
                }
                $avg = $sum/count($datas); //culcurate average by divieding $sum by amount of $datas
            ?>
        </tbody>
    </table>
    <?php
        echo "<h1>price of average: $$avg</h1>"; //echo $avg
        echo "<h1>highest product name: $maxPro; price:$max;"; //echo $maxPro and $max
        echo "<h1>lowest product name: $minPro; price:$min;"; //echo $minPro and $min
    ?>
    
</body>
</html>