<div class="light-bg container-fluid">
    <header class="gallery-header" id="gallery">My Work</header>
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="item1 active"></li>
            <li class="item2"></li>
            <li class="item3"></li>
            <li class="item4"></li>
            <li class="item5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item slide-one active">
                <div class="gallery-images">
                    <div class="lg-gallery-img">
                        <img src="/images/brittany-hat-front.jpg" class="lg-img" alt="">
                    </div>

                    <div class="sm-gallery-img">
                        <div class="sm-img-one">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-two">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-three">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-four">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-five">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-six">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-caption">
                    <div>Pillbox Hat</div>
                </div>
            </div>

            <div class="carousel-item slide-two">
                <div class="gallery-images">
                    <div class="lg-gallery-img">
                        <img src="/images/brittany-hat-front.jpg" class="lg-img" alt="">
                    </div>

                    <div class="sm-gallery-img">
                       <div class="sm-img-one">
                           <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                       </div>
                        <div class="sm-img-two">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-three">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-caption">
                    <div>Pillbox Hat</div>
                </div>
            </div>

            <div class="carousel-item slide-three">
                <div class="gallery-images">
                    <div class="lg-gallery-img">
                        <img src="/images/brittany-hat-front.jpg" class="lg-img" alt="">
                    </div>

                    <div class="sm-gallery-img">
                        <div class="sm-img-one">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-two">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-three">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-four">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-caption">
                    <div>Pillbox Hat</div>
                </div>
            </div>

            <div class="carousel-item slide-four">
                <div class="gallery-images">
                    <div class="lg-gallery-img">
                        <img src="/images/brittany-hat-front.jpg" class="lg-img" alt="">
                    </div>

                    <div class="sm-gallery-img">
                        <div class="sm-img-one">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-two">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-three">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-caption">
                    <div>Pillbox Hat</div>
                </div>
            </div>

            <div class="carousel-item slide-five">
                <div class="gallery-images">
                    <div class="lg-gallery-img">
                        <img src="/images/brittany-hat-front.jpg" class="lg-img" alt="">
                    </div>

                    <div class="sm-gallery-img">
                        <div class="sm-img-one">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-two">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                        <div class="sm-img-three">
                            <img src="/images/brittany-hat-back.jpg" class="sm-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-caption">
                    <div>Pillbox Hat</div>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="gallery-link">
        <a href="/mywork">View More</a>
    </div>

</div>

<script>
    $(document).ready(function(){

        let carouselElement = $("#myCarousel");

        // Activate Carousel
        carouselElement.carousel();

        // Enable Carousel Indicators
        $(".item1").click(function(){
            carouselElement.carousel(0);
        });
        $(".item2").click(function(){
            carouselElement.carousel(1);
        });
        $(".item3").click(function(){
            carouselElement.carousel(2);
        });
        $(".item4").click(function(){
            carouselElement.carousel(3);
        });
        $(".item5").click(function(){
            carouselElement.carousel(4);
        });

        // Enable Carousel Controls
        $(".left").click(function(){
            carouselElement.carousel("prev");
        });
        $(".right").click(function(){
            carouselElement.carousel("next");
        });
    });
</script>
