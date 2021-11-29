

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<h1>Registration Form</h1>
</head>
<body>
	
	<hr>
	<p id ="error"></p>
	<form action="" method ="post" onsubmit="return validateForm()">
		<script type="text/javascript" src="../control/validation.js">
			
		</script>
	
		<table>
			
			<tr>
			    <td>First Name:</td>
		        <td><input type="text" name="fname" id =fname> </td>  
		        
		    </tr>
		    <tr>
			    <td>Last Name:</td>
		        <td><input type="text" name="lname" id="lname">   </td>  
		        
		    </tr> 
		    <tr>
			    <td>Age:</td>
		        <td><input type="Age" name="age" id ="age">   </td>  
		        
		    </tr>

		    <tr>
			    <td>Designation:</td>
		        <td>
		        	<input type="radio" name="designation"id="designation1" value="junior">
		        	Junior Programmer
		       
		        	<input type="radio" name="designation" id="designation2" value="senior">
		        	Senior Programmer

		        	<input type="radio" name="designation" id="designation3" value="lead">
		        	Project Lead

		        </td>
		    </tr>
		    <tr>
		    	<td>

		    		Preferred language


		    	</td>
		    	<td>
		    		
		    		<br><input type="checkbox" name="language" id="languag1" value="JAVA">
		    		JAVA
		    		<input type="checkbox" name="language" id="language2" value="PHP">
		    		PHP
		    		<input type="checkbox" name="language" id="language3" value="C++">
		    		C++
		    		<br>
		    		
		    		<br>
		    		
		    	</td>

		    </tr>

			<tr>
			    <td>Email:</td>
		        <td><input type="text" name="email" id ="email">  </td>
		    </tr> 
		    <tr>
			    <td>Password:</td>
		        <td><input type="Password" name="password" id="password">  </td>
		    </tr> 

		    <tr>
		    	<td>
		    		please choose a file:
		    	</td>
		    	<td><input type="file" name="file" id ="file"></td>
		    </tr> 
		    <br>
		</table>
				    <input type="submit" value="submit">
		    <input type="reset" name="reset">		
	</form>
	 <p id ="ffname"></p>
	 <p id ="llname"></p>
	 <p id ="aage"></p>
	 <p id ="ddesignation"></p>
	 <p id ="eemail"></p>
	 <p id ="ppassword"></p>
	 <p id ="ffile"></p>
	
</hr>



</body>
</html>
