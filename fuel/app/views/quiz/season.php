<style>
    #wapper {
        height: 100%;
        width: 100%;
        min-height: 650px;
        min-width: 900px;
        padding-top: 1px;
    }
    #slider {
        margin: 100px 0 0 0;
        height: 500px;
        overflow: hidden;
        background: url(http://127.0.0.1/quizinc/public/assets/img/ajax-loader.gif) center center no-repeat;
    }

    #slider .slide {
        position: relative;
        display: none;
        height: 500px;
        float: left;
        background-position: center right;
        cursor: pointer;
        border-left: 1px solid #fff;
    }

    #slider .slide:first-child {
        border: none;
    }

    #slider .slide.active {
        cursor: default;
    }

    #slider .slide-block {
        position: absolute;
        left: 40px;
        bottom: 25px;
        display: inline-block;
        width: 435px;
        background-color: #fff;
        background-color: rgba(255,255,255, 0.8);	
        padding: 20px;
        font-size: 14px;
        color: #134B94;
        border: 1px solid #fff;
        overflow: hidden;
        border-radius: 4px;
    }

    #slider .slide-block h4 {
        font-size: 36px;
        font-weight: bold;
        margin: 0 0 10px 0;
        line-height: 1;
    }
    #slider .slide-block p {
        margin: 0;
    }

    #donate-spacer {
        height: 0;
    }
    #donate {
        border-top: 1px solid #999;
        width: 750px;
        padding: 50px 75px;
        margin: 0 auto;
        overflow: hidden;
    }
    #donate p, #donate form {
        margin: 0;
        float: left;
    }
    #donate p {
        width: 650px;
        color: #999;
    }
    #donate form {
        width: 100px;
    }
</style>
<div class="col-sm-9 " style="margin-top:50px; margin-left:100px;padding-bottom: 40px">
    <div class="container">
        <div class="row structure " style="min-height: 650px;padding-right: 50px;padding-left: 50px;">
            <h2>Season Quiz</h2>
            <div id="wrapper">
                <div id="slider">

                    <div class="slide" style="background-image: url('http://127.0.0.1/quizinc/public/assets/img/tbt.jpg');">
                        <div class="slide-block">
                         <p>"I'm not crazy, My mother had me tested."<br />

Indian Quizzing League (IQL) and QuizInc proudly present - The Sheldon Cooper of all Quizzes, the one of its kind, imported straight from Pasadena - The Big Bang Theory Quiz!
<br />
Leonard: What do we do to those who don't participate?<br />
Sheldon: bortaS bIr jablu'DI' reH QaQqu' nay.</p>
                        </div>
                    </div>

                    
                    <div class="slide" style="background-image: url('http://127.0.0.1/quizinc/public/assets/img/india.jpg');">
                        <div class="slide-block">
                            <h4>Ice Age</h4>
                            <p>Heading south to avoid a bad case of global frostbite, a group of migrating misfit creatures embark on a hilarious quest to reunite a human baby with his tribe.</p>
                        </div>
                    </div>

                    
                    <div class="slide" style="background-image: url('http://127.0.0.1/quizinc/public/assets/img/up.jpg');">
                        <div class="slide-block">
                            <h4>UP</h4>
                            <p>A comedy adventure in which 78-year-old Carl Fredricksen fulfills his dream of a great adventure when he ties thousands of balloons to his house and flies away to the wilds of South America.</p>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

    </div>
</div>
</div>	
<?php echo Asset::js('jquery.carouFredSel-6.2.0-packed.js'); ?>
<script type="text/javascript">
    $(function() {
        $('#slider').carouFredSel({
            width: '100%',
            align: false,
            items: 3,
            items: {
                width: $('#wrapper').width() * 0.15,
                height: 500,
                visible: 1,
                minimum: 1
            },
            scroll: {
                items: 1,
                timeoutDuration: 5000,
                onBefore: function(data) {

                    //	find current and next slide
                    var currentSlide = $('.slide.active', this),
                            nextSlide = data.items.visible,
                            _width = $('#wrapper').width();

                    //	resize currentslide to small version
                    currentSlide.stop().animate({
                        width: _width * 0.15
                    });
                    currentSlide.removeClass('active');

                    //	hide current block
                    data.items.old.add(data.items.visible).find('.slide-block').stop().fadeOut();

                    //	animate clicked slide to large size
                    nextSlide.addClass('active');
                    nextSlide.stop().animate({
                        width: _width * 0.7
                    });
                },
                onAfter: function(data) {
                    //	show active slide block
                    data.items.visible.last().find('.slide-block').stop().fadeIn();
                }
            },
            onCreate: function(data) {

                //	clone images for better sliding and insert them dynamacly in slider
                var newitems = $('.slide', this).clone(true),
                        _width = $('#wrapper').width();

                $(this).trigger('insertItem', [newitems, newitems.length, false]);

                //	show images 
                $('.slide', this).fadeIn();
                $('.slide:first-child', this).addClass('active');
                $('.slide', this).width(_width * 0.15);

                //	enlarge first slide
                $('.slide:first-child', this).animate({
                    width: _width * 0.7
                });

                //	show first title block and hide the rest
                $(this).find('.slide-block').hide();
                $(this).find('.slide.active .slide-block').stop().fadeIn();
            }
        });

        //	Handle click events
        $('#slider').children().click(function() {
            $('#slider').trigger('slideTo', [this]);
        });

        //	Enable code below if you want to support browser resizing
        $(window).resize(function() {

            var slider = $('#slider'),
                    _width = $('#wrapper').width();

            //	show images
            slider.find('.slide').width(_width * 0.15);

            //	enlarge first slide
            slider.find('.slide.active').width(_width * 0.7);

            //	update item width config
            slider.trigger('configuration', ['items.width', _width * 0.15]);
        });

    });
</script>
