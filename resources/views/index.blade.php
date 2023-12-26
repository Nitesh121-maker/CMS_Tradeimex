<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('frontend/css/index.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="/frontend/js/index.js"></script>
    <title>CMS Tradeimex</title>
</head>

<body>
    <div class="main">
      <div class="maincontainer">
        <div class="sidebar">
            <div class="company">
                <div class="company_logo">
                    <img src="" alt="">
                </div>
                <div class="company_name">
                    <h2>Tradeimex</h2>
                </div>
            </div>
            <div class="menu">
                <li class="menu_home">
                    <div class="menu_icon_home">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="menu_name_home">
                        <span><a href="/">Dashboard</a></span>
                    </div>
                </li>
                <li class="menu_country">
                    <div class="menu_icon_country">
                        <i class="fa fa-flag"></i>
                    </div>
                    <div class="menu_name_country">
                        <span><a href="/country">Country</a></span>
                    </div>
                </li>
                <li class="menu_continent">
                    <div class="menu_icon_continent">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                    <div class="menu_name_continent">
                        <span>Continent</span>
                    </div>
                </li>

            </div>
        </div>
    
      </div>
      <div class="actions">
        <div class="cmsnav">
            <div class="user">
                <div class="logo">
                    <i class="fa fa-user"></i>
                </div>
            </div>
        </div>
        <div class="content">
           @yield('countryform')
        </div>
    </div>    
    </div>
</body>
</html>