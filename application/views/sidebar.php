<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h1>OnlineQuiz</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>Dashboard">Dashbaord <span class="sr-only">(current)</span></a>
      </li>
      <?php $su=$this->session->userdata('su'); ?>
      <?php if($su=='2')
      {?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Collage
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url(); ?>college">Add collage</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>college/college_list">collage List</a>
        </div>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url(); ?>college/addstudent">Add New</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>college/student_list">Student List</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Question Bank
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url(); ?>college/add_question">Add new</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>college/question_list">Question list</a>
        </div>
      </li>
      <?php
    }
    ?>
        <li class="nav-item">
<!--         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Test
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Add new</a>
          <a class="dropdown-item" href="#">Test list</a> -->
          <a class="nav-link" href="<?php echo base_url(); ?>test">Start Test</a>
       <!--  </div> -->
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>college/user_result">Result</a>
      </li> 
      <?php if($su=='2')
      {?>
       <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>college/all_user_result">Results</a>
      </li>
      <?php
    }
    ?>
      <li class="nav-item">
        <a class="nav-link " href="#">Live Classroom</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="#">Payment History</a>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Setting 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Notification</a>
          <a class="dropdown-item" href="#">Student Group</a>
          <a class="dropdown-item" href="#">Subject List</a>
          <a class="dropdown-item" href="#">Class List</a>
          <a class="dropdown-item" href="#">Config file</a>
          <a class="dropdown-item" href="#">Custom CSS</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>login/logout">Logout</a>
      </li>
    </ul>
  </div>
</nav>