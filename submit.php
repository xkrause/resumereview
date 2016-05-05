<?php
    //This is for PHPMailer
    require 'PHPMailer/PHPMailerAutoload.php';

    $target_dir = "uploads/";
    $file_name = basename($_FILES["fileToUpload"]["name"]). " " . $_POST['uploaderName'] . " " . date("l jS \of F Y h:i:s A");
    $target_file = $target_dir . $file_name;
    
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if file already exists. Almost would neve happen
    if (file_exists($target_file)) {
        echo "Sorry, file already exists. ";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large. ";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded. ";
        
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            header("Location: https://review-my-resume.myshopify.com");
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            
               //Sending email
                $email = new PHPMailer();
                $email->From      = 'reviewmyresume@hotmail.com';
                $email->FromName  = 'ReviewMyResume';
                $email->Subject   = 'Your attached file';
                $email->Body      = 'This is the resume';
                $email->AddAddress( 'chau.duong1995@yahoo.com' );
                
                $email->AddAttachment( $target_file , $file_name );
                
                return $email->Send();

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>
