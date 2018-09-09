@extends('layouts.default')
@section('content')
    
<div class="content">
    <h1 class="is-size-3">Product Information</h1>
    <br><strong>Name</strong> :  {{ $data['product_name'] }}
    <br>
    <br><strong>Description</strong> :  {{ $data['product_description'] }}
    <br><strong>Width</strong> :  {{ number_format($data['width'],2) }}
    <br><strong>Length</strong> :  {{ number_format($data['length'],2) }}
    <br><strong>Height</strong> :  {{ number_format($data['height'],2) }}
    <br><strong>Weight</strong> :  {{ number_format($data['weight'],2) }}
    <br><strong>Product Value</strong> :  ${{ number_format($data['product_value'],2) }}

    <br><br>
    <button class="return button is-info">Return</button>

</div>



<script>

$(function() { 

    $(document).on("click","._click_", _action_ );
    $(document).on("click","body", function(event) {
        $(".content").html("");
    });
    $(".return").on("click", function(e) {
        $("#product_menu").trigger("click");
    })
    $("a[id=product_menu]").on("click", viewProductMenu );
    $("a[id=product_order]").on("click", viewOrders );
});

function viewProductMenu( event ) {
    $form = event.target.dataset;
    $('.is-active').removeClass('is-active');
    $('ul li:nth-child(1)').addClass("is-active");
    __get( $form.url, '' ).done( function( ret ) { $("#_body_").html("").html(ret); });
}

function viewOrders( event ) {
    $form = event.target.dataset;
    $('.is-active').removeClass('is-active');
    $('ul li:nth-child(2)').addClass("is-active");
    __get( $form.url, '' ).done( function( ret ) { $("#_body_").html("").html(ret); });
}

$(document).on("click", "button[class^=_viewForm]", function( e ) {
    e.preventDefault();
    $form = e.target.dataset;
    var myDiv      = $form.div;
    var action   = $form.action;
    var data     = $('form[name='+$form.form+']').serialize();
    __get( action , data ).done( function( ret ) {
        $("."+myDiv).html("").html(ret);
    });

});



</script>


@stop
