<?= get_header(); ?>
<!DOCTYPE html>
<html>
<head>
   
<style>
body{
  padding:0;
  margin:0;
}
 
 body:before {
	content: '';
	position: fixed;
	width: 100vw;
	height: 100vh;
	background-image: url('../cc-content/themes/cicool/asset/img/header.jpg');
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	-webkit-background-size: cover;
	background-size: cover;
	 
}
.inner-container{
  width:400px;
  height:400px;
  position:absolute;
  top:calc(50vh - 200px);
  left:calc(50vw - 200px);
  overflow:hidden;
}
 
.box{
  position:absolute;
  height:100%;
  width:100%;
  font-family:Helvetica;
  color:#fff;
  background: rgb(255 255 255 / 36%);
  padding:30px 0px;
}
.box h1{
  text-align:center;
  margin:30px 0;
  font-size:30px;
}
.box input{
  display:block;
  width:300px;
  margin:20px auto;
  padding:15px;
  background: rgb(255 255 255 / 84%);
  color:#000;
  border:0;
}
.box input:focus,.box input:active,.box button:focus,.box button:active{
  outline:none;
}
.box button{
  background:#4094ff;
  border:0;
  color:#fff;
  padding:12px;
  font-size:19px;
  width:330px;
  margin:20px auto;
  display:block;
  cursor:pointer;
}
.box button:active{
  background:#27ae60;
}
.box p{
  font-size:14px;
  text-align:center;
}
.box p span{
  cursor:pointer;
  color:#4094ff;
}

 
</style>
 
</head>
<body  >
  
<div class=" ">
  <div class="inner-container">
    <div class="box">
      <h1>Log In</h1>
      <input type="text" placeholder="Username"/>
      <input type="text" placeholder="Password"/>
      <button>Log in</button>
      <!-- <p>Not a member? <span>Sign Up</span></p>-->
    </div>
  </div>
</div> 
 

</body>
</html>
