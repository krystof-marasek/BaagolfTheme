<?php get_header() ?>

<!-- HOMEPAGE - HERO -->

<div class="container-fluid hero-container  d-flex flex-column justify-content-center align-items-center">
    <div class="container ">
      <div class="row ">
          <div class="content-container d-flex flex-column justify-content-center align-items-center mb-5">
              <h1 class="hero-title">Rhoncus tincidunt</h1>
              <h3 class="hero-subtitle col-lg-8 my-5">
                Duis porta, ligula rhoncus euismod pretium, nisi tellus eleifend odio, luctus viverra sem dolor id</h3>
              <button type="button" class="btn btn-primary btn-lg 2 col-lg-4 col-md-12 col-sm-12 col-12">BOOK NOW</button>
          </div>
      </div>
    </div>
    <div class="hero-image-container d-none d-xl-flex"><img src="<?php echo get_stylesheet_directory_uri() . "/images/side-view-man-playing-golf.jpeg;" ?>" alt=""></div>
</div>

<!-- HOMEPAGE - INTRODUCTION -->

<div class="introduction-component container-fluid">
  
  <div class="introduction-row g-0 container">
    <div class="row d-flex justify-content-between align-items-start">
      <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
        <div class="introduction-container d-flex flex-column justify-content-between">
          <div class="introduction-text-container">
            <h2>Welcome to Blåvandshuk Golf Club</h2>
          </div>
          <div class="introduction-text-container d-flex flex-column align-items-start">
            <p>
              Proin ex ipsum, facilisis id tincidunt sed, vulputate in lacus. Donec pharetra faucibus leo, vitae vestibulum leo scelerisque eu. Nam enim dolor, porta at ex ut, eleifend tristique metus. Integer sit amet auctor ligula, vel dictum orci. Nam feugiat interdum nisl. Ut id velit ac ante maximus gravida. Vivamus lobortis vestibulum mauris a mollis. Nunc mollis tempus lorem eu pulvinar. Quisque mollis blandit aliquam. Nulla finibus gravida dignissim. Sed viverra mattis dictum. In ultricies tellus in auctor
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- HOMEPAGE - SERVICES -->

  <div class="ourservices-row container  g-0">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-12 col-sm-12 col-12 mb-5">
        <div class="ourservices-container">
          <div class="services-content-container d-flex justify-content-between flex-wrap">
            <div class="col-lg-12 col-sm-12 col-12 d-flex flex-wrap">

              <div class="ourservices-services d-flex align-items-center flex-column col-lg-6 col-sm-12 col-12 pb-5 px-2">
                <img src="<?php echo get_stylesheet_directory_uri() . "/images/golf_clubs.png;" ?>" width="72" height="72" alt="">
                <h5>Golf</h5>
                <p>igula, vel dictum orci. Nam feugiat interdum nisl. Ut id velit ac ante maximus gravida. Vivamus lobortis vestibulum mauris a mollis. Nunc mollis tempus l</p> 
              </div>

              <div class="ourservices-services  d-flex align-items-center flex-column col-lg-6 col-sm-12 col-12 pb-5 px-2">
                <img src="<?php echo get_stylesheet_directory_uri() . "/images/football-player.png;" ?>" width="72" height="72" alt="">
                <h5>Football Golf</h5>
                <p>igula, vel dictum orci. Nam feugiat interdum nisl. Ut id velit ac ante maximus gravida. Vivamus lobortis vestibulum mauris a mollis. Nunc mollis tempus l</p>
              </div>

              <div class="ourservices-services  d-flex align-items-center flex-column col-lg-6 col-sm-12 col-12 pb-5 px-2">
                <img src="<?php echo get_stylesheet_directory_uri() . "/images/hotel-bed.png;" ?>" width="72" height="72" alt="">
                <h5>Accommodation</h5>
                <p>igula, vel dictum orci. Nam feugiat interdum nisl. Ut id velit ac ante maximus gravida. Vivamus lobortis vestibulum mauris a mollis. Nunc mollis tempus l</p>
              </div>

              <div class="ourservices-services  d-flex align-items-center flex-column col-lg-6 col-sm-12 col-12 pb-5 px-2">
                <img src="<?php echo get_stylesheet_directory_uri() . "/images/restaurant.png;" ?>" width="72" height="72" alt="">
                <h5>Restaurant</h5>
                <p>igula, vel dictum orci. Nam feugiat interdum nisl. Ut id velit ac ante maximus gravida. Vivamus lobortis vestibulum mauris a mollis. Nunc mollis tempus l</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
    
<?php get_footer() ?>