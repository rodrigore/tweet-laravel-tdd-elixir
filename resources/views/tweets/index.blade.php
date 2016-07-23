<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body ng-app='tweet'>

        <div class="container" ng-controller="ListController as vm">
            <div class="content">

                <table class='table'>
                    <thead>
                        <tr><th>id</th>
                        <th>body</th>
                        </tr>

                        <tr>
                            <th><input type='text' /></th>
                            <th><input type='text' ng-model="vm.body" /></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat='tweet in vm.data | filter:vm.body'>
                            <td>@{{ tweet.id }} </td>
                            <td>@{{ tweet.body }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </body>

    <script src="{{ elixir('js/app.js') }}"></script>
</html>
