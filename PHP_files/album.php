<!-- scripts to allow the bootstrap support -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>

<!-- pt is absolute point length unit; ltr: left-to-right text direction -->
<html lang="pt-br" dir="ltr">
<head>
  <!-- utf: represent characters as ASCII text -->
  <meta charset="utf-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- viewport the area of the window in which web content can be seen -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
</head>

<body background = "images/11.jpeg">
  <header>
    <nav class=" my-nav navbar navbar-dark navbar-expand-lg ">

      <!-- div defines division/section -->
      <div class="container">


      <a class="navbar-brand" href="index.php" style="color: #eee1f2"><b>IU</b></a>

      <!-- aria-expanded describes whether an interactive element is can be expanded or not -->
      <!-- aria-label to ensures that an accessible name is provided when none is visible -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <!-- an unordered list of items; that is, a list in which changing the order of the items would not change the meaning of list -->
        <!-- ml-auto alligns everything to left (for consistency) -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">

            <!-- sr-only hides an element to all devices except screen readers; not exactly required -->
            <!-- span is used for styling purposes -->
            <!-- <b> makes text bold -->
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php" style="color: #7c518a"><b>Album </b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
  </div>
    </nav>

  </header>

<br><br><br><br><br>

<!-- padding top and padding bottom -->
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">

      <!-- col class uses grid system. there are 12 columns and if u need to utilize then use 12/6= 2 > col-6 -->
        <div class="col-6">
            <h1 style= "color: #eee1f2">The Album Library</h3>
        </div>
        <div class="col-6 text-right"><br><br>

          <!-- mb: margin-bottom
          mr: margin-right -->
            <a class="btn btn-light mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-light mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                          <!-- md: medium devices - screen width equal to or greater than 768px -->

                            <div class="col-md-4 mb-3">
                                <div class="card">

                                    <!-- img-fluid: makes an image responsive by automatically applying max-width: 100%; and height: auto; to it -->
                                    <img class="img-fluid" alt="100%x280" src="images/lilac.png">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #947ea8">Lilac</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/celebrity.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #947ea8">Celebrity</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/eight.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #947ea8">Eight</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/lovepoem.png">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #947ea8">Love Poem</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/bbibbi.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #947ea8">BBIBBI</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/aflowerbookmark.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #947ea8">A Flower Bookmark</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/palette.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #947ea8">Palette</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/cantloveyouanymore.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #947ea8">Can't Love You Anymore</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/througthenight.png">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #947ea8">Through the Night</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</html>