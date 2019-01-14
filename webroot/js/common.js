jQuery(document).ready(function () {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
    /*
     var defaults = {
     containerID: 'toTop', // fading element id
     containerHoverID: 'toTopHover', // fading element hover id
     scrollSpeed: 1200,
     easingType: 'linear' 
     };
     */
    $().UItoTop({easingType: 'easeOutQuart'});

    jQuery('#demo1').skdslider({'delay': 5000, 'animationSpeed': 2000, 'showNextPrev': true, 'showPlayButton': true, 'autoSlide': true, 'animationType': 'fading'});
    jQuery('#responsive').change(function () {
        $('#responsive_wrapper').width(jQuery(this).val());
    });
    $('#sortBy').on('change', function () {
        var val = $(this).val();
        var url = $('#sortByParam').val();
        location.href = url + '&sort=' + val;
    });
    $('#merchant').on('change', function () {
        var val = $(this).val();
        var url = $('#merchantParam').val();
        location.href = url + '&merchant=' + val;
    });
    $('#limitData').on('change', function () {
        var val = $(this).val();
        var url = $('#limiDataParam').val();
        location.href = url + '&limit=' + val;
    });

    init_cart();
});

//$(window).load(function(){
//   // PAGE IS FULLY LOADED  
//   // FADE OUT YOUR OVERLAYING DIV
//   $('.loader').fadeOut();
//});

function hide_preloader() {
    $('.loader').fadeOut();
}

/*
 * Init cart functions
 */
function init_cart() {
    $('#cartCheckoutForm').on('submit', function(event){
        var loader = $('.loader');
        var data = $( this ).serialize();
        var $param = {
            'type': 'POST',
            'url': BASE_URL + '/ajax/checkout',
            'data': data,
            'beforeSend': function() {
                loader.show();
            },
            'callback': function (data) {
                var obj = JSON.parse(data);
                if (obj.status == 'OK') {
                    location.href = BASE_URL + '/dat-hang-thanh-cong';
                } else {
                    $('#errorModal .modal-body').html(obj.message);
                    $('#errorModal').modal();
                }
            },
            'complete': function() {
                loader.hide();
            }
        };
        cms_adapter_ajax($param);
        event.preventDefault();
    });
}

function cartMinus($pId) {
    var divUpd = $('#qty-' + $pId); 
    var newVal = parseInt(divUpd.text(), 10) - 1;
    if (newVal >= 1) {
        divUpd.text(newVal);
        updateCart($pId, newVal);
    }
}

function cartPlus($pId) {
    var divUpd = $('#qty-' + $pId); 
    var newVal = parseInt(divUpd.text(), 10) + 1;
    divUpd.text(newVal);
    updateCart($pId, newVal);
}

function addToCart($pId, $qty) {
    if (typeof $pId == 'undefined') {
        $pId = false;
    }
    if (typeof $qty == 'undefined') {
        $qty = 1;
    }
    if ($pId) {
        var loader = $('.loader');
        var $param = {
            'type': 'POST',
            'url': BASE_URL + '/ajax/addtocart',
            'data': {
                'product_id': $pId,
                'qty': $qty
            },
            'callback': function (data) {
                if (data > 0) {
                    $('#cartMessage').modal();
                    $('#topCartNumber').show().html(data);
                }
            }
        };
        cms_adapter_ajax($param);
    }
    return false;
}

function updateCart($pId, $qty) {
    if (typeof $pId == 'undefined') {
        $pId = false;
    }
    if (typeof $qty == 'undefined') {
        $qty = 0;
    }
    if ($pId) {
        var loader = $('.loader');
        var $param = {
            'type': 'POST',
            'url': BASE_URL + '/ajax/updatecart',
            'data': {
                'product_id': $pId,
                'qty': $qty
            },
            'beforeSend': function () {
                loader.show();
            },
            'callback': function (data) {
                if (data != 'Error') {
                    $('#cartContainer').html(data);
                    var $cartTotal = parseInt($('#cartTotal').html());
                    if ($cartTotal > 0) {
                        $('#topCartNumber').show().html($cartTotal);
                    } else {
                        $('#topCartNumber').hide();
                    }
                }
            },
            'complete': function() {
                loader.hide();
            }
        };
        cms_adapter_ajax($param);
    }
    return false;
}

function showPassword() {
    var check = $('#saveAccount').is(":checked");
    if (check) {
        $('.passContainer').show();
        $('#password').attr('required', true);
    } else {
        $('.passContainer').hide();
        $('#password').attr('required', false);
    }
}

function cartCheckout() {
    alert(1);
    return false;
}

/*
 * Process ajax request
 *
 * $param là một object {'type','url', 'data', 'callback'}
 *
 * default type POST
 /*********************************************************************/
function cms_adapter_ajax($param) {
    if (typeof $param.complete == 'undefined') {
        $param['complete'] = function(){};
    }
    if (typeof $param.beforeSend == 'undefined') {
        $param['beforeSend'] = function(){};
    }
    $.ajax({
        headers: {
            'X-CSRF-Token': _csrfToken
        },
        url: $param.url,
        type: $param.type,
        data: $param.data,
        async: true,
        beforeSend: $param.beforeSend,
        success: $param.callback,
        complete: $param.complete
    });
}