<?php include('top.php') ; ?>
  
<style type="text/css">
  .table-hover tbody tr.warning:hover td {
background-color: #E5E5E5;
}
</style>
                    

    <link rel="stylesheet" href="css/myform.css" type="text/css" media="all" />    
<body class="single single-post with_featured_img header_1_body page_header_yes wpb-js-composer vc_responsive" style="">
          
<div class="top_wrapper   no-transparent" style="padding-top:35px;"><br>
	<section>
		 <div class="header_page basic background_image" style="background-image:url(images/bg.jpg);background-repeat: no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color:#fff; margin-top: 45px;">
                        <div class="container">
                                    
                    <h1 class="title">Job Post</h1>
                    <div class="breadcrumbss">
                        
                        <ul class="page_parents pull-right">
                            <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;You are here</li>
                            <li class="breadcrumbs_c" ><a class="breadcrumbs_c" href="index.php">Home</a></li>
                            <li class="breadcrumbs_c" ><a class="breadcrumbs_c" href="jobpost.php">Job Post</a></li>
                        </ul>
                    </div>
                    </div>
                    </div>
		</section>
		<section id="content" style="padding-bottom:0px;padding-top:0px; background-color: #e9e9e9; ">
            <div class="container" id="blog" >
                <div class="row">
                    <div class="span12">
<div class="module form-module" >
<div class="form">
</div>  
<div class="form ">
<center><h2>Apply For A Job</h2></center>
<form action="" method="post">
<input class="span6" type="text" name="name" placeholder="Name" required />
<input type="email" name="email" placeholder="E-mail" required/>
<input type="text" name="phone" placeholder="Phone" required/>
<input type="text" name="experience" placeholder="Experience" required/>
<input type="text" name="qualification" placeholder="Qualification" required/>
<input type="text" name="expected" placeholder="Expected Salary" required/>
<select name="position" style="width:240px; height:35px;">
<option selected disabled>Position</option>

<option value="Accounts Manager">Accounts Manager</option>
<option value="Accountant">Accountant</option>
<option value="Data Entry Operator">Data Entry Operator</option>
</select>

<textarea type="text" name="message" placeholder="Message" required style="width: 228px;
height: 91px;"></textarea> 

 <button name = "go" class="btn btn-primary">Save</button>
</form>
</div>
</div>

</div></div></div></section>

                     <?php include ('admin/connect.php');
                            if (isset($_POST['go'])) {

                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $experience = $_POST['experience'];
                                $qualification = $_POST['qualification'];
                                $expected = $_POST['expected'];
                                $position = $_POST['position'];
                                $message = $_POST['message'];

                                mysql_query("insert into jobapply(name,email,phone,experience,qualification,expected,position,message)values ('$name', '$email', '$phone', '$experience', '$qualification', '$expected', '$position', '$message')
                                ") or die(mysql_error());

                                echo '<meta http-equiv="refresh" content="0; URL=jobapply.php" />'; 
                            }
                            ?>


<!-- <table>
  <thead>
    <tr>
      <th>Name</th>
       <th>E-mail</th>
        <th>Phone</th>
         <th>Experience</th>
          <th>Qualification</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>name</td>
    </tr>
  </tbody>
</table> -->







    <section id="content" style="padding-bottom:0px;padding-top:0px; background-color: white; ">
            <div class="container" id="blog" >
                <div class="row">
                    <div class="span12">
            <div class=" table-responsive">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                <thead>
                                    <tr>
                                        <th>Name</th>
                        
                                        <th>Experience</th>
                                        <th>Qualification</th>
                                        <th>Expected Salary</th>
                                        <th>Position</th>
                                  
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include ('admin/connect.php');
                                    $query = mysql_query("select * from jobapply") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $id = $row['id'];


                                        ?>
                                        <tr class="warning">
                                            <td><?php echo $row['name']; ?></td> 
                                      
                                            <td><?php echo $row['experience']; ?></td> 
                                            <td><?php echo $row['qualification']; ?></td> 
                                            <td><?php echo $row['expected']; ?></td> 
                                            <td><?php echo $row['position']; ?></td> 
                             


                 
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        </div>
                        </div>
                        </section>

    <a href="#" class="scrollup">Scroll</a> 
  </div>


</body>
        <?php include('bottom.php'); ?>
             <?php include('enquiry.php'); ?>