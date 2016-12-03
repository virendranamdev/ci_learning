<div class="col-lg-5 col-offset-sm-4">
	<div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Login Registered User</h3>
            </div>
            <div class="panel-body">
              <form method="post" name="reg_from" action="welcome/register_user" role="form">
	 
	    <div class="form-group">
			<span style="color:red;">	<?php echo form_error('uid'); ?></span>
		  <div class="col-lg-2">   <lebel for='name'>User ID</lebel></div>
			
		  <div class="col-lg-9">   <input type="text" name="uid" value="<?php echo set_value('uid'); ?>" class="form-control" /></div>
	   </div>
	    <br/><br/>
	    <div class="form-group">
			<?php echo form_error('pass'); ?>
		  <div class="col-lg-2">   <lebel for='name'>Password</lebel></div>
		  <div class="col-lg-9">   <input type="password" name="pass"  class="form-control" /></div>
	   </div>
	   <br/><br/>
	    
	    <div class="form-group">
		  <div class="col-lg-12 text-center">   <input type="submit" value="Login" name="submit" class="btn btn-success">
		  <input type="reset" name='reset' class=" btn btn-danger" /></div>
	   </div>
	   
		</form>
            </div>
          </div>
	
</div>
	
	
	
