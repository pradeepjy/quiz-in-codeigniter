  <?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<body>
 <form id="addquestion">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6" >
 	<label>Subject</label>
 	<select class="form-control" name="cat_id">
 	<option>Select Subject</option>
 	<?php 
 	foreach ($subject as $sub)
 	 {
 	?>
 	<option value="<?php echo $sub['id']; ?>"><?php echo $sub['cat_name']; ?></option>
 	<?php
 } 
 ?>
 	</select>
 	<label>Question</label>
 	<textarea class="form-control" name="question"></textarea>
 	<table class="table table-borderless">
 		<!-- <thead> -->
 		<tr>
 			<td>
			<label>Option 1</label>
 			</td>
 			<td>
 				<input type="text" name="ans1" class="form-control">
 			</td>
  			<td>
 				<input type="radio" name="ans" value="0">
 			</td>
 		</tr>
 		<tr>
 			<td>
			<label>Option 1</label>
 			</td>
 			<td>
 				<input type="text" name="ans2" class="form-control">
 			</td>
  			<td>
 				<input type="radio" name="ans" value="1">
 			</td>
 		</tr>
 		<tr>
 			<td>
			<label>Option 1</label>
 			</td>
 			<td>
 				<input type="text" name="ans3" class="form-control">
 			</td>
  			<td>
 				<input type="radio" name="ans" value="2">
 			</td>
 		</tr>
 		<tr>
 			<td>
			<label>Option 1</label>
 			</td>
 			<td>
 				<input type="text" name="ans4" class="form-control">
 			</td>
  			<td>
 				<input type="radio" name="ans" value="3">
 			</td>
 		</tr>
 	</table>
    </div>
    <div class="col-sm-3" >
    </div>
  </div>
  <center><input type="submit" name="subject" value="Submit Question" class="btn btn-info"></center>
  </form>
  <?php $this->load->view('footer'); ?>
  <script>
          $( "#addquestion" ).submit(function( event ) {
      event.preventDefault();
       var str = $( "#addquestion" ).serialize();
       jQuery.ajax({
        type: 'post',
        url: '<?php echo base_url(); ?>college/addquestion',
        data:str,
        // dataType:json,
        success: function(result) {
          alert('data insert');
        }

       })
    });
</script>