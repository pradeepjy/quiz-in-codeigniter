<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

</br>

   <div class="row">
    <div class="col-sm-2" ></div>
    <div class="col-sm-4" >
    </div>
    <div class="col-sm-4" >
        <form  method="post" target="_blank" action="<?php echo base_url('test/start_quiz'); ?>">
		  <select class="form-control" id="" name="cat">
		  <option>select category</option>
		  <?php foreach ($catagory as  $cat)
		   {
		  ?>
		  <option value="<?php echo $cat['id']; ?>"><?php echo $cat['cat_name']; ?></option>
		  <?php
		}
		?>
		</select>
		<input type="submit" name="submit" class="btn btn-info">
	</form>	
    </div>
    <div class="col-sm-2" >
    </div>
  </div>
<?php $this->load->view('footer'); ?>