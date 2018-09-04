@extends('layouts.default')
@section('content')
    

<script>
$(function() { 

    $(document).on("click","._click_", _action_ );

    $("a[id=product_menu]").on("click", viewProductMenu );
    $("a[id=product_order]").on("click", viewOrders );


});


function viewProductMenu( event ) {
    $form = event.target.dataset;
    __get( $form.url, '' ).done( function( ret ) { $("#_body_").html("").html(ret); });
}

function viewOrders( event ) {
    $form = event.target.dataset;
    __get( $form.url, '' ).done( function( ret ) { $("#_body_").html("").html(ret); });
}


function postSubmissionForm( event ) {

//    var myDiv    = $form.div;
//    var action   = $form.action;
//    var data     = $('form[name='+$form.form+']').serialize();
//    __get( action , data ).done( function( ret ) {
//        $("."+myDiv).html("").html(ret);
//    });


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
