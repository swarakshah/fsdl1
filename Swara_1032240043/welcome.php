<?php
$user = $_GET['user'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>

<style>

body{
font-family: Arial, sans-serif;
background:#1f2937;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
margin:0;
}

.card{
background:white;
padding:50px;
border-radius:12px;
text-align:center;
width:400px;
box-shadow:0 8px 25px rgba(0,0,0,0.2);
}

h1{
color:#374151;
}

span{
color:#3b82f6;
font-weight:bold;
}

p{
color:#555;
}

button{
margin-top:20px;
padding:10px 20px;
border:none;
background:#3b82f6;
color:white;
border-radius:6px;
cursor:pointer;
}

button:hover{
background:#2563eb;
}

</style>
</head>

<body>

<div class="card">

<h1>Welcome <span><?php echo $user; ?></span> 🎉</h1>

<p>You have successfully logged into your account.</p>

<a href="login.php">
<button>Logout</button>
</a>

</div>

</body>
</html>