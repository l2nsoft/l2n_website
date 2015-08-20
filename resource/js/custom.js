$(document).ready(function(){

    $('#slider').vegas({
        delay: 3000,
        preload: true,
        slides: [
            { src: 'img/slider/1.jpg' },
            { src: 'img/slider/2.jpg' },
            { src: 'img/slider/3.jpg' }
        ],
        animation: [
            'kenburns',
            'kenburnsLeft', 'kenburnsRight',
            'kenburnsUp', 'kenburnsUpLeft', 'kenburnsUpRight',
            'kenburnsDown', 'kenburnsDownLeft', 'kenburnsDownRight'
        ],
        transition: [
            'fade', 'fade2',
            'blur', 'blur2',
            'negative', 'negative2',
            'slideLeft', 'slideLeft2',
            'slideRight', 'slideRight2',
            'slideUp', 'slideUp2',
            'slideDown', 'slideDown2',
            'zoomIn', 'zoomIn2',
            'zoomOut', 'zoomOut2',
            'swirlLeft', 'swirlLeft2',
            'swirlRight', 'swirlRight2'
        ]

    });

    $('.team').slick({
        autoplay: true,
        accessibility: false,
        adaptiveHeight: true,
        speed: 1000,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        centerMode: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 750,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $("html").niceScroll({
        scrollspeed: 50,
        mousescrollstep: 38,
        cursorwidth: 5,
        cursorborder: 0,
        cursorcolor: '#00953B',
        autohidemode: true,
        zindex: 999999999,
        horizrailenabled: false,
        cursorborderradius: 0
    });

    $('[data-spy="scroll"]').each(function () {
        var $spy = $(this).scrollspy('refresh');
    });



    new Waypoint({
        element: document.getElementById('services'),
        handler: function() {

            $( "#services-title").addClass('animated pulse');
            $( "#services-img-first").addClass('animated pulse');
            $( "#services-text-first").addClass('animated pulse');

        },
        offset: "80%"
    });

    new Waypoint({
        element: document.getElementById('services-section-second'),
        handler: function() {

            $( "#services-img-second").addClass('animated pulse');
            $( "#services-text-second").addClass('animated pulse');

        },
        offset: "80%"
    });


    var continuousElements_clients = document.getElementsByClassName('clients');
    for (var i = 0; i < continuousElements_clients.length; i++) {
        new Waypoint({
            element: continuousElements_clients[i],
            handler: function() {
                $( "#clients-title").addClass('animated pulse');
                this.element.classList.add("animated");
                this.element.classList.add("flipInY");
            },
            offset: "80%"
        });
    }


    var continuousElements_team = document.getElementsByClassName('experts');
    for (var i = 0; i < continuousElements_team.length; i++) {
        new Waypoint({
            element: continuousElements_team[i],
            handler: function() {
                $( "#team-title").addClass('animated pulse');
                this.element.classList.add("animated");
                this.element.classList.add("flipInY");
            },
            offset: "80%"
        });
    }

    new Waypoint({
        element: document.getElementById('team-others'),
        handler: function() {

            $( "#team-title-second").addClass('animated pulse');
        },
        offset: "80%"
    });


    new Waypoint({
        element: document.getElementById('contact'),
        handler: function() {

            $( "#contact-title").addClass('animated pulse');
            $( "#contact-location").addClass('animated pulse');
        },
        offset: "80%"
    });



    new Waypoint({
        element: document.getElementById('contact-section-second'),
        handler: function() {

            $( "#contact-title-second").addClass('animated pulse');
            $( "#contact-address-left").addClass('animated flipInX');
            $( "#contact-address-right").addClass('animated flipInX');
        },
        offset: "80%"
    });

    var continuousElements = document.getElementsByClassName('cd-timeline-content');
    for (var i = 0; i < continuousElements.length; i++) {
        new Waypoint({
            element: continuousElements[i],
            handler: function() {
                this.element.classList.add("animated");
                this.element.classList.add("pulse");
            },
            offset: "75%"
        });
    }


});



function smooth_scroll(id)
{
    if ($('#'+id).length > 0)
    {
        var divPosition = $('#'+id).offset();
        $('html, body').animate({scrollTop: divPosition.top}, "slow");
    }
}