@extends('layouts.app')
@extends('layouts.topmenu')

@section('content')

  <h2>لیست پزشکان</h2>
  <br>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جستجوی دکتر" title="Type in a name">
<br>
<br>
<table class="table table-dark table-striped" id="myTable">
  <thead>
      <tr>
          <th>#</th>
          <th>نام دکتر</th>
          <th>متخصص</th>
          <th>روزهای نوبت دهی</th>
          {{-- <th>ساعت نوبت دهی</th> --}}
      </tr>
  </thead>
  <tbody>
      <tr>
          @foreach ($pezeshgan as $pezeshk)

              <td>{{ $pezeshk['id'] }}</td>
              <td>{{ $pezeshk['esm'] }} {{ $pezeshk['famil'] }}</td>
              <td>{{ $pezeshk['takhasos'] }}</td>
              
              <td><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                {{ $pezeshk['rozeNobat'] }}
                </button><div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('reseve_nobat') }}">{{ $pezeshk['zamanNobat'] }}</a>
                
                </div>
              </td>
              {{-- <td></td> --}}
      </tr>
      
          @endforeach
  </tbody>
</table>


@endsection
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>



  


</body>
</html>
