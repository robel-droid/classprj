<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
	<style>
		body{
			background-color: lightgreen;
			
		}
		form{
			width: 700px;
			height: 600px;
			background-color:white;
			opacity: 0.7;
      border-radius:  20px 20px 20px 20px ;
      margin-left: 150px;
      box-shadow: 10px 20px 20px ;
		}
		h1{
			padding-top: 20px;
		}
		input{
			width: 650px;
			
			margin-bottom: 20px;
	background-color: white;
	border-radius: 10px;

	padding-left: 20px;
	padding-bottom: 10px;
		}
		button{
			border: none;
			border-radius: 0px;
			background-color: black;
			color: white;
			margin-left: 250px;
			width:130px;
			height:50px;
		}
		button:hover{
			background-color: darkgreen;
		}
		label{
			padding-left: 10px;
		}
.address label{
	padding: 35px;
}

	</style>
</head>
<body>
<form method="post" action="processor.php">
	<h1 align="center">Creat Account</h1>
	<table>
		<tr><td><label>Your Name</label></td></tr>
			<tr><td><input type="text" placeholder="Username"></td></tr>
			<tr><td><label>Birth Date</label></td></tr>
			<tr><td><input type="date"></td></tr>
			<tr><td><label>Address</label></td></tr>

			<tr><td>***************************************************************************************</td></tr>
<div class="address">
			<tr>
  <td><label>KfleKetema</label><select>
  	 
  	<option>
  	Kolfe Keranyo
  </option>
    	<option>
  	Akaki Kaliti
  </option>
    	<option>
  	Bole
  </option>
  	<option>
  	Yeka	
  </option>
  <option>
  	Nifas silk	
  </option>
    	<option>
  	Akaki Kaliti
  </option>
    	<option>
  	Lemi Kura
  </option>
  	
</select></td>
</tr>

<tr>
  <td><label>Kebele<label>
  	<select>
  	 
  	<option>
  	01
  </option>
    	<option>
  	02
  </option>
    	<option>
  	03
  </option>
  	<option>
  	04
  </option>
  <option>
  	05
  </option>
    	<option>
  	06
  </option>
    	<option>
  	07
  </option>
  	<option>
  	08
  </option>
   <option>
  	09
  </option>
    	<option>
  	10
  </option>
    	<option>
  	11
  </option>
  	<option>
  	12
  </option>
  	
</select></td></tr>
		
		
<tr> <td><label>Home Number<label><input type="text" placeholder="Your Home Number"  style="width: 200px;"></td></tr>
</div >

			<tr><td>***************************************************************************************</td></tr>
			

			<tr><td><label>Email</label></td></tr>
				<tr><td><input type="text" placeholder="Your@mail.com"></td></tr>	
			<tr><td><label>Password</label></td></tr>
			<tr><td><input type="password" placeholder="Atleast 8 characters"></td></tr>
			<tr><td><button>SIGN UP</button></td></tr>
	</table>
</form>
</body>
</html>