<style>

    {{ "#$id" }} .swiper {
        width: 100%;
        height: 100%;
    }

    {{ "#$id" }} .swiper-slide {
        text-align: center;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
        background-color: #f8f6f6;
    }

    {{ "#$id" }} .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    {{ "#$id" }} .swiper-button-prev:after, {{ "#$id" }} .swiper-button-next:after{
        color: #fff;
        width: 40px;
        height: 40px;
        position: absolute;
        background-color: #007aff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        font-size: small;
    }
    {{ "#$id" }} .swiper-button-prev:after{
        left: 0px;
    }

    {{ "#$id" }} .swiper-button-next:after{
        right: 0px;
    }

    {{ "#$id" }} .swiper-slide {
        -webkit-transition: .2s all ease;
        -o-transition: .2s all ease;
        transition: .2s all ease;
    }

    {{ "#$id" }} .swiper-slide:hover {
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        transform: scale(1.05);
    }
</style>


<div class="container mt-3 mb-3">
    <div class="bg-white shadow rounded-1 p-2" id="{{ $id }}">

        @if($title)
            <div class="text-start p-3 bg-primary bg-gradient mb-2 rounded-1">
                <h5 class="text-light mb-0"> {{ $title }} </h5>
            </div>
        @endif
        <div class="swiper {{ $id }} p-1">
            <div class="swiper-wrapper">
                @for($i = 1; $i <= 10; $i++)
                    <div class="swiper-slide rounded-1">
                        category {{ $i }}
                    </div>
                @endfor
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper("{{".$id"}}", {
        slidesPerView: 1,
        spaceBetween: 15,
        pagination: {
            el: "{{ "#$id" }} > .swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: "{{ "#$id" }} .swiper-button-next",
            prevEl: "{{ "#$id" }} .swiper-button-prev",
        },
        breakpoints: {
            400: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 15,
            },

            992: {
                slidesPerView: 4,
                spaceBetween: 15,
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 15,
            },
        },
    });
</script>
