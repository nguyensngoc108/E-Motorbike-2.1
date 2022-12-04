<?php
include '/xampp/htdocs/E-Motorbike-2.3-main/admin/class/product_class.php';

?>


<!DOCTYPE html>
<html lang="en">
    <!-- Web portal for motor servicing at home-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial scale="1.0">
        <link rel="stylesheet" href="/frontend/style.css">  
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
        <script src="https://kit.fontawesome.com/a416e9c3ba.js" crossorigin="anonymous"></script>
        <title>Product</title>
        
    </head>
    <body>
    <header>
    <div class="logo">
        <a href="/final/index.php"><img src="/images/logo.png" width="64px" height="64px" ></a>
    </div>
        
    <div class="menu">
        <!-- <li><a href="index.html">HOME</a></li> -->
        <li><a href="/final/services.php">SERVICES</a>
            <ul class="sub-menu">
                <li><a herf="">Maintenance packages</a></li>
                    <ul>
                        <li><a href="service1-1.html">Maintenance package 1</a></li>
                        <li><a href="service1-2.html">Maintenance package 2</a></li>
                        <li><a href="service1-3.html">Maintenance package 3</a></li>
                        <li><a href="service1-4.html">Maintenance package 4</a></li>
                        <li><a href="service1-5.html">Maintenance package 5</a></li>
                    </ul>
                <li><a herf="service2.html">Repair package</a></li>
                    <ul>
                        <li><a href="service2-1.html">Repair package 1</a></li>
                        <li><a href="service2-2.html">Repair package 2</a></li>
                        <li><a href="service2-3.html">Repair package 3</a></li>
                        <li><a href="service2-4.html">Repair package 4</a></li>
                        <li><a href="service2-5.html">Repair package 5</a></li>
                    </ul>
                <li><a herf="service3.html">Upgrade packages</a></li>
                    <ul>
                        <li><a href="service3-1.html">Upgrade package 1</a></li>
                        <li><a href="service3-2.html">Upgrade package 2</a></li>
                        <li><a href="service3-3.html">Upgrade package 3</a></li>
                        <li><a href="service3-4.html">Upgrade package 4</a></li>
                        <li><a href="service3-5.html">Upgrade package 5</a></li>
                    </ul>
                <li><a herf="service4.html">Texture Change packages</a></li>
                    <ul>
                        <li><a href="service4-1.html">Texture Change package 1</a></li>
                        <li><a href="service4-2.html">Texture Change package 2</a></li>
                        <li><a href="service4-3.html">Texture Change package 3</a></li>
                        <li><a href="service4-4.html">Texture Change package 4</a></li>
                        <li><a href="service4-5.html">Texture Change package 5</a></li>
                    </ul>
                <li><a herf="service5.html">Spare Parts package</a></li>
                    <ul>
                        <li><a href="service5-1.html">Spare Parts package 1</a></li>
                        <li><a href="service5-2.html">Spare Parts package 2</a></li>
                        <li><a href="service5-3.html">Spare Parts package 3</a></li>
                        <li><a href="service5-4.html">Spare Parts package 4</a></li>
                        <li><a href="service5-5.html">Spare Parts package 5</a></li>
                    </ul>
            </ul>
        </li>
            

        <li><a href="/admin/accessories.php">ACCESSORIES</a>
            <ul class="sub-menu">
                <li><a herf="">Electricity</a></li>
                    <ul>
                        <li><a href="service1-1.html">Electricity 1</a></li>
                        <li><a href="service1-2.html">Electricity 2</a></li>
                        <li><a href="service1-3.html">Electricity 3</a></li>
                        <li><a href="service1-4.html">Electricity 4</a></li>
                        <li><a href="service1-5.html">Electricity 5</a></li>
                    </ul>
                <li><a herf="service2.html">Vehicle body</a></li>
                    <ul>
                        <li><a href="service2-1.html">Vehicle body 1</a></li>
                        <li><a href="service2-2.html">Vehicle body 2</a></li>
                        <li><a href="service2-3.html">Vehicle body 3</a></li>
                        <li><a href="service2-4.html">Vehicle body 4</a></li>
                        <li><a href="service2-5.html">Vehicle body 5</a></li>
                    </ul>
                <li><a herf="service3.html">Engine/Exhaust</a></li>
                    <ul>
                        <li><a href="service3-1.html">Engine/Exhaust 1</a></li>
                        <li><a href="service3-2.html">Engine/Exhaust 2</a></li>
                        <li><a href="service3-3.html">Engine/Exhaust 3</a></li>
                        <li><a href="service3-4.html">Engine/Exhaust 4</a></li>
                        <li><a href="service3-5.html">Engine/Exhaust 5</a></li>
                    </ul>
                <li><a herf="service4.html">Brake</a></li>
                    <ul>
                        <li><a href="service4-1.html">Brake 1</a></li>
                        <li><a href="service4-2.html">Brake 2</a></li>
                        <li><a href="service4-3.html">Brake 3</a></li>
                        <li><a href="service4-4.html">Brake 4</a></li>
                        <li><a href="service4-5.html">Brake 5</a></li>
                    </ul>
                <li><a herf="service5.html">Accessory</a></li>
                    <ul>
                        <li><a href="service5-1.html">Accessory 1</a></li>
                        <li><a href="service5-2.html">Accessory 2</a></li>
                        <li><a href="service5-3.html">Accessory 3</a></li>
                        <li><a href="service5-4.html">Accessory 4</a></li>
                        <li><a href="service5-5.html">Accessory 5</a></li>
                    </ul>
            </ul>
        </li>

        <li><a href="about-us.html">ABOUT US</a></li>
        <li><a href="contact.html">CONTACT</a></li>
    </div>
    
    <div class="others">
        <li><input type="text" placeholder="Search"><i class="fas fa-search" ></i></li>
        <!-- <li> <a class="fa fa-paw" href="" ></a></li> -->
        <li> <a class="fa fa-user" href="" ></a></li>
        <li> <a class="fa fa-shopping-bag" href="" ></a></li>
    </div>
</header>
        <section class="product">
            <div class="container">
                <div class="product-top row">
                    <p>Product</p><span>&#10230;</span><p>Name</p>
                </div>
                <?php
                    $product = new product;
                    $show_product = $product -> show_product();
                ?>

                <?php
                    if($show_product) {
                        $i=0;
                        while($result = $show_product -> fetch_assoc()) {
                        $i++;
                ?>
                <div class="product-content row">

                    <div class="product-content-left row"> 
                          <div class="product-content-left-big-img">
                        <img src="img-on-php/<?php echo $result['product_img']; ?>">
                        </div>  
                          <div class="product-content-left-small-img">
                            <img src="/images/car-engine-repair-and-replacement.jpeg">
                            <img src="/images/car-engine-repair-and-replacement.jpeg">
                            <img src="/images/car-engine-repair-and-replacement.jpeg">
                            <img src="/images/car-engine-repair-and-replacement.jpeg">

                        </div>  
                     </div>  
                    



                    
                   
                     



                        <?php
                            }}
                        ?>
                        <div class="product-content-right-bottom">
                            <div class="product-content-right-bottom-top">
                                &#8744;
                            </div>
                            <div class="product-content-right-bottom-content-big">
                                <div class="product-content-right-bottom-content-title row">
                                    <div class="product-content-right-bottom-content-title-item specific" >
                                        <p onclick="myFunction1()">Information</p>
                                    </div>
                                    <div class="product-content-right-bottom-content-title-item time">
                                        <p onclick="myFunction2()">Time-Expected</p>
                                    </div>
                                </div>
                                <div class="product-content-right-bottom-content">
                                    <div class="product-content-right-bottom-content specific">
                                        <!-- Information about car services -->
                                        <div id="text1">We provide a wide range of car services, from car repair to car maintenance. We have a team of experienced and professional mechanics who are always ready to serve you. We are always ready to serve you with the best quality and the best price.</div>
                                    
                                    </div>
                                    <div class="product-content-right-bottom-content time">
                                        <!-- Time delivery -->
                                       <div id="text2"> 1-2 days</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-content-right">
                        <div class="product-content-right-product-name">
                            <h1>Engine Repair</h1>
                            <p>CODE: LS122</p>
                        </div>
                        <div class="product-content-right-product-price">
                            <p><sup>$</sup>29.76</p>
                        </div>
                        <div class="quantity">
                            <p style="font-weight: bold;">Quantity:</p>
                            <input type="number" min="0" value="1">
                        </div>
                        <div class="product-content-right-product-button">
                            <button><i class="fas fa-shopping-cart"></i> <p>ADD TO CART</p></button>
                        </div>
                        <div class="product-content-right-product-icon">
                            <div class="product-content-right-product-icon-item">
                                <i class="fas fa-phone-alt"></i><p>Hotline</p>
                            </div>
                            <div class="product-content-right-product-icon-item">
                                <i class="fas fa-comments"></i><p>Chat</p>
                            </div>
                            <div class="product-content-right-product-icon-item">
                                <i class="far fa-envelope"></i><p>Mail</p>
                            </div>
                        </div>
                </div>
            </div>
        <script>

function myFunction1() {
  var x = document.getElementById('text1');
  var y = document.getElementById('text2');
  if (x.style.visibility === 'hidden' ) {
    x.style.visibility = 'visible';
    y.style.visibility = 'hidden';

  } else {
    x.style.visibility = 'hidden';
    y.style.visibility = 'visible';

  }
}

function myFunction2() {
  var x = document.getElementById('text2');
  if (x.style.visibility === 'hidden') {
    x.style.visibility = 'visible';
  } else {
    x.style.visibility = 'hidden';
  }
}
// function myFunction2() {
//   document.querySelector(".time").innerHTML = "YOU CLICKED ME!";
// }
            // const information = document.querySelector(".specific")
            // const time = document.querySelector(".time")
            const bigImg = document.querySelector(".product-content-left-big-img img")
            const smallImg = document.querySelectorAll(".product-content-left-small-img img")

            smallImg.forEach(function(imgItem,X){
                imgItem.addEventListener("click",function(){
                    bigImg.src = imgItem.src
                })
            })

// if(information){
//         information.addEventListener("click",function(){
//                 // console.log("click")
//                 alert("information")

        
        
// })
// }

//  if(time){
//         information.addEventListener("click",function(){
//                 console.log("click")
//                 alert("time")
                
//         })
// }

        </script>
        </section>

        <section class="product-related container">
            <div class="product-related-title">
                <p>Related Products</p>
            </div>
            <div class="product-content row">
                <div class="product-related-item">
                    <img src="/frontend/images/car-engine-repair-and-replacement.jpeg" alt="">
                    <h1>ENGINE REPAIR</h1>
                    <p><sup>$</sup>39.99</p>
                </div>
                <div class="product-related-item">
                    <img src="/frontend/images/car-engine-repair-and-replacement.jpeg" alt="">
                    <h1>ENGINE REPAIR</h1>
                    <p><sup>$</sup>39.99</p>
                </div>
                <div class="product-related-item">
                    <img src="/frontend/images/car-engine-repair-and-replacement.jpeg" alt="">
                    <h1>ENGINE REPAIR</h1>
                    <p><sup>$</sup>39.99</p>
                </div>
                <div class="product-related-item">
                    <img src="/frontend/images/car-engine-repair-and-replacement.jpeg" alt="">
                    <h1>ENGINE REPAIR</h1>
                    <p><sup>$</sup>39.99</p>
                </div>
                <div class="product-related-item">
                    <img src="/frontend/images/car-engine-repair-and-replacement.jpeg" alt="">
                    <h1>ENGINE REPAIR</h1>
                    <p><sup>$</sup>39.99</p>
                </div>
            </div>

        </section>
        <br>
        <hr>
        <!-- App container -->
<section class="app-container"> 
    <p>Follow us on social media!</p>
    <div class="app-social-network">
        <a href="https://www.facebook.com/iughcmiu/"><img src="/frontend/images/Facebook.png" width="64px" height="64px"></a>
        <a href="https://www.instagram.com/trn_thuann/"><img src="/frontend/images/Ins.png" width="64px" height="64px"></a>
    </div>
    <p>Contact us for collapse</p>
    <input type="text" placeholder="Please enter your email...">
</section>
<!-- Footer -->
<!-- TOP -->
<div class="footer-top">
    <li><a><img src="/images/dmca_protected_16_120.png" width="133.75px" height="50px" alt=""></a></li>
    <li><a><img src="/images/img-congthuong.png" alt=""></a></li>
    <li><a href=""></a>Liên hệ</li>
    <li><a href=""></a>Tuyển dụng</li>
    <li><a href=""></a>Giới thiệu</li>
    <li>
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-instagram"></a>
    </li>
</div>
<!-- CENTER -->
<div class="footer-center">
    <p>Công ty Cổ phần IU với số đăng ký kinh doanh: <b>0987654321</b> <br>
    Registration address: Quarter 6, Thu Duc City, Ho Chi Minh City
    Schedule maintenance, repair and upgrades: <b>0123456789</b>  
    </p>
</div>

<div class="footer-bottom">
    <p>©IUG All rights reserved</p>
</div>
    </body>


        
   
</html>