<!doctype html>
<html lang="en">
    <head> 
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <title>WPU Blog | Dashboard </title>
            
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

            

            <!-- Bootstrap core CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


            {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            --}}
            <link href="/css/dashboard.css" rel="stylesheet">

            {{-- Trix EDITOR --}}
            <link rel="stylesheet" type="text/css" href="/css/trix.css">
            <script type="text/javascript" src="/js/trix.js"></script>
  
            <style>
                trix-toolbar [data-trix-button-group="file-tools"] {
                    display: none;
                }
            </style>
        </head>
        <body>

            @include('dashboard.layouts.header')

            <div class="container-fluid">
            <div class="row">
                @include('dashboard.layouts.sidebar')
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('container')
                </main>
            </div>
            </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

        <script src="/js/dashboard.js"></script>
  </body>
</html>

