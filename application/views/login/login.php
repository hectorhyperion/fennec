 <?php $this->load->view('login/header'); ?>
	  <form method="post" action="<?php echo site_url('login/login/verify')?>" >
		<input type="text" class="text" placeholder="username" name="username">
		<input type="password" placeholder="password" name="password">
		<div class="submit"><input type="submit"  value="submit"></div>
		<div class="login-social-link">
          <a href="#" class="facebook">
              Facebook
          </a>
          <a href="#" class="twitter">
              Twitter
          </a>
           
        </div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="<?php echo site_url('register/signup')?>"> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
  <?php $this->load->view('login/footer'); ?>
  