<?php

if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "internship";


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    

    $query = "INSERT INTO `form`(`fname`, `lname`, `age`) VALUES ('$fname','$lname','$age')";
    
    $result = mysqli_query($connect,$query);

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);
}

?>
