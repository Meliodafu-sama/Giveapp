<html>
    <head>
    	<title>{{config('app.name','GiveApp')}}</title>
        <link href={{asset('/css/Main.css')}} rel="stylesheet"/>
        <script src={{URL::asset('js/jquery-1.10.2.min.js')}}></script>
        <script src={{URL::asset('js/JQUERY%20Main.js')}}></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div id="box">
            <div id="main"></div>
            
            <div id="loginform">
                <h1>LOGIN</h1>
                <input type="email" placeholder="Email"/><br>
                <input type="password" placeholder="Password" id="myInput" name="login"><br><br>
				<input style="width: 15px; height: 15px;" type="checkbox" name="userpass" onclick="myFunction()">Show Password
                <button type="submit"><a href="/user/home">LOGIN</a></button>
            </div>

            <script>
				function myFunction() {
				  var x = document.getElementById("myInput");
				  if (x.type === "password") {
				    x.type = "text";
				  } else {
				    x.type = "password";
				  }
				}
			</script>
            
            <div id="signupform">
                <h1>SIGN UP</h1>
                <input type="text" placeholder="Full Name" name="username"required /><br>
                <input type="email" placeholder="Email" required /><br>
                <input type="password" placeholder="Password" required /><br>
                <input type="address" placeholder="Address" required/><br>
                <input type="tel" placeholder="Contact Number" required /><br>
                <button>SIGN UP</button>
            </div>
            
            <div id="login_msg">Have an account?</div>
            <div id="signup_msg">Don't have an account?</div>
            
            <button id="login_btn">LOGIN</button>
            <button id="signup_btn">SIGN UP</button>
            
            
        </div>
    </body>
</html>