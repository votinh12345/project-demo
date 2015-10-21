<!DOCTYPE html>
<!--[if lt IE 7]>     <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>        <html lang="en" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>        <html lang="en" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <?php
        $versionJs = '?v=' . Config::get('version.js');
        $versionCss = '?v=' . Config::get('version.css');
        ?>
        <title></title>
        <meta name="description" content="{{ $pageDescription or '' }}" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="{{ $pageTitle or 'Gulliver New Zealand' }}" />
        <meta property="og:type" content="{{ $pageType or 'Gulliver:website' }}" />
        <meta property="og:url" content="{{ $pageUrl or Request::url() }}" />
        <meta property="og:site_name" content="{{ $pageName or 'Gulliver New Zealand' }}" />
        <meta property="og:description" content="{{ $pageDescription or '' }}" />
        <meta property="og:image" content="{{ $pageImage or '' }}" />
        <link rel="canonical" href="{{ $pageUrl or Request::url() }}" />
        <link rel="shortcut icon" href="{{asset('/favicon.ico')}}" />
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
        {!! Html::style('css/bootstrap.min.css' . $versionCss); !!}
        {!! Html::style('css/slide_image.css' . $versionCss); !!}
        {!! Html::style('css/bootstrap-theme.min.css' . $versionCss); !!}
        {!! Html::style('css/jquery-ui.css' . $versionCss); !!}
        {!! Html::style('css/font-awesome.min.css' . $versionCss); !!}
        {!! Html::style('css/font.css' . $versionCss); !!}
        {!! Html::style('css/jquery.bxslider.css' . $versionCss); !!}
        {!! Html::style('css/flexslider.css' . $versionCss); !!}
        {!! Html::style('css/stylesheet.css' . $versionCss); !!}        

    </head>
    <body class="common-home loading"> 
        @include('partials.top')
        <div id="wrapper"> 
            @include('partials.header')
            <!-- Content -->
            <div id="content-container">
                @include('partials.slide_main')
                <div class="row-container">  
                    <main id="main" role="main">
                        <!-- View form search detail -->                    
                        <!-- End form search detail -->
                        @yield('content')
                    </main>
                </div>
            </div>
            @include('partials.footer')
        </div>        
        {!! Html::script('js/jquery-2.1.1.min.js' . $versionJs) !!}
        {!!Html::script('js/bootstrap.min.js' . $versionJs); !!}
        {!! Html::script('js/jssor.js' . $versionJs); !!}
        {!! Html::script('js/jssor.slider.js' . $versionJs); !!}
        {!! Html::script('js/main.js' . $versionJs); !!}
        {!! Html::script('js/jquery-ui.js' . $versionJs); !!}			
        {!! Html::script('js/jquery.bxslider.js' . $versionJs)!!}
        {!! Html::script('js/jquery.flexslider.js' . $versionJs) !!}
        @yield('script')
        <script type="text/javascript">
            $('.bxslider,.bxslider1,.bxslider2,.bxslider3').bxSlider({
                minSlides: 6,
                maxSlides: 6,
                slideWidth: 360,
                slideMargin: 30
            });
            $(window).load(function () {
                $('#carousel0').flexslider({
                    animation: "slide",
                    animationLoop: true,
                    itemWidth: 210,
                    itemMargin: 5,
                    minItems: 8,
                    maxItems: 8,
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
    </body>
</html>