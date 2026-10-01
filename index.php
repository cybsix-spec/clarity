<?php

include 'connection.php';
require_once 'header.php';
include 'config.php';

$result_products = mysqli_query($connection, "SELECT * FROM products");
$products = mysqli_fetch_all($result_products, MYSQLI_ASSOC);


$result_target = mysqli_query($connection, "SELECT * FROM target_buyer");
$target_buyer = mysqli_fetch_all($result_target, MYSQLI_ASSOC);


$result_why = mysqli_query($connection, "SELECT * FROM why");
$why = mysqli_fetch_all($result_why, MYSQLI_ASSOC);


$result_social = mysqli_query($connection, "SELECT * FROM social");
$social = mysqli_fetch_all($result_social, MYSQLI_ASSOC);


$result_service = mysqli_query($connection, "SELECT * FROM service");
$service = mysqli_fetch_all($result_service, MYSQLI_ASSOC);


$result_infos = mysqli_query($connection, "SELECT * FROM infos");
$infos = mysqli_fetch_all($result_infos, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clarity</title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        
        

            <main>
                <section class="opening">
                    <div class="container">
                        <div class="judul">
                            <h1><?php echo $banner_text ?></h1>
                        </div>
                        <div class="keterangan">
                            <p>Enjoy a healthy life by eating <span class="bold"><?php echo($name_website) ?> Supplement</span> that make your life
                            <br> healther for today and forever</p>
                        </div>
                        <div class="keterangan-mobile"> <!--Ni untuk hp-->
                            <p><span class="brs-1">Enjoy a healthy life by eating <strong class="bold">Clarity Supplement</strong> <br>
                                <span class="brs-2">that make your life healther for tosday and forever</span>
                            </p>
                        </div>
                        <div class="opening-btn">
                            <div class="shop">
                                <a href="#shop">Shop Now</a>
                            </div>
                            <div class="view">
                                <a href="#products">View Product</a>
                            </div>
                        </div>
                    </div>
                </section><!-- -->
            </main>
            

            <section class="hero">
                <div class="katalog">
                    <div class="h-katalog">
                        <h2>Shop <?php echo($name_website) ?></h2>
                        <p class="katalog-dekstop-p">we offer supplement for you with very good quality for health.</p>
                        <p class="katalog-mobile-p">we offer supplement for you with very <br> good quality for health.</p>
                    </div>
                    <div class="container">
                        <div id="products">
                            <?php foreach ($products as $product) { 
                                if(is_array($product)) {
                                    $name =(isset($product["name_product"])) && !empty($product["name_product"]) ?$product["name_product"] : "Produk Tidak ada";
                                    $capsule =(isset($product["capsule"])) ?$product["capsule"] : 0;
                                    $price =(isset($product["price"])) && !empty($product["price"]) ?$product["price"] : "---";
                                    $image =(isset($product["image"])) && !empty($product["image"]) ?$product["image"] : "default.jpg";
                                    }
                                    ?>
                                <div class="product">
                                    <div class="img-product">
                                    <img src="<?php echo $image ?>" alt="product1" >
                                    </div>
                                        <div class="konten-product">
                                            <div class="konten-product-left">
                                            <h5><?php echo $name?></h5>
                                            <p class="capsule"><?php echo $capsule?> capsules</p>
                                            </div>
                                            <div class="konten-product-right">
                                            <p class="price"><?php echo$price?></p>
                                        </div>
                                    </div>
                                    <div class="add">
                                        <?php if ($product["capsule"] < 1){ ?>
                                            <a href="">Out of stock</a>
                                        <?php } else { ?>
                                            <a href="">Add To Cart</a>
                                        <?php }?>
                                    </div>
                                </div>
                                
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </section>

        <section class="are">
            <h1>Are You..</h1>
                <div class="are-pic">
                    <?php foreach ($target_buyer as $target) {
                         if(is_array($target)) {
                                    $class =(isset($target["class"])) && !empty($target["class"]) ?$target["class"] : "No class";
                                    $title =(isset($target["title"])) && !empty($target["title"]) ?$target["title"] : "No Title";
                                    $descript =(isset($target["descript"])) && !empty($target["descript"]) ?$target["descript"] : "No Description";
}
                        ?>
                        <div class="<?php echo $class ?>">
                            <div class="are-content">
                            <h3><?php echo $title ?></h3>
                            <p><?php echo $descript ?></p>
                            <a href="#" class="are-btn">Shop Product</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </section>

            
        <section class="why">
            <h2>Why Choose Our Product</h2>
            <p class="why-sub">Clarity was created with the mission to improve your health and wellbeing with the purest olive products on earth.</p>
            <div class="container">
                    <div class="why-cards">
                        <?php foreach ($why as $item) {
                            if(is_array($item)) {
                                    $image =(isset($item["image"])) && !empty($item["image"]) ?$item["image"] : "default.jpg";
                                    $alt =(isset($item["alt"])) && !empty($item["alt"]) ?$item["alt"] : "No picture";
                                    $title =(isset($item["title"])) && !empty($item["title"]) ?$item["title"] : "No title";
                                    $descript =(isset($item["descript"])) && !empty($item["descript"]) ?$item["descript"] : "No description";
                            }
                            ?>
                        <div class="why-card">
                            <div class="why-icon">
                                <img src="<?php echo $image ?>" alt="<?php echo $alt ?>">
                            </div>
                            <h4><?php echo $title ?></h4>
                            <p><?php echo $descript ?> </p>
                        </div>
                        <?php } ?>
                    </div>
            </div>
            </div>
        </section>

        <section class="testi">
            <h2>Testimonials</h2>
            <p class="testi-sub">We have provided the best service to customers who have trusted</p>
            <div class="testi-card">
                <div class="stars">★★★★★</div>
                <p class="quote">"I love Super Antioxidant for the polyphenols and antioxidants. <br> It's hard to find a good and pure Olive Oil Supplement <br> I'm on my second bottle now and I feel great!"</p>
                <p class="quote-mobile">"I love Super Antioxidant for the polyphenols and antioxidants. It's hard to find a good and pure Olive Oil Supplement I'm on my second bottle now and I feel great!"</p>
                <div class="testi-profil">
                    <div class="testi-avatar"></div>
                        <div class="testi-nama">
                            <strong>Richard Johnson</strong>
                            <span>Bandung, Indonesia</span>
                        </div>
                </div>
            </div>
        </section>

        <!--
        <section class="section-card">
                <div class="container">
                    <div class="card-container">
                    
                        <div class="card-item">
                            <div class="card1">
                                <div class="gambar">
                                    <img  src="img/supplement-1 1.png" alt="Super Antioxidant">
                                </div>

                                <div class="content">
                                    <h3>Super Antioxidant</h2>
                                    <div class="harga-container">
                                        <p class="info-capsul">60 capsules</p>
                                        <p class="info-harga">$16,00</p>
                                    </div>
                                </div>

                                <a href="#" class="beli">Add To Cart</a>
                            </div>
                        </div>

                        
                        <div class="card-item">
                            <div class="card1">
                                <div class="gambar">
                                    <img  src="img/supplement-1 1.png" alt="Super Antioxidant">
                                </div>

                                <div class="content">
                                    <h3>Super Antioxidant</h2>
                                    <div class="harga-container">
                                        <p class="info-capsul">60 capsules</p>
                                        <p class="info-harga">$16,00</p>
                                    </div>
                                </div>

                                <a href="#" class="beli">Add To Cart</a>
                            </div>
                        </div>
                        
                        <div class="card-item">
                            <div class="card1">
                                <div class="gambar">
                                    <img  src="img/supplement-1 1.png" alt="Super Antioxidant">
                                </div>

                                <div class="content">
                                    <h3>Super Antioxidant</h2>
                                    <div class="harga-container">
                                        <p class="info-capsul">60 capsules</p>
                                        <p class="info-harga">$16,00</p>
                                    </div>
                                </div>

                                <a href="#" class="beli">Add To Cart</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        -->


        <section class="subscribe">
            <h2>Subscribe To Our Newsletter</h2>
            <p>Sign up for our newsletter for information, offers and more.</p>
            <form class="subscribe-box">
                <img src="assets/img/email_logo.png" alt="email">
                <input type="email" placeholder="Enter your email address" required>

                <button type="submit">Send Now</button>
            </form>
        </section>


        <footer>
            <div class="container">
                <div class="footer-container">
                
                <div class="footer-half footer-left">
                    <div class="footer-col brand-col">
                        <img src="assets/img/logo-footer.png" alt="Logo" class="logo-footer">
                        <p><?php echo $name_website ?> is in the business of improving <br> your health and wellness. We grow, farm, <br> and bottle the finest olive products you <br> can find.</p>
                    </div>
                    <div class="footer-col footer-col-left">
                        <div class="footer-col-left-a">
                            <h4>Information</h4>
                                <?php foreach ($infos as $info) {
                                    if(is_array($info)){
                                        $href = (isset($info["href"])) && !empty($info["href"]) ? $info["href"]: "#";
                                        $label = (isset($info["label"])) && !empty($info["label"]) ? $info["label"]: "No label";
                                    }
                                    ?>
                                    <a href="<?php echo $href ?>"><?php echo $label ?></a>
                                <?php } ?>
                            </div>
                    </div>
                </div>
                

                <div class="footer-half footer-right">
                    <div class="footer-col">
                        <h4>Help Center</h4>
                            <?php foreach ($service as $help) { 
                                if(is_array($help)){
                                        $href= (isset($help["href"])) && !empty($help["href"]) ?$help["href"]: "#";
                                        $class = (isset($help["class"])) && !empty($help["class"]) ?$help["class"]: "No Class";
                                        $label = (isset($help["label"])) && !empty($help["label"]) ?$help["label"]: "No Text";
                                    }
                                ?>
                                <a href="<?php echo $href ?>" class="<?php echo $class ?>"><?php echo $label ?></a>
                            <?php }?>
                    </div>
                    <div class="footer-col contact-col">
                        <div class="contact-col-content">
                            <p><img src="assets/img/telepon.svg" alt="email" class="logo-contact"><?php echo($phone_number) ?></p>
                            <p><img src="assets/img/email_logo_footer.png" alt="telepon" class="logo-contact"> info.clarity@gmail.com</p>

                            
                                <div class="social-icons" id="contact">
                                    <?php foreach ($social as $icon) {
                                        if(is_array($icon)){
                                        $href= (isset($icon["href"])) && !empty($icon["href"]) ?$icon["href"]: "#";
                                        $image = (isset($icon["image"])) && !empty($icon["image"]) ?$icon["image"]: "default.jpg";
                                        $alt = (isset($icon["alt"])) && !empty($icon["alt"]) ?$icon["alt"]: "No image";
                                    }
                                        ?>
                                        <a href="<?php echo $href ?>"><img src="<?php echo $image ?>" alt="<?php echo $alt ?>"></a>
                                    <?php } ?>
                                </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="copyright">
                    <p>Copyright <?php echo $name_website ?> 2021 All Right Reserved</p>
                </div>
            </div>
            <script src="assets/js/script.js"></script>
        </footer>
    </body>
</html>