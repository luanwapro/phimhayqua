
@foreach($phim as $value)
@if($link == 1)

    <div class="video-grid-single-page-agileits video"  >
        <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
        <div class="fb-video img-responsive"
             @foreach($phim as $tapphim)
             @if($tapphim->id == $tap)
             data-href="https://www.facebook.com/watch/?v={{$tapphim->linkphim}}"
             @endif
             @endforeach
             data-width="auto"
             data-show-captions="false">
        </div>

    </div>
@else
    {{--{{!!$value->link_phim!!}}--}}
    {!!$value->linkphim!!}
@endif
@endforeach

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<!-- <div itemscope itemtype="https://schema.org/AudioObject"><meta itemprop="uploadDate" content="Wed Oct 09 2019 08:57:52 GMT+0000 (Giờ Trung bình Greenwich)"/><meta itemprop="name" content="Doraemon Tập Dài ( Lồng Tiếng) - Nobita Và Hiệp Sĩ Không Gian"/><meta itemprop="duration" content="P0D" /><meta itemprop="contentUrl" content="https://content.jwplatform.com/videos/xTpDed6a-k7gyEI6t.m4a"/></div> -->
