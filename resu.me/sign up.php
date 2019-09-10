<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>sign up</title>
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
        div.card-body{
          margin-left: 100px;
          margin-top: 20px;
        }
        div.col-xs-4{
          display:flex;
          justify-content:flex-end;
          align-items: center; 
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
    <br>
    <h2 class="font-weight-light">sign up.</h2>
    <hr>
    <div class='container'>
      <div class="row">
        <div class="col-xs-4">
            <div class="card-body">
              <div class='container'>
                <br> 
                <form action="submitform.php" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="user_mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="user_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <br>
                  <button type="submit" name="signup-submit" class="btn btn-primary" style="margin: 2px">Sign up</button>
                </form>
              </div>
            </div>
          </div>
        <div class="row no-gutters">
          <div class="col-xs-4">
            <a class="btn btn-primary btn-lg" style="margin: 50px 10px 90px 70px" href="log in.php">log in</a>   
            <a class="btn btn-secondary btn-lg" style="margin: 50px 5px 90px 15px" href="index.php">learn more</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="footer">
      <p>copyright @mrudhularaya</p>
    </div>
  </body>
</html> 