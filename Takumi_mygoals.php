<?php 
    $goal1 = ["goal"=>"get job","achiev"=>"false"]; //make associate array
    $goals = []; //make empty array
    array_push($goals,$goal1);//push array($goal1) to enpty array
    $goal2 = ["goal"=>"go back Japan","achiev"=>"false"];//make associate array
    array_push($goals,$goal2);//push array($goal2) to $goals
    $goal3 = ["goal"=>"get girlfriend","achiev"=>"false"];//make associate array
    array_push($goals,$goal3);//push array($goal3) to $goals
    $goal4 = ["goal"=>"go to Ireland","achiev"=>"false"];//make associate array
    array_push($goals,$goal4);//push array($goal4) to $goals
    $goal5 = ["goal"=>"get to space","achiev"=>"false"];//make associate array
    array_push($goals,$goal5);//push array($goal5) to $goals

    $file = fopen("./myfiles/mygoals.json","w"); //open the file
    fwrite($file,json_encode($goals)); //write the array in json file
    fclose($file); //close the file
?>