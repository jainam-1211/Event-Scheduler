<?php
    //  if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['']))
        

        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn=mysqli_connect($servername, $username, $password);

        if(!$conn){
            die("   connection to this database failed due to" . mysqli_connect_error())
        }

        echo "connection was successful";

        // $email = $_POST['email']
        
        // $email = $_POST['password']
        // $sql = "Insert into 'test1.users' ('email' , 'password')  VALUES ('email')_timestamp)) ,current_timestamp))        "
        // echo $sql

        // if($conn->query($sql)) == true


 ?>   