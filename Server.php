<?php
    $roll_no = $_POST['roll_no'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $phone_no = $_POST['phone_no'];
    $profile_pic =  addslashes(file_get_contents($_FILES["profile_pic"]["tmp_name"]));


    $host = 'http://3.130.177.124:3306';  
        $user = 'root';  
        $pass = 'root';  
        $datebase_name = 'Student';
        $conn = mysqli_connect($host, $user, $pass,$datebase_name);  

        if($conn->connect_error){
            die("Connection Failed");
        }else{
            $sql_query = "INSERT INTO Student ( roll_no, first_name, last_name, address, phone_no , profile_pic) VALUES ('$roll_no', '$first_name', '$last_name', '$address', '$phone_no','$profile_pic')";
            if ($conn->multi_query($sql_query) === TRUE) {
                echo "New records created successfully";
            } else {
                echo "Sorry for inconvenient Go back and try again.";
            }  
        }
        mysqli_close($conn);
    
    ?>