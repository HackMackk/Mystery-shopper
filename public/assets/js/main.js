$(document).ready(function () {

    var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));

    var fullWidth = $(document).width()
    var sWidth = fullWidth / 2

    var perWidth = sWidth / fullWidth * 100

    var tl = new TimelineMax();

    if ($(window).width() > '768') {

        var startWidth = fullWidth * 7 + 'px'
        $('.layer1').css('width', startWidth);

        /*if(isSafari == true) {
            var $right = '-' + parseFloat(startWidth) / 8.5 - 260 + 'px'
        } else {*/
            var $right = '-' + parseFloat(startWidth) / 8.8 + 'px';
        /*}*/
        //var $bottom = '-' + ($('.layer1').height() * 5.7) / 3.35 + 'px';
        /*if(isSafari == true) {
            var $bottom = '-' + $('.layer1').height() / 4.2 - 160 + 'px'
        } else {*/
            var $bottom = '-' + $('.layer1').height() / 4.2 + 'px'
        /*}*/

        var sl = tl.fromTo('.layer1', 6, {
            width: startWidth,
            right: $right,
            bottom: $bottom,
        },
            {
                right: 0,
                bottom: 0,
                width: sWidth + 'px',
                // transformOrigin: 'left bottom'
            }, "-=6"
        )


        var gl = tl.fromTo(".layer5", 6, {
            right: $right,
            bottom: $bottom,
            width: startWidth,
        },
            {
                bottom: 0,
                right: 0,
                width: sWidth,
                // transformOrigin: 'left bottom'
            }, "-=6"
        )

        var ol = tl.fromTo('.layer2, .layer4', 6, {
            right: $right,
            bottom: $bottom,
            width: startWidth,
        },
            {
                bottom: 0,
                right: 0,
                width: sWidth,
                // transformOrigin: 'right bottom',
            }, "-=6"
        )
            .to('.layer2, .layer4', { opacity: 1 }, 0.7)


        $(".layer3").css('width', sWidth)

        var vl = tl.to(".layer3", 2.5, 
        {
            left: perWidth + 2 + '%',
            opacity: 1,
            width: perWidth + '%'
        }, "-=1")

        var h = $('.top').height() * 8

        var controller = new ScrollMagic.Controller();
        var scene = new ScrollMagic.Scene({
            offset: 0,
            duration: h - 2000
        })

        scene.setTween(sl)
        scene.setTween(gl)
        scene.setTween(ol)
        scene.setTween(vl)
        scene.addTo(controller)

        $('.top').height(h)

    } else {

        //var wMobile = $(window).width()/2.5
        //var hMobile = $(window).height()/3

        var wMobile = $(window).width()/2
        var hMobile = $(window).height()/2

        if (wMobile > hMobile) {
            $(".layer3-mobile").css('width', sWidth * 0.5)
            $('.layer5-mobile').css('width', '15%')
        } else {
            $(".layer3-mobile").css('width', sWidth * 1.25)
        }

        var wLayer = $('.layer5-mobile').width()/2
        var hLayer = $('.layer5-mobile').height()/2

        //$('.layer5-mobile').css('top', hMobile + 'px').css('left', wMobile + 'px')

        $('.layer5-mobile').css('top', hMobile - hLayer - 55 + 'px').css('left', wMobile - wLayer + 'px')

         var sl = tl.to(".layer2-mobile", 1, {
            transform: 'scale(1) translateY(0)',
            opacity: 1
        }, "-=4")

        if(wMobile > hMobile) {

            var gl = tl.to(".layer5-mobile", 2.5, {
                width: '3%',
                left: "48%",
                top: "10%"
            }, "-=5");

        } else {

            var gl = tl.to(".layer5-mobile", 2.5, {
                top: '30%',
                width: '5%',
                left: '45%'
            }, "-=5")

        }

        var vl = tl.to(".layer3-mobile", 2.5, {
            // transform: 'translateX(50%)'
            left: '50%'
        }, "-=2.5")

        var h = $('.top').height() * 5
        var controller = new ScrollMagic.Controller();
        var scene = new ScrollMagic.Scene({
            offset: 0,
            duration: h - 1200
        })

        scene.setTween(sl)
        scene.setTween(gl)
        scene.setTween(vl)
        scene.addTo(controller)

        $('.top').height(h)

    }

    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        responsive: {
            0: {
                items: 1
            }
        }
    })

    $(document).on('scroll', function (e) {
        var arrow = $(document).scrollTop()

        if (arrow >= 10) {
            $('.scroll-down').fadeOut()
        } else {
            $('.scroll-down').fadeIn()
        }

        if ((arrow > 50) && $(window).width() <= 768) {
            $('.logo').fadeOut()
        } else {
            $('.logo').fadeIn()
        }

        var currentPosition = $(document).scrollTop() + 100
        //var instruction = $('#instruction').offset().top
        var anketa = $('#anketa').offset().top

        if(currentPosition >= anketa) {
            var idTab = $('#anketa').attr('data-tab')
            $('.tablinks').parent().find('.active').removeClass('active')
            $(".tablinks[data-tab='" + idTab + "']").addClass('active')
        } else {
            var idTab = $('#instruction').attr('data-tab')
            $('.tablinks').parent().find('.active').removeClass('active')
            $(".tablinks[data-tab='" + idTab + "']").addClass('active')
        }
    })

    $('.tablinks').on('click', function () {
        var id = $(this).attr('data-tab')
        //content = $('.tab[data-tab="' + id + '"]')
        $(this).parent().find('.active').removeClass('active')
        $(this).addClass('active')
        //$(".tab").removeClass('active')
        //content.addClass('active')
    })
/*
    $('.tab button').on('click', function () {
        var id = $('.tab').attr('data-tab')
        if (id == 1) {
            $('.tabs-button .active').next('a').trigger('click')
        }
    })
*/
    $('li .inputfile').on('change', function () {
        var nameFiles = []
        for(var i = 0; i < $(this).get(0).files.length; ++i) {
            nameFiles.push($(this).get(0).files[i].name); // Добавляем имена файлов в массив
        }
        $(this).blur()
        $('#' + $(this).data('for')).text(nameFiles.join(', ')).css('display', 'block')
        if(nameFiles == '') {
            $('.download-file').hide()
        }
    })

    $('#product, #frukt, #milk, #painting').on('change', function () {
        var file = $(this).find('option:selected').val()
        if (file == 'file') {
            $(this).removeClass('active-text')
            $(this).addClass('active')
            $(this).find('input, textarea').attr('required', 'required')
        } else if (file == 'text') {
            $(this).removeClass('active')
            $(this).find('input').removeAttr('required', 'required')
            $(this).find('label.error').remove()
            $(this).addClass('active-text')
            $(this).find('textarea').attr('required', 'required')
        } else {
            $(this).removeClass('active active-text')
            $(this).find('input').removeAttr('required', 'required')
            $(this).find('label.error').remove()
            $(this).find('.inputfile').val('')
            $(this).find('.download-file').css('display', '').empty()
        }
    })

    $('.form select').on('change', function(){
        $(this).blur()
    });

    $('.form').validate({
        messages: {
            sms: "Поле обязательно для заполнения",
            order: "Поле обязательно для заполнения",
            fio: "Поле обязательно для заполнения",
            phone: "Поле обязательно для заполнения",
            //inputFile1: "Необходимо приложить фото",
            'inputFile[]': "Необходимо приложить фото",
            'inputFile2[]': "Необходимо приложить фото",
            'inputFile3[]': "Необходимо приложить фото",
            'inputFile4[]': "Необходимо приложить фото",
            'inputFile5[]': "Необходимо приложить фото",
            milkText: "Поле обязательно для заполнения",
            other: "Поле обязательно для заполнения",
            comment: "Поле обязательно для заполнения",
            agree: "Для отправки необходимо согласие",
            time: "Выберите один из вариантов",
            spec: "Выберите один из вариантов",
            mask: "Выберите один из вариантов",
            wContact: "Выберите один из вариантов",
            product: "Выберите один из вариантов",
            shelf: "Выберите один из вариантов",
            frukt: "Выберите один из вариантов",
            milk: "Выберите один из вариантов",
            painting: "Выберите один из вариантов"
        },
        submitHandler: function (form) {
            Swal.fire ({
                html: $('.progress'),
                customClass: {
                    container: 'progress-container'
                },
                backdrop: 'rgba(0, 2, 15, 0.8)',
                showConfirmButton: false,
                allowOutsideClick: false
            });
            /*Swal.fire({
                html: $('.agree'),
                showClass: {
                    popup: 'animate__animated animate__fadeI'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOut'
                },
                showCloseButton: true,
                confirmButtonText: 'Хорошо',
                customClass: {
                    container: 'modal-agree'
                },
                closeButtonHtml: '<img src="assets/img/close.svg">',
                backdrop: 'rgba(0, 2, 15, 0.8)'
            });
            $('.submit').addClass('disabled').prop('disabled', true).val('Отчет отправлен')*/
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") == "agree") {
                error.insertAfter('.checkbox__label')
            } else {
                error.insertAfter(element)
            }
        }
    })
/*
    $('.politics').on('click', function () {
        Swal.fire({
            html: $('.politics-text'),
            width: 800,
            showClass: {
                popup: 'animate__animated animate__fadeInUp'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutLeftBig'
            },
            showCloseButton: true,
            customClass: {
                container: 'modal-politics'
            },
            closeButtonHtml: '<img src="assets/img/close.svg">'
        })
    })
*/
    $('#phone').inputmask("+7 999 999 99 99")
    $('#order').inputmask("999999")

    $(window).on('resize', function(){
        sLogo = $('.logo').height()/2
        sTabWrapper = $('.tabs-wrapper').height()/2

        if ($(window).width() <= 1280 && $(window).width() >= 1024) {
            sTop = Math.floor(sTabWrapper - sLogo - 6)
        } else if ($(window).width() <= 1366 && $(window).width() >= 1280) {
            sTop = Math.floor(sTabWrapper - sLogo - 1)
        } else if ($(window).width() > 768 && $(window).width() <= 1024) {
            sTop = Math.floor(sTabWrapper - sLogo - 13)
        } else {
            sTop = Math.floor(sTabWrapper - sLogo - 5)
        }
        $('.logo').css('top', sTop)

        if ($(window).width() == 768) {
            $('.logo').css('top', '20px')
        }
    }).trigger('resize')
    

    let detect = new MobileDetect(window.navigator.userAgent)

    if(detect.tablet()) {
        $('.top').hide()
        $('.logo').addClass('tablet').css('left', '5vw')
    } else {
        $('.top').show()
        $('.top-tablet').hide()
        $('.logo').removeClass('tablet')
    }
})