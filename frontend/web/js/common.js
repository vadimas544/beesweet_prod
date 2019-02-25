var slideNow = 1;
var slideCount = $('#slidewrapper').children().length;
var slideInterval = 5000;
var navBtnId = 0;
var translateWidth = 0;


$(document).ready(function () {
    $('.catalog').dcAccordion({
        speed: 'fast'
    });
    var switchInterval = setInterval(nextSlide, slideInterval);

    $('#viewport').hover(function() {
        clearInterval(switchInterval);
    }, function() {
        switchInterval = setInterval(nextSlide, slideInterval);
    });

    $('#next-btn').click(function() {
        nextSlide();
    });

    $('#prev-btn').click(function() {
        prevSlide();
    });

    $('.slide-nav-btn').click(function() {
        navBtnId = $(this).index();

        if (navBtnId + 1 != slideNow) {
            translateWidth = -$('#viewport').width() * (navBtnId);
            $('#slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow = navBtnId + 1;
        }
    });
});

function nextSlide() {
    if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
        $('#slidewrapper').css('transform', 'translate(0, 0)');
        slideNow = 1;
    } else {
        translateWidth = -$('#viewport').width() * (slideNow);
        $('#slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow++;
    }
}

function prevSlide() {
    if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
        translateWidth = -$('#viewport').width() * (slideCount - 1);
        $('#slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow = slideCount;
    } else {
        translateWidth = -$('#viewport').width() * (slideNow - 2);
        $('#slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow--;
    }
}

function showCart(cart){
    $('#cart .modal-body').html(cart);
    /*Show modal window*/
    $('#cart').modal();
}

function getCart(){
    $.ajax({
       url: '/cart/show',
        type: 'GET',
        success: function(res){
           if(!res) alert('Ошибка');
           showCart(res);
        },
        error: function(){
            alert('Ощибка');
        }
    });
    return false;
}



$('#cart .modal-body').on('click', '.del-item', function () {
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/del-item',
        data: {id:id},
        type: 'GET',
        success: function(res){
            // if(!res) alert('Ошибка');
             showCart(res);
        },
        error: function(){
            alert('Ощибка');
        }
    });
});


function clearCart() {
    $.ajax({
       url: '/cart/clear',
        type: 'GET',
        success: function(res){
           if(!res) alert('Ошибка');
           showCart(res);
        },
        error: function(){
            alert('Ощибка');
        }
    });
}

$('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id'),
        qty = $('#qty').val()
    ;
    $.ajax({
        url: '/cart/add',
        data: {id:id, qty:qty},
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка!');
            // console.log(res);
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});

