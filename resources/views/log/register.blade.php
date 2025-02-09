<!DOCTYPE html>
<html lang="en" >
<head>

    <base href="/public">
    <style type="text/css">




    body {
  background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  font-family: "Open Sans", sans-serif;
  color: #333333;
}

.box-form {
  margin: 0 auto;
  width: 80%;
  background: #FFFFFF;
  border-radius: 10px;
  overflow: hidden;
  display: flex;
  flex: 1 1 100%;
  align-items: stretch;
  justify-content: space-between;
  box-shadow: 0 0 20px 6px #090b6f85;
}
@media (max-width: 980px) {
  .box-form {
    flex-flow: wrap;
    text-align: center;
    align-content: center;
    align-items: center;
  }
}
.box-form div {
  height: auto;
}
.box-form .left {
  color: #FFFFFF;
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url("https://i.pinimg.com/736x/5d/73/ea/5d73eaabb25e3805de1f8cdea7df4a42--tumblr-backgrounds-iphone-phone-wallpapers-iphone-wallaper-tumblr.jpg");
  overflow: hidden;
}
.box-form .left .overlay {
  padding: 30px;
  width: 100%;
  height: 100%;
  background: #5961f9ad;
  overflow: hidden;
  box-sizing: border-box;
}
.box-form .left .overlay h1 {
  font-size: 10vmax;
  line-height: 1;
  font-weight: 900;
  margin-top: 40px;
  margin-bottom: 20px;
}
.box-form .left .overlay span p {
  margin-top: 30px;
  font-weight: 900;
}
.box-form .left .overlay span a {
  background: #3b5998;
  color: #FFFFFF;
  margin-top: 10px;
  padding: 14px 50px;
  border-radius: 100px;
  display: inline-block;
  box-shadow: 0 3px 6px 1px #042d4657;
}
.box-form .left .overlay span a:last-child {
  background: #1dcaff;
  margin-left: 30px;
}
.box-form .right {
  padding: 40px;
  overflow: hidden;
}
@media (max-width: 980px) {
  .box-form .right {
    width: 100%;
  }
}
.box-form .right h5 {
  font-size: 6vmax;
  line-height: 0;
}
.box-form .right p {
  font-size: 14px;
  color: #B0B3B9;
}
.box-form .right .inputs {
  overflow: hidden;
}
.box-form .right input {
  width: 100%;
  padding: 10px;
  margin-top: 25px;
  font-size: 16px;
  border: none;
  outline: none;
  border-bottom: 2px solid #B0B3B9;
}
.box-form .right .remember-me--forget-password {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.box-form .right .remember-me--forget-password input {
  margin: 0;
  margin-right: 7px;
  width: auto;
}
.box-form .right button {
  float: right;
  color: #fff;
  font-size: 16px;
  padding: 12px 35px;
  border-radius: 50px;
  display: inline-block;
  border: 0;
  outline: 0;
  box-shadow: 0px 4px 20px 0px #49c628a6;
  background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);
}

label {
  display: block;
  position: relative;
  margin-left: 30px;
}

label::before {
  content: ' \f00c';
  position: absolute;
  font-family: FontAwesome;
  background: transparent;
  border: 3px solid #70F570;
  border-radius: 4px;
  color: transparent;
  left: -30px;
  transition: all 0.2s linear;
}

label:hover::before {
  font-family: FontAwesome;
  content: ' \f00c';
  color: #fff;
  cursor: pointer;
  background: #70F570;
}

label:hover::before .text-checkbox {
  background: #70F570;
}

label span.text-checkbox {
  display: inline-block;
  height: auto;
  position: relative;
  cursor: pointer;
  transition: all 0.2s linear;
}

label input[type="checkbox"] {
  display: none;
}
.login{
    text-align : center; 
    margin: auto;
}
.ra{
  input[type="radio"].demo5 {
  display: none;
}
input[type="radio"].demo5 + label {
  position: relative;
  padding-left: 1.3rem;
}
input[type="radio"].demo5 + label::before,
input[type="radio"].demo5 + label::after {
  display: block;
  position: absolute;
  box-sizing: border-box;
  bottom: 0;
  left: 0;
  content:'';
  width: 1rem;
  height: 1rem; 
  border-radius: 1rem;
}
input[type="radio"].demo5 + label::before {
  border: 1px solid #00B7E8;
  background-color: #eee;
}
input[type="radio"].demo5:checked + label::after {
  background-color: #00B7E8;
}




}


    </style>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>
<body>
    @if(session()->has('message'))
    <div class=" alert alert-success">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true" >x</button>
        {{session()->get('message')}} 
    </div>
        @endif
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Hello all student.</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Curabitur et est sed felis aliquet sollicitudin</p>
		
		</div>
	</div>
	
	
		<div class="right">
		<h5  style="font-size: 40px">register</h5>
		<form action="{{url('newregister')}}" method="POST">
            @csrf
		<div >
			<input type="text" name="firstname" placeholder="first name">
			<br>
            <input type="text" name="lastname" placeholder="last name">
			<br>
			<input type="password"  name="password" placeholder="password">
            <br>
            <input type="password"  name="configpassword" placeholder="config your password">
            <br>
			<input type="email"  name="email" placeholder="email">
            <br>
			<input type="adresse"  name="adresse" placeholder="adresse">
            <br>
			<input type="phone"  name="phone" placeholder="phone">
            <br>
			<input type="age"  name="age" placeholder="age">
   <br>


    
   <p style="color: black"  text-decoration:underline ;>Choisir votre métier</p>
   <div class="ra">
   <input type="radio" name="v1" class="demo5" id="demo5-a" value=" 1">
   <label for="demo5-a">etudiant</label>
           
   <input type="radio" name="v2" class="demo5" id="demo5-b" value="2" >
   <label for="demo5-b">professeur</label>
    
   </div>
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->

			
		</div>
			
			<br>
            <div>
			<input type="submit" class="btn btn-primary" value="register">
            </div>
            &nbsp;
            &nbsp;
            <div class="login">
			<button > <a href="{{url('/')}}"> login</a></button>
            </div>
	</div>
	
</div>
</form>
<!-- partial -->
  
</body>
</html>
