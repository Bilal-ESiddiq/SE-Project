<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-animate-right w3-blue-grey" style="display:none;z-index:5;right:0" id="rightMenu">
  <p class="w3-bar-item">Logged in as <b> {{Auth::user()->name }}  </b></p>
  <a name="viewprofile" class="w3-bar-item w3-button w3-ripple" href="/profile">Profile Page</a>
  <button name="editProfile" onclick="document.getElementById('editprofilemodal').style.display='block'" class="w3-bar-item w3-button w3-ripple" href="#">Edit Profile Page</button>
  <button name="changepass" onclick="document.getElementById('changepasswordmodal').style.display='block'" class="w3-bar-item w3-button w3-ripple" href="#">Change password</button>
  <a name="logout" class="w3-bar-item w3-button w3-ripple" href="{{ route("logout") }}" onclick="event.preventDefault();document.getElementById('Logout-form').submit();">Logout</a>
  <form id="Logout-form" action="{{ route("logout") }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</div>