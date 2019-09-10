<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "signup_user";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>welcome</title>
    <style>
      .footer {
          position: fixed;
          right: 0;
          bottom: 0;
          left: 0;
          text-align: center;
          width: 100%
          height: 60 px;
          background-color: #f5f5f5;
          padding: 1rem;
          color: black;
        }
        h2{
          text-align: center;
        }
    </style>
  </head>
  <body>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">resu.me</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="log in.php">log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sign up.php">sign up</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <?php
         session_start();
         $id = $_SESSION['user_id'];
         $sql = "SELECT * FROM registered_user_data WHERE user_id = '$id'";
         $result = mysqli_query($conn, $sql);
         $row = mysqli_fetch_assoc($result);
         
         mysqli_close($conn);
                      ?>
     <div class ='container'>
              <div class="jumbotron">
                <p class="lead"> <?php echo "Hello, " . $row['user_first']; ?> </p> <hr>
                <div class="row">
                  <div class="col-md-4"> Name: <?php echo $row['user_first'] ." ". $row['user_last']; ?> </div>
                  <div class="col-md-4"> Gender: <?php echo $row['user_gender']; ?>  </div>
                  <div class="col-md-4"> Age: <?php echo $row['user_age']; ?></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6"> About Me:  <?php echo $row['user_about']; ?> </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6"> Education:  <?php echo $row['user_edu']; ?> </div>
                  <div class="col-md-6"> Skills:  <?php echo $row['user_skills']; ?> </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6"> Contact Me:  <?php echo $row['user_contact']; ?> </div>
                </div>
                <br>
              </div>
        </div>
    <br>
    <div class="footer">
      <p>copyright @mrudhularaya</p>
    </div>
  </body>
</html>

