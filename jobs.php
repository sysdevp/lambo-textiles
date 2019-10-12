<?php include('top.php') ; ?>
            
<body class="single single-post with_featured_img header_1_body page_header_yes wpb-js-composer vc_responsive">
          
<div class="top_wrapper   no-transparent" style="padding-top:35px;"><br>
	<section>
		 <div class="header_page basic background_image" style="background-image:url(images/bg.jpg);background-repeat: no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color:#fff; margin-top: 45px;">
                        <div class="container">
                                    
                    <h1 class="title">Modules</h1>
                    <div class="breadcrumbss">
                        
                        <ul class="page_parents pull-right">
                            <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;You are here</li>
                            <li class="breadcrumbs_c" ><a class="breadcrumbs_c" href="index.php">Home</a></li>
                            <li class="breadcrumbs_c" ><a class="breadcrumbs_c" href="module.php">Modules</a></li>
                        </ul>
                    </div>
                    </div>
                    </div>
		</section>
		

        <section id="content" style="padding-bottom:0px;padding-top:40px;">
            <div class="container" id="blog">
                <div class="row">
                    <div class="span12">
                      <div class="span6">
                      <h2 style="color:#dd3511;">Job Apply</h2><br>
                       <h2 class="ex2">Searching Job?? just fill out the form to get a job Now</h2><br>
                       <form name="contactForm" class="standard-form row-fluid" action="#" method="post">
                                                    <input class="span6" name="cname" placeholder="Name" type="text" id="themeple_name" value="" />
                                                    <input class="span6" name="cmail" placeholder="E-Mail" type="text" id="themeple_e-mail" value="" />
                                                     <input class="span6" name="cphone" placeholder="Phone" type="text" id="themeple_name" value="" />
                                                    <input class="span6" name="cexp" placeholder="Experience" type="text" id="themeple_e-mail" value="" />
                                                    <input class="span6" name="cqualification" placeholder="Qualification" type="text" id="mobile" value="" />
                                                    <input class="span6" name="salary" placeholder="Expected Salary" type="text" id="themeple_e-mail" value="" />
                                                    <select class="span12"  placeholder="Job Type"  name="job" id="themeple_priority"><option  value ='Accounts Manager'>Accounts Manager</option><option  value ='Accountant'>Accountant</option><option  value ='Data Entry Operator'>Data Entry Operator</option></select>
                                                    <textarea class="span12" placeholder="Message" name="themeple_message" cols="40" rows="7" id="themeple_message"></textarea>
                                                    <p class="perspective">
                                                        <input type="submit" value="Submit Form" class="btn-system normal default" />
                                                    </p>
                                                </form>
                      </div>
					

					  
					  
					  
                      <div class="span6">
					  <form method="post" action="#" >
</form>
                       <div id="msg">
					   <form method="post" action="#" >
					  <input type="button" value="job post"  class="button" style="background-color:#000;" onclick="showMsg();">
                     </form>
<form style="visibility:hidden" name="message" method="post" action="contact.php">
  <h2 style="color:#dd3511;"> Job Post</h2><br>
                       <h2 class="ex2">Want to Recruit ?? Fill out the form to get desired candidate for your company</h2><br>
                                                    <input class="span6" name="cname" placeholder="Company Name" type="text" id="themeple_name" value="" />
                                                    <input class="span6" name="cmail" placeholder="E-Mail" type="text" id="themeple_e-mail" value="" />
                                                     <input class="span6" name="cphone" placeholder="Phone" type="text" id="themeple_name" value="" />
                                                    <input class="span6" name="cexp" placeholder="Experience" type="text" id="themeple_e-mail" value="" />
                                                    <input class="span6" name="cqualification" placeholder="Qualification" type="text" id="mobile" value="" />
                                                    <input class="span6" name="salary" placeholder="Expected Salary" type="text" id="themeple_e-mail" value="" />
                                                    <select class="span12"  placeholder="Requirement"  name="job" id="themeple_priority"><option  value ='Accounts Manager'>Accounts Manager</option><option  value ='Accountant'>Accountant</option><option  value ='Data Entry Operator'>Data Entry Operator</option></select>
                                                    <textarea class="span12" placeholder="Message" name="themeple_message" cols="40" rows="7" id="themeple_message"></textarea>
                                                    <p class="perspective">
                                                        <input type="submit" value="Submit Form" class="btn-system normal default" />
                                                    </p>
                                                </form>
</div>
                      </div>
                        <div class="posts_here">
                           
                      </div>
                  </div>
              </div>
			  
            </div>
    </section>
	
    <a href="#" class="scrollup">Scroll</a> 
  </div>
</body>
<script>
function showMsg(){
document.message.style.visibility="visible";
}
</script>

        <?php include('bottom.php'); ?>
         <?php include('enquiry.php'); ?>