
<!DOCTYPE html>
<html>
    <head>
        <title>Add Company</title>
        <style>
            input {
                 width: 80%;
                 height:35px;
                  }
        </style>
    </head>
<body>

    <center>
    <br><br><br>
    <div style="border-radius:10px;border:1px solid #e1e1e1;width:50%;">
    <h3>Add Company</h3>
    <form action="insert_company" method="post" enctype="multipart/form-data">
         {{@csrf_field()}}						
        <input type="text" name="company_name"  placeholder="Provide Company Name" required=""><br><br>
        <input type="text" name="company_address"  placeholder="Provide Company Address" required=""><br><br>
        <input type="text" name="company_phone_number"  placeholder="Provide Company Contact Number" required=""><br><br>
        <input type="text" name="Company_Website"  placeholder="Provide Company Website Address" required=""><br><br>
        <input type="text" name="company_govt_registration_number"  placeholder="Provide Company Govt Registration Number" required=""><br><br>
        <input type="file" name="company_logo"><br><br> 
	    <input type="submit" name="submit" value="Add Company"><br><br>		
    </form>
    </div>
    </center>

</body>
</html>
