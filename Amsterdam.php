<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive tour and travel agency website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>GO</span>Travel</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Amsterdam</h3>
    </div>

    <div class="video-container">
        <video src="images/Amsterdam.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->
<section class="about" id="about">

    <div class="image" data-aos="fade-right"><img height="250px" width="470px" src="images\amsterdam2.jpg" alt=""></div>

    <div class="content" data-aos="fade-left">
        <h3>Amsterdam</h3>
        <p>Amsterdam in Netherlands,is known for its historical attractions,collections of great art,and the distinctive colour and flavour of its old sections.</p>
    </div>

</section>
<section class="amsterdam">
    <p>One of the most popular travel destinations in Europe, Amsterdam is a compact, charming and cosmopolitan city that invites exploration. Known as the “Venice of the North” for its more than 100 canals, the capital of the Netherlands offers easy sight-seeing adventures by foot, bike and boat.
        Amsterdam’s well-preserved and appealing 17th-century architecture provides a quaint if incongruous backdrop for a city famous for its modern, progressive attitudes. From the city’s fine art museums to its colorful flower markets, from cannabis-selling “coffeeshops” to the red light district, there’s something exciting and unique to discover in Amsterdam at every turn.In addition, the city is famous for its many well-preserved historic homes. Laid out in a pattern of concentric segments in the shape of a fan, these well-preserved heritage buildings are built on piles driven through an upper layer of mud into the firm, sandy bottom up to 18 meters below.

        All told, some 6,750 buildings dating from the 16th to 18th centuries are crowded into an area of 2,000 acres that's dissected by 160 canals (grachten), themselves home to numerous houseboats. Little wonder then that Amsterdam is an awesome city to explore on foot, with many picturesque bridges linking the city's 90 islands. Eight of these are in fact old wooden bascule bridges, including the Magere Brug (Mager Bridge), one of the city's most frequently photographed.
        
        Discover the best places to visit in this dynamic city with our list of the top attractions and fun things to do in Amsterdam.<b>You can visit places like:</b><br>
            <ol>
                 <li><b>Rijksmuseum </b>– Journey Back In The 19th Century</li>
                <li><b>Anne Frank House </b>– Learn All About This Jewish Girl</li>
                <li><b>Van Gogh Museum </b>– Where Artists Find Solace</li>
                <li><b>Begijnhof </b>– For A Peaceful Stroll</li>
                <li><b>Amsterdam’s West Church </b>– Enlighten Yourself Spiritually</li>
                <li><b>Vondelpark </b>– Learn The Culture And Lifestyle</li>
                <li><b>Heineken Brewery </b>– A Great Place For Beer Lovers </li>
                <li><b>Royal Palace Of Amsterdam </b>– Witness The Regal Historicity </li>
            </ol></p>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Agrabad,Bangladesh </p>
             <a href="amigos.me@gmail.com"><i class="fas fa-envelope"></i>amigos.me@gmail.com</a>
            <p> <i class="fas fa-phone"></i> 015384738473 </p>
            <p> <i class="fas fa-phone"></i> 016343874394 </p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Bangladesh</a>
            <a href="#">India</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>