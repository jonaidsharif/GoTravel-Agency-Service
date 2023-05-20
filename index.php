<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <form action="login.php" method="post">
        <h3>login</h3>
        <input type="email" class="box" placeholder="Enter Your email" name="email" required>
        <input type="password" name="password" class="box" placeholder="Enter Your password" required>

        <input type="submit" value="Login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Give us the opportunity</h3>
        <p>To make your adventures fun</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-7.mp4"></span>
        <span class="vid-btn" data-src="images/vid-6.mp4"></span>
        <span class="vid-btn" data-src="images/vid-9.mp4"></span>
        <span class="vid-btn" data-src="images/vid-8.mp4"></span>
        <span class="vid-btn" data-src="images/vid-10.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-7.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->
<section class="about" id="about">

    <div class="image" data-aos="fade-right"></div>

    <div class="content" data-aos="fade-left">
        <h3>a word about us</h3>
        <p>Since 2021, GOTravel has been committed to bringing travelers the best in value and quality travel arrangements. We are passionate about travel and providing corporate travelers high-touch services to facilitate their business travel needs and sharing the world’s wonders on the leisure travel side.</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

</section>
    
<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading"> 
        <span>B</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span>N</span>
        <span>o</span>
        <span>w</span>
    
    <div class="row">
    
        <form action="book_form.php" method="post" data-aos="fade-right">
            <input type="text" placeholder="your name" class="box" name="name">
            <input type="email" placeholder="your email" class="box" name="email">
            <input type="password" placeholder="your password" class="box" name="password">
            <input type="number" placeholder="your number" class="box" name="number">
            <input type="location" placeholder="desired location" class="box" name="location">
            <input type="date" placeholder="arrivals" class="box" name="arrivals">
            <input type="date" placeholder="leaving" class="box" name="leaving">
            <textarea name="address" cols="20" rows="10" class="box address" placeholder="your address" name="address"></textarea>
            <input type="submit" value="book now" class="btn">
        </form>
    
        <div class="image" data-aos="fade-left">
            <img src="images/contact-bg.png" alt="">
        </div>
    
    </div>
    
    </section>
    

<!-- book section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/mumbai.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> mumbai </h3>
                <p>Mumbai (also known as Bombay, the official name until 1995) is the capital city of the Indian state of Maharashtra. Mumbai lies on the Konkan coast on the west coast of India and has a deep natural harbour. In 2008, Mumbai was named an alpha world city.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $70.00 <span>$100.00</span> </div>
                <a href="#" class="btn">See More</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> hawaii </h3>
                <p>Not sure where to go in Hawaii? We’ve got the perfect guide for every type of traveler, from romance seekers to adventurers to those who want to spend the day relaxing on a gorgeous stretch of sand.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $100.00 <span>$150.00</span> </div>
                <a href="#" class="btn">See More</a>
            </div>
        </div>

        <div class="box">
            <img src="images/sydney2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> sydney </h3>
                <p>Celebrate the festive season in the city, whether on the Sydney Harbour or at Hyde Park. Memorable moments await as you experience downtown Sydney during the festive season. Convenient Locations. Exclusive Events. Destinations: Hyde Park, Circular Quay.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$140.00</span> </div>
                <a href="#" class="btn">See More</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                <p>Located by the River Seine in the north of France, Paris is reputed for being the most beautiful and romantic city in the world. It is overwhelmed with culture, history, iconic architecture, arty treasures, delicious food and exciting fashion.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $100.00 <span>$160.00</span> </div>
                <a href="#" class="btn">See More</a>
            </div>
        </div>

        <div class="box">
            <img src="images/tokyo.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>
                <p>Whilst Japan requires more than one visit to cover its vast grounds, there is no better introduction than jumping headfirst into its huge capital – the buzzing Tokyo metropolis.
                    The city holds a tremendous amount of fascination and a reputation of uniqueness, and modern boldness merged with tradition and order to what would be typically chaotic, prompting many to wonder what it is like in Tokyo.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $80.00 <span>$130.00</span> </div>
                <a href="#" class="btn">See More</a>
            </div>
        </div>

        <div class="box">
            <img src="images/egypt.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> egypt </h3>
                <p>Egypt, country located in the northeastern corner of Africa. Egypt's heartland, the Nile River valley and delta, was the home of one of the principal civilizations of the ancient Middle East and, like Mesopotamia farther east, was the site of one of the world's earliest urban and literate societies.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">See More</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Get Amazing deals on Budget Hotels around the world.✓ Use coupon code & Get Upto 25% OFF instantly on Hotel booking.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Your Gateway to Food on Travel ! Made for food lovers, travelers, tourism operators, and destinations. We promote Food locations as a tool of Tourism.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safety guide</h3>
            <p>Available local police/officials numbers</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>You can go whereever you want to go</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>Cheap rated flight details</h3>
            <p>affordable hotels location near you</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Adventures available near you like bunzy jumping,para</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/p01.jpg" alt="">
            <div class="content">
                <h3>Sheraton Waikiki</h3>
                <p>Sheraton Waikiki is an oceanfront resort located steps from renowned Waikiki Beach.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/p0002.jpg" alt="">
            <div class="content">
                <h3>The Louvre</h3>
                <p>The Louvre is a universal museum with Greek,Etruscan and Roman antiquities,paintings;Sculptures,decorative arts,prints,drawings and Islamic Art.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/p0003.jpg" alt="">
            <div class="content">
                <h3>Katara Towers</h3>
                <p>Katara Towers(692 feet) is a skyscraper in Lusail,Qatar.Built in 2022,has two luxury hotels,plus apartments,shops and restaurants.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/p04.jpeg" alt="">
            <div class="content">
                <h3>Cappadocia</h3>
                <p>Cappadocia is in Central Anatolia in Turkey known for unique moon-like landscape,underground cities,cave churches and houses carved in rocks.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/p05.jpg" alt="">
            <div class="content">
                <h3>Amsterdam</h3>
                <p>Amsterdam in Netherlands,is known for its historical attractions,great art,and the distinctive colour and flavour of its old sections.</p>
                <a href="Amsterdam.html" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/sydney.jpg" alt="">
            <div class="content">
                <h3>Sydney</h3>
                <p>Sydney is the largest city in Australia and the state capital of New South Wales.It is located on Australia's south-east coast of the Tasman Sea.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/bali2.jpg" alt="">
            <div class="content">
                <h3>Bali</h3>
                <p>Bali is in Indonesia.The province includes a few smaller neighbouring islands,such as Nusa Penida,Nusa Lembongan and Nusa Ceningan.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/dubai.jpg" alt="">
            <div class="content">
                <h3>Dubai</h3>
                <p>Dubai is in the southwest corner of the Arabian Gulf and is the second largest emirate in the UAE sharing borders with Abu Dhabi in the south.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/singapore.jpg" alt="">
            <div class="content">
                <h3>Singapore</h3>
                <p>The exquisitely beautiful attractions like Sentosa Island, Gardens by the Bay, Universal Studios and Night Safari are the pride of Singapore tourism.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->
<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/t1.jpg" alt="">
                    <h3>Yu Yan Chi</h3>
                    <p>Couldn't be happier with the service from GOTravel. This trip was booked before COVID and GOTravel were amazing. Have the notifications on and looking at the next one to book. Will absolutely use this company again! Thank you!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/t22.jpg" alt="">
                    <h3>Alex</h3>
                    <p>This is the place where most people go when organizing a trip. So, if you’re a hotel, a restaurant, or own any other business that welcomes tourists, you should definitely pay attention to GOTravel.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/t3.jpg" alt="">
                    <h3>Rahul Singi</h3>
                    <p> Trustworthy place for travelers.Travelers submit reviews, comments, and upload images, so the advice is pretty reliable and influential.The arrangements were organised swiftly and efficiently and thr trip went smoothly</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/t44.jpg" alt="">
                    <h3>Aarohan Tiwari</h3>
                    <p>I had the most amazing holiday. This was my first time to Paris. I loved every moment & cannot wait to go back again. Booking with GOTravel was professional, easy & went without a hitch. Thank you to GOTravel and the team.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-bg-3.jpg" alt="">
        </div>

        <form action="contact.php" method="post">
            <div class="inputBox">
                <input type="text" placeholder="Name" name="name">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Number" name="number">
                <input type="text" placeholder="Subject" name="subject">
            </div>
            <textarea name="message" placeholder="Message" name="" id="" cols="30" rows="10"></textarea>
            <input type="Submit" class="btn" value="Send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->

<!-- brand section  -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.png" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Agrabad,Bangladesh </p>
             <a href="afrozasultana.me@gmail.com"><i class="fas fa-envelope"></i>afrozasultana.me@gmail.com</a>
            <p> <i class="fas fa-phone"></i> 015384738473 </p>
            <p> <i class="fas fa-phone"></i> 016343874394 </p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Chittagong</a>
            <a href="#">Bangladesh</a>
            <a href="#">france</a>
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