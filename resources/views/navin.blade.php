<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-animate-right w3-blue-grey" style="display:none;z-index:5;right:0" id="rightMenu">
  <p class="w3-bar-item">Logged in as <b>User</b></p>
  <a name="viewprofile" class="w3-bar-item w3-button w3-ripple" href="/profile">Profile Page</a>
  <a name="settings" class="w3-bar-item w3-button w3-ripple" href="#">Settings</a>
  <a name="logout" class="w3-bar-item w3-button w3-ripple" href="{{ route("logout") }}" onclick="event.preventDefault();document.getElementById('Logout-form').submit();">Logout</a>
            
</div>