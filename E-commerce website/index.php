<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title> Online shopping site in India</title>
    <link rel="shortcut icon" type="image/png" href="icon.png" />
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta http-equip="X-UA-compatible" content="ie=edge">
 <link rel="stylesheet" href="homepage style.css">
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="topnav">
  		<a style="color:black;" class="active" href="#home">Home</a>
                <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
		</div> 
  		<div class="collapse navbar-collapse" id="navbarNav">
  		
    		<ul class="navbar-nav ml-auto">
    		 
    		 <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#featured-categories">Products</a>
      		</li>
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="cart.html">Cart</a>
			
      		</li>
      		
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#about">About Us</a>
      		</li>
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#services">Our Services</a>
      		</li>
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#contact">Contact</a>
      		</li>
      		
      		
    		</ul>
  		</div>
		</nav>


	<div class="slider">
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="images/image1.jpg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="images/image2.jpeg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
    </div>
    <div class="carousel-item">
      <img src="images/image4.jpg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
		




	<!------Featured Categories----->
	<section id="featured-categories" class="featured-categories">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<img src="images/bed5.jpg">
				</div>
				<div class="col-md-3">
				<img src="images/sofa5.jpg">
				</div>
				<div class="col-md-3">
				<img src="images/table5.jpg">
				</div>
				<div class="col-md-3">
				<img src="images/mirror5.jpg">
				</div>
				
			
			</div>
		
		</div>
	</section>
	
	
<section class="new-arrivals">
<div id="site">
	<div class="container">
		<div class="title-box">
		<h2>New Arrivals</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/mirror1.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mirror-1</h3>
			<div class="product-description" data-name="Mirror" data-price="4000">
				
				<p class="product-price">&#8377; 4000</p>
				<form class="add-to-cart" action="cart.html" method="post"><br/>
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/sofa1.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Couch</h3>
			<div class="product-description" data-name="Couch" data-price="15000">
				
				<p class="product-price">&#8377; 15000</p>
				<form class="add-to-cart" action="cart.html" method="post"><br/>
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/table1.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Table</h3>
			<div class="product-description" data-name="Table" data-price="7000">
				
				<p class="product-price">&#8377; 7000</p>
				<form class="add-to-cart" action="cart.html" method="post"><br/>
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/bed1.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Bed</h3>
			<div class="product-description" data-name="Bed" data-price="30000">
				
				<p class="product-price">&#8377; 30000</p>
	                        <form class="add-to-cart" action="cart.html" method="post"><br/>
                                
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>			

		</div>



	<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/mirror2.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mirror-1</h3>
			<div class="product-description" data-name="Mirror-1" data-price="3000">
				
				<p class="product-price">&#8377; 3000</p><br/>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/sofa2.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Couch</h3>
			<div class="product-description" data-name="Couch" data-price="30000">
				
				<p class="product-price">&#8377; 30000</p>
				<form class="add-to-cart" action="cart.html" method="post"><br/>
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/table2.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Table</h3>
			<div class="product-description" data-name="Table" data-price="4600">
				
				<p class="product-price">&#8377; 4600</p><br/>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/bed2.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Bed</h3>
			<div class="product-description" data-name="Bed" data-price="25000">
				
				<p class="product-price">&#8377; 25000</p><br/>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>	
		</div>






	</div>
</div>
</section>
	
	
<section class="on-sale">
<div id="site">
	<div class="container">
		<div class="title-box">
		<h2>On Sale</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/mirror3.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mirror-1</h3>
			<div class="product-description" data-name="Mirror-1" data-price="1200">
				
				<p class="product-price">&#8377; 1200</p><br/>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/sofa3.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Couch</h3>
			
			<div class="product-description" data-name="Couch" data-price="5000">
				
				<p class="product-price">&#8377; 5000</p><br/>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/table3.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Table</h3>
			<div class="product-description" data-name="Table" data-price="2000">
				
				<p class="product-price">&#8377; 2000</p><br/>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/bed3.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Bed</h3>
			<div class="product-description" data-name="Bed" data-price="6000">
				
				<p class="product-price">&#8377; 6000</p>
				<form class="add-to-cart" action="cart.html" method="post"><br/>
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>			

		</div>



	<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/mirror4.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mirror-1</h3>
			<div class="product-description" data-name="Mirror" data-price="1700">
				
				<p class="product-price">&#8377; 1700</p><br/>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/sofa4.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Couch</h3>
			<div class="product-description" data-name="Couch" data-price="2800">
				
				<p class="product-price">&#8377; 2800</p><br/>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/table4.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Table</h3>
			<div class="product-description" data-name="Table" data-price="2100">
				
				<p class="product-price">&#8377; 2100</p><br/>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/bed4.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Bed</h3>
			
			<div class="product-description" data-name="Bed" data-price="35000">
				
				<p class="product-price">&#8377; 35000</p><br/>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>	
		</div>






	</div>
</div>
</section>
	
	

	
	










<!------About Section------->	
	<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h2>About Us</h2>
				<div class="about-content">
				The real home furnitures is an e-commerce website that aims to provide an experience of buying furnitures with ease.This website gives an interactive shopping experience which makes it easier for the customer to shop from the leisure of there home.
This website allows the customers to explore a variety of products, create their accounts, make online payments, manage their orders and much more.


				</div></br>
			
			
			</div>
			<div class="col-md-6 skills-bar">
			<p>Delivery Rate</p>
			<div class="progress">
			<div class="progress-bar" style="width:85%;">85%</div>
			</div>
			
			<p>Customer Growth</p>
			<div class="progress">
			<div class="progress-bar" style="width:75%;">75%</div>
			</div>
			
			<p>Happy Employee</p>
			<div class="progress">
			<div class="progress-bar" style="width:90%;">90%</div>
			</div>
			
			</div>
		</div>
		
	</div>	
		
<!------Services Section------->		
	<section id="services">
	
		<div class="container">
			<h1>Our Services</h1>
			<div class="row services" >
				<div class= "col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-phone"></i>
					</div>
					<h3> 24/7 Support</h3>
					<p>on order related queries</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-shopping-cart"></i>
					</div>
					<h3> Return within 30 days</h3>
					<p>of receiving your order</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-truck"></i>
					</div>
					<h3>Get free delivery</h3>
					<p>on orders above 1500&#8377</p>
				</div>
			</div>
		</div>
	
	</section>
	

<!------COntact------------>	
<section id="contact">	
	
	<div class="container">
		<h1>Get In Touch</h1>
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Your Name..">
				</div>
				<div class="form-group">
				<input type="number" class="form-control" placeholder="Phone no.">
				</div>
				<div class="form-group">
				<input type="email" class="form-control" placeholder="Email..">
				</div>
				<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Message.."></textarea>
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-md-6 contact-info">
				<div class="follow"><b><i class="fa fa-map-marker"></i>  </b>Mith Bunder Road, Near Sadguru Garden, Kopri, Thane (E) 400603.(E)</div>
				<div class="follow"><b><i class="fa fa-mobile"></i>  </b>+91 22 2532 6085 / 7100 / 6496 / 6062 / 6088</div>
				<div class="follow"><b><i class="fa fa-envelope"></i>  </b> info@kccemsr.edu.in</div>
				
				
				<div class="follow"><label><b>Get Social </b></label>
				<a href="https://www.facebook.com/socialinfo.kc.1/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.youtube.com/channel/UCoWQSD-KlLD47LpqiSkDZkQ"><i class="fa fa-youtube-play"></i></a>
				<a href="https://twitter.com/kccemsr_social/"><i class="fa fa-twitter"></i></a>
				<a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a>
				
				</div>
			</div>
			
		</div>

	</div>

</section>

</body>
</html>	