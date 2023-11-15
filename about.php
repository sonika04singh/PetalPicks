<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>About us</h3>
    <p> <a href="home.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
            <a href="shop.php" class="btn">Shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>What we provide?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
            <a href="contact.php" class="btn">Contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
            <a href="#reviews" class="btn">Clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>I ordered a bouquet for my mother's birthday, and the flowers were absolutely stunning! The arrangement was fresh, vibrant, and beautifully put together. My mom was thrilled, and I couldn't be happier with the service. Thank you!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Aadarsh Sharma</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>I've been a regular customer at this flower shop for a while now. The staff is always friendly and helpful. The only reason I didn't give it a 5-star rating is that I sometimes wish there were more exotic flower options available. But the quality and service are top-notch.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Ayush Dev</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>I ordered a last-minute bouquet for a special occasion, and the team at petalpicks came through! They were able to deliver a gorgeous arrangement on short notice, and it made our day. Fantastic service and beautiful flowers.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <h3>Ravish Raj</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Great experience overall. The flowers were fresh, and the delivery was on time. The only reason I'm not giving it a perfect score is that I wish there were more options for customizing arrangements. Nonetheless, I'd recommend this flower shop</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ayush Kumar Jha</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>I wanted to surprise my wife with a unique bouquet, and petalpicks delivered beyond my expectations. The arrangement was not only beautiful but also creatively designed. She loved it, and so did I. Thank you for making our day!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Anuj Rajeev</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>The flowers from [Your Flower Shop Name] always brighten my day. I've been a customer for years, and I've never been disappointed. The variety, quality, and the personal touch they add to every order is why I keep coming back.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Anamika Singh</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>