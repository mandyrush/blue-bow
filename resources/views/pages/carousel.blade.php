<div class="carousel-slider" id="carousel">
    <header>My Work</header>

    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="indicator1 active"></li>
            <li class="indicator2"></li>
            <li class="indicator3"></li>
            <li class="indicator4"></li>
            <li class="indicator5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="slide-one carousel-item active">
                <div class="carousel-images">
                    <div class="lg-img">
                        <img src="/images/brittany-hat-front.jpg" alt="">
                    </div>

                    <div class="sm-images">
                        <div class="sm-img-one">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-two">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-three">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-four">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-five">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-six">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-caption">
                    <div>Pillbox Hat</div>
                </div>
            </div>

            <div class="slide-two carousel-item">
                <div class="carousel-images">
                    <div class="lg-img">
                        <img src="/images/brittany-hat-front.jpg" alt="">
                    </div>

                    <div class="sm-images">
                       <div class="sm-img-one">
                           <img src="/images/brittany-hat-back.jpg" alt="">
                       </div>
                        <div class="sm-img-two">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-three">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-caption">
                    <div>Pillbox Hat</div>
                </div>
            </div>

            <div class="slide-three carousel-item">
                <div class="carousel-images">
                    <div class="lg-img">
                        <img src="/images/brittany-hat-front.jpg" alt="">
                    </div>

                    <div class="sm-images">
                        <div class="sm-img-one">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-two">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-three">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-four">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-caption">
                    <div>Pillbox Hat</div>
                </div>
            </div>

            <div class="slide-four carousel-item">
                <div class="carousel-images">
                    <div class="lg-img">
                        <img src="/images/brittany-hat-front.jpg" alt="">
                    </div>

                    <div class="sm-images">
                        <div class="sm-img-one">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-two">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-three">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-caption">
                    <div>Pillbox Hat</div>
                </div>
            </div>

            <div class="slide-five carousel-item">
                <div class="carousel-images">
                    <div class="lg-img">
                        <img src="/images/brittany-hat-front.jpg" alt="">
                    </div>

                    <div class="sm-images">
                        <div class="sm-img-one">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-two">
                            <img src="/images/brittany-hat-back.jpg" alt="">
                        </div>
                        <div class="sm-img-three">
                            <img src="/images/brittany-hat-back.jpg" alt="">
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

    <div class="link-to-gallery">
        <a href="/mywork">View More</a>
    </div>

</div>

<script>
    $(document).ready(function(){

        let carouselElement = $("#myCarousel");

        // Activate Carousel
        carouselElement.carousel();

        // Enable Carousel Indicators
        $(".indicator1").click(function(){
            carouselElement.carousel(0);
        });
        $(".indicator2").click(function(){
            carouselElement.carousel(1);
        });
        $(".indicator3").click(function(){
            carouselElement.carousel(2);
        });
        $(".indicator4").click(function(){
            carouselElement.carousel(3);
        });
        $(".indicator5").click(function(){
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
