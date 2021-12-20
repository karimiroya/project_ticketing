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
 
      <a class="navbar-brand">  کلینیک  تخصصی اتکا</a>
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
<h1>رزو نوبت :</h1>
<br>
<br>
<div class="form-check">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >8ساعت
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >ساعت9
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >ساعت10
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">ساعت11
      </label>
    </div>
    <br>

<div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">پرداخت اینترنتی</button>
    <button type="button" class="btn btn-primary">پرداخت با شماره رسید</button>
    
  </div>
</div>
