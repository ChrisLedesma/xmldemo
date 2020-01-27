<?php 
    $conn = mysqli_connect("localhost", "root", "") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "db_1820521");

    if(mysqli_connect_errno($conn)){
        echo "Database connection failed!: ". mysqli_connect_errno();
    }
    $sql = "SELECT * FROM tbl_pet ORDER BY pet_id DESC LIMIT 20";
    $q = mysqli_query($conn, $sql);

    header("Content-type: text/xml");

    echo "<?xml version='1.0' encoding='UTF-8'?>
        <rss version='2.0'><channel>";
    
    while($r = mysqli_fetch_array($q)){
        $name = $r['pet_name'];
        $type = $r['pet_breed'];
        $age = $r['pet_age'];
        $color = $r['pet_color'];


        echo "<pet>
        <name>$name</name>
        <type>$type</type>
        <age>$age</age>
        <color>$color</color>
        </pet>";
    }
    echo "</channel></rss>";
?>