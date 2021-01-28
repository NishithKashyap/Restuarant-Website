<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Document</title>

    
</head>
<body>
<div class="page-blocks" id="contact-us">
    <div class="menu"; id="sticky">
        <ul class="menu-ul">
            <li><a href="landing.html" style="color:white;">Home</a></li>
            <li><a href="#images" style="color:white;">Our Images</a></li>
            <li><a href="#about-us" style="color:white;">About Us</a></li>
            <li><a href="contactus.html" style="color:white;">Contact us</a></li>
            <li><a href="#reserve" style="color:white;">Reserve A Table</a></li>
            <li><a href="Booking.html" style="color:white;">Event Booking</a></li>
        </ul>
        
    </div>
    <div class="title" data-aos="zoom-in">
        Event Booking
    </div>
    <div class="flex-block">
        <div class="contact-us-flex-item" data-aos="fade-right">
            <div class="contact-us">
                <div class="contact-us-text">
                    Make a booking today
                </div>
            </div>
        </div>
        <div class="contact-us-flex-item" data-aos="fade-left">
            <form class="booking-form" action="insert.php" method="post">
                <input type="text" placeholder="Name" name="Fname"/><br>
                <input type="text" placeholder="Mobile" name="Mobile"/><br>
                <input type="text" placeholder="Email ID" name="Email"/><br>
                <input type="text" placeholder="Address" name="FAddress"/><br>
                <textarea type="text" placeholder="Requirement" name="Requirement"></textarea><br>
                <button class="booking-btn">Book Now</button><br>
            </form>
        </div>
    </div>
</div>
</body>
</html>