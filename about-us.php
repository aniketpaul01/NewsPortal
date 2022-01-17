<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | About us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">

<?php 
$pagetype='aboutus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      <h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?>
  
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><h5><span id="W_Name2">News Portal</span> is a Professional <span id="W_Type1">News</span> Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of <span id="W_Type2">News</span>, with a focus on dependability and <span id="W_Spec">News</span>. We're working to turn our passion for <span id="W_Type3">News</span> into a booming <a href="https://www.blogearns.com" rel="do-follow" style="color:inherit; text-decoration: none;">online website</a>. We hope you enjoy our <span id="W_Type4">News</span> as much as we enjoy offering them to you.</p>
<p>I will keep posting more important posts on my Website for all of you. Please give your support and love.</p>
<p style="font-weight: bold; text-align: center;">Thanks For Visiting Our Site<br><br>
<span style="color: blue; font-size: 16px; font-weight: bold; text-align: center;">Have a nice day !</span></h5></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>
    
    </div>
    <!-- /.container -->

    <!-- Footer -->
 <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
