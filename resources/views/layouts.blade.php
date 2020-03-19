<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href=" view-source:https://getbootstrap.com/docs/4.4/examples/blog/">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link href="/css/default.css" rel="stylesheet"/>
        <link href="/css/fonts.css" rel="stylesheet"/>

        <title>BP Blog</title>

        @yield('head')
        
        <style>
        
            .footer {
                position: fixed;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
            }

        </style>
        
    </head>
    <body>

        <div class="container" id="header"><!--  -->

            <div id="header" >  <!--  -->

                <div class="nav-scroller py-4 mb-2">
                    <nav class="nav d-flex justify-content-between">
                        <div id="menu">
                        
                            <a class="p-2 text-muted {{ Request::path() === '/' ? 'current_page_item' : '' }}" 
                                href="/" accesskey="1" title="">Homepage</a>

                            <a class="p-2 text-muted {{ Request::path() === '/' ? 'current_page_item' : '' }}" 
                                href="/about" accesskey="3">About Us</a>

                            <a class="p-2 text-muted {{ Request::path() === 'articles' ? 'current_page_item' : '' }}" 
                                href="/articles" accesskey="4" title="">Articles</a>

                            <a class="p-2 text-muted {{ Request::path() === 'contact' ? 'current_page_item' : '' }}" 
                                href="/contact" accesskey="5" title="">Contact Us</a>
                            
                            
                                <a class="text-muted" href="#" aria-label="Search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" 
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
                                    <title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                                </a>
                                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>

                        </div>
                    </nav>
                </div>
            
                
            
            </div>  <!--  -->
        
        
            @yield('header')
            
            @yield('content')

         
            <footer class="footer font-small blue border bg-light container">
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
                    <p><a href="#">Back to top</a></p>
                </div>
            </footer>


        </div><!-- -->

    </body>
</html>
