
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
   
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 
    <title>Document</title>

    
    
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="landing.js"></script>
</head>
<body>
    <div class="top-background" >
        <div class="menu" id="sticky">
            <ul class="menu-ul">
                <li><a href="landing.html" style="color:white;">Home</a></li>
                <li><a href="#images" style="color:white;">Our Images</a></li>
                <li><a href="a.html" style="color:white;">About Us</a></li>
                <li><a href="contactus.html" style="color:white;">Contact us</a></li>
                <li><a href="#reserve" style="color:white;">Reserve A Table</a></li>
                <li><a href="Booking.php" style="color:white;">Event Booking</a></li>
            </ul>
            
        </div>
        <div>
            <div class="page-title">
                <h2 style="padding-left: 40%;">
                    <span>P</span>
                    <span>U</span>
                    <span>Z</span>
                    <span>Z</span>
                    <span>L</span>
                    <span>E</span>
                    <span>S</span>
                </h2>
                <div class="description">
                    Welcome to our restaurant
                </div>
            </div>
        </div>
    </div>
    <div id="reserve"></div>
    <header class="jumbotron">
        <div class="container">
        
            <div class="row row-header">
                    <div class="col-md-3 col-sm align-self-center">
                <img src="img/puzzles.png" class="img-fluid">
            </div>
                <div class="col-sm-6">

                    <h1>PUZZLES</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
                
                <div class="col-md-3 col-sm align-self-center">
                    <a role="button" class="btn btn-block nav-link btn-warning"  onclick="myFunction()" style="color: black;">Reserve A Table</a>
                </div>
            </div>
        </div>
    </header>

    <div id="ReserveModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reserve a Table</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div> 
                <div class="modal-body">
                    <form action="insert1.php" method="POST">
                        <div class="form-group row">
                            <label for="Number of Guests" class="col-md-2 col-form-label"><strong>Number of Guests</strong></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="No_of_Guests" value="1"> 1
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="No_of_Guests" value="2">2
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="No_of_Guests" value="3">3
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="No_of_Guests" value="4">4
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="No_of_Guests" value="5">5
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="No_of_Guests" value="6">6
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Section" class="col-md-2 col-form-label"><strong>Name</strong></label>
                            <input type="text">
                        </div>
                        <div class="form-group row">
                            <label for="Section" class="col-md-2 col-form-label"><strong>Section</strong></label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-success active">
                                  <input type="radio" name="FSection" id="option1" autocomplete="off" checked value="Non-Smoking">Non-Smoking
                                </label>
                                <label class="btn btn-danger">
                                  <input type="radio" name="FSection" id="option2"  autocomplete="off" value="Smoking">Smoking
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Date and Time" class="col-md-2 col-form-label"><strong>Date and Time</strong></label>
                            <div class="col col-md-3">
                                <input type="text" class="form-control" id="Date and Time" name="FDate" placeholder="Date">
                            </div> 
                            <div class="col col-md-3">
                                <input type="text" class="form-control" id="Date and Time" name="FTime" placeholder="Time">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="offset-md-2 col-md-10">
                                <button type="submit" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-primary">Reserve</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    <div class="page-blocks" id="images">
        <div class="title" data-aos="fade-right">
            Our Images
        </div>
        <div class="design">
            <img src="img/r1.jpg" data-aos="fade-up"/>
            <img src="img/r4.jpg" data-aos="fade-up"/>
            <img src="img/r3.jpg" data-aos="fade-up"/>
            <img src="img/r2.jpg" data-aos="fade-up"/>
            <img src="img/r5.jpg" data-aos="fade-up"/>
            <img src="img/r6.jpg" data-aos="fade-up"/>
        </div>
    </div>

   <!-- <div id="about-us"></div>

    <div class="page-blocks" >
        <div class="title" data-aos="fade-right">
            About Us
        </div>
        <div class="flex-block">
            <div class="why-us-flex-item" data-aos="fade-up">
                <div class="block-label">
                    Our Events
                </div>
                <div class="block-description">
                    A restaurant is a business that prepares and serves food and drinks to customers. Meals are generally served and eaten 
                    on the premises, but many restaurants also offer take-out and food delivery services.
                </div>
            </div>

            <div class="why-us-flex-item" data-aos="fade-up">
                <div class="block-label">
                    Future Events
                </div>
                <div class="block-description">
                    A restaurant is a business that prepares and serves food and drinks to customers. Meals are generally served and eaten 
                    on the premises, but many restaurants also offer take-out and food delivery services.
                </div>
            </div>

            <div class="why-us-flex-item" data-aos="fade-up">
                <div class="block-label">
                    Number of events hosted
                </div>
                <div class="block-number">
                    234
                </div>
            </div>
                
            </div>
        </div>
    </div> -->
    
    
    
    

    <div class="footer">
        <div class="location">
            <div>
                RR Nagar<br>
                <div class="address"> Double Road <br> RR Nagar <br> Bengaluru </div>
            </div>
        </div>
        <div class="location">
            <div>
                Basavanagudi<br>
                <div class="address"> DVG Road <br> Basavanagudi <br> Bengaluru </div>
            </div>
        </div>
        <div class="location">
            <div>
                Jayanagar<br>
                <div class="address"> 4th block <br> Jaynagar <br> Bengaluru </div>
            </div>
        </div>
        <div class="social-media-icons">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-whatsapp-square"></i>
            <i class="fab fa-instagram-square"></i>
        </div>
    </div>
    <div class="copyrights">
        <i class="far fa-copyright fa-lx"></i>
        2021 by Me
    </div>

</body>
</html>
<script>
    function myFunction(){ 
        $("#ReserveModal").modal('toggle');
    };
</script>
<script>
    AOS.init({
        duration: 1400,
    });
    function stickyMenu()
{
    var sticky = document.getElementById("sticky");
    if(window.pageYOffset > 20)
    {
        sticky.classList.add("sticky");
        sticky.classList.remove("menu-ul");
    }
    else
    {
        sticky.classList.remove("sticky");
    }
}

window.onscroll = function()
{
    stickyMenu();
}
</script>