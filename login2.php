<?php  
           $servername = "localhost";  
           $username = "root";  
           $password = "";  
		   $dbname = "busrsrvtn";
           $conn = new mysqli($servername,$username,$password,$dbname);
           if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>


<html>
<style>



body {
background-image: url("C:\352795_highres_12513-033.jpg");
	 
    background-repeat: no-repeat;
    background-position: right bottom;
   margin-right: 600px;    
    background-attachment: fixed;
    
 background-size: 500px 700px;
}

 
 
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 12px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
 }
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 12px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  
}
div.p1 {
    border-left: 6px solid Purple;
    background-color:khaki;
     padding: 3px;
    text-align: center;
   font-family: comic sans ms,times,serif;
  font-size:30px;
}

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 12px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
 align: center;
}
input[type=submit]:hover {
    background-color: #45a049;
}


.button {
    background-color: #DC143C;
    border: none;
    color: white;
    padding: 20px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 8px 2px;
    cursor: pointer;
   button-align: right;
    
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
   margin:15px; 
}

.alert
{
	color: #ff0000;
}
</style>
<body>

<img src="img1.png" alt="Trolltunga Norway" width="1400" height="350" align="center" style="attachment:fixed;" >
<div class="p1">
<b><center>USER LOGIN</center></b>
</div>
<a href="signup1.php" class="button">New User?Register</a>
<div>
 
  <form  method="post" >
    

 <label for="user_name">User_Name</label>
    <input type="text" id="user_name" name="User_Name" placeholder="Username.">

 <label for="password"><left>Password</left></label>
    <input type="password" id="password" name="Password" placeholder="Password..">

	 <input type="submit" value="Submit">
 

  
    
  </form>
<?php
			global $rowcount;
			if(isset($_POST["User_Name"]))
			{
				
				$user_name=$_POST["User_Name"];
				$password=$_POST["Password"];
				$sql="select User_Name,password from signup where User_Name='".$user_name."'AND Password='".$password."' limit 1";
	
				$result = $conn->query($sql);
				$rowcount=$result->num_rows;
				
				
				 $smt ="INSERT INTO loginpage (User_Name,Password) VALUES('$user_name','$password')";
                 
				 $result = $conn->query($smt);
                  
				
			}
			?>
			<p class="alert">
			        <?php
					if ($rowcount==0) {
					echo "Invalid password or ID";
					}
					?>
			</p>
			<?php
			if($rowcount==1)
			{
			?>
				<script type="text/javascript">
				location.href='reservation1.php';
				</script>
			<?php
			}
			?>
  </div>

</body>
</html>

