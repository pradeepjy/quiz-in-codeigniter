<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="container">
	<h3>Student List
</h3>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">First Name Last Name	</th>
      <th scope="col">Account Status</th>
      <th scope="col">Send new notification</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>


<?php $this->load->view('footer'); ?>