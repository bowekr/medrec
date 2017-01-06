<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekam Medis</title>

    <!-- Referencing Bootstrap CSS that is hosted locally -->
    {!! Html::style('css/bootstrap.min.css') !!}

    {!! Html::style('css/vendor.css') !!}
    {!! Html::style('css/flat-admin.css') !!}
    {!! Html::style('css/jquery-ui.css') !!}

    <!-- Theme -->
    {!! Html::style('css/theme/blue-sky.css') !!}
    {!! Html::style('css/theme/blue.css') !!}
    {!! Html::style('css/theme/red.css') !!}
    {!! Html::style('css/theme/yellow.css') !!}
  </head>

  <body>

    @include('partials.sidebar')
    <div class="app-container">
      @include('partials.navbar')
      @yield('content')
    </div>

    <!-- Referencing Bootstrap JS that is hosted locally -->

    {!! Html::script('js/vendor.js') !!}
    {!! Html::script('js/app.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/jquery-ui.min.js') !!}

    @yield('assetsInclude')
  </body>
</html>