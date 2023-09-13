<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boot - @yield('title')</title>
    
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/app.css">

    @stack('style')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    
  </head>
  <body>
    <div class="container-fluid ">
        <div class="row">

            <div class="col-4 d-flex justify-content-center  pt-5   ">
                      
            <!-- <img src="../images1/logo.png" alt="" class="img-fluid "> -->
                   <img src="../images1/logo.png" alt="" class="img-fluid ">
            </div>

            <div class="col-8 d-flex justify-content-around pt-5">
           
               <nav class="nav text-dark ">
                  <a class="nav-link text-dark active" aria-current="page" href="/">Home</a>
                  <a class="nav-link text-dark" href="/about">About</a>
                  <a class="nav-link text-dark" href="/post">Post</a>
                 
                  
              </nav>
               @show
            </div>

            <div class="col-5 hp">
                @yield('content')
            </div>


            <div class="col-7">
                <img src="../images1/header.png" alt="" class="img-fluid ">
            </div>


        </div>

        

           
          <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-shadow">
              <button class="btn "></button>
            </div>
            <div class="col-1"></div>
          </div>


           


        









    </div>
   
 
   @stack('scripts')
  </body>
</html>