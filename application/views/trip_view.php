<?php
	include_once "_partial/header.php";
	include_once "_partial/tripnav.php";
?>
	<!-- Section: intro -->
    <section id="intro" class="panel-background">
    <div class="slogan">
            <h4>Hi <?php echo $this->session->userdata('uname') ?> <h4>
            <h3>Let's start your journey</h3>
        </div>
        <div class="plan">
            <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-8 col-xs-offset-2">
                <div class="form-section">
                    <div class="row">
                        <form role="form">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="location">Location</label>
                                    <input type="email" class="form-control" id="location" placeholder="Where ?">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="sr-only" for="checkin">Check in</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="checkin" placeholder="Check in">
                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="sr-only" for="checkout">Check out</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="checkout" placeholder="Check out">
                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="sr-only" for="guest">Guest</label>
                                            <select id="guest" name="guest" class="form-control">
                                              <option value="1">1 Guest</option>
                                              <option value="2">2 Guests</option>
                                              <option value="3">3 Guests</option>
                                              <option value="4">4 Guests</option>
                                              <option value="5">5 Guests</option>
                                              <option value="6">6 Guests</option>
                                              <option value="7">7 Guests</option>
                                              <option value="8">8 Guests</option>
                                              <option value="9">9 Guests</option>
                                              <option value="10">10 Guests</option>
                                              <option value="11">11 Guests</option>
                                              <option value="12">12 Guests</option>
                                              <option value="13">13 Guests</option>
                                              <option value="14">14 Guests</option>
                                              <option value="15">15 Guests</option>
                                              <option value="16">16+ Guests</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style = "text-align:center">
                                        <button type="submit" class="btn btn-default btn-primary">Plan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: intro -->

    <section id="attractions" class="home-section text-center ">
        <div class="heading-about">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Taiwan Attractions</h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <figure>
                  <img src="/assets/img/port01.jpg" class="img-responsive">
                  <figcaption>
                      <h2>Sun Moon Lake</h2>
                      <p>Located in central Taiwan, Sun Moon Lake is one of the only natural lakes in the country and arguably the most beautiful. Lalu Island divides the lake in two, with one part resembling a moon and the other the sun, giving it its name. </p>
                  </figcaption>
                </figure>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <figure>
                  <img src="/assets/img/port02.jpg" class="img-responsive">
                  <figcaption>
                      <h2>Chiufen (Jiufen) Village</h2>
                      <p>The historic town of Chiufen is located along the hillsides just north of Taiwan. Breathtaking views of the Pacific Coastline draw travelers to this popular destination.</p>
                  </figcaption>
                </figure>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                <figure>
                  <img src="/assets/img/port03.jpg" class="img-responsive">
                  <figcaption>
                      <h2>Taipei 101</h2>
                      <p>Taiwan’s tallest skyscraper, Taipei 101, enjoyed the title of world’s tallest building from 2004 until the Burj Khalifa in Dubai was completed in 2010. It remains the world’s largest and tallest green building.</p>
                  </figcaption>
                </figure>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
          <div class="wow fadeInRight" data-wow-delay="0.2s">
                <figure>
                  <img src="/assets/img/port04.jpg" class="img-responsive">
                  <figcaption>
                      <h2>Shilin Night Market</h2>
                      <p>Food vendors, mom and pop restaurants, video arcades and karaoke bars are just part of the draw Shilin Night Market. This tiny Taipei district comes alive at night when the doors of some 539 food court stalls.</p>
                  </figcaption>
                </figure>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <figure>
                  <img src="/assets/img/port05.jpg" class="img-responsive">
                  <figcaption>
                      <h2>Chiang Kai-shek Memorial Hall</h2>
                      <p>LThe Taiwanese people's reverence for the first President of the Republic of China and the icon of Chinese Nationalism is very much in evidence in the monumental Chiang Kai-shek Memorial Hall.</p>
                  </figcaption>
                </figure>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <figure>
                  <img src="/assets/img/port06.jpg" class="img-responsive">
                  <figcaption>
                      <h2>Taipei Eye</h2>
                      <p>Taipei Eye, Taipei’s most popular stage show among visitors, takes traditional Chinese opera and distills it down to make it more palatable for a foreign audience. </p>
                  </figcaption>
                </figure>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: services -->
    <section id="features" class="home-section text-center bg-gray">
        
        <div class="heading-about">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Our Features</h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="/assets/img/icons/service-icon-1.png" alt="" />
                    </div>
                    <div class="service-desc">
                        <h5>Plan new trip</h5>
                        <p>Register now and your can plan your new trip by adding the locations you want in Taiwan.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="/assets/img/icons/service-icon-2.png" alt="" />
                    </div>
                    <div class="service-desc">
                        <h5>View others' trips</h5>
                        <p>You can find references of the popular travel routes and even rank and comment of them.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="/assets/img/icons/service-icon-3.png" alt="" />
                    </div>
                    <div class="service-desc">
                        <h5>Edit personal trips</h5>
                        <p>After logging in, you can edit any travel routes that you have planned.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="/assets/img/icons/service-icon-4.png" alt="" />
                    </div>
                    <div class="service-desc">
                        <h5>Manage personal profile</h5>
                        <p>You can change the profile details of your own account, like changing password, name, etc.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>      
        </div>
    </section>
    <!-- /Section: services -->

    <!-- Section: about -->
    <section id="team" class="home-section text-center">
        <div class="heading-about">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>The Team</h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Anna Hanaceck</h5>
                        <p class="subtitle">Pixel Crafter</p>
                        <div class="avatar"><img src="/assets/img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Maura Daniels</h5>
                        <p class="subtitle">Ruby on Rails</p>
                        <div class="avatar"><img src="/assets/img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Jack Briane</h5>
                        <p class="subtitle">jQuery Ninja</p>
                        <div class="avatar"><img src="/assets/img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow bounceInUp" data-wow-delay="1s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Tom Petterson</h5>
                        <p class="subtitle">Typographer</p>
                        <div class="avatar"><img src="/assets/img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
                </div>
            </div>
        </div> -->      
        </div>
    </section>
    <!-- /Section: about -->

<?php
	include_once "_partial/footer.php";
?>