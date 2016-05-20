<!--
Author: Chau (Joe) Duong
5/18/16
Delete page for reviewmyresume
-->

<?php
	//Error reporting 
	ini_set('display_errors', 1);
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.js"></script>
	
	<!--jQuery import -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.js"></script>
    <![endif]-->
    
	 <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
	<!--For the table-->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    

</head>

<body>

    <div class="container">
        <p>"Hello"</p>
    </div>
</body>

		<?php
		if(isset($_POST['delete'])) {
			echo "Hello";
			//unlink("/uploads/".$_POST['filename']);
		}
		?>
