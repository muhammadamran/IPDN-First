<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png">
	<title>SCDB - Login Page</title>
	<link href="assets/mode/dist/css/style.min.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Nunito');
	@import url('https://fonts.googleapis.com/css?family=Poiret+One');

	body, html {
		height: 100%;
		background-repeat: no-repeat;    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
		background:#52b7e5;
		position: relative;
	}
	#login-box {
		position: absolute;
		top: 92px;
		left: 50%;
		transform: translateX(-50%);
    /*width: 350px;
    margin: 0 auto;
    border: 1px solid black;
    background: rgba(48, 46, 45, 1);
    min-height: 250px;
    padding: 20px;*/
    z-index: 9999;
}
#login-box .logo .logo-caption {
	font-family: 'Poiret One', cursive;
	color: white;
	text-align: center;
	margin-bottom: 0px;
}
#login-box .logo .tweak {
	color: #ff5252;
}
#login-box .controls {
	padding-top: 30px;
}
#login-box .controls input {
	border-radius: 0px;
	background: rgb(98, 96, 96);
	border: 0px;
	color: white;
	font-family: 'Nunito', sans-serif;
}
#login-box .controls input:focus {
	box-shadow: none;
}
#login-box .controls input:first-child {
	border-top-left-radius: 2px;
	border-top-right-radius: 2px;
}
#login-box .controls input:last-child {
	border-bottom-left-radius: 2px;
	border-bottom-right-radius: 2px;
}
#login-box button.btn-custom {
	border-radius: 2px;
	margin-top: 8px;
	background:#ff5252;
	border-color: rgba(48, 46, 45, 1);
	color: white;
	font-family: 'Nunito', sans-serif;
}
#login-box button.btn-custom:hover{
	-webkit-transition: all 500ms ease;
	-moz-transition: all 500ms ease;
	-ms-transition: all 500ms ease;
	-o-transition: all 500ms ease;
	transition: all 500ms ease;
	background: rgba(48, 46, 45, 1);
	border-color: #ff5252;
}
#particles-js{
	width: 100%;
	height: 100%;
	background-size: cover;
	background-position: 50% 50%;
	position: fixed;
	top: 0px;
	z-index:1;
}
.lingkaran1{
	width: 40px;
	height: 40px;
	background: #ffffff;
	border-radius: 100%;
}
.lingkaran{
	width: 150px;
	height: 150px;
	background: #ffffff;
	border-radius: 100%;
}
.lingkaran3{
	width: 150px;
	height: 150px;
	background: #fff;
	border-radius: 100%;
}
.lingkaran4{
	width: 150px;
	height: 150px;
	background: #000000;
	background-color: #000000;
	border-radius: 100%;
}
/*LOGIN PAGE*/
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

  /*body {
    background: #f6f5f7;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: 'Montserrat', sans-serif;
    height: 100vh;
    margin: -20px 0 50px;
    }*/

    h1 {
    	font-weight: bold;
    	margin: 0;
    }

    h2 {
    	text-align: center;
    }

    p {
    	font-size: 14px;
    	font-weight: 100;
    	line-height: 20px;
    	letter-spacing: 0.5px;
    	margin: 20px 0 30px;
    }

    span {
    	font-size: 12px;
    }

    a {
    	color: #333;
    	font-size: 14px;
    	text-decoration: none;
    	margin: 15px 0;
    }

    button {
    	border-radius: 20px;
    	border: 1px solid #52b7e5;
    	background-color: #52b7e5;
    	color: #FFFFFF;
    	font-size: 12px;
    	font-weight: bold;
    	padding: 12px 45px;
    	letter-spacing: 1px;
    	text-transform: uppercase;
    	transition: transform 80ms ease-in;
    }

    button:active {
    	transform: scale(0.95);
    }

    button:focus {
    	outline: none;
    }

    button.ghost {
    	background-color: transparent;
    	border-color: #FFFFFF;
    }

    form {
    	background-color: #FFFFFF;
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	flex-direction: column;
    	padding: 0 50px;
    	height: 100%;
    	text-align: center;
    }

    input {
    	background-color: #eee;
    	border: none;
    	padding: 12px 15px;
    	margin: 8px 0;
    	width: 100%;
    }

    .container {
    	/*background-color: #fff;*/
    	border-radius: 10px;
    	/*box-shadow: 0 14px 28px rgba(0,0,0,0.25), */
    	/*0 10px 10px rgba(0,0,0,0.22);*/
    	/*position: relative;*/
    	overflow: hidden;
    	width: 768px;
    	max-width: 100%;
    	min-height: 480px;
    }

    .form-container {
    	position: absolute;
    	top: 0;
    	height: 100%;
    	transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
    	left: 0;
    	width: 50%;
    	z-index: 2;
    }

    .container.right-panel-active .sign-in-container {
    	transform: translateX(100%);
    }

    .sign-up-container {
    	left: 0;
    	width: 50%;
    	opacity: 0;
    	z-index: 1;
    }

    .container.right-panel-active .sign-up-container {
    	transform: translateX(100%);
    	opacity: 1;
    	z-index: 5;
    	animation: show 0.6s;
    }

    @keyframes show {
    	0%, 49.99% {
    		opacity: 0;
    		z-index: 1;
    	}

    	50%, 100% {
    		opacity: 1;
    		z-index: 5;
    	}
    }

    .overlay-container {
    	position: absolute;
    	top: 0;
    	left: 5%;
    	width: 80%;
    	height: 100%;
    	overflow: hidden;
    	transition: transform 0.6s ease-in-out;
    	z-index: 100;
    }

    .container.right-panel-active .overlay-container{
    	transform: translateX(-100%);
    }

    .overlay {
    	background: #FF416C;
    	background: -webkit-linear-gradient(to right, #52b7e5, #085375);
    	background: linear-gradient(to right, #52b7e5, #085375);
    	background-repeat: no-repeat;
    	background-size: cover;
    	background-position: 0 0;
    	color: #FFFFFF;
    	position: relative;
    	left: -100%;
    	height: 100%;
    	width: 200%;
    	transform: translateX(0);
    	transition: transform 0.6s ease-in-out;
    }

    .container.right-panel-active .overlay {
    	transform: translateX(50%);
    }

    .overlay-panel {
    	position: absolute;
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	flex-direction: column;
    	padding: 0 40px;
    	text-align: center;
    	top: 0;
    	height: 100%;
    	width: 50%;
    	transform: translateX(0);
    	transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
    	transform: translateX(-20%);
    }

    .container.right-panel-active .overlay-left {
    	transform: translateX(0);
    }

    .overlay-right {
    	right: 0;
    	transform: translateX(0);
    }

    .container.right-panel-active .overlay-right {
    	transform: translateX(20%);
    }

    .social-container {
    	margin: 20px 0;
    }

    .social-container a {
    	border: 1px solid #DDDDDD;
    	border-radius: 50%;
    	display: inline-flex;
    	justify-content: center;
    	align-items: center;
    	margin: 0 5px;
    	height: 40px;
    	width: 40px;
    }

    footer {
    	background-color: #222;
    	color: #fff;
    	font-size: 14px;
    	bottom: 0;
    	position: fixed;
    	left: 0;
    	right: 0;
    	text-align: center;
    	z-index: 999;
    }

    footer p {
    	margin: 10px 0;
    }

    footer i {
    	color: red;
    }

    footer a {
    	color: #3c97bf;
    	text-decoration: none;
    }
</style>
<body onload="typeWriter()">
	<div class="main-wrapper">
		<div class="preloader">
			<div class="lds-ripple">
				<div class="lds-pos"></div>
				<div class="lds-pos"></div>
			</div>
		</div>
		<!-- <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(assets/mode/images/big/auth-bg.jpg) no-repeat center center;"> -->
			<div id="login-box">
				<div class="container" id="container">
					
      <div class="overlay-container">
      	<div class="overlay">
      		<div class="overlay-panel overlay-left">
      			<h1>Welcome Back, Friends!</h1>
      			<p>To stay connected with us, please log in with your personal info. Click "Sign In" to enter the Superadmin & Administrator page</p>
      			<button class="ghost" id="signIn">Sign In</button>
      		</div>
      		<div class="overlay-panel overlay-right">
      			<h1 id="demo"></h1>
      			<p>To stay connected with us, please log in with your personal info. Click "Sign In" to enter the Superadmin & Administrator page</p>
      			<a href="login.php"><button class="ghost">SIGN IN</button></a>
      		</div>
      	</div>
      </div>
  </div>
                <!-- <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
                    <div class="auth-box row">
                        <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(http://scdb.ipdn.ac.id/assets/img/login-bg/login-ipdn-1.jpg);">
                        </div>
                        <div class="col-lg-5 col-md-7 bg-white">
                            <div class="p-3">
                                <div class="text-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png" class="lingkaran" alt="wrapkit">
                                </div>
                                <h2 class="mt-3 text-center">Sign In</h2>
                                <p class="text-center" id="demo"></p>
                                <div align="center">
                                    <small class="text-center">RS. Khusus Ginjal Ny.R.A. Habibie</small>
                                </div>
                                <form action="logedin.php" method="POST" class="mt-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-dark" for="uname">Username</label>
                                                <input class="form-control" name="username" type="text"
                                                placeholder="enter your username">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-dark" for="pwd">Password</label>
                                                <input class="form-control" name="password" type="password"
                                                placeholder="enter your password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-block btn-dark">Sign In</button>
                                        </div>
                                        <div class="col-lg-12 text-center mt-5">
                                            Powered by <a href="#" class="text-danger">Teknologi Informasi</a> <?php echo date('Y') ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div id="particles-js"></div>
        <script src="assets/mode/libs/jquery/dist/jquery.min.js "></script>
        <script src="assets/mode/libs/popper.js/dist/umd/popper.min.js "></script>
        <script src="assets/mode/libs/bootstrap/dist/js/bootstrap.min.js "></script>
        <script type="text/javascript">
        	$(".preloader ").fadeOut();

        	$.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function(){
        		particlesJS('particles-js',
        		{
        			"particles": {
        				"number": {
        					"value": 80,
        					"density": {
        						"enable": true,
        						"value_area": 800
        					}
        				},
        				"color": {
        					"value": "#ffffff"
        				},
        				"shape": {
        					"type": "circle",
        					"stroke": {
        						"width": 0,
        						"color": "#000000"
        					},
        					"polygon": {
        						"nb_sides": 5
        					},
        					"image": {
        						"width": 100,
        						"height": 100
        					}
        				},
        				"opacity": {
        					"value": 0.5,
        					"random": false,
        					"anim": {
        						"enable": false,
        						"speed": 1,
        						"opacity_min": 0.1,
        						"sync": false
        					}
        				},
        				"size": {
        					"value": 5,
        					"random": true,
        					"anim": {
        						"enable": false,
        						"speed": 40,
        						"size_min": 0.1,
        						"sync": false
        					}
        				},
        				"line_linked": {
        					"enable": true,
        					"distance": 150,
        					"color": "#ffffff",
        					"opacity": 0.4,
        					"width": 1
        				},
        				"move": {
        					"enable": true,
        					"speed": 6,
        					"direction": "none",
        					"random": false,
        					"straight": false,
        					"out_mode": "out",
        					"attract": {
        						"enable": false,
        						"rotateX": 600,
        						"rotateY": 1200
        					}
        				}
        			},
        			"interactivity": {
        				"detect_on": "canvas",
        				"events": {
        					"onhover": {
        						"enable": true,
        						"mode": "repulse"
        					},
        					"onclick": {
        						"enable": true,
        						"mode": "push"
        					},
        					"resize": true
        				},
        				"modes": {
        					"grab": {
        						"distance": 400,
        						"line_linked": {
        							"opacity": 1
        						}
        					},
        					"bubble": {
        						"distance": 400,
        						"size": 40,
        						"duration": 2,
        						"opacity": 8,
        						"speed": 3
        					},
        					"repulse": {
        						"distance": 200
        					},
        					"push": {
        						"particles_nb": 4
        					},
        					"remove": {
        						"particles_nb": 2
        					}
        				}
        			},
        			"retina_detect": true,
        			"config_demo": {
        				"hide_card": false,
        				"background_color": "#b61924",
        				"background_image": "",
        				"background_position": "50% 50%",
        				"background_repeat": "no-repeat",
        				"background_size": "cover"
        			}
        		}
        		);
        	});
        </script>
        <script type="text/javascript">
        	const signUpButton = document.getElementById('signUp');
        	const signInButton = document.getElementById('signIn');
        	const container = document.getElementById('container');

        	signUpButton.addEventListener('click', () => {
        		container.classList.add("right-panel-active");
        	});

        	signInButton.addEventListener('click', () => {
        		container.classList.remove("right-panel-active");
        	});
        </script>
        <script>
        	var i = 0;
        	var txt = 'Incorrect NIP or Password!';
        	var speed = 100;

        	function typeWriter() {
        		if (i < txt.length) {
        			document.getElementById("demo").innerHTML += txt.charAt(i);
        			i++;
        			setTimeout(typeWriter, speed);
        		}
        	}
        </script>
    </body>
    </html>