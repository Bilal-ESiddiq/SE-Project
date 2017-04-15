<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-animate-right w3-blue-grey" style="display:none;z-index:5;right:0" id="rightMenu">
  <div class="w3-container">
  <p>Sign in to your account</p>
  <form method="POST" action="{{ route('login') }}">
  {{csrf_field()}}
  <label class="w3-label">Email</label>
		<input name="email" class="w3-input" type="text">
        <br>
        <label class="w3-label">Password</label>
		<input name="password" class="w3-input" type="password" required>
        <br>
        <input name="remember" class="w3-check" type="checkbox">
		<label class="w3-validate">Remember me</label>
        <br>
        <br>
        <button name="loginbutton" onclick="#" class="w3-button w3-grey">Login</button>
        </form>
        <br>
        <br>
        <!--
        <button name="forgotpassword" onclick="document.getElementById('forgetpasswordmodal').style.display='block'" class="w3-button w3-grey">Forgot Password</button>
-->
        <a name="forgotpassword" href="{{ url('email') }}"  class="w3-button w3-grey">Forgot Password</a>
        <br>
        <br>
        <a href="{{ url('auth/facebook') }}" name="facebookLogin"  class="w3-btn w3-indigo">Login with Facebook</a>
        
        <br>
        <br>
        <a href="{{ url('auth/google') }}" name="googleLogin"  class="w3-btn w3-orange">Login with Google+</a>


        <br>
        <br>
        <div class="w3-center">
        <p>No account? <button onclick="signup()" class="w3-button w3-grey">Signup now</button></p>
        </div>
      </div>
</div>
