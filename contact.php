<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Life Style Store</title>
        <style type="text/css">
            .p1{
                text-align: justify;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="container" id="content">
    <div class="row">
    <div class="col-lg">
        <img src="img/contact.png" style="float: right;">
        <h1>Get in Touch</h1>
        <p id="p1">Hi there, we are here to help you.<br> Please feel free to contact us in case you have any queries regarding the products,
        payment or order delivery.<br>With respect to payment, we will be accepting prepaid orders only, in order to avoid cash payment and 
        hence maintain social distancing.<br> With respect to delay in order delivery, please note that we are trying our best to deliver 
        your order on time, but your order may be delayed due to the current situation (or unforseen circumstances). However, 
        we ensure that your order will be delivered soon.<br>In case you have any other queries, please fill the form below, and our team will
        get in touch with you within 24 hours.<br>You can also contact the number given below to get in touch with our customer care executive
        immediately.</p>
    </div><br><br>
    <div class="col-lg">
        <div style="float: right;">
            <h1>COMPANY INFORMATION</h1><br>
            <p id="p1">Kangra Himachal Pradesh, India - 176001</p><br>
            <p id="p1">Phone : +91 9816268181</p><br>
            <p id="p1">Email : tushar.rediff07@gmail.com</p>
        </div>
        <h1>CONTACT US</h1>
        <div style="float: left;">
        <form>
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" autofocus="on" class="form-control" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
            </div>
            <div class="form-group">
                <textarea rows="5" cols="60" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>

<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27038.021877705818!2d76.25202634722!3d32.102967832932684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391b458198590ddf%3A0xad8e3ff3dfe5b1fe!2sKangra%2C%20Himachal%20Pradesh%20176001!5e0!3m2!1sen!2sin!4v1703830893355!5m2!1sen!2sin" 
width="100%" height="450" style="border:10;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php
include 'includes/footer.php';
?>
</body>
</html>