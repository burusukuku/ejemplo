
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.theme.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    @yield('head')
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL::route('index')}}">Laravel</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <?
          $vista= Route::currentRouteName();
          $current = array
            (
                'index' => '',
                'personal' => '',
                'contacto' => ''
            );
           if($vista == '' || $vista == 'index')
            {
                $current['index']='active';
            }
            else if($vista == 'personal')
             {
                $current['personal']='active';
             }
            else if($vista == 'contacto')
             {
                $current['contacto']='active';
             }
          ?>


            <li class="{{$current['index']}}"><a href="{{URL::route('index')}}">Inicio</a></li>
            <li class="{{$current['personal']}}"><a href="{{URL::route('personal')}}">Personal</a></li>
            <li class="{{$current['contacto']}}"><a href="{{URL::route('contacto')}}">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container" style="margin-top: 80px">
    @yield('content')
    </div><!-- /.container -->

  </body>
</html>
