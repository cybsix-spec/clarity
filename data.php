<?php


$name_website = "Clarity";
$banner_text = "Harvesting Goodness <br> from Olive Oil";
$phone_number = " 0361 123 4567";



$menus = array(
     array(
        "label" => "ABOUT",
        "url" => "#"
     ),
     array(
        "label" => "PRODUCTS",
        "url" => "#products"
     ),
     array(
        "label" => "CONTACT",
        "url" => "#"
     ),
);

$products = array(
     array(
        "name_product" => "",
        "capsule" => 60,
        "price" => "$16.00",
        "image" => "assets/img/supplement-1 1.png"
     ),
     array(
        "name_product" => "Super Antioxidant",
        "capsule" => 30,
        "price" => "$16.00",
        "image" => "assets/img/supplement-1 1.png"
     ),
     array(
        "name_product" => "Super Antioxidant",
        "capsule" => 60,
        "price" => "$16.00",
        "image" => "assets/img/supplement-1 1.png"
     ),
     
);

$target_buyer = array( #target box
     array(
        "class" => "are-left",
        "title" => "Young Active People",
        "descript" => "We offer supplement that can give you more energy boost"
     ),
     array(
        "class" => "are-right",
        "title" => "Elderly",
        "descript" => "We offer supplement to keep your body fit and healthy aging"
     ),
);

$why = array( #why card
    array(
        "image" => "assets/img/37.svg",
        "alt" => "Quality Icon",
        "title" => "Perfect Quality",
        "descript" => "We grow, farm, and bottle the finest olive products you can find."
    ),
    array(
        "image" => "assets/img/9.svg",
        "alt" => "Price Icon",
        "title" => "Best Price Offers",
        "descript" => "The price is very affordable among similar product."
    ),
    array(
        "image" => "assets/img/14.svg",
        "alt" => "Natural Icon",
        "title" => "100% Natural",
        "descript" => "Harvested from the finest olive trees that deliver health benefits."
    ),
);

$social = array( #social icons
   array(
      "image" => "assets/img/ig.svg",
      "href" => "https://instagram.com",
      "alt" => "instagram"
   ),
   array(
      "image" => "assets/img/twit.svg",
      "href" => "https://twitter.com",
      "alt" => "twitter"
   ),
   array(
      "image" => "assets/img/fb.svg",
      "href" => "https://facebook.com",
      "alt" => "facebook"
   ),
);

$service = array( #help center
   array(
      "href" => "#",
      "label" => "Privacy Policy",
      "class" => ""
   ),
   array(
      "href" => "#",
      "label" => "Terms & Conditions",
      "class" => ""
   ),
   array(
      "href" => "#",
      "label" => "Legal <br> Support",
      "class" => "legal"
   ),
   array(
      "href" => "#",
      "label" => "Legal Support",
      "class" => "legal-mobile"
   ),
);

$infos = array(
   array(
      "href" => "#about",
      "label" => "About Us"
   ),
   array(
      "href" => "#products",
      "label" => "Our Product"
   ),
   array(
      "href" => "#footer",
      "label" => "Contact Us"
   )
);
?>