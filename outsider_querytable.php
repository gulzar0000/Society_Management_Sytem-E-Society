<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Admin-Ballaleshwar Niwas</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/logo/26.jpg" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/26.jpg" alt="#" /></a>
                     </div>
                     
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/logo/26.jpg" alt="#" height="75" width="75"/></div>
                        <div class="user_info">
                           <h6>Ballaleshwar Niwas</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li><a href="index.html"><i class="fa fa-dashboard yellow_color"></i><span>Dashboard</span></a></li>
                     <li><a href="team_member.html"><i class="fa fa-user yellow_color"></i><span>Team Member</span></a></li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>General</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="rules_regulation.html">> <span>Rules and Regulation</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                           <li><a href="invoice.html">> <span>Invoice</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Userdata</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="registrationtable.php">> <span>Registration Table</span></a></li>
                           <li><a href="querytable.php">> <span>Query Table</span></a></li>
                           <li><a href="outsider_querytable.php">> <span>Outsider Query Table</span></a></li>
                           <li><a href="flatowner.php">> <span>Flat Owner Table</span></a></li>

                           <li><a href="tenantregistrationtable.php">> <span>Tenant Registration Table</span></a></li>
                        </ul>
                     </li>

                     <li>
                     </li>
                     <li><a href="email.html"><i class="fa fa-object-group blue2_color"></i> <span>Email</span></a></li>
                  
                     <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                     </li>
                     <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="images/logo/26.jpg" alt="#"  />
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/logo/26.jpg" alt="#" /><span class="name_user">Admin</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>OUTSIDER MASSAGE/QUERY</h2>
                           </div>
                        </div>
                     </div>

   <?php 
   include('config.php');

   $sql="SELECT * FROM `outsider_query`";
   $result=mysqli_query($conn,$sql);

   if(mysqli_num_rows($result)>0){


      echo "<!-- table section -->
      <div class='row'>
            <div class='col-md-12'>
              <div class='white_shd full margin_bottom_30'>
                 <div class='full graph_head'>
                    <div class='heading1 margin_0'>
                       <h2>Outsider Query Table</h2>
                    </div>
                 </div>
                 <div class='table_section padding_infor_info'>
                    <div class='table-responsive'>
                       <table class='table'>
                          <thead>
                             <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email-Id</th>
                                <th>Subject</th>
                                <th>Query/Message</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tbody>";


         while ($rows=mysqli_fetch_assoc($result)) {
            echo " <tr>
            <td>{$rows['id']}</td>
            <td>{$rows['name']}</td>
            <td>{$rows['email']}</td>
            <td>{$rows['subject']}</td>
            <td>{$rows['query']}</td>
            <td><a name='' id='' class='btn btn-primary mb-1' href='sendoutsidequerymail.php?id={$rows['id']}' role='button'>Send Mail</a>
            <a name='' id='' class='btn btn-danger' href='deleteoutsiderquery.php?id={$rows['id']}' role='button'>Delete</a></td>
         </tr>";
         }

         echo " 
         </tbody>
      </table>
   </div>
</div>
</div>
</div>
</div>

</div>";
   }
  else{
   echo "0 records found";
  } 
   mysqli_close($conn);
   
   ?>                   
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2024 Designed by T-software Solution. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>