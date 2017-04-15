<div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="{{Auth::user()->avatar}}" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
          </div>
        </div>
        
        <div class="w3-container">
          <p><i class="w3-margin-right w3-large w3-text-blue-grey"></i>Name: <b>{{Auth::user()->name}}</b></p>
          <p><i class="w3-margin-right w3-large w3-text-blue-grey"></i>Occupation: </p>
          <p><i class="w3-margin-right w3-large w3-text-blue-grey"></i>Email: <b>{{Auth::user()->email}}</b></p>
          <p><i class="w3-margin-right w3-large w3-text-blue-grey"></i>Date of Birth: <b>{{Auth::user()->birthdate}}</b></p>
          <p><i class="w3-margin-right w3-large w3-text-blue-grey"></i>Gender: <b>{{Auth::user()->gender}}</b></p>
          <hr>

          <p class="w3-large"><b><i class="w3-margin-right w3-text-blue-grey"></i>Interests</b></p>
          
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-blue-grey"></i>Languages</b></p>
  
          <br>
        </div>
	</div>
<br>
</div>