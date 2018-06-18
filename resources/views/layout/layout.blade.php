<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
      <link rel="stylesheet" href="{{asset("css/app.css")}}">
      <title>@yield('page_title')</title>
   </head>
   <body>
      <header>
         <h1>Gestione Magazzino</h1>
      </header>
      <div id="main_cnt">
         @yield('main_section')
      </div>
      @yield('form_cnt')
      <script src="{{asset("js/app.js")}}" charset="utf-8"></script>
   </body>
</html>
