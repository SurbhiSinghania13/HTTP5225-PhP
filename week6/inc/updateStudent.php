<?php
 //print_r($_POST);

if(isset($_POST['updateGrade'])){ // isset function if this field is set or not set
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $grade = $_POST['grade'];
    $imageURL = $_POST['imageURL'];

    include('connect.php');
    $query = "UPDATE students SET fname = '$fname', lname = '$lname', marks= '$marks', grade='$grade', imageURL= '$imageURL' WHERE id = '$id' ";
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