<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Nunito');
  @import url('https://fonts.googleapis.com/css?family=Poiret+One');

  body, html {
    height: 100%;
    background-repeat: no-repeat;    
    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
    background:#52b7e5;
    position: relative;
  }
  #login-box {
    /* background-color: #fff; */
    /* border-radius: 10px; */
    /* box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22); */
    /* position: relative; */
    /* overflow: hidden; */
    /* width: 768px; */
    max-width: 100%;
    min-height: 480px;
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

    .form-scdb {
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
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
      0 10px 10px rgba(0,0,0,0.22);
      position: relative;
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

    .form-container-scdb {
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
      left: 50%;
      width: 50%;
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