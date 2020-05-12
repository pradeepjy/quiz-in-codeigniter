<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<body onload="noBack();">
<div class="container">
		<?php
	$total_qus=$result['right']+$result['wrong']+$result['no_answer'];
	$attempt_qus=$result['right']+$result['wrong'];
	?>
	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Total number of Questions</th>
      <th scope="col"><?php echo $total_qus; ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Attempted qusetions</th>
      <td><?php echo $attempt_qus;?></td>
    </tr>
    <tr>
      <th>Right result</th>
      <td><?php echo $result['right'];?></td>
    </tr>
        <tr>
      <th>Wrong result</th>
      <td><?php echo $result['wrong'];?></td>
    </tr>
        <tr>
      <th>No result</th>
      <td><?php echo $result['no_answer'];?></td>
    </tr>
        </tr>
        <tr>
      <th>Your result</th>
      <td>
      	<?php 
		$per=($result['right']*100)/($total_qus);
		
		echo $per."%";
		?>
      </td>
    </tr>
    
  </tbody>
</table>
</div>
<form id="submitresult">
  <input type="hidden" name="total_number_question" value="<?php echo $total_qus; ?>">
  <input type="hidden" name="attempted_questions" value="<?php echo $attempt_qus;?>">
  <input type="hidden" name="right_result" value="<?php echo $result['right'];?>">
  <input type="hidden" name="wrong_result" value="<?php echo $result['wrong'];?>">
  <input type="hidden" name="no_result" value="<?php echo $result['no_answer'];?>">
  <input type="hidden" name="your_result" value="<?php echo $per."%"; ?>">
  <input type="submit" name="submit" style="display:none;">
</form>
<?php $this->load->view('footer'); ?>
<!-- <script>
    $( "#submitresult" ).submit(function( event ) {
      event.preventDefault();
       var str = $( "#submitresult" ).serialize();
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
</script> -->
<SCRIPT type="text/javascript">
  function noBack()
  {
    window.onbeforeunload = function() { return "Your work will be lost."; };
    document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
    // alert('pradeep');
  }
</SCRIPT>