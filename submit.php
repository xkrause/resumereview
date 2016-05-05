<?php
    //This is for PHPMailer
    require 'PHPMailer/PHPMailerAutoload.php';
    
    //Set the local timezone
    date_default_timezone_set("America/Los_Angeles");

    $target_dir = "uploads/";
    $file = basename($_FILES["fileToUpload"]["name"]);
    $ext = pathinfo ($file, PATHINFO_EXTENSION);
    $uploadOk = 1;
    
     //Check for empty fields
    if ( (empty($_POST['uploaderName']) == true) || (empty($_POST['uploaderPhone']) == true) || (empty($_POST['uploaderEmail']) == true) ) {
         echo "Please fill in your name, email, phone number and attach your resume. ";
        $uploadOk = 0;
    }
    
    //Check file type
    $allowed =  array('pdf','rtf' ,'doc', 'docx', 'txt');
    if(!in_array($ext, $allowed) ) {
        echo "Wrong file type, please upload a pdf, rtf, text or Word Document. ";
        $uploadOk = 0;
    }
    
    //Change the file name
    $file_name = basename($_FILES["fileToUpload"]["name"]). " " . $_POST['uploaderName'] . " " . date("l jS \of F Y h:i:s A") . "." . $ext;
    $target_file = $target_dir . $file_name;
    
    // Check if file already exists. Almost would never happen
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
<<<<<<< HEAD
                $email->Subject   = 'Your attached file';
                $email->Body      = 'This is the resume';
                $email->AddAddress( 'sk8rak@gmail.com' );
=======
                $email->Subject   = 'Your attached file from ' . $_POST['uploaderName'] . " " . date("l jS \of F Y h:i:s A"."pdf");
                $email->Body      = 'You have a new Resume!';
                $email->AddAddress( 'chau.duong1995@yahoo.com' );
>>>>>>> 3840c550163072cd8edc16b650bb622ae236f173
                
                $email->AddAttachment( $target_file , $file_name );
                
                return $email->Send();

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>
