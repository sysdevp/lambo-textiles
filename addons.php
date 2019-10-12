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
		

        <section id="content" style="padding-bottom:0px;padding-top:0px;">
            <div class="container" id="blog" >
                <div class="row">
                    <div class="span12">
					  <h1 style="text-align:center;float:none">ADDON Informations</h1>
					  <p>We are pleased to showcase Our Ready Modules the power packed features which is not available in the standard Tally.ERP 9 product.
<br>
It takes experience with technology and knowledge of business to build such effective add-ons. And it’s just what our development team in B E Solutions have been doing over the years. Now we are making such ready developed solutions in an exclusive place on our website to buy this ready Add-ons</p>
                        <div class="posts_here">
                            <article id="post-1847" class="post-1847 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-portfolio tag-showcase blog-article v1 normal">
                                
								<!-- -->
								
								<div id="fws_58f9ede75e415" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el section-style " style="background-color:#E6E7E9">
    <div class="container  dark">
        <div class="section_clear">




 <?php include ('admin/connect.php');
                                    $query = mysql_query("select * from tb_prod ORDER BY prodID DESC") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $id = $row['prodID'];
                                        
                                        ?>

            <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                <div class="wpb_wrapper">
                    <div class=" services_boxed wpb_content_element ">
                        <div class="icon_wrapper">
                            <div class="overlay"></div><i class="steadysets-icon-star"></i></div>
                        <h4><a href=""><?php echo $row['name']; ?></a></h4>
                        <div class="line_under">
                            <div class="line_left"></div>
                            <div class="line_center"></div>
                            <div class="line_right"></div>
                        </div>
                        <p><?php echo $row['description']; ?></p>
						<a target="blank" href="admin/<?php echo $row['location']; ?>" class="readmore">Read More</a>
                    </div>
                </div>
            </div>

  <?php } ?>


        </div>
    </div>
</div>
	<!-- -->

                          </article>
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