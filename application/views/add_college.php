<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="container">
	<h3>Add College</h3>
	<!-- <table class="table"> -->
    <form id="addcollege">
    <div class="row">
    <!-- <div class="col-sm-4" style="background-color:lavender;"></div> -->
    <div class="col-sm-6">
        <!-- <div class="container"> -->
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">   
  </div>
    <div class="form-group">
    <label>Password</label>
    <input type="text" name="password" class="form-control">   
  </div>
      <div class="form-group">
    <label>Collage Name</label>
    <input type="text" name="collage_name" class="form-control">   
  </div>
      <div class="form-group">
    <label>College ID</label>
    <input type="text" name="collage_id" class="form-control">   
  </div>
  <input type="submit" name="submit" class="btn btn-success">
  
<!-- </div> -->
<!-- </div> -->
    </div>
    <div class="col-sm-5">     
     <div class="form-group">
    <label>Contact Number</label>
    <input type="text" name="contact_no" class="form-control">   
  </div>
      <div class="form-group">
    <label>Select Group</label>
    <select class="form-control" name="gid" id="gid" onchange="getexpiry();">          
    <option value="1">Free (Price: 0)</option>        
    <option value="3">Premium-1 (Price: 100)</option>     
    <option value="4">Group 3 (Price: 2500)</option>
    </select>
  </div>
      <div class="form-group">
    <label>Subscription Expired</label>
<input type="text" name="subscription_expired" id="subscription_expired" class="form-control" placeholder="Subscription Expired" autofocus="">
  </div>
      <div class="form-group">
    <label>Account type</label>
<select class="form-control" name="su">
<option value="0">Student</option>
<option value="1">Administrator</option>
</select>  
  </div></div>
  </div>
  </form>
</div>


<?php $this->load->view('footer'); ?>
<script>
          $( "#addcollege" ).submit(function( event ) {
      event.preventDefault();
       var str = $( "#addcollege" ).serialize();
       // alert(str);
       jQuery.ajax({
        type: 'post',
        url: '<?php echo base_url(); ?>college/add_collage',
        data:str,
        // dataType:json,
        success: function(result) {
          alert('data insert');
        }

       })
    });
</script>