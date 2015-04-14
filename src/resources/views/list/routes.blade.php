<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Routes</h1>
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

            <tbody>
                @foreach ($routes as $route)
                    <tr>
                        <td>{{ implode('|', $route->getMethods())  }}</td>
                        <td>{{ $route->getPath()  }}</td>
                        <td>{{ $route->getName() }}</td>
                        <td>{{ $route->getActionName() }}</td>
                        <td>{{ implode('|', $route->middleware()) }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>