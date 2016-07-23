<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body ng-app='tweet'>

        <div class="container" ng-controller="CreateController as vm">
            <div class="content">

                <form>
                    {{ csrf_field() }}

                    <div class='form-group'>
                        <label>Cuerpo del tweet: </label>
                        <input name='body' ng-model='vm.data.body' class='form-control' />
                        <span ng-if='vm.errors.body' class='has-error'> Ingresa body</span>
                    </div>

                    <button ng-click='vm.submitForm()' class='btn btn-primary'> Crea Tweet </button>
                </form>

            </div>
        </div>
    </body>

    <script src="{{ elixir('js/app.js') }}"></script>
</html>
