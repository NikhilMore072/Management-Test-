<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Farming</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>  
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/visit')}}"> Register<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/visit/view')}}"> Frarmers<span class="sr-only">(current)</span></a>
                    </li>
                   
                  
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
      </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <!-- <th>Gender</th> -->
                    <th>State</th>
                    <th>DOB</th>
                    <th>Action</th>
                    <th>Action</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($farmer as $farmer)
                <tr>
                    <td >{{$farmer->name}}</td>
                    <td>{{$farmer->email}}</td>
                    <td >{{$farmer->address}}</td>
                    <!-- <td>
                      @if($farmer->gender =="M")
                      Male
                      @elseif($farmer->gender=="F")
                      Female
                      @else
                      other
                      @endif
                    </td> -->
                    <td>{{$farmer->city}}</td>
                    <td>{{$farmer->state}}</td>
                    <td>{{$farmer->dob}}</td>
                        <td>
                        <!-- <a href="{{url('/visit/delete')}}/{{$farmer->farmer_id}}"> -->

                            <a href="{{route('farmer.delete', ['id' => $farmer->farmer_id])}}">
                        <button class="btn btn-danger">Delete</button>
                        </a>
                        </td>
                    <td>     
                    <a href="{{route('farmer.edit', ['id' => $farmer->farmer_id])}}">           
                        <button class="btn btn-primary">Update</button>
                        </a>
                    </td>
                </tr>
           @endforeach
            </tbody>
        </table>
    </div>
  
</body>
</html>