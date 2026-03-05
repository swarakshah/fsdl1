<?php
$conn = new mysqli("localhost","root","","fullstackdev");

if(isset($_POST['signup']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO users(name,age,phone_number,email_id,password)
VALUES('$name','$age','$phone','$email','$password')";

$conn->query($sql);

header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup</title>

<style>

body{
font-family: Arial;
background:#1f2937;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.card{
background:white;
padding:40px;
border-radius:10px;
width:350px;
box-shadow:0px 5px 20px rgba(0,0,0,0.2);
}

h2{
text-align:center;
color:#374151;
}

input{
width:100%;
padding:10px;
margin:8px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:10px;
background:#3b82f6;
border:none;
color:white;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#2563eb;
}

a{
display:block;
text-align:center;
margin-top:10px;
}

</style>
</head>

<body>

<div class="card">

<h2>Create Account</h2>

<form method="POST">

<input type="text" name="name" placeholder="Name" required>

<input type="number" name="age" placeholder="Age" required>

<input type="text" name="phone" placeholder="Phone Number" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="signup">Sign Up</button>

<a href="login.php">Already have account? Login</a>

</form>

</div>

</body>
</html>