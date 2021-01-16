<!DOCTYPE html>
<html>
    <head>
        <title>Home Rental Server</title>
        <!-- Bootstrap CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!--adding the external style sheet-->
        <link rel="stylesheet" type="text/css" href="./css/styles.css">
        <!--Linking JavaScript File-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        
        <?php require_once('db_config.php'); ?>
    
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-dark bg-success">
                <!-- Starting of the Navbar content -->
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php" id="pageTittle">Theke Jao</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">
                        
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Booking Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Hotels Gallary</a>
                            </li>

                            <li class="nav-item">   
                                <a class="nav-link" href="./payement_page.html">Payment Info</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./dashboard_info.php">Dashboard</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../home_rent_system/registration/sign_up.php">Sign-up</a>
                            </li>
                        </ul>
                        <span class="navbar-text"></span>
                        
                        </div>
                    
                    </div>
                </nav>
            </nav>
            <!-- /Ending of the Navbar content -->
        </div>

        <!-- Stating of the Carousel-->
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active" id="carouselContent">
                    <img src="https://lh5.googleusercontent.com/p/AF1QipM5zJO-Bl3FIAZxTzqwlUVKNy4ZLipr6H0tw32P=w325-h216-k-no" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="bg-dark">Arkcain Motel</h5>
                      <p class="bg-dark">Great comfort with several services.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://lh5.googleusercontent.com/p/AF1QipMkOT_NgzXVtFrGVTg2aR_QbWbIEO1bhBNQ5ewf=w325-h243-k-no" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="bg-dark">Paowli Fakrar Rest House</h5>
                      <p class="bg-dark">Get amazing experience with view of yard and many more.</p>
                    </div>
                  </div>
                  <div class="carousel-item" >
                    <img src="https://lh5.googleusercontent.com/p/AF1QipNedkSpk583gUuzirzP4Zvejp8_8dwVkv069FiG=w325-h243-k-no" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="bg-dark">Sonar Bangla Guest House</h5>
                      <p class="bg-dark">A nice place for handgout, resting , and many more.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
        </div>
        <!--/Ending of the Carousel-->
        <!--Start of the Heading Section for "Headlines"-->
        <div class="row">
            <div class="col-md-12">
                <hr class="my-4">
                <h4 class="text-center" id="gallary">Gallaries</h4>
                <hr class="my-4">
            </div>
        </div>
        <!--/End of the Heading Section for "Headlines"-->

         <!--Start of the Card Section-->
         <div class="row">
            <!--here, 1. class="col-md-4" to mention that on medium device 3 cards will be shown
                      2. class="col-sm-6" to mention that on small device 2 cards will be shown
                      3. class="col-s-12" to mention that on extra small device 1 cards will be shown only
            -->
            <div class="col-md-4 col-sm-6 col-s-12">
                <!--here, 1. class="card" to create a card-->
                <div class="card" id="card-style">
                    <!--class="card-img-top" to create a card image here on top of the card-->
                    <img class="card-img-top" id="card-image" src="https://a0.muscache.com/im/pictures/fccfb399-75a2-4215-b737-33be5e7d1eeb.jpg?im_w=720">
                    <!--here, 1. class="card-body" to ensure the created card body-->
                    <div class="card-body">
                        <!--here, 1. class="card-title" to create a card title-->
                        <h5 class="card-title">Premium Single room, Hotel Le Chateau</h5>
                        <p class="card-text text-dark">
                            <br>Room in hotel hosted by Le                            
                            <br>2 guests · 10 bedrooms · 1 bed · 15 baths
                        </p>
                        
                        <p class="card-text"> 
                        </p>
                        <p class="card-text"> Rajshahi, Rajshahi Division,Bangladesh </p>
                        <a href="#" class="btn btn-danger">Read more</a>
                    </div>
                </div>
            </div>

            <!--here, 1. class="col-md-4" to mention that on medium device 3 cards will be shown
                      2. class="col-sm-6" to mention that on small device 2 cards will be shown
                      3. class="col-s-12" to mention that on extra small device 1 cards will be shown only
            -->
            <div class="col-md-4 col-sm-6 col-s-12">
                <!--here, 1. class="card" to create a card-->
                <div class="card" id="card-style">
                    <!--class="card-img-top" to create a card image here on top of the card-->
                    <img class="card-img-top" id="card-image" src="https://a0.muscache.com/im/pictures/9196b8dd-3726-470a-a5ca-9b23958b0790.jpg?im_w=720">
                    <!--here, 1. class="card-body" to ensure the created card body-->
                    <div class="card-body">
                        <!--here, 1. class="card-title" to create a card title-->
                        <h5 class="card-title">Hotel Moonson</h5>
                        <!--class="card-text" to create a card text-->
                        <p class="card-text text-dark">
                            <br>Queen room w/lake view & balcony hosted by Raj
                            <br>2 guests · 1 bedroom · 1 bed · 1 bath
                        </p>
                        
                        <p class="card-text"> 
                        </p>
                        <p class="card-text"> Dhaka, Dhaka Division,Bangladesh </p>
                        <a href="#" class="btn btn-danger">Read more</a>
                    </div>
                </div>
            </div>

            <!--here, 1. class="col-md-4" to mention that on medium device 3 cards will be shown
                      2. class="col-sm-6" to mention that on small device 2 cards will be shown
                      3. class="col-s-12" to mention that on extra small device 1 cards will be shown only
            -->
            <div class="col-md-4 col-sm-6 col-s-12">
                <!--here, 1. class="card" to create a card-->
                <div class="card" id="card-style">
                    <!--class="card-img-top" to create a card image here on top of the card-->
                    <img class="card-img-top" id="card-image" src="https://a0.muscache.com/im/pictures/245d3977-a323-49a0-99fa-8adb000591bc.jpg?im_w=720">
                    <!--here, 1. class="card-body" to ensure the created card body-->
                    <div class="card-body">
                        <!--here, 1. class="card-title" to create a card title-->
                        <h5 class="card-title">Grand Sylhet Inn</h5>
                        <!--class="card-text" to create a card text-->
                        <p class="card-text"><br>Room in boutique hotel hosted by Rony
                            <br>2 guests · 1 bedroom · 1 private bath
                        </p>
                        <p class="card-text"> Sylhet, Sylhet Division,Bangladesh </p>
                        <a href="#" class="btn btn-danger">Read more</a>
                    </div>
                </div>
            </div>
        
        </div>

        <!--/End of the Card Section-->

        <!--Start of Pagination-->
     
            <div class="row">
                
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                

            </div>
        
        <!--/End of Pagination-->

        

    </body>
</html>