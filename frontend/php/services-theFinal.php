<?php
include "/xampp/htdocs/E-Motorbike-2.3-main/backend/admin/class/product_class.php";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $add_to_cart = $addCart -> add_to_Cart();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigins="anonymous"></script>
    <link rel="stylesheet" href="/frontend/style.css">
    <title>MOTOR-PROJECT</title>
</head>
<body>
<header>
    <div class="logo">
        <a href="/frontend/php/index.php"><img src="/frontend/images/logo.png" width="64px" height="64px" ></a>
    </div>
        
    <div class="menu">
        <!-- <li><a href="index.html">HOME</a></li> -->
        <li><a href="/frontend/php/services-theFinal.php">SERVICES</a>
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
            

        <li><a href="/frontend/php/accessories-theFinal.php">ACCESSORIES</a>
            <ul class="sub-menu">
                <li><a herf="">Electricity</a></li>
                    <ul>
                        <li><a href="service1-1.html">Bảo dưỡng 1</a></li>
                        <li><a href="service1-2.html">Bảo dưỡng 2</a></li>
                        <li><a href="service1-3.html">Bảo dưỡng 3</a></li>
                        <li><a href="service1-4.html">Bảo dưỡng 4</a></li>
                        <li><a href="service1-5.html">Bảo dưỡng 5</a></li>
                    </ul>
                <li><a herf="service2.html">Vehicle body</a></li>
                    <ul>
                        <li><a href="service2-1.html">Sửa chữa 1</a></li>
                        <li><a href="service2-2.html">Sửa chữa 2</a></li>
                        <li><a href="service2-3.html">Sửa chữa 3</a></li>
                        <li><a href="service2-4.html">Sửa chữa 4</a></li>
                        <li><a href="service2-5.html">Sửa chữa 5</a></li>
                    </ul>
                <li><a herf="service3.html">Engine/Exhaust</a></li>
                    <ul>
                        <li><a href="service3-1.html">Nâng cấp 1</a></li>
                        <li><a href="service3-2.html">Nâng cấp 2</a></li>
                        <li><a href="service3-3.html">Nâng cấp 3</a></li>
                        <li><a href="service3-4.html">Nâng cấp 4</a></li>
                        <li><a href="service3-5.html">Nâng cấp 5</a></li>
                    </ul>
                <li><a herf="service4.html">Brake</a></li>
                    <ul>
                        <li><a href="service4-1.html">Thay đổi kết cấu 1</a></li>
                        <li><a href="service4-2.html">Thay đổi kết cấu 2</a></li>
                        <li><a href="service4-3.html">Thay đổi kết cấu 3</a></li>
                        <li><a href="service4-4.html">Thay đổi kết cấu 4</a></li>
                        <li><a href="service4-5.html">Thay đổi kết cấu 5</a></li>
                    </ul>
                <li><a herf="service5.html">Accessory</a></li>
                    <ul>
                        <li><a href="service5-1.html">Lên đời 1</a></li>
                        <li><a href="service5-2.html">Lên đời 2</a></li>
                        <li><a href="service5-3.html">Lên đời 3</a></li>
                        <li><a href="service5-4.html">Lên đời 4</a></li>
                        <li><a href="service5-5.html">Lên đời 5</a></li>
                    </ul>
            </ul>
        </li>

        <li><a href="/frontend/php/aboutus.php">ABOUT US</a></li>
        <li><a href="/frontend/php/contant.php">CONTACT</a></li>
    </div>
    
    <div class="others">
        <li><input type="text" placeholder="Search"><i class="fas fa-search" ></i></li>
        <!-- <li> <a class="fa fa-paw" href="" ></a></li> -->
        <li> <a class="fa fa-user" href="" ></a></li>
        <li> <a class="fa fa-shopping-bag" href="" ></a></li>
    </div>
</header>


<!-- services -->
<section class="category">
    <div class="container">
        <div class="category-top row">
            <p>HomePage</p> <span>&#10230</span> <p>Services</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="services-left">
                <!-- SERVICES -->
                <ul>
                    <li class="services-left-li"><a href="services.html"><b>SERVICES</b></a></li>
                    <ul>
                        <li class="services-left-li-ul"><a>Maintenance packages</a></li>
                            <ul class="services-left-li-ul-li">
                                <li><a href="service1-1.html">Maintenance package 1</a></li>
                                <li><a href="service1-2.html">Maintenance package 2</a></li>
                                <li><a href="service1-3.html">Maintenance package 3</a></li>
                                <li><a href="service1-4.html">Maintenance package 4</a></li>
                                <li><a href="service1-5.html">Maintenance package 5</a></li>
                            </ul>
                        <li class="services-left-li-ul"><a herf="service2.html">Repair package</a></li>
                            <ul class="services-left-li-ul-li">
                                <li><a href="service2-1.html">Repair package 1</a></li>
                                <li><a href="service2-2.html">Repair package 2</a></li>
                                <li><a href="service2-3.html">Repair package 3</a></li>
                                <li><a href="service2-4.html">Repair package 4</a></li>
                                <li><a href="service2-5.html">Repair package 5</a></li>
                            </ul>
                        <li class="services-left-li-ul"><a herf="service3.html">Upgrade packages</a></li>
                            <ul class="services-left-li-ul-li">
                                <li><a href="service3-1.html">Upgrade package 1</a></li>
                                <li><a href="service3-2.html">Upgrade package 2</a></li>
                                <li><a href="service3-3.html">Upgrade package 3</a></li>
                                <li><a href="service3-4.html">Upgrade package 4</a></li>
                                <li><a href="service3-5.html">Upgrade package 5</a></li>
                            </ul>
                        <li class="services-left-li-ul"><a herf="service4.html">Texture Change packages</a></li>
                            <ul class="services-left-li-ul-li">
                                <li><a href="service4-1.html">Texture Change package 1</a></li>
                                <li><a href="service4-2.html">Texture Change package 2</a></li>
                                <li><a href="service4-3.html">Texture Change package 3</a></li>
                                <li><a href="service4-4.html">Texture Change package 4</a></li>
                                <li><a href="service4-5.html">Texture Change package 5</a></li>
                            </ul>
                        <li class="services-left-li-ul"><a herf="service5.html">Spare Parts package</a></li>
                            <ul class="services-left-li-ul-li">
                                <li><a href="service5-1.html">Spare Parts package 1</a></li>
                                <li><a href="service5-2.html">Spare Parts package 2</a></li>
                                <li><a href="service5-3.html">Spare Parts package 3</a></li>
                                <li><a href="service5-4.html">Spare Parts package 4</a></li>
                                <li><a href="service5-5.html">Spare Parts package 5</a></li>
                            </ul>
                    </ul>
                
                <!-- ACCESSORIES -->
                    <li class="services-left-li"><a href=""><b><br>ACCESSORIES</b></a></li>
                    <ul>
                        <li class="services-left-li-ul"><a herf="">Electricity</a></li>
                            <ul class="services-left-li-ul-li">
                                <li><a href="service1-1.html">Electricity 1</a></li>
                                <li><a href="service1-2.html">Electricity 2</a></li>
                                <li><a href="service1-3.html">Electricity 3</a></li>
                                <li><a href="service1-4.html">Electricity 4</a></li>
                                <li><a href="service1-5.html">Electricity 5</a></li>
                            </ul>
                        <li class="services-left-li-ul"><a herf="service2.html">Repair</a></li>
                            <ul class="services-left-li-ul-li">
                                <li><a href="service2-1.html">Repair 1</a></li>
                                <li><a href="service2-2.html">Repair 2</a></li>
                                <li><a href="service2-3.html">Repair 3</a></li>
                                <li><a href="service2-4.html">Repair 4</a></li>
                                <li><a href="service2-5.html">Repair 5</a></li>
                            </ul>
                        <li class="services-left-li-ul"><a herf="service3.html">Upgrade</a></li>
                            <ul class="services-left-li-ul-li">
                                <li><a href="service3-1.html">Upgrade 1</a></li>
                                <li><a href="service3-2.html">Upgrade 2</a></li>
                                <li><a href="service3-3.html">Upgrade 3</a></li>
                                <li><a href="service3-4.html">Upgrade 4</a></li>
                                <li><a href="service3-5.html">Upgrade 5</a></li>
                            </ul>
                        <li class="services-left-li-ul"><a herf="service4.html">Change the texture</a></li>
                            <ul class="services-left-li-ul-li">
                                <li><a href="service4-1.html">Change the texture 1</a></li>
                                <li><a href="service4-2.html">Change the texture 2</a></li>
                                <li><a href="service4-3.html">Change the texture 3</a></li>
                                <li><a href="service4-4.html">Change the texture 4</a></li>
                                <li><a href="service4-5.html">Change the texture 5</a></li>
                            </ul>
                        <li class="services-left-li-ul"><a herf="service5.html">Upgrade new accessories</a></li>
                            <ul class="services-left-li-ul-li">
                                <li><a href="service5-1.html">Upgrade new accessories 1</a></li>
                                <li><a href="service5-2.html">Upgrade new accessories 2</a></li>
                                <li><a href="service5-3.html">Upgrade new accessories 3</a></li>
                                <li><a href="service5-4.html">Upgrade new accessories 4</a></li>
                                <li><a href="service5-5.html">Upgrade new accessories 5</a></li>
                            </ul>
                    </ul>
                </ul>

            </div>
        <div class="category-right row">
            <div class="category-right-top-item">
                <p>Services</p>
            </div>
            <div class="category-right-top-item">
                <button><span>Sorf by</span><i class="fas fa-sort-down"></i></button>
            </div>
            <div class="category-right-top-item">
                <select name="Filter" id="">
                    <option value="">Filter</option>
                    <option value="">High to low</option>
                    <option value="">Low to high</option>
                </select>
            </div>
            <div class="category-right-content row">
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
                <div class="category-right-content-item ">
                    <img src="/backend/admin/img-on-php/<?php echo $result['product_img']; ?>">
                    <h1><?php echo $result['product_name'] ?></h1>
                    <p><?php echo"Price: $" . $result['product_price']?></p>
                    <?php echo "Quantity: "?><input type"number" name="quantity" value="1">
                    </br></br>
                    <button class="button" style="vertical-align:middle" name="add-to-cart" id="add-to-cart"><span>Add to CART</span></button>
                </div>
                  <?php
                  }}?>
        </div>
        </div>
     </div>
    </div>
</section>

<!-- App container -->
<section class="app-container"> 
    <p>Follow us on social media!</p>
    <div class="app-social-network">
        <a href="https://www.facebook.com/iughcmiu/"><img src="/images/Facebook.png" width="64px" height="64px"></a>
        <a href="https://www.instagram.com/trn_thuann/"><img src="/images/Ins.png" width="64px" height="64px"></a>
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

