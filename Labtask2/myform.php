


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<h1>Registration Form</h1>
</head>
<body>
	<hr>
	<form action= "write.php" method ="post">
		<table>
			
			<tr>
			    <td>FirstName:</td>
		        <td><input type="text" name="FirstName" placeholder="Enter your fname">   </td>  
		        
		    </tr>

			<tr>
			    <td>LastName:</td>
		        <td><input type="text" name="LastName" placeholder="Enter your lname"> 
		          </td>  
		        
		    </tr>
		    			<tr>
			    <td>Age:</td>
		        <td><input type="text" name="Age" placeholder="Enter your Age"> 
		          </td>  
		        
		    </tr>   
			<tr>
			    <td>Email:</td>
		        <td><input type="Email" name="Email" placeholder="Enter your Email">  </td>
		    </tr> 
		    <tr>
			    <td>Password:</td>
		        <td><input type="Password" name="Password" placeholder="Enter your Password">  </td>
		    </tr> 
		   
		    <tr>
			    <td>Designation:</td>
		        <td>
		        	<input type="radio" name="Designation" value="juniorProgrammer">
		        	juniorProgrammer
		       
		        	<input type="radio" name="Designation"
		        	value="SeniorProgrammer">
		        	SeniorProgrammer

		        	<input type="radio" name="Designation"
		        	value="ProjectLeader">
		        	Project Lead

		        </td>
		    </tr>
		    <tr>
		    	<td>
		    		Prefferred language:
		    	</td>
		    	<td>
		    		<input type="checkbox" name="hobby1" value="JAVA">
		    		JAVA
		    		<input type="checkbox" name="hobby2" value="PHP">
		    		PHP
		    		<input type="checkbox" name="hobby3" value="C++">
		    		C++
		    		<br>
		    		
		    		<br>
		    		
		    	</td>

		    </tr>
		    <tr>
		    	<td>
		    		please choose a file:
		    	</td>
		    	<td><input type="file" name="image"></td>
		    </tr> 
		    <br>
		</table>
				    <input type="submit" value="submit" >
		    <input type="reset" name="reset">		
	</form>
</hr>



</body>
</html>
