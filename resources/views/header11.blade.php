<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Golden Navbar</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    
    /* Custom CSS for golden effect */
    .shining-gold { 
      color: #fff; 
      background:#e7c8b2;
    }
      .shining-gold span {
      font-size:14px;
      color: black; 
    }
   
    .shining-gold a {
    background: #c29958;
    text-decoration: none;
    color: #fff;  
    border: 1px solid #ffffff;
    border-radius: 3px;
    color: #319da0;
    display: inline-block;
    font-size: 10px;
    font-weight: 600; 
    margin-left: 15px; 
    transition: .3s;
    text-decoration: none;
 
    }
    .shining-gold a:hover {
      text-decoration: underline;
    }
    /* Additional bottom section styles */
    .shining-gold.bottom-section {
      background: #c29958;
      color: #7f6000;
      font-size: 14px;
    }
    .shining-gold.bottom-section .container {
      display: flex; 
      align-items: center;
    }  
  
    /* Custom styling */
  
    .shining-gold .countdown { 
      display:flex;
      gap: 10px;
    }
    .shining-gold .countdown div {
      background:#c29958;
      padding: 0px 15px; 
      font-size: 14px;  
    border-radius: 5px;
    background-color: #c29958;
    
    }
    .nav-bar {
      border-bottom: 2px solid #d4af37;
    }
      
    /* Bottom Section Styles */
    .bottom-section {
      background: white;
      color: #7f6000;
      font-size: 14px;
      border-bottom: 1px solid #d4af37;
    }
    .bottom-section .container {
      display: flex; 
      gap: 500px;
      align-items: center;
    }
    .extra-div {
      background: #fff8e6;
      padding: 10px 15px;
      font-size: 14px;
      color: #7f6000;
      border-top: 1px solid #d4af37;
    }

 /* Override navbar link text color */ 
/* Navbar Style */
.navbar {
  font-size: 14px;
  font-weight: 500;
}

.navbar-brand {
  font-weight: bold;
  font-size: 24px;
}

/* Links */
.nav-link {
  padding: 10px 15px;
}

.nav-link:hover {
  color: #d3a964; /* Gold shade for hover */
  transition: color 0.3s ease-in-out;
}

/* Icons */
.bi {
  font-size: 20px;
}

.position-relative .badge {
  font-size: 10px;
  font-weight: bold;
}

/* Mobile View Fix */
@media (max-width: 768px) {
  .navbar-brand {
    font-size: 20px;
  }
  .nav-link {
    font-size: 14px;
  }
} 


    /* Dropdown Menu (hidden by default) */
    .dropdown-menu {
      display: none;
      opacity: 0;
      visibility: hidden;
      position: absolute;
      top: 100%;
      left: 0;
      min-width: 160px;
      background-color: white;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
      z-index: 1000;
    }

    /* Space inside dropdown items */
    .dropdown-menu .dropdown-item {
      padding: 10px 20px;
      color: black;
    }

    .dropdown-menu .dropdown-item:hover {
      background-color: #f8f9fa;
    } 
    .badge-sale {
      position: absolute;
      top: 10px;
      left: 10px;
      background-color: red;
      color: white;
      font-size: 0.8rem;
    }
    .badge-new {
      position: absolute;
      top: 10px;
      left: 10px;
      background-color: green;
      color: white;
      font-size: 0.8rem;
    }
    .product-card {
      position: relative;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
    }
    .countdown {
      font-size: 0.8rem;
      margin-top: 3px;
      margin-bottom: 3px;
      margin: 30px, 0;
    

    }
    .color-options span {
      display: inline-block;
      width: 15px;
      height: 15px;
      margin: 0 5px;
      border-radius: 50%;
    } 
      
  </style>
     
     <style>
.gallery-container {
    margin-top: 15px;
    display: flex;
    align-items: center;
    overflow: hidden;
    position: relative;
    width: 100%; /* Adjust this width based on your layout */
}

.gallery {
    display: flex;
    transition: transform 0.5s ease; /* Smooth transition for sliding */
}

.gallery-item {
    min-width: 330px; /* Width of each image */
    margin: 0 5px; /* Space between items */
    position: relative; /* For caption to position properly */
}

.gallery-image {
    width: 330px; /* Fixed width */
    height: 390px; /* Fixed height */
}

.caption {
    position: absolute;
    bottom: 10px;
    left: 10px;
    color: white;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    padding: 5px;
}

.gallery-button {
    background-color: transparent;
    border: none;
    font-size: 24px;
    cursor: pointer;
    z-index: 1;
}

.left {
    position: absolute;
    left: 10px; /* Positioning the left button */
    top: 50%;
    transform: translateY(-50%);
}

.right {
    position: absolute;
    right: 10px; /* Positioning the right button */
    top: 50%;
    transform: translateY(-50%);
}
</style>
 
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        /* Header Section */
        .header {
            text-align: center;
            padding: 50px 0;
            background-color: #fff;
        }

        .header h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: #333;
        }

        .header p {
            font-size: 18px;
            color: #666;
        }

        /* Featured Section */
        .featured {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .featured-item {
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .featured-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .featured-item .name {
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            background-color: #fff;
        }

        /* Collection Section */
        .collection {
            padding: 20px;
            text-align: center;
        }

        .collection h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .collection-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 0 20px;
        }

        .collection-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 20px;
}

.collection-item {
    position: relative;
    text-align: center;
    font-family: Arial, sans-serif;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    background: #fff;
    padding: 10px;
}

.image-wrapper {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.image-wrapper img {
    width: 100%;
    height: auto;
    display: block;
    transition: opacity 0.3s ease;
}

.image-wrapper img.hover-img {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
}

.collection-item:hover .image-wrapper img.hover-img {
    opacity: 1;
}

.collection-item .name {
    margin: 10px 0;
    font-size: 16px;
    font-weight: bold;
    color: #333;
}

.collection-item .price {
    color: #777;
    font-size: 14px;
}


        /* Testimonials Section */
        .testimonials {
            background-color: #f5f5f5;
            padding: 40px 20px;
            text-align: center;
        }

        .testimonials h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .testimonials-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .testimonial-item {
            max-width: 300px;
            text-align: center;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .testimonial-item img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .testimonial-item p {
            font-size: 14px;
            color: #555;
        }

        .testimonial-item .name {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .owl-carousel .item img {
            width: 100%;
            height: 520px;
            display: block;
        }

    </style>

<style>
  /* General product card styling */
  .product-card {
    text-align: center;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    transition: transform 0.3s ease;
  }

  .product-card:hover {
    transform: translateY(-10px);
  }

  /* Image container */
  .image-container {
    position: relative;
    width: 100%;
    height: 200px;
  }

  /* Default image styling */
  .default-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: opacity 0.3s ease;
  }

  /* Hover image styling */
  .hover-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  /* Show hover image on hover */
  .product-card:hover .hover-image {
    opacity: 1;
  }

  /* Hide default image on hover */
  .product-card:hover .default-image {
    opacity: 0;
  }

  /* Badge styling */
  .badge {
    position: absolute;
    top: 10px;
    left: 10px;
    padding: 5px 10px;
    background-color: red;
    color: #fff;
    font-size: 12px;
    border-radius: 3px;
  }
 

  /* Color options styling */
  .color-options {
    display: flex;
    justify-content: center;
    gap: 5px;
    margin-top: 10px;
  }

  .color-options span {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    display: inline-block;
  } 
  .carousel-inner {
    padding: 20px;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
  } 

.product-slider .product-card {
  text-align: center;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.product-slider img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.product-slider .badge {
  position: absolute;
  top: 10px;
  left: 10px;
  background: #ff5e57;
  color: #fff;
  padding: 5px 10px;
  border-radius: 5px;
}
</style>
 
<style>
/* Add space between the links */
.custom-nav li {
    margin: 0 15px; /* Adjust the margin to set gap between items */
}

/* Remove the default blue color and underline from links */
.custom-nav a {
    color: #333; /* Replace with your desired text color */
    text-decoration: none; 
}

/* Styling for the active link */
.custom-nav a.active {
    color: black; /* Highlight active link in orange (or your choice) */
    border-bottom: .5px solid black; /* Optional: Bottom border to highlight */
    padding-bottom: 2px; /* Adjust spacing */
}

/* Add hover effect */
.custom-nav a:hover {
    color: black; /* Change color on hover */
}
</style>

<style>
  /* Show dropdown on hover */
  .nav-item.dropdown:hover .dropdown-menu {
    display: block;
  }

  /* Add underline effect to dropdown items */
  .dropdown-item {
    transition: all 0.3s ease-in-out;
  }

  .dropdown-item:hover {
    text-decoration: underline;
    color: #ff9900; /* You can change the color of the text on hover */
  }

  /* Ensure dropdown menu is hidden by default */
  .dropdown-menu {
    display: none;
  }

  /* Optional: Adds spacing between the icons in the navbar */
  .navbar-nav .nav-item a {
    margin-right: 15px; /* You can adjust this value as needed */
  }

  .product-card {
  text-align: center;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 15px;
  transition: all 0.3s ease-in-out;
  position: relative;
}

.badge {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: #ff6f61;
  color: #fff;
  padding: 5px 10px;
  border-radius: 10px;
  font-size: 12px;
}

.image-container {
  position: relative;
  height: 200px;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: opacity 0.3s ease-in-out;
}

.image-container img.hover-image {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.image-container:hover img.hover-image {
  opacity: 1;
}

.product-pricing del {
  color: #999;
  margin-right: 10px;
}

.color-options {
  justify-content: center;
  gap: 5px;
}

.color-circle {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 1px solid #ddd;
  cursor: pointer;
}

.color-more {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f0f0f0;
  color: #333;
  font-size: 12px;
}

</style>
<style>
    .footer {
      background-color: #e7c8b2;
      color:  solid #c29958;
      padding: 40px 20px;
    }
    .footer a {
      color: black;
      text-decoration: none;
    }
    .footer a:hover {
      text-decoration: underline;
    }
    .footer .newsletter input[type="email"] {
      border: none;
      padding: 10px;
      width: 100%;
      margin-bottom: 10px;
    }
    .footer .newsletter button {
      width: 100%;
      background-color: brown;
      color: black;
      border: none;
      padding: 10px;
    }
  </style>

</head>
<body>

<!-- Top Section -->
<div class="shining-gold text-center py-1">
  <div class="container d-flex align-items-center justify-content-center gap-3">
    <span class="promo-text">Get 30% off for Summer Collections</span>
    <div class="countdown d-flex gap-3">
      <div>
        <strong>00</strong> <br>DAYS
      </div>
      <div>
        <strong>00</strong> <br>HOURS
      </div>
      <div>
        <strong>00</strong> <br>MINS
      </div>
      <div>
        <strong>00</strong> <br>SECS
      </div>
    </div>
    <a href="#" class="btn btn-sm btn-warning">Shop Now</a>
  </div>
</div>





<!-- Bottom Section -->
<div class="bottom-section">
  <div class="container">
    <span>Welcome to Corano Jewellery online store</span>
    <div>
      <select class=" " aria-label="Currency Selector">
        <option value="USD" selected>United States (USD $)</option>
        <option value="EUR">Europe (EUR €)</option>
      </select>
      <select class=" " aria-label="Language Selector">
        <option value="en" selected>English</option>
        <option value="fr">French</option>
      </select>
    </div>
  </div>
</div>
  

<nav class="navbar navbar-expand-lg bg-white shadow-sm">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#" style="color: black;">
      <strong class="fs-4"><h1>Corano</h1></strong>
      
    </a>

    <!-- Toggler Button for Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mx-auto">
    <li class="nav-item">
      <a class="nav-link active text-dark" href="#">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Shop
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Clothing</a></li>
        <li><a class="dropdown-item" href="#">Accessories</a></li>
        <li><a class="dropdown-item" href="#">Shoes</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Product</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Pages</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Contact Us</a>
    </li>
  </ul>

  <!-- Icons -->
  <div class="d-flex align-items-center">
    <a href="#"  class="me-3 text-dark"><i class="fa-solid fa-magnifying-glass"></i></a>
    <a href="#" class="me-3 text-dark"><i class="fa-regular fa-user"></i></a>
    <a href="#" class="me-3 text-dark"><i class="fa-regular fa-heart"></i></a>
    <a href="#" class="me-3 position-relative text-dark">
    <i class="fa-solid fa-cart-shopping"></i>
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
        0
      </span>
    </a>
  </div>
</div>


  </div>
</nav>

  

<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="images/a11.jpg" alt="Image 1">
    </div> 
    <div class="item">
        <img src="images/a12.jpg" alt="Image 1">
    </div> 
    <div class="item">
        <img src="images/a13.jpg" alt="Image 1">
    </div> 
</div>

 
  <div id="shopify-section-template--15704650678350__1625918594dffbc2ab" class="shopify-section my-5">
    <div class="service-policy" id="section-template--15704650678350__1625918594dffbc2ab">
    <div class="container">
      <div class="cont">
        <div class="row mtn-30">
          <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <div class="policy-item">
              <div class="policy-icon">
                <i class="pe-7s-plane"></i>
              </div>
              <div class="policy-content">
                <h6>Free Shipping</h6>
                <p>Free shipping on all orders</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <div class="policy-item">
              <div class="policy-icon">
                <i class="pe-7s-help2"></i>
              </div>
              <div class="policy-content">
                <h6>Support 24/7</h6>
                <p>Support available 24 hours a day</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <div class="policy-item">
              <div class="policy-icon">
                <i class="pe-7s-back"></i>
              </div>
              <div class="policy-content">
                <h6>Money Return</h6>
                <p>30 days for free returns</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3">
            <div class="policy-item">
              <div class="policy-icon">
                <i class="pe-7s-credit"></i>
              </div>
              <div class="policy-content">
                <h6>100% Payment Secure</h6>
                <p>We ensure secure payment</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
 
  <div class="text-center mb-4 mt-5">
  <h2>Our Products</h2>
  <p>Add our products to your weekly lineup</p>

  <!-- Product Tab Menu Style for Buttons -->
  <div class="product-tab-menu mt-3 mb-0">
    <ul class="nav justify-content-center custom-nav">
        <li>
            <a class="active" href="#" style="cursor: pointer;">Shop Now</a>
        </li>
        <li>
            <a href="#" style="cursor: pointer;">New Arrivals</a>
        </li>
        <li>
            <a href="#" style="cursor: pointer;">Best Sellers</a>
        </li>
        <li>
            <a href="#" style="cursor: pointer;">On Sale</a>
        </li>
    </ul>
</div>

</div>

<div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner ">
    <!-- Slide 1 -->
   <div class="carousel-item active">
            <div class="row">
            <!-- Product Card 1 -->
            <div class="col-md-3">
            <div class="product-card">
                <!-- Sale Badge -->
                <div class="badge badge-sale">-15%</div>
                <!-- Product Image -->
                <div class="image-container position-relative">
                <img src="images/w2.jpg" alt="Product Image" class="img-fluid default-image">
                <img src="images/w1.jpg" alt="Hover Image" class="img-fluid hover-image">
                </div>
                <!-- Product Info -->
                <p class="text-muted mt-2">Type 1</p>
                <h6 class="product-title">New and Sale Badge Product</h6>
                <p class="product-pricing">
                <del>$130.00</del> <strong class="text-warning">$110.00</strong>
                </p>
                <!-- Color Options -->
                <div class="color-options d-flex mt-2">
                <div class="color-circle" style="background-color: red;"></div>
                <div class="color-circle" style="background-color: green;"></div>
                <div class="color-circle" style="background-color: blue;"></div>
                <div class="color-circle" style="background-color: yellow;"></div>
                <div class="color-circle color-more">+1</div>
                </div>
            </div>
            </div>
        <!-- 2222 -->
                <div class="col-md-3">
                    <div class="product-card">
                <!-- Sale Badge -->
                <div class="badge badge-sale">-15%</div>
                <!-- Product Image -->
                <div class="image-container position-relative">
                <img src="images/w2.jpg" alt="Product Image" class="img-fluid default-image">
                <img src="images/w1.jpg" alt="Hover Image" class="img-fluid hover-image">
                </div>
                <!-- Product Info -->
                <p class="text-muted mt-2">Type 1</p>
                <h6 class="product-title">New and Sale Badge Product</h6>
                <p class="product-pricing">
                <del>$130.00</del> <strong class="text-warning">$110.00</strong>
                </p>
                <!-- Color Options -->
                <div class="color-options d-flex mt-2">
                <div class="color-circle" style="background-color: red;"></div>
                <div class="color-circle" style="background-color: green;"></div>
                <div class="color-circle" style="background-color: blue;"></div>
                <div class="color-circle" style="background-color: yellow;"></div>
                <div class="color-circle color-more">+1</div>
                </div>
            </div>
            </div>

            <!-- 33333 -->
            <div class="col-md-3">
            <div class="product-card">
                <!-- Sale Badge -->
                <div class="badge badge-sale">-15%</div>
                <!-- Product Image -->
                <div class="image-container position-relative">
                <img src="images/w2.jpg" alt="Product Image" class="img-fluid default-image">
                <img src="images/w1.jpg" alt="Hover Image" class="img-fluid hover-image">
                </div>
                <!-- Product Info -->
                <p class="text-muted mt-2">Type 1</p>
                <h6 class="product-title">New and Sale Badge Product</h6>
                <p class="product-pricing">
                <del>$130.00</del> <strong class="text-warning">$110.00</strong>
                </p>
                <!-- Color Options -->
                <div class="color-options d-flex mt-2">
                <div class="color-circle" style="background-color: red;"></div>
                <div class="color-circle" style="background-color: green;"></div>
                <div class="color-circle" style="background-color: blue;"></div>
                <div class="color-circle" style="background-color: yellow;"></div>
                <div class="color-circle color-more">+1</div>
                </div>
            </div>
            </div>  
            <!-- 44444 -->

            <div class="col-md-3">
            <div class="product-card">
                <!-- Sale Badge -->
                <div class="badge badge-sale">-15%</div>
                <!-- Product Image -->
                <div class="image-container position-relative">
                <img src="images/w2.jpg" alt="Product Image" class="img-fluid default-image">
                <img src="images/w1.jpg" alt="Hover Image" class="img-fluid hover-image">
                </div>
                <!-- Product Info -->
                <p class="text-muted mt-2">Type 1</p>
                <h6 class="product-title">New and Sale Badge Product</h6>
                <p class="product-pricing">
                <del>$130.00</del> <strong class="text-warning">$110.00</strong>
                </p>
                <!-- Color Options -->
                <div class="color-options d-flex mt-2">
                <div class="color-circle" style="background-color: red;"></div>
                <div class="color-circle" style="background-color: green;"></div>
                <div class="color-circle" style="background-color: blue;"></div>
                <div class="color-circle" style="background-color: yellow;"></div>
                <div class="color-circle color-more">+1</div>
                </div>
            </div>
            </div>
            <!-- Additional product cards can follow the same structure -->
        </div>
  </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="row">
        <!-- Product Card 3 -->
        <div class="col-md-3">
            <div class="product-card">
                <!-- Sale Badge -->
                <div class="badge badge-sale">-15%</div>
                <!-- Product Image -->
                <div class="image-container position-relative">
                <img src="images/w2.jpg" alt="Product Image" class="img-fluid default-image">
                <img src="images/w1.jpg" alt="Hover Image" class="img-fluid hover-image">
                </div>
                <!-- Product Info -->
                <p class="text-muted mt-2">Type 1</p>
                <h6 class="product-title">New and Sale Badge Product</h6>
                <p class="product-pricing">
                <del>$130.00</del> <strong class="text-warning">$110.00</strong>
                </p>
                <!-- Color Options -->
                <div class="color-options d-flex mt-2">
                <div class="color-circle" style="background-color: red;"></div>
                <div class="color-circle" style="background-color: green;"></div>
                <div class="color-circle" style="background-color: blue;"></div>
                <div class="color-circle" style="background-color: yellow;"></div>
                <div class="color-circle color-more">+1</div>
                </div>
            </div>
            </div>
        <!-- Product Card 4 -->
        <div class="col-md-3">
            <div class="product-card">
                <!-- Sale Badge -->
                <div class="badge badge-sale">-15%</div>
                <!-- Product Image -->
                <div class="image-container position-relative">
                <img src="images/w2.jpg" alt="Product Image" class="img-fluid default-image">
                <img src="images/w1.jpg" alt="Hover Image" class="img-fluid hover-image">
                </div>
                <!-- Product Info -->
                <p class="text-muted mt-2">Type 1</p>
                <h6 class="product-title">New and Sale Badge Product</h6>
                <p class="product-pricing">
                <del>$130.00</del> <strong class="text-warning">$110.00</strong>
                </p>
                <!-- Color Options -->
                <div class="color-options d-flex mt-2">
                <div class="color-circle" style="background-color: red;"></div>
                <div class="color-circle" style="background-color: green;"></div>
                <div class="color-circle" style="background-color: blue;"></div>
                <div class="color-circle" style="background-color: yellow;"></div>
                <div class="color-circle color-more">+1</div>
                </div>
            </div>
            </div>

            <div class="col-md-3">
            <div class="product-card">
                <!-- Sale Badge -->
                <div class="badge badge-sale">-15%</div>
                <!-- Product Image -->
                <div class="image-container position-relative">
                <img src="images/w2.jpg" alt="Product Image" class="img-fluid default-image">
                <img src="images/w1.jpg" alt="Hover Image" class="img-fluid hover-image">
                </div>
                <!-- Product Info -->
                <p class="text-muted mt-2">Type 1</p>
                <h6 class="product-title">New and Sale Badge Product</h6>
                <p class="product-pricing">
                <del>$130.00</del> <strong class="text-warning">$110.00</strong>
                </p>
                <!-- Color Options -->
                <div class="color-options d-flex mt-2">
                <div class="color-circle" style="background-color: red;"></div>
                <div class="color-circle" style="background-color: green;"></div>
                <div class="color-circle" style="background-color: blue;"></div>
                <div class="color-circle" style="background-color: yellow;"></div>
                <div class="color-circle color-more">+1</div>
                </div>
            </div>
            </div>

            <div class="col-md-3">
            <div class="product-card">
                <!-- Sale Badge -->
                <div class="badge badge-sale">-15%</div>
                <!-- Product Image -->
                <div class="image-container position-relative">
                <img src="images/w2.jpg" alt="Product Image" class="img-fluid default-image">
                <img src="images/w1.jpg" alt="Hover Image" class="img-fluid hover-image">
                </div>
                <!-- Product Info -->
                <p class="text-muted mt-2">Type 1</p>
                <h6 class="product-title">New and Sale Badge Product</h6>
                <p class="product-pricing">
                <del>$130.00</del> <strong class="text-warning">$110.00</strong>
                </p>
                <!-- Color Options -->
                <div class="color-options d-flex mt-2">
                <div class="color-circle" style="background-color: red;"></div>
                <div class="color-circle" style="background-color: green;"></div>
                <div class="color-circle" style="background-color: blue;"></div>
                <div class="color-circle" style="background-color: yellow;"></div>
                <div class="color-circle color-more">+1</div>
                </div>
            </div>
            </div>


      </div> 
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


 
<div class="gallery-container">
    <button class="gallery-button left">&#10094;</button>
    <div class="gallery">
        <div class="gallery-item">
            <img src="images/w1.jpg" alt="Earrings" class="gallery-image">
            <div class="caption">EARRINGS</div>
        </div>
        <div class="gallery-item">
            <img src="images/w2.jpg" alt="Pearls" class="gallery-image">
            <div class="caption">PEARLS</div>
        </div>
        <div class="gallery-item">
            <img src="images/w3.jpg" alt="Bracelets" class="gallery-image">
            <div class="caption">BRACELETS</div>
        </div>
        <div class="gallery-item">
            <img src="images/w4.jpg" alt="Rings" class="gallery-image">
            <div class="caption">RINGS</div>
        </div>
        <div class="gallery-item">
            <img src="images/w5.jpg" alt="Bracelets" class="gallery-image">
            <div class="caption">BRACELETS</div>
        </div>
        <div class="gallery-item">
            <img src="images/w4.jpg" alt="Rings" class="gallery-image">
            <div class="caption">RINGS</div>
        </div>
    </div>
    <button class="gallery-button right">&#10095;</button>
</div> 

 <body>
    <!-- Header Section -->
      <div class="header">
          <h1>Jewelry Collection</h1>
          <p>Discover our exquisite range of jewelry that complements your style.</p>
      </div>

    <!-- Featured Section -->
  <div class='row justify-content-center '>
      <div class="col-4 w-10">
          <div class="featured-item ">
                  <img src="images/w1.jpg" alt="Wedding Rings">
                  
              </div>
              <div class="featured-item mt-3">
                  <img src="images/wed.jpg" alt="Pearl Necklaces">
                  
              </div>
      </div>
      <div class="col-4 w-10">
              <div class="featured-item">
                  <img src="https://via.placeholder.com/300x300" alt="Wedding Rings">
                  
              </div>
              <div class="featured-item  mt-3">
                  <img src="https://via.placeholder.com/300x300" alt="Pearl Necklaces">
                  
              </div>
      </div>
 </div> 

    <!-- Collection Section --> 

    <div class="collection">
        <h2>Featured Collection</h2>
    <p>Add our products to your weekly lineup</p>

    <div class="collection-grid">
    <div class="collection-item">
        <div class="image-wrapper">
            <img src="images/a.jpg" alt="Ring" class="base-img">
            <img src="images/a2.jpg" class="hover-img" alt="Ring Hover">
        </div>
        <div class="name">Elegant Ring</div>
        <div class="price">$199</div>
    </div>
    <div class="collection-item">
        <div class="image-wrapper">
            <img src="images/a2.jpg" alt="Bracelet" class="base-img">
            <img src="images/a.jpg" class="hover-img" alt="Bracelet Hover">
        </div>
        <div class="name">Stylish Bracelet</div>
        <div class="price">$149</div>
    </div>
    <div class="collection-item">
        <div class="image-wrapper">
            <img src="images/a.jpg" alt="Earrings" class="base-img">
            <img src="images/a2.jpg" class="hover-img" alt="Earrings Hover">
        </div>
        <div class="name">Classic Earrings</div>
        <div class="price">$99</div>
    </div>
    <div class="collection-item">
        <div class="image-wrapper">
            <img src="https://via.placeholder.com/200" alt="Necklace" class="base-img">
            <img src="images/a.jpg" class="hover-img" alt="Necklace Hover">
        </div>
        <div class="name">Modern Necklace</div>
        <div class="price">$249</div>
    </div>
    <!-- Add other items here -->
</div>

    </div>

    <!-- Testimonials Section -->
    <div class="testimonials">
        <h2>Testimonials</h2>
        <div class="testimonials-grid">
            <div class="testimonial-item">
                <img src="https://via.placeholder.com/80" alt="User">
                <p>"Beautiful designs and excellent quality. I loved my necklace!"</p>
                <div class="name">Jane Doe</div>
            </div> 
        </div>
    </div>


<!-- FOOTER H -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- Section 1: About -->
      <div class="col-lg-3 col-md-6 mb-4">
        <img src="images/logo_150x.png" alt="Corano Logo" class="mb-3">
        <p>We are a team of designers and developers that create high-quality WordPress, Shopify, and OpenCart solutions.</p>
      </div>

      <!-- Section 2: Contact Us -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5>Contact Us</h5>
        <ul class="list-unstyled">
          <li><i class="fas fa-home"></i> 4710-4890 Breckinridge, USA</li>
          <li><i class="fas fa-envelope"></i> demo@yourdomain.com</li>
          <li><i class="fas fa-phone"></i> (012) 800 456 789-987</li>
        </ul>
      </div>

      <!-- Section 3: Information -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5>Information</h5>
        <ul class="list-unstyled">
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Refund Policy</a></li>
          <li><a href="#">Shipping Policy</a></li>
          <li><a href="#">FAQs</a></li>
        </ul>
      </div>

      <!-- Section 4: Follow Us -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5>Follow Us</h5>
        <div class="social-icons">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-vimeo"></i></a>
        </div>
        <div class="mt-3">
          <a href="#"><img src="images/apple.jpg" alt="App Store"></a>
          <a href="#"><img src="images/google.jpg" alt="Google Play"></a>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-12 text-center"> 

        <img src="images/payment.jpg" alt="Payment Methods" class="img-fluid">
      </div>
    </div>

    <div class="row border-top pt-3">
      <div class="col-md-6">
        <p>© 2021 HasThemes | Built with Corano by HasThemes.</p>
      </div>
      <div class="col-md-6 text-end">
        <a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a>
      </div>
    </div>
  </div>
</footer>




</body>

@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
  .product-card img {
transition: transform 0.3s ease, opacity 0.3s ease;
}

.product-card:hover img {
transform: scale(1.05);
}

</style>

<script>
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        nav: true, // Enable navigation arrows
        responsive: {
            10: {
                items: 1 // Show 1 item for small screens
            },
            
        }
    });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
let currentIndex = 0; // Current index of the gallery items
const itemsToShow = 5; // Number of items to show
const gallery = document.querySelector('.gallery');
const totalItems = document.querySelectorAll('.gallery-item').length;

// Function to update the gallery position based on current index
function updateGallery() {
const offset = -(currentIndex * 335); // Calculate the new offset
gallery.style.transform = `translateX(${offset}px)`;
}

// Event listeners for the buttons
document.querySelector('.left').addEventListener('click', () => {
if (currentIndex > 0) {
    currentIndex--;
    updateGallery();
}
});

document.querySelector('.right').addEventListener('click', () => {
if (currentIndex < totalItems - itemsToShow) {
    currentIndex++;
    updateGallery();
}
});

// Initially set the gallery position
updateGallery();
</script>
@endpush  