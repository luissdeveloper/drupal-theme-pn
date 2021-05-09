(function($, Drupal) {
    var isMobileSize = false;
    Drupal.Zetraz = Drupal.Zetraz || {};
    "use strict";
    Drupal.behaviors.Zetraz = {
        attach: function(context, settings) {
            $(window).on('load', function() {
                if ($("#search-block-form [name='keys']").val() === "") {
                    $("#search-block-form input[name='keys']").val(Drupal.t("Buscar"));
                }
                $("#search-block-form input[name='keys']").focus(function() {
                    if ($(this).val() === Drupal.t("Buscar")) {
                        $(this).val("");
                    }
                }).blur(function() {
                    if ($(this).val() === "") {
                        $(this).val(Drupal.t("Buscar"));
                    }
                });
                // Check mobile size
                if ($(window).width() <= 991) {
                    isMobileSize = true;
                }
                // MatchHeight
                $('.carousel-responsive-news .owl-item').matchHeight({
                    property: 'min-height'
                });
                $('.block-article-world-news .views-row .views-col').matchHeight({
                    property: 'min-height'
                });
                $('#owl-demo .owl-item').matchHeight({
                    property: 'min-height'
                });
                $('.block-article-recent-post .views-row').matchHeight({
                    property: 'min-height'
                });
                $('.carousel-responsive-you-might .owl-item').matchHeight({
                    property: 'min-height'
                });
                $('.views-view-grid .views-col').matchHeight({
                    property: 'min-height'
                });

                Drupal.Zetraz.backToTop();
                Drupal.Zetraz.dynamicMenu();
                Drupal.Zetraz.setInputPlaceHolder('email', 'Your Email', '.simplenews-subscriber-form .form-type-email');

                //Don't Miss Block
                $('.dont-miss-list .views-row').first().addClass('active');
                $('.dont-miss-detail .views-row').first().addClass('active');
                Drupal.Zetraz.DontMiss();

                // QuickTabs Home
                $('#block-blocktabshomequicktabs .ui-tabs-nav').click(function() {
                    $('#blocktabs-home_quicktabs .slick-slide').resize();
                })
                $('.ui-tabs-panel[aria-labelledby="ui-id-1"]').append($('.block-views-blocktabs-list-block-1'));
                $('.ui-tabs-panel[aria-labelledby="ui-id-2"]').append($('.block-views-blocktabs-list-block-2'));
                $('.ui-tabs-panel[aria-labelledby="ui-id-3"]').append($('.block-views-blocktabs-list-block-3'));
                $('.ui-tabs-panel[aria-labelledby="ui-id-4"]').append($('.block-views-blocktabs-list-block-4'));

                Drupal.Zetraz.facebook();
                Drupal.Zetraz.youtube();
                Drupal.Zetraz.twitter();
                Drupal.Zetraz.gplus();
            });

            // Drupal.Zetraz.mobileMenu();
            // Drupal.Zetraz.mobileMenuSecond(); 
        }
    };

    $(window).resize(function() {
        if ($(window).width() <= 991) {
            isMobileSize = true;
        } else {
            isMobileSize = false;
        }
    });

    Drupal.Zetraz.DontMiss = function() {
        $('.dont-miss-list .views-row').on("click", function() {
            var self = (jQuery)(this);
            var rows_class = self.attr('class');
            var class_var = (rows_class.split(' '))[0];
            if (!$('.dont-miss-list .' + class_var + '.active').length) {
                $('.dont-miss-list .views-row').removeClass('active');
                $('.dont-miss-detail .views-row').removeClass('active');
                $('.dont-miss-detail .' + class_var).addClass('active');
                $('.dont-miss-list .' + class_var).addClass('active');
            }
        });
    }

    Drupal.Zetraz.setInputPlaceHolder = function(name, text, selector) {
        selector = selector == undefined ? '' : selector + ' ';

        if ($.support.placeholder) {
            $(selector + 'input[type="' + name + '"]').attr('placeholder', Drupal.t(text));
        } else {
            $(selector + 'input[type="' + name + '"]').val(Drupal.t(text));
            $(selector + 'input[type="' + name + '"]').focus(function() {
                if (this.value == Drupal.t(text)) {
                    this.value = '';
                }
            }).blur(function() {
                if (this.value == '') {
                    this.value = Drupal.t(text);
                }
            });
        }
    }

    Drupal.Zetraz.backToTop = function() {
        $(window).on('load', function() {
            if ($(this).scrollTop()) {
                $('.btn-btt').fadeIn();
            } else {
                $('.btn-btt').fadeOut();
            }
        });
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('.btn-btt').fadeIn();
            } else {
                $('.btn-btt').fadeOut();
            }
        });

        $('.btn-btt').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 700);
            return false;
        })
    };

    Drupal.Zetraz.facebook = function() {
        var appId = '1201167316635574';
        var appSecret = '29dc77a61300d14a42676956796a28df';
        var access_token = appId + "|" + appSecret;
        var $fb = $('#block-keepconnected div > ul li a.social-facebook');
        if ($fb.length) {
            var $fbLink = $fb.attr("href").split('/');
            var fbId = $fbLink[$fbLink.length - 1];
            var $request = 'https://graph.facebook.com/' + fbId + '?fields=fan_count&access_token=' + access_token;
            $.get($request, function(response) {
                if (response['fan_count'] <= 1) {
                    $fb.find("span").text(response['fan_count'] + ' Fan');
                } else {
                    $fb.find("span").text(response['fan_count'] + ' Fans');
                }
            });
        }
    }

    Drupal.Zetraz.twitter = function() {
        // var $request = 'http://api.twittercounter.com/?apikey=d489adaafbc9bc43022815bb727c2aac&twitter_id=2665067090&output=jsonp&callback=myCallbackMethod';
        // //http://api.twittercounter.com/?apikey=e9335031a759f251ee9b4e2e6634e1c5&twitter_id=15160529&output=jsonp&callback=myCallbackMethod
        // var key = 'd489adaafbc9bc43022815bb727c2aac';
        // var $tw = $('#block-keepconnected div > ul li a.social-plus');
        // if ($tw.length) {
        //   var $twLink = $tw.attr("href").split('/');
        //   var twId = '2665067090';
        //   // var twId = $twLink[$twLink.length - 1];
        //   // var $request = 'http://api.twittercounter.com/?apikey=' + key + '&twitter_id=' + twId;
        //   $.get($request, function(response){
        //     console.log(response);
        //       $gp.find("span").text(response.followers_current);
        //   });
        // }
    }

    Drupal.Zetraz.youtube = function() {
        var key = 'AIzaSyB5kdfQsdXak7QqL4FCvbFur5INxxthEk0';
        var part = 'statistics';
        var $yt = $('#block-keepconnected div > ul li a.social-youtube');
        if ($yt.length) {
            var $ytLink = $yt.attr("href").split('/');
            // var ytId = 'UCanC-yCs3G1goz3CxMvgVAg';
            var ytId = $ytLink[$ytLink.length - 1];
            var $request = 'https://www.googleapis.com/youtube/v3/channels?part=' + part + '&id=' + ytId + '&key=' + key;
            $.get($request, function(response) {
                if (response.items.length) {
                    var subscriberCount = response.items[0].statistics.subscriberCount;
                    if (subscriberCount <= 1) {
                        $yt.find("span").text(subscriberCount + ' Subscriber');
                    } else {
                        $yt.find("span").text(subscriberCount + ' Subscribers');
                    }
                }
            });
        }
    }

    // Drupal.Zetraz.mobileMenu = function() {
    //     $('#btn-second-menu').mobileMenu({
    //         targetWrapper: '.main.navbar-we-mega-menu',
    //     });
    // }

    // Drupal.Zetraz.mobileMenuSecond = function() {
    //     $('#btn-main-menu').mobileMenu({
    //         targetWrapper: '.category-menu.navbar-we-mega-menu',
    //         toggledClass: 'second-toggled',
    //     });
    // }

    Drupal.Zetraz.gplus = function() {
        var key = 'AIzaSyBJAzc2886oTcWOgFs07_YOkivLvbtHTN0';
        var $gp = $('#block-keepconnected div > ul li a.social-plus');
        if ($gp.length) {
            var $gpLink = $gp.attr("href").split('/');
            // var gpId = '+Weebpal';
            var gpId = $gpLink[$gpLink.length - 1];
            var $request = 'https://www.googleapis.com/plus/v1/people/' + gpId + '?key=' + key;
            $.get($request, function(response) {
                if (response.circledByCount <= 1) {
                    $gp.find("span").text(response.circledByCount + ' Follower');
                } else {
                    $gp.find("span").text(response.circledByCount + ' Followers');
                }
            });
        }
    }

    Drupal.Zetraz.dynamicMenu = function() {
        var isScrollPos = 0;
        $(window).scroll(function() {
            if (!isMobileSize) {
                var curScrollPost = $(this).scrollTop();
                if (curScrollPost >= 251) {
                    $('#page').addClass('scroll');
                } else if (curScrollPost < 202) {
                    $('#page').removeClass('scroll');
                }
                if ($(this).scrollTop() >= 202) {
                    if (curScrollPost < isScrollPos) {
                        //scroll up
                        $('#primary-main-menu').addClass('wp-fix');
                    } else {
                        $('#primary-main-menu').removeClass('wp-fix');
                    }
                } else {
                    $('#primary-main-menu').removeClass('wp-fix');
                }
                isScrollPos = curScrollPost;
            }
        });
    }

})(jQuery, Drupal);
