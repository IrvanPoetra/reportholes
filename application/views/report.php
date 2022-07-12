<!doctype php>
<php lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ReportHoles</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa+One|Montserrat:100,100i,200,200i,300,300i,400,400i,500,600,700,800" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/css/main.css">

</head>

<body>
    <header class="header bg">
        <div class="container text-white">
            <div class="row">
                <div class="col-sm-2 col-0 align-self-center box-1">
                </div>
                <div class="col-sm-10 col-12 align-self-center text-right">
                    <div class="social-icons">
                        <ul>
                            <li>email: reportholes@gmail.com</li>
                            <li>Contact Us : 0813 5831 1443</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--container-->
    </header>
    <span class="position-absolute trigger"><!-- hidden trigger to apply 'stuck' styles --></span>
    <!--Navbar blue-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top teal" id="myHeader">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="<?php echo base_url() ;?>assets/images/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <span class="hidden" href="#">/</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="report">Report</a>
                    </li>
                    <li class="nav-item">
                        <span class="hidden" href="#">/</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <span class="hidden" href="#">/</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects">Projects </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.container end-->
    </nav>
    <!--/.Navbar blue-->
    <section class="banner">
        <div class="container">
            <div class="row">

        </div>
    </section>

    <!-- Contact Section Start -->
    <section id="contact-page">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="500">
                <div class="col-12 col-lg-12 col-xl-4 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15227.469328526357!2d78.3476237!3d17.4181533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x70575b47f01c2719!2sBlueBerry+Digital+Labs+PVT+ltd!5e0!3m2!1sen!2sin!4v1535024898579" width="600" height="450" frameborder="0" style="width: 100%;height: 100%; border:0" allowfullscreen></iframe>
                </div>

                <div class="col-12 col-lg-12 col-xl-8">

                    <?php echo form_open_multipart('page/tambah');?>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="name" name="name" placeholder="Nama" type="text" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                            </div>
                            <div class="col-sm-12 form-group">
                                <input class="form-control" id="address" name="address" placeholder="Alamat Lengkap" type="text" required>
                            </div>
                            <div class="col-sm-12 form-group">
                                <input class="form-control" id="link" name="link" placeholder="Link Google Maps" type="text" required>
                            </div>
                            <div class="col-sm-12 form-group">
                            <label>Upload foto</label>
                            <input class="form-control" id="userfile" name="userfile" type="file" size="20" required>
                            </div> 
                        </div>
                        <textarea class="form-control" id="comments" name="comments" placeholder="Detail Kerusakan" rows="7"></textarea><br>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button class="btn btn-default pull-left" id="submit" type="submit" >Submit</button>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Support section Ended -->

    <!-- Footer -->
    <footer class="page-footer">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mx-auto">
                    <img src="<?php echo base_url() ;?>assets/images/logo-footer.png" alt="footer">
                    <!-- Content -->
                    <p>© 2022. Rights Reserved</p>

                </div>
                <!-- Grid column -->
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-4 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3">Site Navigation</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <a href="index.php">go to home</a>
                                </li>
                                <li>
                                    <a href="projects.php">portfolio</a>
                                </li>
                                <li>
                                    <a href="#!">read blog</a>
                                </li>
                                <li>
                                    <a href="contact.php">contact us</a>
                                </li>
                                <li>
                                    <a href="support.php">product support</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3">information</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <a href="#!">user login</a>
                                </li>
                                <li>
                                    <a href="#!">creat new account</a>
                                </li>
                                <li>
                                    <a href="#!">checkout</a>
                                </li>
                                <li>
                                    <a href="#!">other information</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3">policies & Info</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <a href="#!">Terms Conditions </a>
                                </li>
                                <li>
                                    <a href="#!">website polocy</a>
                                </li>
                                <li>
                                    <a href="#!">Policy for Sellers </a>
                                </li>
                                <li>
                                    <a href="#!">Policy for Buyers </a>
                                </li>
                                <li>
                                    <a href="#!">Shipping & Refund  </a>
                                </li>
                                <li>
                                    <a href="#!">Wholesale Policy </a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->
                    </div>
                </div>

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>
    <!-- Footer -->

    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script src="<?php echo base_url() ;?>assets/js/animate.js"></script>
    <script src="<?php echo base_url() ;?>assets/js/custom.js"></script>
    <script src="<?= base_url() ;?>assets/js/sweetalert2.all.min.js"></script>
    <script>
        const submit = document.querySelector('#submit')
        submit.addEventListener('click', function(){
            Swal.fire({
                title: 'Berhasil submit!',
                icon: 'success',
                showConfirmButton: false,
                timer: 4000
            });
        });
    </script>
</body>

</php>