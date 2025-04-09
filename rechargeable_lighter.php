<!DOCTYPE HTML>
<html>
     <head>
	      <title> SSQ </title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
		  
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
		  <script src="https://kit.fontawesome.com/4e47c08a66.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js">
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fleur+De+Leah&family=Splash&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
        
				  <link rel="stylesheet" href="CSS/icofont/icofont.min.css">


          <link type = "text/css" rel = "stylesheet" href = "CSS/rechargeable_lighter_style.css">
          <link type = "text/css" rel = "stylesheet" href = "CSS/nav_menu_style.css">
		  
     </head>
	 <body>
          <?php include "nav_menu.php"; ?>
		  
		  <section class = "first_section">
		          <div class = "first_section_content">
				      <h1 class = "first_section_heading"> PRODUCT DETAILS </h1>
				  </div>
		  </section>
		  
		  <section class = "second_section">
		          <div class = "second_section_content">
				      <div class = "second_section_flex">
					  
					      <div class = "alpha_item">
						  
						  
						      <div class = "right_alpha_item">
							      
								      <div class = "product_image">
						                  <img src = "IMAGES/486745530_9604470506265835_6793889254171751685_n.jpg" class = "img-fluid product_image_A">
									  </div>
                                      <div class = "product_image"> 									  
							              <img src = "IMAGES/486506217_9604470496265836_1131203621356291302_n.jpg" class = "img-fluid product_image_B">
									  </div>
								      <div class = "product_image">
							              <img src = "IMAGES/486366936_9604470206265865_1598027233899149521_n.jpg" class = "img-fluid product_image_C">
									  </div>
									  
								      <div class = "product_image">
							              <img src = "IMAGES/486412249_9604470229599196_7393732929053646233_n.jpg" class = "img-fluid product_image_D">
									  </div>
 
                                     <div class = "product_small_images">
                                          <img src = "IMAGES/486745530_9604470506265835_6793889254171751685_n.jpg" class = "small_image" onClick = "current_Slides(1)">
                                          <img src = "IMAGES/486506217_9604470496265836_1131203621356291302_n.jpg" class = "small_image" onClick = "current_Slides(2)">
                                          <img src = "IMAGES/486366936_9604470206265865_1598027233899149521_n.jpg" class = "small_image" onClick = "current_Slides(3)">
                                          <img src = "IMAGES/486412249_9604470229599196_7393732929053646233_n.jpg" class = "small_image" onClick = "current_Slides(4)">
                                      </div>
 
								 
								  
								      <div class = "image_nav">
									      <button class = "prev_img_btn" onClick = "plus_Slides(-1)"> <i class="fas fa-angle-left"></i> </button>
									      <button class = "next_img_btn" onClick = "plus_Slides(1)"> <i class="fas fa-angle-right"></i> </button>
									  </div>
						      </div>
							  
							  
						      <div class = "left_alpha_item">
						          <h2 class ="product_name"> Rechargeable Lighter </h1>
							      <div class = "product_description">
							          <p> Can be used for </p>
							    	  <ul>
							    	     <li> for gas cookers </li>
                                         <li> for candles </li>
                                         <li> etc </li>
							    	  </ul>
							      </div>
							      <p class = "product_price"> &#8358;10,000 </p>

								  
								  
								  
						      </div>
							  
							  
						  </div>
						  
						  <div class = "beta_item">
						      <h2 class = "delivery_heading"> DELIVERY </h2>
						      <p> Delivery is from Lagos to any state of the federation </p>
							  <p> Delivery takes between 2 to 3days </p>
						  </div>
						  
						  
					  </div>
				  </div>
		  </section>
		  
		  <script src = "rechargeable_lighter_script.js"> </script>
	 </body>
</html>	 