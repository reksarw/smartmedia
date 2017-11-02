<div class="about">
	<div class="container">
		<h1>Register<span class="m_1"><br>Center</span></h1>
	</div>
</div>
<div class="account_grid">
	<div class="container">
		<div class="register">
		<?php if($this->session->flashdata("message") != "") { ?>
				<div class="alert alert-danger">
                    <button class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata("message");?>
                </div>
		<?php		}		?>
		<form action="<?php echo base_url("auth/register");?>" method="post"> 
			<div class="register-top-grid">
				<h4 class="tz-title-5 tzcolor-blue">
                	<p class="tzweight_Bold"><span class="m_20">Personal Information</span></p>
                </h4>
				<div>
					<span class="m_25">First Name<label>*</label></span>
					<input type="text" name="first_name" autocomplete="off" /> 
				</div>
				<div>
					<span class="m_25">Last Name<label>*</label></span>
					<input type="text" name="last_name" autocomplete="off" /> 
				</div>
				<div>
					<span class="m_25">Email Address<label>*</label></span>
					<input type="text" name="email" autocomplete="off" /> 
				</div>
				<div class="clearfix"> </div>
					<a class="news-letter" href="#">
					<label class="checkbox"><input type="checkbox" name="newsletter" checked=""><i> </i>Sign Up for Newsletter</label>
				</a>
				</div>

				<div class="register-bottom-grid">
					<h4 class="tz-title-5 tzcolor-blue">
                        <p class="tzweight_Bold"><span class="m_20">Login Information</span></p>
                    </h4>
					<div>
						<span class="m_25">Password<label>*</label></span>
						<input type="password" name="password">
					</div>
					<div>
						<span class="m_25">Confirm Password<label>*</label></span>
						<input type="password" name="confirm_password">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="one-fifth">
					<div class="clearfix"> </div>
					<input type="submit" value="submit" name="submit">
					<div class="clearfix"> </div>
				</div>
			</div>
		</form>
		</div>
    </div>
</div>
<div class="domain">
	<div class="container">
		<div class="search-form domain-search">
			<div class="two-fifth signup column first">
		    	<img src="<?php echo base_url("assets");?>/images/msg.png" alt="">
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
</div>