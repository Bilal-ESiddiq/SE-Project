<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body class="w3-light-grey">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<style>
div.stars {
	  width: 270px;
	  display: inline-block;	}

	input.star { display: none; }

	label.star {
	  float: right;
	  padding: 10px;
	  font-size: 36px;
	  color: #444;
	  transition: all .2s;}

	input.star:checked ~ label.star:before {
	  content: '\f005';
	  color: #FD4;
	  transition: all .25s;
	}
    input.star-5:checked ~ label.star:before {
	  color: #FE7;
      text-shadow: 0 0 20px #952;}
	input.star-1:checked ~ label.star:before { color: #F62; }
	label.star:hover { transform: rotate(-15deg) scale(1.3); }
	label.star:before {
	  content: '\f006';
	  font-family: FontAwesome;
	}
    
    </style>
<title>W3.CSS Template</title>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
		 @include('layout.profileFreelancerstrip')
    <!-- End Left Column -->
    

    <!-- Right Column -->
    
@include('layout.profileFreelancersecondsection')

<!-- End Right Column -->
    
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
<!--Footer-->
@include('layout.profileFooter')

</body>
</html>
