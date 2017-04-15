<!DOCTYPE html>
<html>
<title>Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ URL::asset('css/w3.css') }}"/>
<style>
.myLink {display: none}
</style>
<script type="text/javascript" src="{{ URL::asset('js/HomepageScript.js') }}"></script>
<script>initialise();</script>
<body class="w3-light-grey">
<!-- Sidebar -->


@include(Auth::user() ? 'navin' : 'navout')

<div class="w3-overlay w3-animate-opacity" onclick="closeRightMenu()" style="cursor:pointer" id="myOverlay"></div>
<!-- Navigation Bar -->
@include(Auth::user() ? 'HomepageNavigationBarT' : 'HomepageNavigationBar')

<!-- Header -->
@include(Auth::user() ? 'HomepageHeader' : 'HomepageHeaderOut')
    
@include('signupmodal')
<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">


<!-- Slideshow -->

@include('HomepageSlideshow')

  <!-- Contact -->
  @include('HomepageContact')
<!-- End page content -->
</div>

<!-- Footer -->
@include('HomepageFooter')

</body>
</html>
