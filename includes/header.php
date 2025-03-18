
         <div class="header-bar">
            <div class="info-top-grid">
               <div class="info-contact-agile">
                <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                  <ul>
                     <li>
                        <span class="fas fa-phone-volume"></span>
                        <p><?php  echo $row['MobileNumber'];?></p>
                     </li>
                     <li>
                        <span class="fas fa-envelope"></span>
                        <p><?php  echo $row['Email'];?></p>
                     </li>
                     <li>
    <a href="https://wa.me/91<?php echo $row['Phone']; ?>" target="_blank" style="text-decoration: none; color: inherit;">
        <span class="fab fa-whatsapp" style="color: green; font-size: 20px; margin-left: 10px;"></span>
        <p><?php echo $row['MobileNumber']; ?></p>
    </a>
</li>


                     <li>
                     </li>
                  </ul><?php } ?>
               </div>
            </div>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        /* Custom Navbar Styling */
        .navbar {
            transition: all 0.3s ease-in-out !important;
        }

        .navbar-dark .navbar-brand {
            font-weight: bold !important;
            color: #f8f9fa !important;
            text-transform: uppercase !important;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #f8f9fa !important;
            padding: 10px 15px !important;
            transition: color 0.3s ease, background-color 0.3s ease !important;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            background-color: #495057 !important;
            color: #048FAD !important;
            border-radius: 5px !important;
        }

        .navbar-dark .navbar-nav .nav-item.active .nav-link {
            background-color: #343a40 !important;
            color: #048FAD !important;
            border-radius: 5px !important;
        }

        .dropdown-menu {
            background-color: #343a40 !important;
            border: none !important;
            border-radius: 8px !important;
        }

        .dropdown-item {
            color: #f8f9fa !important;
            transition: background-color 0.3s ease, color 0.3s ease !important;
        }

        .dropdown-item:hover {
            background-color: #495057 !important;
            color: #048FAD !important;
        }
    </style>
</head>
<body>
    
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">ArtistryHub</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown1"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Art Type
    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <?php 
                            $ret = mysqli_query($con, "select * from tblarttype");
                            while ($row = mysqli_fetch_array($ret)) { ?>
                                <li>
                                    <a class="dropdown-item" href="product.php?cid=<?php echo $row['ID']; ?>&artname=<?php echo $row['ArtType']; ?>">
                                        <?php echo $row['ArtType']; ?>
                                    </a>
                                </li>
                            <?php }  ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin/login.php" class="nav-link">Admin</a>
                     </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap 5 JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

         </div>
         <!-- Slideshow 4 -->
        
      
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->