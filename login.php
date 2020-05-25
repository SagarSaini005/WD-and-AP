<html>
<head>
    <title>Project</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <style>
	 
	 body
{
padding:0;
margin:0;
font-family:sans-serif;
background-image:url(sagar.jpg);
background-position:center;
background-size:cover;

}
.login-box
{
width:280px;
position:absolute;
top:5%;
left:40%;
color:white;

}
.login-box h1
{
font-size:40px;
border-bottom: 2px solid blue;
margin-bottom:40px;
padding:13px 0;
}
.textbox
{
width:100%;
font-size:20px;
padding:8px 0;
margin:8px 0;
border-bottom: 2px solid blue;
}
.textbox i
{
width:26px;
text-align:center;
}
.textbox input
{
background:none;
border:none;
outline:none;
color:white;
font-size:18px;
width:80%;
margin:0 10px;
}
.btn
{
width:100%;
background:none;
border:2px solid blue;
color:white;
padding:5px;
font-size:18px;
cursor:pointer;
margin:12px 0;
}
.btn:hover
{
	background-color:#80bfff;
}
	 </style>
	 
	 <script>
	  function validation()
	 {
		 var result=true;
		 var e=document.getElementsByName("email")[0].value;
		 var p=document.getElementsByName("password")[0].value;
		 var atindex=e.indexOf('@');
		 var dotindex=e.lastIndexOf('.');
		 if(atindex<1 || dotindex >= e.length-2 || dotindex-atindex < 3 || p.length <6  )
			 result=false;
		 return(result);
	 }
	 </script>
	 
</head>
<body>
    <form action="target.php" method="get" onsubmit="return validation()" >
    <div class="login-box">

      <h1>Login</h1>

      <div class="textbox">
          <i class="fa fa-envelope-o"></i>
          <input type="text" name="email" placeholder="Email" required >
      </div>

       <div class="textbox">
           <i class="fa fa-key"></i>
          <input type="password" name="password" placeholder="Password" required >
      </div>

      <button class="btn">Register</button>

    </form>
</body>
</html>
