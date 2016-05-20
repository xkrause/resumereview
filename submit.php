<?php
	//Error reporting 
	ini_set('display_errors', 1);
	error_reporting(0);

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
          //Captcha
           session_start();
          if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
           session_destroy();
    
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          header( "Refresh:3; url=https://review-my-resume.myshopify.com", true, 303);
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. You will be redirected to Shopify for payment..";
          
          //Save to the database
               $uploaderName = $_POST['uploaderName'];
               $uploaderPhone = $_POST['uploaderPhone'];
               $uploaderEmail = $_POST['uploaderEmail'];
               $uploaderTime = date("jS \of F Y h:i:s A");
               $uploaderFile = $file_name;
               
          //require 'reviewDB.php';
          $conn= mysqli_connect('localhost','review','GL2RIdtQNTih', 'review_DB');
          $sql = "INSERT INTO resumes (name, email, phone, time, filename)
          VALUES ('$uploaderName', '$uploaderEmail', '$uploaderPhone', '$uploaderTime', '$uploaderFile')";
          $result = @mysqli_query($cnxn, $sql);
          

     
          if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }

          if ($conn->query($sql) === TRUE) {
               echo ".";
           } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
           }
               //Sending email
                $email = new PHPMailer();
                $email->From      = 'reviewmyresume@hotmail.com';
                $email->FromName  = 'ReviewMyResume';

                $email->Subject   = 'Your attached file';
                $email->Body      = 'This is the resume';
                $email->AddAddress( 'Motake@mail.greenriver.edu' );

                $email->Subject   = 'Your resume from ' . $_POST['uploaderName'] . " " . date("l jS \of F Y h:i:s A");
                $email->Body      = 'You have a new Resume!';
                //$email->AddAddress( 'chau.duong1995@yahoo.com' );
                

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
