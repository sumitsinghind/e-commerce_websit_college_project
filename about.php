<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>Welcome to our clothing website, where style meets substance! What sets us apart is our unwavering commitment to offering you a curated selection of fashion that blends trendiness with quality. We understand that clothing is not just about appearance; it's about expressing your unique personality and embracing comfort. That's why we handpick each piece, ensuring it meets our high standards for both aesthetics and durability. Whether you're seeking the latest runway-inspired looks or timeless wardrobe essentials, our diverse range caters to all tastes and occasions. With us, you're not just purchasing clothes – you're investing in pieces that will empower your confidence and tell your story. Experience fashion that's more than skin deep; experience a journey of self-expression with every garment you choose from our collection.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>I am absolutely thrilled with my experience shopping on your clothing website! From the moment I entered the virtual store, I was captivated by the carefully curated selection of styles that perfectly blend elegance and modernity. The attention to detail is evident in the quality of each garment I received. The fabric is luxurious, the stitching impeccable, and the fit is spot-on – it's clear that you prioritize both aesthetics and comfort. What truly sets you apart is your commitment to customer satisfaction; the user-friendly interface made browsing a breeze, and my order arrived promptly, beautifully packaged. I felt like I was unwrapping a present, and trying on the pieces felt like uncovering treasures. Your website is not just a shopping destination; it's an experience that celebrates individuality and style. I'm beyond impressed and will definitely be returning for more fashion-forward finds!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Abhishek Pandey</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>I can't say enough good things about my recent shopping experience on your clothing website. The moment I landed on the homepage, I was greeted with a stunning array of fashion choices that cater to a variety of tastes. Navigating through the different categories was a breeze, and the detailed product descriptions and sizing guides helped me make confident choices. I was pleasantly surprised by the seamless checkout process and the regular updates on my order's status. When my package arrived, I was met with items that exceeded my expectations. The quality of the materials and craftsmanship is exceptional, and the fit is just perfect. It's evident that you have a keen eye for the latest trends while maintaining an eye for timeless elegance. Your website has become my go-to destination for upgrading my wardrobe, and I've already received numerous compliments on the pieces I've purchased. Thank you for offering such a top-notch shopping experience you've gained a loyal customer in me!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sumit Singh</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      }
   },
});

</script>

</body>
</html>