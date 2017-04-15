<form method="POST" action="{{ route('password.request') }}">
  {{ csrf_field() }}
  <input type="hidden" name="token" value="{{ $token }}">
    <div class="w3-container w3-white">
        <p class="w3-label">Change Password:</p>
        <br>
     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="w3-label">Email</label>
        <input name="email"  id="email" class="w3-input w3-animate-input" type="email" value="{{ $email or old('email') }}" style="width:50%" required autofocus>
          @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        <!--For Checking from databse-->
        
        

        

        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="w3-label">Password</label>
        <input  class="w3-input w3-animate-input" type="password" style="width:50%" name="password" required>
        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label class="w3-label">Confirm Password</label>
        <input name="cpass" class="w3-input w3-animate-input" type="password" style="width:50%">
        @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
        </div>
        <br>
        
        
        <button name="ChangePassword" type="submit" onclick="document.getElementById('changepass').style.display='none'" class="w3-btn w3-blue-grey">Change Password</button>
        <br>
        <br>
    </div>
</form> 