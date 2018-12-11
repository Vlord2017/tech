<?php
        
  include('admin/lib/dbcon.php');
  $conn= new conexion();
  $conn =$conn->dbcon();  
  session_start();	
  $username = $_POST['username'];
  $password = $_POST['password'];
                
		/*................................................ admin .....................................................*/
			
			/**
          * $result = mysql_query($query)or die(mysql_error());
 * 			$row = mysql_fetch_array($result);
 * 			$num_row = mysql_num_rows($result);
 * 
 * 
 * $query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
		$result = mysqli_query($koneksidb,$query)or die(mysqli_error($koneksidb));
		$row = mysqli_fetch_array($result);
		$num_row = mysqli_num_rows($result);
 */
            $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn,$query)or die(mysqli_error($conn));
		    $row = mysqli_fetch_array($result);
		    $num_row = mysqli_num_rows($result);
			
		/*...................................................Technical Staff ..............................................*/
		$query_client = mysqli_query($conn,"SELECT * FROM client WHERE username='$username' AND password='$password'")or die(mysqli_error($conn));
		$num_row_client = mysqli_num_rows($query_client);
		$row_client = mysqli_fetch_array($query_client);
		
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['admin_id'];
		echo 'true_admin';
		
		
       mysqli_query($conn,"insert into user_log (username,login_date,logout_date,admin_id,client_id)values('$username',NOW(),now(),".$row['admin_id'].",0)")or die(mysqli_error($conn));
 
		
		}else if ($num_row_client > 0){
		$_SESSION['client']=$row_client['client_id'];
		echo 'true';
		
		mysqli_query($conn,"insert into user_log (username,login_date,logout_date,admin_id,client_id)values('$username',NOW(),now(),0,".$row_client['client_id'].")")or die(mysqli_error($conn));
		
		 }else{ 
				echo 'false';
		}	
				
		?>