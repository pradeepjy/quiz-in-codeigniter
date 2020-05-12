  <?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="container">
	<label>Select Subject</label>
	<select class="form-control" onchange="myFunction()" name="cat_id" id="cat_id">
		<option>Select Subject</option>
		<?php
		foreach ($subject as $sub) 
		{
		?>
		<option data-id="<?php echo $sub['id']; ?>"><?php echo $sub['cat_name']; ?></option>
		<?php
	}
	?>
	</select>
</br>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
  		<td></td>
  		<td></td>
  		<td></td>
  		<td></td>
  		<td></td>
  	</tr>
  </tbody>
</table>
</div>
  <?php $this->load->view('footer'); ?>
