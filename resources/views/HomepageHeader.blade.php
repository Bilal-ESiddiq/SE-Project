<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="Urban.jpg" alt="London" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <button style="width:100%" class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Freelancer');">Find a Freelancer</button>
    </div>
<!-- Tabs -->
    <div id="Freelancer" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Travel the world with ease!</h3>
      <p><button onClick="location.href = '{{ url('some/route') }}'" class="w3-button w3-blue-grey">Search and find Freelancers</button></p>
  </div>
</header>