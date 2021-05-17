<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Calculator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="icon.png">
	<link rel="stylesheet" type="text/css" href="calc.css">
	<script type="text/javascript" src="calc.js"></script>
</head>
<body ><h1 align="center">C&nbsp;A L C U L A T O R</h1>
	<div class="neo">
	<div class="main">
		<form name="form"> 
			<input class="text"  name="text" disabled="" style=" margin-left: 4px ;font-size: 20px; border-style: " ><br><br>
		</form>
		<table>
			<tr>
				<td><input class="button" type="button" value="C" onclick="clean('')"style="padding: 15px 24px; background-color: red;margin-top: 11%;"></td>
				<td><input class="button" type="button" value="/" onclick="insert('/')"style="padding: 15px 26.9px;margin-left: 10%;margin-top: 11%;"></td>
				<td><input class="button" type="button" value="*" onclick="insert('*')"style="padding: 15px 26px;margin-left: 20%;margin-top: 11%;"></td>
				<td><input class="button" type="button" value="-"onclick="insert('-')"style="padding: 15px 26.5px;margin-left: 30%;margin-top: 11%;"></td>
				
			</tr>
			<tr>
			<td><input class="button" type="button" value="7" onclick="insert(7)" style="padding: 15px 25px ; margin-top: 11%;"></td>
				<td><input class="button" type="button" value="8"onclick="insert(8)"style="padding: 15px 25px; margin-left: 10%;margin-top: 11%;"></td>
				<td><input class="button" type="button" value="9"onclick="insert(9)"style="padding: 15px 25px; margin-left: 20%;margin-top: 11%;"></td>
				<td><input class="button" type="button" value="+" onclick="insert('+')"style="padding: 15px 24.5px;margin-left: 30%;margin-top: 11%;"></td>

				
			
			</tr>
			<tr>
			<td><input class="button" type="button" value="4"onclick="insert(4)"style="padding: 15px 25px; margin-top: 11%;"></td>
				<td><input class="button" type="button" value="5"onclick="insert(5)"style="padding: 15px 25px;margin-left: 10%;margin-top: 11%;"></td>
				<td><input class="button" type="button" value="6"onclick="insert(6)"style="padding: 15px 25px;margin-left: 20%;margin-top: 11%;"></td>
				<td><input class="button" type="button" value="√x"onclick="expo()"style="padding: 15px 19.7px;margin-left: 30%;margin-top: 11%;"></td>
				
				
				
			</tr>
			<tr>
			<td><input class="button" type="button" value="1"onclick="insert(1)"style="padding: 15px 25px;margin-top: 11%" ></td>
				<td><input class="button" type="button" value="2"onclick="insert(2)"style="padding: 15px 25px;margin-left: 10%;margin-top: 11%;"></td>
				<td><input class="button" type="button" value="3"onclick="insert(3)"style="padding: 15px 25px;margin-left: 20%;margin-top: 11%;"></td>
					<td><input class="button" type="button" value="3√"onclick="cube()"style="padding: 15px 20px;margin-left: 30%;margin-top: 11%;"></td>

				
				
			
			</tr>
			<td><input class="button" type="button" value="0"onclick="insert(0)"style="padding: 15px 25px; margin-top: 10%" ></td>
			<td><input class="button" type="button" value="."onclick="insert('.')"style="padding: 15px 27.7px;margin-left: 10%;margin-top: 11%;"></td>
			<td><input class="button" type="button" value="="onclick="equal()"style="padding: 15px 25px;margin-left: 20%;margin-top: 11%;"></td>
			<td><input class="button" type="button" value="DEL"onclick="back()"style="padding: 15px 12px;margin-left: 30%;margin-top: 11%;"></td>
			
				
			
			</tr>
		</table>
		<p>&copy; Designed by <span style="color: orange;">Rudra Pratap Singh</span></p>
	</div>
</div>

	
</div>


</body>
</html>
