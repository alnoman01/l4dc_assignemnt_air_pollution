<?php include_once 'includes/header.php'?>

<?php include_once 'includes/nav.php'?>
<?php include_once 'rssfeed.php'?>
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="video/trial2.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
      <h4 class="display-3">Give a care – clean up the air.<br> Don't you dare pollute our air. <br>Be part of the anti-pollution revolution!</h4>
      <button class = "btn btn-outline-info lead mb-0" > <a class="" href="reg.php">Join Us </button></a>
    </div>
    </div>
  </div>
</header>
<section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h1>Learn</h1></br>
                    <h3>How Air Pollutes?<br> Effects of Air Pollution.</h3>
                </div>
                    <div class="col-md-6">
                        <video muted controls autoplay= "true" width = "100%">
                            <source src="video/bg.mp4" type="video/mp4">
                            <source src="video/bg.ogg" type="video/ogg">
                        </video>
                    </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <a href="https://www.airnow.gov/"> <img src = "img/airnow.png" alt="Picture" width = "100%"> </a>
                </div>
                <div class="col-md-6 text-center">
                    <h1>Air Now</h1></br>
                    <h3>AirNow is your one-stop source for air quality data. Our recently redesigned site highlights air quality in your local area first, while still providing air quality information at state, national, and world views. A new interactive map even lets you zoom out to get the big picture or drill down to see data for a single air quality monitor.</h3>
                    <a href="https://www.airnow.gov/"><button type="button" class="btn btn-primary btn-lg">Visit Now</button></a>
                </div>
        </div>    
    </section>
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h1>Air Quality Index</h1></br>
                    <h3>Back in 2008, when the World Air Quality project started, all of the existing air quality monitoring stations where based on highly professional and expensive BAM and TOEM technology. This kind of stations are always maintained by professional and highly qualified operators - and this ensures that the output of this station can be trusted.</h3>
                    <a href="https://aqicn.org/">  <button type="button" class="btn btn-info btn-lg">Visit Now</button> </a>
                </div>
                <div class="col-md-6">
                <a href="https://aqicn.org/"> <img src = "img/aqicnxl.png" alt="Picture" width = "100%"> </a>
                </div>
            </div>
        </div>
    </section>
  <section class="page-section" id="#">
      <div class="text-center">
                <h1><u>The Last 5year's Pollution Index of United Kingdom </u></h1><br>
      </div>
        <div class="container">
          <div class="row">
              <div class="col-md-9">
                    <img src="img/bg_pic1.jpg" width="100%" alt="Backgroung Image">
              </div>
              <div class="col-md-3">
                  <table class="table">
                      <tr>
                        <th scope="col">Sl. No</th>
                        <th scope="col">Year</th>
                        <th scope="col">Pollution Index</th>
                      </tr>
                  
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>2015</td>
                        <td>33.95</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>2016</td>
                        <td>35.02</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>2017</td>
                        <td>34.88</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>2018</td>
                        <td>37.71</td>
                      </tr>

                      <tr>
                        <th scope="row">5</th>
                        <td>2019</td>
                        <td>39.43</td>
                      </tr>
                    <tbody>
                </table>
            </div>
        </div>
  </section>

        
        <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script>
      const button = document.querySelector('#button');
      const tooltip = document.querySelector('#tooltip');

      let popperInstance = null;

      function create() {
        popperInstance = Popper.createPopper(button, tooltip, {
          modifiers: [
            {
              name: 'offset',
              options: {
                offset: [0, 2],
              },
            },
          ],
        });
      }

      function destroy() {
        if (popperInstance) {
          popperInstance.destroy();
          popperInstance = null;
        }
      }

      function show() {
        tooltip.setAttribute('data-show', '');
        create();
      }

      function hide() {
        tooltip.removeAttribute('data-show');
        destroy();
      }

      const showEvents = ['mouseenter', 'focus'];
      const hideEvents = ['mouseleave', 'blur'];

      showEvents.forEach(event => {
        button.addEventListener(event, show);
      });

      hideEvents.forEach(event => {
        button.addEventListener(event, hide);
      });
    </script>

    <?php include_once 'includes/footer.php'?>
 