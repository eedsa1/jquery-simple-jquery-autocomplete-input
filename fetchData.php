<?php 

//uncomment this if using db connection
//include "config.php";

if(isset($_POST['search'])){

    //without conenction. simples array
    $response = array();
    //array_push($response, ['id' => 1, 'name' => 'joão']);
    $response[0] = ['value' => 1, 'label' => 'joão'];
    $response[1] = ['value' => 2,'label' => 'maria'];
    $response[2] = ['value' => 3,'label' => 'yasmine'];
    echo json_encode($response);
    
    //using connection
    // $search = mysqli_real_escape_string($con,$_POST['search']);

    // $query = "SELECT * FROM users WHERE name like'%".$search."%'";
    // $result = mysqli_query($con,$query);
    
    // while($row = mysqli_fetch_array($result) ){
    //     $response[] = array("value"=>$row['id'],"label"=>$row['name']);
    // }

    // echo json_encode($response);
}

exit;


