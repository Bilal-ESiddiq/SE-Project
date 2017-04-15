<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="Urban.jpg" alt="London" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <button style="width:50%" class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Freelancer');">Find a Freelancer</button>
      <button style="width:50%" class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Client');">Find a Client</button>
    </div>
<!-- Tabs -->
    <div id="Freelancer" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Travel the world with ease!</h3>
        <div>
          <label>Search for</label>
          <input name ="freelancer_search" class="w3-input w3-border" type="text" placeholder="eg: Freelancer Name, Destination">
        </div>
      <p><button onclick="#" class="w3-button w3-blue-grey">Search and find Freelancers</button></p>
    </div>
    <div id="Client" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Start working now!</h3>
      <p>Find a travelling client with us and start your experience</p>
      <p><button class="w3-button w3-blue-grey">Browse Now</button></p>
    </div>
  </div>
</header>