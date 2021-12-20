<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
 
      <a class="navbar-brand" href="about_us.php">  کلینیک  تخصصی اتکا</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="nobat_giri.php">نوبت گرفتن</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="log_in.php">ثبت نام بیمار</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about_us.php">درباره ما</a>
      </li>
    </ul>
  </div>  
</nav>
<br>
<br>
<br>

<div class="container">
  <h2>ثبت نام بیمار</h2>
  <br>
  <br>
  <form action="/action_page.php">
  <div class="form-group">
      <label for="usr">نام و نام خانوادگی:</label>
      <input type="text" class="form-control" id="usr" name="username">
    </div>
    <div class="form-group">
      <label for="email">ایمیل:</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">رمز:</label>
      <input type="password" class="form-control" id="pwd" placeholder="" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">ثبت نام </button>
  </form>
</div>

</body>
</html>
