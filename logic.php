<?php
    // Retrieving Json Data
    $jsonData = file_get_contents("https://api.covid19india.org/v4/data.json");
    $data = json_decode($jsonData, true);
    $k=count($data);
    $p=$data['TN']['districts'];
    $total_con=0;
    $total_rec=0;
    $total_death=0;
    foreach($p as $key =>$value) {  
       $total= $data['TN']['districts'][$key]['total']['confirmed'];
       $total_con=$total+$total_con;
    }
    foreach($p as $key =>$value) {  
        $total= $data['TN']['districts'][$key]['total']['recovered'];
        $total_rec=$total+$total_rec;
     }
     foreach($p as $key =>$value) {  
        $total= $data['TN']['districts'][$key]['total']['deceased'];
        $total_death=$total+$total_death;
     }
?>
