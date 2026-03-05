<?php
$conn = new mysqli("localhost","root","","fullstackdev");

if(isset($_POST['login']))
{
$name=$_POST['name'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE name='$name' AND password='$password'";

$result=$conn->query($sql);

if($result->num_rows>0)
{
header("Location: welcome.php?user=$name");
}
else
{
$error="Invalid username or password";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

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
margin:10px 0;
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

.error{
color:red;
text-align:center;
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

<h2>Login</h2>

<?php if(isset($error)){ echo "<p class='error'>$error</p>"; } ?>

<form method="POST">

<input type="text" name="name" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

<a href="signup.php">Create new account</a>

</form>

</div>

</body>
</html>