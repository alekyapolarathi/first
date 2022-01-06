<?php
session_start();
include('includes/config.php');
if(!isset($_SESSION['email'])){
    $_SESSION['msg']= "You Must Login First";
    header('location:pages-login.html');
}

?>
<!DOCTYPE html>
<html lang="en">
    

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <style type="">
        .navbar-inverse{
            background-color: #0b0454!important;
        }
        a{
            color: #fdc010!important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse bg-success navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="welcome.php">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="studentprofile.php?sid=<?php echo $_SESSION['sid'] ?>"><i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION['sname'];?></a>
                    </li>
                     <li>
                        <a href="marks.php"><i class="glyphicon glyphicon-education"></i> Marks</a>
                    </li>
                     <li>
                        <a href="attendance.php"><i class="glyphicon glyphicon-th-list"></i> Attendance</a>
                    </li>
                    
                     <li>
                        <a href="examshed.php"><i class="glyphicon glyphicon-calendar"></i> Exam Schedule</a>
                    </li>
                     <li>
                        <a href="pay.php">  <i class="glyphicon glyphicon-phone"></i> Payment</a>
                    </li>
                    <li>
                    <li>
                        <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div id="divToPrint">
    <div class="container">
        <div class="row">
          <div class="col-md-12 ">
              <header class="jumbotron hero-spacer text-center">
             <img src="admin/img/logo.png" width="200px" class="img-fluid">
            <h3>Welcome To ADIKAVI NANNAYA UNIVERSITY</h3>
            <p>Here You can pay Your Fees.</p>
           <!--  <p><a  href="logout.php" class="btn btn-primary btn-large">Logout </a> -->
            
        </header>
          </div>  
        </div>
    </div>
            <!-- Left Sidebar End -->
<!-- page starts here -->
 <div class="content-page">
    <div class="content">
      <div class="container">
          <div class="row">
              
           <div class="col-md-6 col-lg-6 offset-md-3">
                
                  <form action="pay1.php" method="post">
                      <div class="form-group">
                            <label >Student Name <span class="text-danger">*</span></label>
                             <input type="text" class="form-control" id="studentname"
                                                            placeholder="Enter Student Name" value="" name="studentname" required>
                            
                        </div>
                         <div class="form-group">
                            <label >Student Registration Number <span class="text-danger">*</span></label>
                             <input type="text" class="form-control" id="regno"
                                                            placeholder="Enter Student Registration Number" value="" name="regno" required>
                            
                        </div>
                         <div class="form-group">
                            <label >Course <span class="text-danger">*</span></label>
                            <!-- <input type="text" class="form-control" id="cid"
                                                            placeholder="Enter Course" value="" name="course" required> -->
                           <select class="form-control" name="course" required="">
                             <option selected="" disabled="">Select</option>
                             <option value="cse">CSE</option>
                             <option value="eie">EIE</option>
                             <option value="it">IT</option>
                             <option value="ece">ECE</option>
                             <option value="mech">MECH</option>
                             <option value="civil">CIVIL</option>
                           </select>
                        </div>
                        
                      
                        <div class="form-group">
                          <label>Semester<span class="text-danger">*</span></label>
                          <select class="form-control" name="semi">
                            <option selected="" disabled="">Select</option>
                            <option value="1-1">1-1</option>
                            <option value="1-2">1-2</option>
                            <option value="2-1">2-1</option>
                            <option value="2-2">2-2</option>
                            <option value="3-1">3-1</option>
                            <option value="3-2">3-2</option>
                            <option value="4-1">4-1</option>
                            <option value="4-2">4-2</option>
                          </select>
                        </div>
                        
                        <div class="form-group">
                            <label >Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="exampleInputmail"
                                                            placeholder="Enter Date during Payment" value="" name="dob" required>
                           
                        </div>
                        
                        <div class="form-group">
                          <label>Purpose<span class="text-danger">*</span></label>
                          <select class="form-control" name="pur">
                            <option selected="" disabled="">Select</option>
                            <option value="academic">Academic Fee</option>
                            <option value="semester">Semester Fee</option>
                            <option value="supplimentary">Supplimentary Fee</option>
                            <option value="Mess">Mess Fee</option>
                            <option value="bus">Bus fee</option>
                          
                          </select>
                        </div>
                     
                         <div class="form-group">
                            <label >Amount <span class="text-danger">*</span></label>
                             <input type="text" class="form-control" id="fathername"
                                                            placeholder="Enter Amount" value="" name="amo" required>
                            
                        </div>
                        <div class="form-group">
                            <label >Amount in Words<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="exampleInputmail"
                                                            placeholder="Enter Amount in Words" value="" name="amoin" required>
                            
                        </div>
                       

                        <input type="reset" name="" value="reset" class="btn btn-warning">
                        <input type="submit" name="pay" value="pay" class="btn btn-primary">
                        <br>
                        <br>
                  </form>
              </div>
          </div>
      </div>
    </div>
</div>

  <!-- Footer Start -->
                    
    </body>


</html>