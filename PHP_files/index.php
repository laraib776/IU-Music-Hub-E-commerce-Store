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

<body>
  <header>
    <!-- lg basically pushes the components to the right and rg pushes them to left (it's opposite for nav bar idk why) same with 'dark'; it makes the text light -->
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
          <li class="nav-item active">

            <!-- sr-only hides an element to all devices except screen readers; not exactly required -->
            <!-- span is used for styling purposes -->
            <!-- <b> makes text bold -->
            <a class="nav-link" href="index.php" style="color: #7c518a"><b>Home </b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="album.php">Albums</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
  </div>
    </nav>

    <!-- data-ride="carousel" attribute tells Bootstrap to begin animating the carousel immediately when the page loads -->

    <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
      <!-- <ol> tag defines an ordered list -->
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <!-- role attribute describes the role of an element in programs that can make use of it, such as screen readers or magnifiers. Usage Example: <a href="#" role="button">Button Link</a> -->
      <!-- carousel-inner class is used to hold slider items -->



<!--YOUTUBE VIDEO-->
<iframe width="420" height="345"  src="https://www.youtube.com/embed/cFN1A-p1djg" title="YouTube video player" frameborder="0"  allowfullscreen style="position:absolute; left: 940px; bottom: 0px; ;" >
</iframe>
<!--DATE AND TIME-->
<iframe src="https://free.timeanddate.com/clock/i860mai6/n106/fn8/fs15/fc909/avb/ftb/tt0/tw0/tm1/ts1/tb4" frameborder="0" width="110" height="36" style="position: absolute;right: 0px; top:4px" ></iframe>
<span style="position: absolute;right: 120px; top:5px;font-size:25px;" >&#128156;</span>




      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
        	<img src="images/s5.png" alt="IU 1">
        	<div class="carousel-caption">
        		<h3>IU</h3>
        		<p>A Korean born idol, singer and actress.</p><br></div>

        </div>
          <div class="carousel-item ">
          	<img src="images/15.jpeg" alt="IU 2">

        </div>
        <div class="carousel-item ">
        	<img src="images/16.jpeg" alt="IU 3">

        </div>
      </div>

      <!-- data-slide accepts the keywords prev or next , which alters the slide position relative to its current position -->
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

        <!-- aria-hidden: to ensure an accessible name is provided when none is visible. basically the "alt" of bootstrap -->
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        <!-- sr-only hides an element to all devices except screen readers -->
        <span class="sr-only">Previous</span>  
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    


  </header>



</body>
<!-- script source links to support bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</html>