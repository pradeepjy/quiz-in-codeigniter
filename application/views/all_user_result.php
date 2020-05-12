<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<body>
	<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">College ID</th>
      <th scope="col">Total questions</th>
      <th scope="col">Attamp Question</th>
      <th scope="col">Right Question</th>
      <th scope="col">Wrong Question</th>
      <th scope="col">Leave Question</th>
      <th scope="col">Your Result</th>
      <th scope="col">Test date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($result as $resu): ?>
    <tr>
      <th><?php echo $resu['user_id']; ?></th>
      <th><?php echo $resu['college_id']; ?></th>
      <th><?php echo $resu['total_number_question']; ?></th>
      <th><?php echo $resu['attempted_questions']; ?></th>
      <th><?php echo $resu['right_result']; ?></th>
      <th><?php echo $resu['wrong_result']; ?></th>
      <th><?php echo $resu['no_result']; ?></th>
      <th><?php echo $resu['your_result']; ?></th>
      <th><?php echo $resu['test_date']; ?></th>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>



<?php $this->load->view('footer'); ?>