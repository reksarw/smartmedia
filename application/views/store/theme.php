<div class="about">
	<div class="container">
		<h1>Theme<span class="m_1"><br>Default Template</span></h1>
	</div>
</div>
<div class="about_grid">
	<div class="container"> 
		<h4 class="tz-title-4 tzcolor-blue">
            <p class="tzweight_Bold"><span class="m_1">We Provide Many<br></span>Templates</p>
        </h4>
        <?php 
            $counter = 0;
                foreach($theme as $them){
            $counter++;
        ?>      
		<div class="col-md-4">
			<div class="theme-img">
				<img src="../<?php echo $them["preview_1"]?>">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(1)" class="hover-shadow">Preview</a>
			</div>
		</div>
		<?php }?>
		<!-- <div class="col-md-4 themebox">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/2.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(2)" class="hover-shadow">Review</a>
			</div>
		</div>
		<div class="col-md-4 themebox">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/3.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(3)" class="hover-shadow">Review</a>
			</div>
		</div>
		<div class="col-md-4 themebox">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/4.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(4)" class="hover-shadow">Review</a>
			</div>
		</div>
		<div class="col-md-4 themebox">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/5.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(5)" class="hover-shadow">Review</a>
			</div>
		</div>
		<div class="col-md-4 themebox">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/6.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(6)" class="hover-shadow">Review</a>
			</div>
		</div>
		<div class="col-md-4 themebox">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/7.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(7)" class="hover-shadow">Review</a>
			</div>
		</div>
		<div class="col-md-4 themebox">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/8.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(8)" class="hover-shadow">Review</a>
			</div>
		</div>
		<div class="col-md-4 themebox">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/9.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(9)" class="hover-shadow">Review</a>
			</div>
		</div>
		<div class="col-md-4 themebox">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/10.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(10)" class="hover-shadow">Review</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/11.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(11)" class="hover-shadow">Review</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="theme-img">
				<img src="<?php echo base_url("assets");?>/images/12.jpg">
			</div>
			<div class="theme-btn">
				<h4>Sweetsop </h4>
				<a href="#" onclick="openModal();currentSlide(12)" class="hover-shadow">Review</a>
			</div>
		</div> -->
		<div class="clearfix"> </div>
	</div>
</div>

<!-- Lightbox-->
	<div id="myModal" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
	  		<div class="modal-content">
	  			
				<div class="mySlides">
				  <div class="numbertext">1 / 3</div>
					<img src="../<?php echo $them["preview_1"]?>" style="width:100%" >
				</div>
				<div class="mySlides">
				  <div class="numbertext">1/ 3</div>
					<img src="../<?php echo $them["preview_2"]?>" style="width:100%" >
				</div>
				<div class="mySlides">
				  <div class="numbertext">1/ 3</div>
					<img src="../<?php echo $them["preview_3"]?>" style="width:100%" >
				</div>
				
				<!-- <div class="mySlides">
				  <div class="numbertext">2 / 9</div>
					<img src="<?php echo base_url("assets");?>/images/2.jpg" style="width:100%" >
				</div>
				<div class="mySlides">
					<div class="numbertext">3 / 9</div>
					<img src="<?php echo base_url("assets");?>/images/3.jpg" style="width:100%" >
				</div>
				<div class="mySlides">
				  	<div class="numbertext">4 / 9</div>
					<img src="<?php echo base_url("assets");?>/images/4.jpg" style="width:100%" >
				</div>
				
				<div class="mySlides">
				  	<div class="numbertext">5 / 9</div>
					<img src="<?php echo base_url("assets");?>/images/Sweetsop.jpg" style="width:100%" >
				</div>
				
				<div class="mySlides">
				  	<div class="numbertext">6 / 9</div>
					<img src="<?php echo base_url("assets");?>/images/Sweetsop.jpg" style="width:100%" >
				</div>
				
				<div class="mySlides">
				  	<div class="numbertext">7 / 9</div>
					<img src="<?php echo base_url("assets");?>/images/Sweetsop.jpg" style="width:100%" >
				</div>
				
				<div class="mySlides">
				  	<div class="numbertext">8 / 9</div>
					<img src="<?php echo base_url("assets");?>/images/Sweetsop.jpg" style="width:100%" >
				</div>
				
				<div class="mySlides">
				  	<div class="numbertext">9 / 9</div>
					<img src="<?php echo base_url("assets");?>/images/Sweetsop.jpg" style="width:100%" >
				</div> -->

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

				<div class="caption-container">
				  	<p id="caption"></p>
				</div>

				<div class="column-lightbox">
				  	<img class="demo" src="../<?php echo $them["preview_1"]?>" onclick="currentSlide(1)" alt="Nature">
				</div>

				<div class="column-lightbox">
				  	<img class="demo" src="../<?php echo $them["preview_2"]?>" onclick="currentSlide(2)" alt="Trolltunga">
				</div>

				<div class="column-lightbox">
				  	<img class="demo" src="../<?php echo $them["preview_3"]?>" onclick="currentSlide(3)" alt="Mountains">
				</div>

				<!-- <div class="column-lightbox">
				  	<img class="demo" src="../<?php echo $them["preview_1"]?>" onclick="currentSlide(4)" alt="Lights">
				</div> -->
	  		</div>
	</div> 


<!--div class="domain">
	<div class="container">
		<form class="search-form domain-search">
			<div class="two-fifth signup column first">
				<img src="<?php echo base_url("assets");?>/images/msg.png" alt=""/>
			    <h2><span class="m_1">Sign Up Your</span><br>Newsletter</h2>
			</div>
            <div class="three-fifth searchbar column first">
            	<input type="text" class="text" value="Enter your domain name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your domain name';}">               
            </div>
            <div class="one-fifth col_2 ">
            	<input type="submit" value="Sign Up Now">
            </div>
            <div class="clearfix"> </div>
		</form>
    </div>
</div-->



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
		function openModal() {
		  document.getElementById('myModal').style.display = "block";
		}

		function closeModal() {
		  document.getElementById('myModal').style.display = "none";
		}

		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  var captionText = document.getElementById("caption");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		  captionText.innerHTML = dots[slideIndex-1].alt;
		}
</script>