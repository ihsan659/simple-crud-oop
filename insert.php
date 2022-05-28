<?php 
    include 'database.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $date = date("Y-m-d h:i:s A");
        $not = "";

        $a = new database();
        $a->insert('data',['name'=>$name,'email'=>$email,'phone'=>$phone,'subject'=>$subject,'message'=>$message,'created'=>$date]);
        if ($a == true) {
            header('location:index.php');
        }
    }
?>