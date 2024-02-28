<?php 
include('config.php');
$id=$_GET['id'];

$sql="SELECT * FROM `register` WHERE `id` = $id";
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);


mysqli_close($conn);

?>


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
      <title>Edit Registration</title>
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
                     
                  <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Userdata</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                        <li><a href="index.html"><i class="fa fa-dashboard yellow_color"></i><span>Dashboard</span></a></li>
                           <li><a href="registrationtable.php">> <span>Registration Table</span></a></li>
                           <li><a href="querytable.php">> <span>Query Table</span></a></li>
                           <li><a href="outsider_querytable.php">> <span>Outsider Query Table</span></a></li>
                           <li><a href="flatowner.php">> <span>Flat Owner Table</span></a></li>

                           <li><a href="tenantregistrationtable.php">> <span>Tenant Registration Table</span></a></li>
                        </ul>
                     </li>
                     
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
                              <h2>User Registration Data Edit / Update</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->




                     <div class="row">
    <!-- table section -->
       <div class="white_shd full margin_bottom_30">
          <div class="full graph_head">
             <div class="heading1 margin_0">
                <h2>Edit / Update Registeration Data</h2>
             </div>
          </div>
          <div class="table_section padding_infor_info">

    <div class="container col-sm-12 col-md-12 col-lg-12">
        <form action="editregistration.php" method="post">
           <div class="mx-5 mb-3">
            <label class="visually-hidden" for="inputName"
                >Id</label
            >
            <input
                type="text"
                class="form-control"
                name="id"
                id="inputName"
                placeholder=""
                value='<?php echo "{$row['id']}"; ?>'
                readonly               
             
            />
           </div>
           <small id="helpId" class="form-text text-muted"></small>
           
            <div class=" mx-5 mb-3">
                <label for="" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                value='<?php echo "{$row['name']}"; ?>'
                    
                />
                <small id="helpId" class="form-text text-muted"></small>
            <div class="mb-3">
                <label for="" class="form-label">Room No</label>
                <input
                    type="text"
                    class="form-control"
                    name="roomno"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                value='<?php echo "{$row['roomno']}"; ?>'

                />
                <small id="helpId" class="form-text text-muted"></small>
            </div>
             
            <div class="mb-3">
                <label for="" class="form-label">Mobile NO</label>
                <input
                    type="text"
                    class="form-control"
                    name="mobileno"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                value='<?php echo "{$row['mobileno']}"; ?>'

                />
                <small id="helpId" class="form-text text-muted"></small>
            </div>
             
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                value='<?php echo "{$row['email']}"; ?>'

                />
                <small id="helpId" class="form-text text-muted"></small>
            </div>
            
            
            <div class="col-sm-12 col-lg-12 form-check px-5 d-inline">
                  <input class="form-check-input" type="radio" name="roomtype" id="roomtype2" value="1RK" >
                  <label class="form-check-label" for="flexRadioDefault1">
                      one Room-One kitchen(1Rk)
                  </label>
                </div>
                <div class=" col-sm-12 col-lg-12 form-check px-5">
                  <input class="form-check-input" type="radio" name="roomtype" id="roomtype2"   value="1BHK" >
                  <label class="form-check-label" for="flexRadioDefault2">
                     one BedRoom-one Hall-One kitchen(1BHk)
                  </label>
                </div>
                <div class="col-sm-12 col-lg-12 form-check px-5 pb-5">
                  <input class="form-check-input" type="radio" name="roomtype" id="roomtype2" value="2BHK" >
                  <label class="form-check-label" for="flexRadioDefault2">
                      Two BedRoom-one Hall-One kitchen(2BHk)
                  </label>
                </div>
    
                <button style="background: green;border: 0;padding: 10px 24px;color: #fff;transition: 0.4s;" type="submit" class="btn mb-3">Update</button>
            
        </form>
    </div>
    </div>
    </div>
    </div>


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

         <!-- model popup -->
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
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- fancy box js -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>
   </body>
</html>