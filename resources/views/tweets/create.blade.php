<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="content">


                <!-- @if (count($errors) > 0) -->
                <!-- <div class='alert alert-danger'> -->
                <!--     <ul> -->
                <!--     @foreach ($errors->all() as $error) -->
                <!--         <li>{{ $error }}</li> -->
                <!--     @endforeach -->
                <!--     </ul> -->
                <!-- </div> -->
                <!-- @endif -->

                <div id='errors' class='alert alert-danger' style='display:none'>
                    <ul>
                    </ul>
                </div>

                <form id='form' action='/tweets/store' method='POST' class='form'>
                    {{ csrf_field() }}

                    <input name='body' class='' />

                    <button class='btn btn-primary'> Crea Tweet </button>
                </form>

            </div>
        </div>
    </body>

    <script src="{{ elixir('js/app.js') }}"></script>
</html>
