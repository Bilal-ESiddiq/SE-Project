<form method="POST" action="{{ route('register') }}">
{{csrf_field()}}
    <div class="w3-container w3-white">
        <p class="w3-label">Signup for a new account:</p>
        <br>
        <label class="w3-label">Name</label>
        <input name="name" class="w3-input w3-animate-input" type="text" style="width:50%">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    <br>
                </span>
                @endif
        
        
        <label class="w3-label">Date of Birth</label>
        <input name="birthdate" class="w3-input w3-animate-input" type="date" style="width:50%">
        
        <label class="w3-label">Email</label>
        <input name="email" class="w3-input w3-animate-input" type="text" style="width:50%">
                @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                        <br>

                </span>
                 @endif
        
        <label class="w3-label">Password</label>
        <input name="password" class="w3-input w3-animate-input" type="password" style="width:50%">
                @if ($errors->has('password'))
                <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                            <br>
                </span>
                <script>document.getElementById("signupmodal").style.display = "block";</script>
                @endif
        
        <label class="w3-label">Confirm Password</label>
        <input name="password_confirmation" class="w3-input w3-animate-input" type="password" style="width:50%">
        <br>
        <label class="w3-label">Gender: </label>
        <input  class="w3-radio" type="radio" name="gender" value="male">
        <label class="w3-validate">Male</label>
        <input  class="w3-radio" type="radio" name="gender" value="female">
        <label class="w3-validate">Female</label>
        <br>
        <br>
        <input name="agree" class="w3-check" type="checkbox">
        <label class="w3-validate">I agree to <a href="#">Terms and Conditions</a></label>
        <br>
        <br>
        <button name="signupbutton"  onclick="document.getElementById('signup').style.display='none'" class="w3-btn w3-indigo">Signup</button>
        <br>
        <br>
    </div>
</form>