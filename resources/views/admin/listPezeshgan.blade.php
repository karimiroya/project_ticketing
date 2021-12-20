<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

</html>

<form id="savePezeshk">
    @csrf
    <h3>لیست پزشکان</h3>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        اضافه کردن پزشک
    </button>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">اطلاعات پزشک</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  
                        <div class="input-group mb-3">

                            <input type="text" name="name" class="form-control" placeholder="نام">
                            <input type="text" name="family" class="form-control" placeholder="نام خانوادگی">
                            <input type="text" name="takhasos" class="form-control" placeholder="تخصص">
                        </div>
                    
                
                        
                        <h6>روز </h6>
                        <div class="input-group mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="roz1" value="shanbe">
                                <label class="form-check-label" for="inlineCheckbox1">شنبه</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="roz2" value="yekshanbe">
                                <label class="form-check-label" for="inlineCheckbox2">یکشنبه</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="roz3" value="doshanbe">
                                <label class="form-check-label" for="inlineCheckbox2">دوشنبه</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="roz4" value="seshanbe">
                                <label class="form-check-label" for="inlineCheckbox2">سه شنبه</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="roz5" value="charshanbe">
                                <label class="form-check-label" for="inlineCheckbox2">چهارشنبه</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="roz6" value="panjshanbe">
                                <label class="form-check-label" for="inlineCheckbox2">پنجشنبه</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="roz7" value="jome">
                                <label class="form-check-label" for="inlineCheckbox2">جمعه</label>
                            </div> 

                           
                        </div>
                        <h6> زمان</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="zaman" value="sobh">
                            <label class="form-check-label" for="inlineCheckbox1">صبح</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="zaman2" value="badazohr">
                            <label class="form-check-label" for="inlineCheckbox2">بعدازظهر</label>
                        </div>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="save_btn" class="btn btn-secondary" data-dismiss="modal">save</button>
                </div>

            </div>
        </div>

    </div>
</form>
<br><br>
<table class="table table-dark table-striped" id="myTable">
    <thead>
        <tr>
            <th>#</th>
            <th>نام دکتر</th>
            <th>متخصص</th>
            <th>روزهای نوبت دهی</th>
            <th>ساعت نوبت دهی</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($pezeshgan as $pezeshk)

                <td>{{ $pezeshk['id'] }}</td>
                <td>{{ $pezeshk['esm'] }} {{ $pezeshk['famil'] }}</td>
                <td>{{ $pezeshk['takhasos'] }}</td>
                <td>{{ $pezeshk['rozeNobat'] }}</td>
                <td>{{ $pezeshk['zamanNobat'] }}</td>
        </tr>
            @endforeach
    </tbody>
</table>





<script>
    

    $(document).on('click', '#save_btn', function(event) {
        event.preventDefault();



        $.ajax({
            url: "/admin/savePezeshk",
            type: "POST",
         
            data: $('#savePezeshk').serialize(),
            
        });

    });
</script>
