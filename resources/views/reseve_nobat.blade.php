@extends('layouts.app')
@extends('layouts.topmenu')

@section('content')



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
    <button type="button" class="btn btn-primary">رزو</button>
    
    
  </div>
</div>
@endsection