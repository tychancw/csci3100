<?php
	include_once "_partial/trip_header.php";
	include_once "_partial/tripnav.php";
?>
	<!-- Section: intro -->
    <section id="intro" class="panel-background">
    <div class="slogan">
            <h4>Hi <?php echo $this->session->userdata('uname') ?> </h4>
            <h3>Let's start your journey</h3>
        </div>
        <div class="plan">
            <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-8 col-xs-offset-2">
                <div class="form-section">
                    <div class="row">
                        <form role="form" action='/index.php/plan/newtrip' method='post' >
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="location">Location</label>
                                    <input type="text" class="form-control" id="location" placeholder="Go where?" name="location">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="sr-only" for="tripstart">Start Date</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="tripstart" placeholder="Start Date" readonly name="tripstart">
                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="sr-only" for="tripend">End Date</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="tripend" placeholder="End Date" readonly name="tripend">
                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                                    <div class="col-md-2" style = "text-align:center">
                                        <button type="submit" class="btn btn-default btn-primary" id="plan-btn">Plan</button>
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

<!-- Display The Place WITHOUT the map -->
  <script type="text/javascript">
    var options = {
      types: ['(cities)'],
     };
    google.maps.event.addDomListener(window, 'load', function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('location'), options);
        google.maps.event.addListener(places, 'place_changed', function () {
            var place = places.getPlace();
            var address = place.formatted_address;
            var latitude = place.geometry.location.A;
            var longitude = place.geometry.location.F;
        });
    });
  </script>


<?php
	include_once "_partial/trip_footer.php";
?>