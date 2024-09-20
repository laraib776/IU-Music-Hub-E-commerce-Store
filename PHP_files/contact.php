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

<body background = "images/6.jpeg">


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
            <!-- <a> tag defines a hyperlink, which is used to link from one page to another -->
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="album.php">Albums</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php" style="color: #7c518a"><b>Connect </b><span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
  </div>
    </nav>

<br><br><br>
  <!-- py: vertical(y) padding(p) 5 means the amount of padding -->
  <section class="my-5">
  <div class="py-5">
    <h1 class="text-center"  style= "color: #eee1f2" >Leave a comment for IU!</h1>
  </div>

  <!-- w-50: width of element to be 50%  -->
  <!-- m-auto means to horizontally centre elements -->
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label style= "color:white">Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label style= "color:white">Email ID</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label style= "color:white">Favourite Movie</label>
        <input type="text" name="favmovie" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label style= "color:white">Comment</label>

        <!-- form-control: gives a larger entry space -->
        <textarea class="form-control" name=""></textarea>
      </div>

      <button type="submit" class="btn btn-light">Submit</button>
    </form>


  </div>
        

</section>


  </header>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</html>