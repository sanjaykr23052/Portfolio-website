

<?php
    if(isset($_POST['esubmit'])){
        $to = "kumarsanjay23052@gmail.com";
        $name = $_POST['name'];
        $subject = $_POST['subjects'];
        $message = $_POST['message'];
        $from = $_POST['email']; 
        $headers = "From: $from";
        
        mail($to ,$name,$subject,$message,$headers);
        echo "Mail Sent.";
    }
?>