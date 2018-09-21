<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users Edit</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h1><b>Users</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('login') }}">Dashboard</a></li>
                    <li><a href="{{route('user.index')}}">Users</a></li>
                    <li class="active">Change</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <br>
            <h4 id="center"><b>User Change</b></h4>
            <br>
            <form method="post"
                  action="{{route('user.update', $user->id)}}"
                  enctype="multipart/form-data">
                {!! method_field('put') !!}
                {{ csrf_field() }}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name"
                               class="form-control"
                               value="{{$user->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">E-mail</label>
                        <input type="email" name="email"
                               class="form-control"
                               value="{{$user->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password"
                               class="form-control"
                               value="{{$user->password}}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="reset" class="btn btn-default">
                        Limpar
                    </button>
                    <button type="submit"
                            class="btn btn-warning" id="black">
                        Alterar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>