@extends('admin.admin_master')

@section('admin')




    <div class="py-12"> 
   <div class="container">
    <div class="row">


    <div class="col-md-8">
     <div class="card">




          <div class="card-header"> All Seance </div>
          <div class="card my-4">
     
        <form class="card-body" action="{{ url ('search')}}" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher..." name="search">
                <span class="input-group-btn">
            <button class="btn btn-secondary" type="submit">
              <i class="fa fa-search"></i>
           </button>
          </span>
            </div>
            
        </form>
    </div>

    <table class="table">
    <!-- <div class="container mt-5">
        <div classs="form-group">
            <input type="text" id="search" name="search" placeholder="Search" class="form-control" />
        </div>
    </div> -->
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Nom Seance </th>
      <th scope="col">Description </th>
      <th scope="col"> Image</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          <!-- @php($i = 1) -->
        @foreach($seances as $seance) 
    <tr>
      <th scope="row"> {{ $seances->firstItem()+$loop->index  }} </th>
      <td> {{ $seance->seance_name }} </td>
      <td> {{ $seance->seance_description }} </td>
      <td> 
      <span class="avatar avatar-sm rounded-circle">
                        <img src="{{asset($seance->seance_image) }}" alt="" style="max-width: 80px; border-radiu: 100px">
                      </span>
      
      <!-- <img src="{{ asset($seance->seance_image) }}" style="height:50px; width:70px;" > </td>  -->
      <td> 
          @if($seance->created_at ==  NULL)
          <span class="text-danger"> No Date Set</span> 
          @else
      {{ Carbon\Carbon::parse($seance->created_at)->diffForHumans() }}
          @endif
       </td>
       <td> 
       <a href="{{ url('seance/edit/'.$seance->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ url('seance/delete/'.$seance->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
        </td> 


    </tr> 
    @endforeach


  </tbody>
</table>
<ul class="pagination justify-content-center mb-4">
    {{$seances->links("pagination::bootstrap-4")}}
</ul>
  
       </div>
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>
    <script type="text/javascript">
        var route = "{{ url('autocomplete-search') }}";
        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
    </div>


    <div class="col-md-4">
     <div class="card">
          <div class="card-header"> Add seance </div>
          <div class="card-body">
          
         
         
          <form action="{{ route('store.seance') }}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1"> Nom seance</label>
    <input type="text" name="seance_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('seance_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> description</label>
    <input type="text" name="seance_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('seance_description')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"> Image</label>
    <input type="file" name="seance_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('seance_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror

  </div>



     
  <button type="submit" class="btn btn-primary">Add seance</button>
 
</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 

 


    </div>
 @endsection
