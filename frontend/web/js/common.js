$(document).ready(function () {
    $('.catalog').dcAccordion({
        speed: 'fast'
    });
});
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

