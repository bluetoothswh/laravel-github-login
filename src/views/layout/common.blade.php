<html>
    <head>
        <link type="text/css" rel="stylesheet" 
      		href="https://laravip.com/static/materialize/css/materialize.min.css"  
      		media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <title>@yield('title')</title>
    </head>

    <body>
	  
	  @include('github::lib.top')
	  @yield('content')

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://laravip.com/static/js/jquery.min.js"></script>
      <script type="text/javascript" src="https://laravip.com/static/materialize/js/materialize.min.js"></script>
    </body>
  </html>
        
