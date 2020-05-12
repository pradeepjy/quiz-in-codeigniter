s<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
  <script type="text/javascript">
  function timeout()
  {
    console.log('hello');
    var minute=Math.floor(timeLeft/60);
    var second=timeLeft%60;
    if(timeLeft<=0)
    {
      clearTimeout(tm);
      document.theForm.requestSubmit()
    }
    else
    {
      document.getElementById("time").innerHTML=minute+":"+second;
    }
    timeLeft--;
    var tm= setTimeout(function(){timeout()},1000);
  }
  </script>
  <body onload="timeout()">
   <div class="row">
    <div class="col-sm-3" ></div>
    <div class="col-sm-6" >
    	<span>Start Quiz</span>
      <script type="text/javascript">
      var timeLeft=1*60;
      </script>
      
      <div id="time"style="float:right">timeout</div></h2>
      <form name="theForm" target="_blank" method="post" id="form1" action="<?php echo base_url(); ?>test/result">
    	<?php 
    	$i=1;
    	foreach ($qus as $qus) 
    	{
    		?>
        
   <table class="table table-borderless">
  <thead>
    <tr>
      <th><?php echo $i;?>&nbsp;<?php echo $qus['question']; ?></th>
    </tr>
  </thead>
  <tbody>
    <?php if(isset($qus['ans1'])){?>
    <tr>
      <th>1&nbsp;<input type="radio" value="0" name="<?php echo $qus['id']; ?>" name="">&nbsp;<?php echo $qus['ans1']; ?></th>
    </tr>
    <?php }?>
    <?php if(isset($qus['ans2'])){?>
        <tr>
      <th>2&nbsp;<input type="radio" value="1" name="<?php echo $qus['id']; ?>" name="">&nbsp;<?php echo $qus['ans2']; ?></th>
    </tr>
     <?php }?>
     <?php if(isset($qus['ans3'])){?>
        <tr>
      <th>3&nbsp;<input type="radio" value="2" name="<?php echo $qus['id']; ?>" name="">&nbsp;<?php echo $qus['ans3']; ?></th>
    </tr>
      <?php }?>
     <?php if(isset($qus['ans4'])){?>
        <tr>
      <th>4&nbsp;<input type="radio" value="3" name="<?php echo $qus['id']; ?>" name="">&nbsp;<?php echo $qus['ans4']; ?></th>
    </tr>
          <?php }?>
       <tr class="info">
        <td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qus['id']; ?>" /></td>
        </tr>
  </tbody>
</table>

<?php $i++;
}
?>
<input type="submit" name="submit" class="btn btn-info">
</form>

    </div>
    <div class="col-sm-3" ></div>
</div>
</div>
<?php $this->load->view('footer'); ?>