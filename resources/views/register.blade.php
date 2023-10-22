<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Registration Form</title>
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
        <h2 class="mt-4">{{$title}}</h2>



        <form action="{{$url}}" method="post">
           @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($farmer) ? $farmer->name : old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ isset($farmer) ? $farmer->email : old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password"  required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ isset($farmer) ? $farmer->address : old('address') }}" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ isset($farmer) ? $farmer->city : old('city') }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{ isset($farmer) ? $farmer->state : old('state') }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Gender:</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="male" name="gender" value="Male" required>
                    <label class="form-check-label" for="male">M</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="female" name="gender" value="Female" required>
                    <label class="form-check-label" for="female">F</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="other" name="gender" value="Other" required>
                    <label class="form-check-label" for="other">O</label>
                </div>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{ isset($farmer) ? $farmer->dob : old('dob') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
 
</body>
</html>
