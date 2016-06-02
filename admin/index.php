<!--
Author: Chau (Joe) Duong
5/18/16
Admin page for reviewmyresume
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
    
    <style>
        .dataTable > thead > tr > th[class*="sort"]::after{display: none}
    </style>
</head>

<script>
	$(document).ready(function(){
		$("#myTable").DataTable();
	});
	</script>

<body>

    <div class="container">
    
        <div class="page-header">
            <center><h1>Resume Table</h1></center>
            <br>
        </div>
        
        <?php
            //Connect to the Database
            require '../reviewDB.php';
            
            $sql = "SELECT * FROM resumes";
            /*
            $result = @mysqli_query($cnxn, $sql);
            $count = @mysqli_num_rows($result);
            */
            
            $result = $db->query($sql);
        ?>
        
        <table id="myTable" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
						<th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Submit Date</th>
						<th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        foreach ($result as $row) {
							$id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $phone = $row['phone'];
                            $time = $row['time'];
                            $status = $row['status'];
							$filename = $row['filename'];
							
                            echo "
								<td>$id</td>
                                <td>$name</td>
                                <td>$email</td>
                                <td>$phone</td>
                                <td>$time</td>
								<td><form method = \"post\" action =\"?\"><input name = \"delete\" class=\"btn btn-danger\" type=\"submit\" value=\"Delete file\"/></input></form></td>
                                 ";
                             echo "</tr>";
                        }
                ?>
            </tbody>
        </table>
				
		<div class="btn-group" role="group" aria-label="Help bar">
		<button type="button" class="btn btn-success" onclick="location.href = '/uploads/';">Resume folder</button>
		<button type="button" class="btn btn-warning" onclick="location.href = '../';">Log out</button> 
	  </div> <br>
		
	<?php
		if(isset($_POST['delete'])) {
			$conn= mysqli_connect('localhost','review','GL2RIdtQNTih', 'review_DB');
			$deletedFile = "../uploads/$filename";
			unlink($deletedFile);
			//echo "<script type='text/javascript'>alert('$deletedFile');</script>";
			
			if (unlink($deletedFile)) {
				echo "File Removed from server";
			}
			
			$delete = "DELETE FROM resumes WHERE id = '$id'";
			$result = @mysqli_query($cnxn, $delete);
			
			if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }
				
          if ($conn->query($delete) === TRUE) {
               //echo "Delete Success! Please refresh the page!";
			   header("Refresh:0");
           } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
           }
		}	
	?>
    </div>
</body>



