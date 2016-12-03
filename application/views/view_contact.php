<div class="col-lg-12">
	<div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"> Register New User</h3>
            </div>
            <div class="panel-body">
              <form method="post" name="reg_from" action="welcome/register_user" role="form">
	  <div class="form-group">
		  <span style="color:red;"></span><?php echo form_error('name'); ?></span>
		  <div class="col-lg-2">   <lebel for='name'> Name</lebel></div>
		  <div class="col-lg-9">   <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" /></div>
	   </div>
	   <br/><br/>
	    <div class="form-group">
			<?php echo form_error('email'); ?>
		  <div class="col-lg-2">   <lebel for='Email Id'>Email Id</lebel></div>
		  <div class="col-lg-9">   <input type="text" name="email" class="form-control" value="<?php  echo set_value('email'); ?>"/></div>
	   </div>
	    <br/><br/>
	    <div class="form-group">
			<?php echo form_error('contact'); ?>
		  <div class="col-lg-2">   <lebel for='name'>Contact</lebel></div>
		  <div class="col-lg-9">   <input type="text" name="contact" value="<?php echo set_value('contact'); ?>" class="form-control" /></div>
	   </div>
	    <br/><br/>
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
			<?php echo form_error('cpass'); ?>
		  <div class="col-lg-2">   <lebel for='name'>Confirm Password</lebel></div>
		  <div class="col-lg-9">   <input type="password" name="cpass"  class="form-control" /></div>
	   </div>
	   <br/><br/>
	    <div class="form-group">
		  <div class="col-lg-12 text-center">   <input type="submit" value="Submit" name="submit" class="btn btn-success">
		  <input type="reset" name='reset' class=" btn btn-danger" /></div>
	   </div>
	   
		</form>
            </div>
          </div>
	
</div>
	
	
	
