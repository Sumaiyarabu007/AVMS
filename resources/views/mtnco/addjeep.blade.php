<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Add Jeep</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    

    
    
  

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                 
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>ADD VEHICLE</h4>
                            </div>



                            <div class="col-lg-6">
                            <h6>Date</h6>
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            
                            <div class="col-lg-6 col-sm-12">
                            <h6>Authority</h6>
                              <fieldset>
                                <input name="name" type="text" placeholder="" required="">
                              </fieldset>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                            <h6>Destination</h6>
                              <fieldset>
                                <input name="place" type="place" id="place" placeholder="" required="">
                              </fieldset>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                            <h6>KM Reading</h6>
                              <fieldset>
                                <input name="distance" type="distance" id="distance" placeholder="" required="">
                              </fieldset>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                            <h6>When Out</h6>
                              <fieldset>
                              <input name="time" type="time" id="time" placeholder="when Out" required="">
                            </fieldset>
                            
                            </div>

                            <div class="col-lg-6 col-sm-12">
                            <h6>When In</h6>
                              <fieldset>
                              <input name="time" type="time" id="time" placeholder="when In" required="">
                            </fieldset>
                            
                            </div>

                            <div class="col-lg-6 col-sm-12">
                            <h6>Present Fuel</h6>
                              <fieldset>
                              <input name="fuel" type="litre" id="litre" placeholder="" required="">
                            </fieldset>
                            
                            </div>

                            <div class="col-lg-6 col-sm-12">
                            <h6>Last Refuelling Date</h6>
                            <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>

                            <div class="col-lg-6 col-sm-12">
                            <h6>Last Maintenace Date</h6>
                            <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                           
                            <br> 
                            <div class="col-lg-6 col-sm-12">
                            <h6>Comments</h6>
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Submit</button>
                              </fieldset>
                            </div>
                              


                           
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>