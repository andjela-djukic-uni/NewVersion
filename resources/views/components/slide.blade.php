@props(['slide'])

<div class="swiper-slide" style={{$slide->pictureUrl}}>
    <div class="content">
    <h>{{$slide->title}}</h>
    <span>{{$slide->sentance}}
        </span>
    </div>
</div>