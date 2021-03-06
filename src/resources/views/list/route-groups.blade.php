<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Route List</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Routes</h1>

        <ul class="nav nav-tabs">
          <li role="presentation" ><a href="{{ action('\Media24si\RouteExplorer\app\Http\Controllers\ListController@routes') }}">Routes</a></li>
          <li role="presentation" class="active"><a href="#">Route groupes</a></li>
        </ul>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Method</th>
                    <th>URI</th>
                    <th>Name</th>
                    <th>Action</th>
                    <th>Middleware</th>
                </tr>
            </thead>
            @foreach ($routes as $key => $routeGroup) 
            <tbody>
                <tr class="routeGroup"><th colspan="5">{{ $key }}</th></tr>
                @foreach ($routeGroup as $route)
                    <tr>
                        <td>{{ implode('|', $route->getMethods())  }}</td>
                        <td>{{ $route->getPath()  }}</td>
                        <td>{{ $route->getName() }}</td>
                        <td>{{ $route->getActionName() }}</td>
                        <td>{{ implode('|', $route->middleware()) }}</td>
                    </tr>
                @endforeach
            </tbody>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        var x = document.getElementsByClassName("routeGroup");
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].style.backgroundColor = 'rgba(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ', 0.1)';
        }
    </script>
</body>
</html>