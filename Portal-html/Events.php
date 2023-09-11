<?php   
 include 'display.php';  

 $query = "select * from event";  
 $run = mysqli_query($conn,$query);  
 ?> 

<!DOCTYPE html>
<html>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
    
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #D6EEEE;
    }
    </style>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>
    Student-Athlete Portal
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  
  <link href="css/responsive.css" rel="stylesheet" />
<link rel="shortcut icon" href="images/mini.png">
</head>

<body class="sub_page">
  <div class="hero_area">
    
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                 <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">
                    Profiles
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">
                   JOIN US
                  </a> 
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="Events.php">
                    EVENTS
                  </a>
                </li>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="contact.html">
                  LOGIN</a>
                </li>
              </ul>

              

              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">

              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>


    <!-- end header section -->
  </div>

  <section class="service_section layout_padding-bottom layout_padding2-top">
    <div class="container">
      <div class="heading_container">
  <!-- end hero area -->
  <table>
    <tr>
    <th>ID</th>
      <th>Event</th>
      <th>Category</th>
      <th>Team 1</th>
      <th>Team 2</th>
      <th>Location</th>

    </tr>

    <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr>  
                          <td>".$i++."</td>  
                     
                               <td>".$result['Event']."</td>  
                               <td>".$result['Category']."</td> 
                               <td>".$result['Team1']."</td>  
                               <td>".$result['Team2']."</td>  
                               <td>".$result['Location']."</td>  
                       
                         
                          </tr>  
                     ";  
                }  
           }  
      ?>  

  <!-- portfolio section -->
<a href="addevent.html" class="nav-link" >
  <button  id="add" class="registerbtn" >Add Event</button></a>
<div class="brackets" id="brackets"></div>
            </li>  
</body>


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script>
           
</html>