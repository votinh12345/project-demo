<?php
$listImage = App\Models\BannerImages::getImageBanner('7');
?>
@if(count($listImage) > 0)
<div class="slide">
    <div id="slider1_container" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position: absolute; display: block; background: url(../images/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        </div>  
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
            @foreach($listImage as $items)
            
            <div>
                <img u="image" src="image/{!! $items->image !!}" />
                <div class="info">
                    <h3><span class="left"></span><strong>Crazy</strong><span class="right"></span></h3>
                    <div class="img-lable">{!!Html::image('images/lable-slide.png')!!}</div>
                    <p>woman collection</p>
                </div>
                <div class="link-shop">
                    <a href="{!! $items->link !!}">shop now<span></span></a>
                </div>
            </div>
            @endforeach
        </div>
        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
            <div u="prototype"></div>
        </div>
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;"></span>
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;"></span>
    </div>
</div>
@endif
