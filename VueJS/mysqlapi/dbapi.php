<?php
    $hostname = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "vuedb";

    $dbconn = mysqli_connect($hostname,$dbuser,$dbpass,$dbname);

    if(!$dbconn){
        die ("Connection Failed".mysqli_connect_error());
    }else{
        echo "Connection Success <br>";
        $strsql = "select * from people";
        $qr = mysqli_query($dbconn,$strsql);
        
        $dataStack = array();
        while($row = mysqli_fetch_array($qr)){
            echo $row['id']."-".$row['name']."-".$row['gender']."<br>";
            
            $dataStack[] = array('id'=> $row['id'], 'name'=> $row['name']);
        }
        
        print_r($dataStack);
        echo $dataStack[1]['name'];
    }

?>