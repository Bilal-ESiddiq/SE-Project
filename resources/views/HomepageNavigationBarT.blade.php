<script type="text/javascript">
var value = 0;

	function switch1()
	{
		
		changevalue();
	}
	function switch2()
	{
		window.location = "http://localhost:8000/freelance";
		
	}

	function getvalue()
	{
		return value ;
	}

	function changevalue()
	{
		value=!value;
	}

</script>

<div class="w3-bar w3-white w3-border-bottom w3-xlarge">
  <a href="/" class="w3-bar-item w3-button w3-text-blue-grey w3-hover-blue-grey"><b>Logo</b></a>
  <span class="w3-opennav w3-right w3-text-blue-grey w3-hover-blue-grey w3-bar-item" onclick="openRightMenu()">&#9776;</span>  
    
    @if(Auth::user()->usertype)
    
    	<input type="hidden"  id = "status" value="0" name="Switch1"> </input>
    <button onclick="switch1();  " class="w3-button w3-right w3-text-blue-grey">Switch </button>
    @else
    
    	<input type="hidden"  id = "status" value="0" name="Switch1"> </input>
    <button onclick="switch2(); " class="w3-button w3-right w3-text-blue-grey">Switch </button>
    @endif
  

</div>
@include('ChangePasswordModal')
@include('EditProfileModal')


