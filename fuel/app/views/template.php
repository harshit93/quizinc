<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Quizinc</title>
    <meta name="description" content="Quizinc NIT Durgapur">
    <meta name="viewport" content="width=device-width">
        <?php echo Asset::css('bootstrap.css'); ?>
        <?php echo Asset::css('main.css'); ?>
        <?php echo Asset::css('fullcalendar.css'); ?>
        <?php echo Asset::js('jquery.js'); ?>
        <?php echo Asset::js('bootstrap.js'); ?>
    </head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
    <div id="fb-root"></div>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="padding-top:20px"><span style="font-size:30px">QUIZINC</span><br /><span style="font-size:10px">We add the zing to Quizzing!</span></a>
            </div>
            <div class="navbar-collapse collapse" style="padding-top:20px">
                <ul class="nav navbar-nav ">
                    <div class="span2"></div>
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quizzes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Season</a></li>
                            <li><a href="#">Online</a></li>
                            <li><a href="#">Flyers</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">About Us</li>
                        </ul>
                    </li>
                    <li><a href="">Quizzitch Cup</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Subscribe</button>
                </form>
            </div><!--/.navbar-collapse -->
            <div class="marquee">Lorem ipsum dolor sit amet, consectetur adipiscing elit END.</div> 
        </div>
    </div>
    <div class="main row">
        <div class="col-xs-4 col-sm-1 sidebar-offcanvas pull-right"  style="margin-right:50px;margin-top:100px" id="sidebar" role="navigation">
            <div class=" span2">
                NITD LOGO
            </div>
            <br />
            <div class=" span2" style="margin-top:20px">
                <a data-toggle="modal" href="#calender_modal"  class=""><div class="calendar"></div></a>
            </div>
            <div class=" span2" style="margin-top:20px" >
                <a data-toggle="modal" href="#facebook_modal" ><div class="facebook"></div></a>
            </div>
            <div class=" span2" style="margin-top:20px">
                <a data-toggle="modal" href="#twitter_modal" ><div class="twitter"></div></a>
            </div>
        </div>
        <? echo $content; ?>
    </div>   

    <div class="footer navbar navbar-inverse " style="margin-top:0px;width:100%;  padding: 20px 10px 0 10px">
        <div class="container">
            <div class="span12 " style="height: 200px;">
                 </div>
        </div>
    </div>
    <!------ MODALS -->
    <div class="modal fade " id="calender_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog span10">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">SCHEDULE</h4>
                </div>
                <div class="modal-body">
                    <div id='loading' style='display:none'>loading...</div>
                    <div id='calendar'></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade " id="facebook_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog span5 offset4">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="https://www.facebook.com/quizinc.nitd" data-send="true" data-width="250" data-show-faces="true" fb-xfbml-state="rendered"><span style="height: 65px; width: 285px;"><iframe id="ff172ab6c" name="f344eb2dc" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=132719076882271&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D26%23cb%3Df15f98d0c4%26domain%3Dquizinc.in%26origin%3Dhttp%253A%252F%252Fquizinc.in%252Ff1f2f5635%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fquizinc.nitd&amp;layout=standard&amp;locale=en_US&amp;node_type=link&amp;sdk=joey&amp;send=true&amp;show_faces=true&amp;width=285" style="border: none; overflow: hidden; height: 65px; width: 285px;"></iframe></span></div><hr />
                    <div class="fb-like-box" data-href="https://www.facebook.com/quizinc.nitd" data-width="400" data-height="500" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal fade " id="twitter_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog span6 offset3">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">TWITTER</h4>
                </div>
                <div class="modal-body">

                    <a class="twitter-timeline" href="https://twitter.com/aaghran" data-widget-id="372630182361698304">Tweets by @aaghran</a>
                    <script>!function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</body>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php echo Asset::js('fullcalendar.min.js'); ?>
<?php echo Asset::js('gcal.js'); ?>
<?php echo Asset::js('marquee.min.js'); ?>
   
<script type="text/javascript">
<!--
    $('.marquee').marquee({
        //speed in milliseconds of the marquee  
        speed: 15000,
        //gap in pixels between the tickers  
        gap: 50,
        //gap in pixels between the tickers  
        delayBeforeStart: 0,
        //'left' or 'right'  
        direction: 'left'
    });
    $(document).ready(function() {

        $('#calendar').fullCalendar({
            // US Holidays
            events: 'http://www.google.com/calendar/embed?src=ZXBsXzYxNTdfJTRkYW5jaGVzdGVyKyU1NW5pdGVkI3Nwb3J0c0Bncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20',
            eventClick: function(event) {
                // opens events in a popup window
                window.open(event.url, 'gcalevent', 'width=700,height=500');
                return false;
            },
            loading: function(bool) {
                if (bool) {
                    $('#loading').show();
                } else {
                    $('#loading').hide();
                }
            }

        });

    });

</script>
