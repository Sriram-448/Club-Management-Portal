<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
    /* Custom styles for the scrolling news */
    .news-container {
        width: 100%;
        overflow: hidden;
        background-color: #333;
        color: #fff;
    }
    .news {
        display: inline-block;
        white-space: nowrap; /* Prevents text from wrapping */
        animation: marquee 15s linear infinite; /* Adjust duration as needed */
    }
    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
</style>
</head>
<body>

<div class="news-container">
    <div class="news">
        <span>Breaking News: Hippocrates Auditorium is occupied.</span>
        <!-- Add more news items as needed -->
        <span>Another Breaking News: Please check tomorrow.</span>
    </div>
</div>

<div class="header">
	<h2>Home Page</h2>
</div>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<div>
<div class="row">
      <div class='col-md-4 mb-2'>
    <div class = 'card'>
                <img src='./Main Auditorium.png'
                class='card-img-top' alt='Main Auditorium'>
                <div class='card-body'>
                <h5 class='card-title'>Main Auditorium</h5>
                <p class='card-text'>Main Auditorium</p>
                <a href='https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new' class='btn btn-info'>Contact</a>
            </div>
            <div class='col-md-4 mb-2'>
    <div class = 'card'>
                <img src='./Mini Hall - 1.png'
                class='card-img-top' alt='Mini Hall - 1'>
                <div class='card-body'>
                <h5 class='card-title'>Mini Hall - 1</h5>
                <p class='card-text'>Mini Hall - 1</p>
                <a href='https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new' class='btn btn-info'>Contact</a>
            </div>
            <div class='col-md-4 mb-2'>
    <div class = 'card'>
                <img src='./Sir. J. C. Bose Hall.png'
                class='card-img-top' alt='Sir. J. C. Bose Hall'>
                <div class='card-body'>
                <h5 class='card-title'>Sir. J. C. Bose Hall</h5>
                <p class='card-text'>Sir. J. C. Bose Hall</p>
                <a href='https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new' class='btn btn-info'>Contact</a>
            </div>
            <div class='col-md-4 mb-2'>
    <div class = 'card'>
                <img src='./Faraday.png'
                class='card-img-top' alt='Faraday Hall'>
                <div class='card-body'>
                <h5 class='card-title'>Faraday Hall</h5>
                <p class='card-text'>Faraday Hall</p>
                <a href='https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new' class='btn btn-info'>Contact</a>
            </div>
            <div class='col-md-4 mb-2'>
    <div class = 'card'>
                <img src='./G. D. Naidu Hall.png'
                class='card-img-top' alt='G. D. Naidu Hall'>
                <div class='card-body'>
                <h5 class='card-title'>G. D. Naidu Hall</h5>
                <p class='card-text'>G. D. Naidu Hall</p>
                <a href='https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new' class='btn btn-info'>Contact</a>
            </div>
            <div class='col-md-4 mb-2'>
    <div class = 'card'>
                <img src='./Hippocrates Auditorium.png'
                class='card-img-top' alt='Hippocrates Auditorium'>
                <div class='card-body'>
                <h5 class='card-title'>Hippocrates Auditorium</h5>
                <p class='card-text'>Hippocrates Auditorium</p>
                <a href='https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new' class='btn btn-info'>Contact</a>
            </div>
    </div>
    </div>
</div>
</body>
</html>

