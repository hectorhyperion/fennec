 
<?php echo validation_errors(); ?>

<?php echo form_open('register/signup/register'); ?>
<div class="container" style="" >
  <h2 class="form-heading"> Fennec Register</h2>
 
      <p>Enter your personal details below</p>
      <input type="text" class="form-control" name="fullname" placeholder="Full Name" autofocus="">

      <input type="text" class="form-control" name="address" placeholder="Address" autofocus="">

      <input type="text" class="form-control" name="email" placeholder="Email" autofocus="">

      <input type="text" class="form-control" name="city/town" placeholder="City/Town" autofocus="">

       <br>

    <p> Enter your account details below</p>
    <br>
      <input type="text" class="form-control" name="username" placeholder="User Name" autofocus="">

      <input type="password" class="form-control" name="password" placeholder="Password">

      <input type="password" class="form-control" name="confirm_password" placeholder="Re-type Password">

      <label class="checkbox-custom check-success">

          <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label>
      </label>

      <button class="btn btn-lg btn-success btn-block" type="submit">Submit</button>
      <div class="registration">
          Already Registered.
          <a class="" href="<?php echo site_url('login/login')?>">
              Login
          </a>
      </div></div>
<?php echo form_close(); ?>
   