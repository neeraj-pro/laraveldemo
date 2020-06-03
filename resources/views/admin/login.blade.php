<html>
<head>    
  <title>Admin Login Page</title>
</head>
<body>
    <center>
    <br><br><br><br><br><br><br><br>
    <h3>Admin Login</h3>
    <form action="admin/checklogin" method="post">
		<input type="email" name="email" placeholder="Provide Address" required=""><br><br>
								{{@csrf_field()}}
		<input type="text" name="password"  placeholder="Provide Password" required=""><br><br>
	    <input type="submit" name="submit" value="Login Now">		
    </form>
    </center>
</body>

</html>

