<?php
    //This is for PHPMailer
    require 'PHPMailer/PHPMailerAutoload.php';
    require 'reviewDB.php';
    
    //Set the local timezone
    date_default_timezone_set("America/Los_Angeles");
     
     $name = $_POST['uploaderName'];
     $phone = $_POST['uploaderPhone'];
     $email = $_POST['uploaderEmail'];
     $date = date("jS \of F Y h:i:s A");
     
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
    $file_name = basename($_FILES["fileToUpload"]["name"]). " " . $_POST['uploaderName'] . " " . date("jS \of F Y h:i:s A") . "." . $ext;
    $target_file = $target_dir . $file_name;
    
    // Check if file already exists. Almost would never happen
    if (file_exists($target_file)) {
        echo "File already exists. ";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Your file is too large. ";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded. ";
        
    // if everything is ok, try to upload file
    } else {
     //Save to the database
     $conn = new mysqli($hostname, $username, $password, $dbname);
     $sql = "INSERT INTO resumes (name, email, phone, date)
     VALUES ($name, $phone, $email, $date)";
     
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            header("Location: https://review-my-resume.myshopify.com");
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            
               //Sending email
                $email = new PHPMailer();
                $email->From      = 'reviewmyresume@hotmail.com';
                $email->FromName  = 'ReviewMyResume';
                $email->Subject   = 'Your resume from ' . $_POST['uploaderName'] . " " . date("jS \of F Y h:i:s A");
                $email->Body      = 'You have a new Resume!';
                $email->AddAddress( 'sk8rak@gmail.com' );
                //$email->AddAddress( 'chau.duong1995@yahoo.com' );
                $email->AddAttachment( $target_file , $file_name );
                
                return $email->Send();

        } else {
            echo "There was an error uploading your file.";
        }
    }
?>
