<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<body>
<div class="container">
	<h3>Collage List</h3>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">College Name	</th>
      <th scope="col">Account Status</th>
      <th scope="col">College ID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($college as $college)
     {
 ?>
    <tr>
      <th><?php echo $college['uid']; ?></th>
      <th><?php echo $college['email']; ?></th>
      <th><?php echo $college['collage_name']; ?></th>
      <th><?php echo $college['user_status']; ?></th>
      <th><?php echo $college['collage_id']; ?></th>
    </tr>
    <?php
  }
  ?>
  </tbody>
</table>
</div>


<?php $this->load->view('footer'); ?>