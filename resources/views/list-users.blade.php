<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
@if (session('message'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close"
           data-dismiss="alert"
           aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
@endif
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
                    <li class="active">Users</li>
                </ol>
                <br>
                <a href="{{route('user.create')}}"
                   class="btn btn-default btn-sm pull-right">
                    <span class="glyphicon glyphicon-plus"></span> Add User</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br />
                <h4 id="center"><b>Registered users ({{$total}})</b></h4>
                <br>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th id="center">Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td id="center">{{$user->id}}</td>
                                <td title="Nome">{{$user->name}}</td>
                                <td title="Nome">{{$user->email}}</td>
                                <td title="Nome">{{$user->password}}</td>
                                <td id="center">
                                    <a href="{{route('user.edit', $user->id)}}"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Change"><i class="fa fa-pencil"></i></a>
                                    &nbsp;<form style="display: inline-block;" method="POST"
                                                action="{{route('user.destroy', $user->id)}}"
                                                data-toggle="tooltip" data-placement="top"
                                                title="Delete"
                                                onsubmit="return confirm('Confirm exclusion?')">
                                        {{method_field('DELETE')}}{{ csrf_field() }}
                                        <button type="submit" style="background-color: #fff">
                                            <a><i class="fa fa-trash-o"></i></a>
                                        </button></form></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>