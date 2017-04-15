<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<body style="background-image: url('http://www.wickedweb.co.uk/media/27/1627-background_industries_leisure.jpg');
    background-size:cover;  background-repeat: no-repeat;">
 <!-- Navigation -->
<nav class="w3-bar w3-transparent w3-hover-blue w3-text-black w3-xlarge">
  <a href="#home" class="w3-button w3-bar-item w3-hover-light-blue">Home</a>
  <button onclick="document.getElementById('signup').style.display='block'" class="w3-button w3-ripple w3-bar-item w3-hover-light-blue w3-right">Signup/Login</button>
  <a href="{{ route("logout") }}" onclick="event.preventDefault();
                        document.getElementById('Logout-form').submit();" class="w3-button w3-ripple w3-bar-item w3-hover-light-blue w3-right">Logout
  </a>  
  <a href="#" class="w3-button w3-ripple w3-bar-item w3-hover-light-blue w3-right">Button3</a>
  <a href="#" class="w3-button w3-ripple w3-bar-item w3-hover-light-blue w3-right">Button4</a>
</nav>

<!-- Signup/Login Popup -->
 <div id="signup" class="w3-modal">
  <div class="w3-modal-content">

    <header class="w3-container w3-indigo" >
      <span onclick="document.getElementById('signup').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h2>Create a new Account</h2>
    </header>
    
    <form method="POST" style="float: left; width:60%" action="{{ route('register') }}">
    {{csrf_field()}}
    <div class="w3-row">
    <div class="w3-container w3-half w3-white">
        <p class="w3-label">Signup for a new account:</p>
        <br>
        <label class="w3-label">Name</label>
        <input class="w3-input w3-animate-input" type="text" name="name" required style="width:50%">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                 </span>
            @endif
      <!--  
        <label class="w3-label">Last Name</label>
        <input class="w3-input w3-animate-input" type="text" style="width:50%">
        -->
        <label class="w3-label">Email</label>
        <input class="w3-input w3-animate-input" type="text" name="email" required style="width:50%">
            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        <label class="w3-label">Password</label>
        <input class="w3-input w3-animate-input" type="password" name="password" required style="width:50%">
            @if ($errors->has('password'))
                     <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
        <label class="w3-label">Confirm Password</label>
        <input class="w3-input w3-animate-input" type="password" name="password_confirmation" required style="width:50%">
        <br>
        <label class="w3-label">Birthdate: </label>
        <br>
        <input type ="date" name="birthdate" required style="width:65%">
        <br>
        <br>


        <label class="w3-label">Gender: </label>
        <input class="w3-radio" type="radio" name="gender" value="male">
        <label class="w3-validate">Male</label>
        <input class="w3-radio" type="radio" name="gender" value="female">
        <label class="w3-validate">Female</label>

        <br>
        <br>
        <input class="w3-check" type="checkbox" required>
        <label class="w3-validate">I agree to <a href="#">Terms and Conditions</a></label>
        <br>
        <br>
        <button onclick="document.getElementById('signup').style.display='none'" class="w3-btn w3-indigo">Signup</button>
        <br>
        <br>
        </div>
        </div>

        </form>

        <form style="float: left; clear: right;width: 40%" action="{{ route('login') }}" method="POST"  >
           {{csrf_field()}}
        <div class="w3-row">
    <div class="w3-container w3-half w3-white">
        <br>
        <br>
        <p class="w3-label">Already have an account?</p>
        <br>
        <label class="w3-label">Email</label>
    <input class="w3-input w3-animate-input" type="text" name="email" style="width:50%">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        
        <label class="w3-label">Password</label>
    <input class="w3-input w3-animate-input" type="password" name="password" style="width:50%">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        <br>
        <input class="w3-check" type="checkbox" name= "remember" {{ old('remember') ? 'checked' : '' }}>
    <label class="w3-validate">Remember me</label>
        <br>
        <br>

        <button type="submit" onclick="document.getElementById('signup').style.display='none'" class="w3-btn w3-indigo">Login</button>
        <br>
        <br>
            <a href="{{ route('password.request') }}" style="color: blue"> forgot your password ?</a>
        <br>
        <br> 
        <!-- for social login
-->
 <div class="col-md-12 row-block">
                            <a href="{{ url('auth/google') }}" class="btn btn-lg btn-danger btn-block">
                                <strong>Login With Google</strong>
                            </a>
                        </div>
        <br>
        <br>
         <div class="col-md-12 row-block">
                            <a href="{{ url('auth/facebook') }}" class="btn btn-lg btn-danger btn-block">
                                <strong>Login With Facebook</strong>
                            </a>
                        </div>
        <br>
        <br>


        </div>
        </div>
        </form>
        
        
    <footer class="w3-container w3-indigo" style="clear: both;">
    <br>
    <br>
    </footer>

  </div>
</div>

<form id="Logout-form" action="{{ route("logout") }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

</body>
</html>