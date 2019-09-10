<?php
 session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>details</title>
    <style>
      .footer {
          position: fixed;
          right: 0;
          bottom: 0;
          left: 0;
          text-align: center;
          width: 100%
          height: 20px;
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
    <h2 class="font-weight-light">submit details.</h2>
    <hr>
    <div class="container">
      <form method="post" action="submitform3.php">
        <div class="form-row" >
          <div class="col-md-3">
            <label for="exampleInputFirstName">First Name</label>
            <input type="text" name="user_first" class="form-control" placeholder="First name">
          </div>
          <div class="col-md-2">
            <label for="exampleInputLastName">Last Name</label>
            <input type="text" name="user_last" class="form-control" placeholder="Last name">
          </div>
          <div class="col-md-5" style="margin-left: 15px;">
            <label for="exampleFormControlTextarea2">Skills</label>
            <input class="form-control" type="text" name="user_skills" placeholder="Skills">
          </div> 
        </div>
        <br>
        <div class="form-row">
          <div class="col-md-3">
            <label for="inputState">Gender</label>
            <select id="inputState" class="form-control" name="user_gender" placeholder="Gender">
              <option>Female</option>
              <option>Male</option>
              <option>Non Binary</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="exampleFormControlText">Age</label>
            <input type="text" name="user_age" class="form-control" placeholder="Age">
          </div>
        </div>  
        <br>
        <div class="form-row">
          <div class="col-md-5">
            <label for="exampleFormControlTextarea1">About Me</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="About Me" name="user_about"></textarea>
          </div>
          <div class="col-md-5" style="margin-left: 15px;">
              <label for="exampleFormControlTextarea1">Contact Me</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Contact Me" name="user_contact"></textarea> 
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="col-md-5">
            <label for="exampleFormControlTextarea2">Education</label>
            <input class="form-control" type="text" name="user_edu" placeholder="Education">
          </div>
          <div class="col-md-5">
            <button type="submit" name="details-submit" class="btn btn-outline-primary" style="margin: 30px 0px 0px 15px; ">submit</button>
            <button type="cancel" class="btn btn-outline-secondary" style="margin: 30px 5px 0px 15px;">cancel</button>
          </div>
        </div>
      </form>
    </div>
    <div class="footer">
      <p>copyright @mrudhularaya</p>
    </div>
  </body>
</html> 