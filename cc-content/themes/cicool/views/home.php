<?= get_header(); ?>
 
<style>
@import 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300';

html,
body {
  width: 100%;
  height: 100%;
  overflow: hidden;
  margin: 0;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  font-family: 'Open Sans Condensed', sans-serif;
}

div[class*=box] {
	height: 33.33%;
	width: 100%; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.btn.focus, .btn:focus, .btn:hover {
    color: #fff;
    text-decoration: none;
}
.btn {
	line-height: 50px;
	height: 58px;
	text-align: center;
	width: 250px;
	cursor: pointer; 
}

/* 
========================
      BUTTON ONE
========================
*/
.btn-one {
	color: #FFF;
	transition: all 0.3s;
	position: relative; 
}
.btn-one span {
	transition: all 0.3s; 
}
.btn-one::before {
	content: '';
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
	opacity: 0;
	transition: all 0.3s;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-top-style: solid;
	border-bottom-style: solid;
	border-top-color: #fff;
	border-bottom-color: #fff;
	transform: scale(0.1, 1);
}
.btn-one:hover span {
	letter-spacing: 2px;
}
.btn-one:hover::before {
	opacity: 1;	
	transform: scale(1, 1);	
}
.btn-one::after {
	content: '';
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
	transition: all 0.3s;
	background-color: rgba(255,255,255,0.1);
}
.btn-one:hover::after {
	opacity: 0;	
	transform: scale(0.1, 1);
}

 @import url("https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900");

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Poppins", sans-serif;
}

body {
	display: flex;
	background: #000;
	min-height: 100vh;
	align-items: center;
	justify-content: center;
}

.content {
	position: relative;
}

.content h2 {
	color: #fff;
	font-size: 9.5em;
	font-weight: bold;
	position: absolute;
	transform: translate(-50%, -50%);
}

.content h2:nth-child(1) {
	color: transparent;
	-webkit-text-stroke: 2px #fff;
}

.content h2:nth-child(2) {
	color: #fff;
	animation: animate 4s ease-in-out infinite;
}

@keyframes animate {
	0%,
	100% {
		clip-path: polygon(
			0% 45%,
			16% 44%,
			33% 50%,
			54% 60%,
			70% 61%,
			84% 59%,
			100% 52%,
			100% 100%,
			0% 100%
		);
	}

	50% {
		clip-path: polygon(
			0% 60%,
			15% 65%,
			34% 66%,
			51% 62%,
			67% 50%,
			84% 45%,
			100% 46%,
			100% 100%,
			0% 100%
		);
	}
}

</style>
<body id="page-top">
    
     <header>
      <div class="header-content" >
         <div class="header-content-inner"><section>
	
            
            
			 <div class="box-1">
  <div class="content">
		<h2>ITDI</h2>
		<h2>ITDI</h2>
		
	</div> 
</section><h6>C&nbsp;H&nbsp;E&nbsp;M&nbsp;I&nbsp;C&nbsp;A&nbsp;L&nbsp;&nbsp;I&nbsp;N&nbsp;V&nbsp;E&nbsp;N&nbsp;T&nbsp;O&nbsp;R&nbsp;Y&nbsp;&nbsp;S&nbsp;Y&nbsp;S&nbsp;T&nbsp;E&nbsp;M</h6>
<br><br><br><br><br><br><br><br>
			 <a href="<?= site_url('administrator/login'); ?>"> <div class="btn btn-one">
    <span>SIGN IN</span>
  </div>
</div></a>
            <br><br><br><br><br><br><br> <br> <br><br><br><br><br><br> 
            </div><br>
      </div>
   </header>
<?= get_footer(); ?>