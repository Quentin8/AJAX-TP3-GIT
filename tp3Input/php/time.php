<?php
    $currentHour = getdate();
    $hour = $currentHour['hours'];
    $min = $currentHour['minutes'];
    $sec = $currentHour['seconds'];
    $data = array("Il est : "+$hour +" : " + $min +" : " + $sec,array({
        "hours" : $hour, 
        "minutes" : $min,
        "seconds": $sec;
    }));
    $json = json_encode($data);
    print_r($json);
?>