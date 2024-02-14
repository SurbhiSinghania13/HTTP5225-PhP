<?php
 //print_r($_POST);

if(isset($_GET['deleteStudent'])){ // isset function if this field is set or not set
    $id = $_GET['id'];

    include('connect.php');

    $query = "DELETE FROM students WHERE id = '$id' ";
    $student = mysqli_query($connect, $query);

    if($student)
    {
        //echo "Success";
        header('Location: ../index.php');
    }
    else{
        echo mysqli_error($connect);
    }

}
else{
    echo "You should not be here";
}