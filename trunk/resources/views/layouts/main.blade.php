<!DOCTYPE html>
<!--[if lt IE 7]>     <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>        <html lang="en" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>        <html lang="en" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
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
        {!! Html::script('js/jquery.bxslider.js' . $versionJs) !!}
        {!! Html::script('js/flexslider.js' . $versionJs) !!}
        {!! Html::script('js/stylesheet.js' . $versionJs) !!}
    </head>
    <body>                
        <div id="wrapper"> 
            @include('partials.header')
            <!-- Content -->
            <div id="content">
                <main id="main" role="main">
                    <!-- View form search detail -->                    
                    <!-- End form search detail -->
                    @yield('content')
                </main>
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
    </body>
</html>