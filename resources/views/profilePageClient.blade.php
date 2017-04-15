<!DOCTYPE html>
<html>
<title>Client Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ URL::asset('css/w3.css') }}">
<body class="w3-light-grey">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    @include('profileClientstrip')
    <!-- End Left Column -->
    

    <!-- Right Column -->
    <div class="w3-twothird">

    @include('profileClientExp')

    @include('profileClientDream')
	
	</div>
    <!-- End Right Column -->
    
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

@include('profileFooter')

</body>
</html>
