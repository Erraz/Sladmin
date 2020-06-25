
        <?php $this->load->view('admin/includes/_messages.php') ?>
         <div class="container">
          <div class="frame">

        <?php  echo form_open(base_url('admin/auth/login'), 'class="" '); ?>
		
		<div class="header">
		<h1>SuperWriters</h1>
			<h3><span>Sign in to your Account</span></h3>
		</div>
		
		<div class="form-signin">
  
          <label for="username">Username</label>
          <input class="form-styling" type="text" name="username" placeholder=""/>
          <label for="password" >Password</label>
          <input class="form-styling" type="password" name="password" placeholder=""/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
		  <p class="disclaimer">By Signing In you  agree to the terms presented in the <strong><span style ="color:#007bff">Terms and Conditions </span></strong> agreement.</p>
  </div>
      <div class="footer">
<div class="row">
                
          <div class="btn-animate">
		  <input type="submit" class="btn-signin" name="submit" Value="Sign in">
          </div>
    
        <a href="<?= base_url('admin/auth/register'); ?>" class="reg">Signup</a>
        
 </div>
 <div >
   <a href="<?= base_url('admin/auth/forgot_password'); ?>" class="reg2">I forgot my password</a>
       
   </div>  
  </div>
              

        
        <?php echo form_close(); ?>
      
      
    
      
    
  </div>
    
 
</div>



        
     
