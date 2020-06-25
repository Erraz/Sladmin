
        <?php $this->load->view('admin/includes/_messages.php') ?>
         <div class="container">
          <div class="frame">

        <?php  echo form_open(base_url('admin/auth/login'), 'class="form-signin" '); ?>
		
		<div class="form_header">
            
            
        </div>   
  
          <label for="username">Username</label>
          <input class="form-styling" type="text" name="username" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="password" placeholder=""/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
		  <p class="disclaimer">By Signing In you  agree to the terms presented in the <strong><span style ="color:#007bff">Terms and Conditions </span></strong> agreement.</p>
            <div class="erra">
          <div class="btn-animate">
		  <input type="submit" class="btn-signin" name="submit" Value="Sign in">
          </div>
		    <p class="mb-1">
          <a href="<?= base_url('admin/auth/register'); ?>" class="text-center">Register</a>
            </p>  
		 
		  </div>
	 <p class="mb-1">
          <a href="<?= base_url('admin/auth/forgot_password'); ?>">I forgot my password</a>
        </p>
        
        <?php echo form_close(); ?>
      
      
    
      
    
  </div>
    
 
</div>



        
     
