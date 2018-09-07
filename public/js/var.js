
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'cache-control': 'no-cache' ,
    }
});

function _action_( event ) {
    event.preventDefault();
    $form = event.target.dataset;
    __get( $form.url, '' ).done( function( ret ) { $("#_body_").html("").html(ret); });
}

function __post( url,data ){
    var def = $.Deferred();
    $.when( $.post( url,data, "json" ) ).done(function(r1){
      def.resolve(r1);
    })
    return def.promise();
}

function __get( url,data ){
    var def = $.Deferred();
    $.when( $.get( url, data ) ).done(function(r1){
      def.resolve(r1);
    })
    return def.promise();
}

function __post__( url , data ) {
    __post( url, data ).done( function( ret ) {
        obj = JSON.parse( ret );
        if ( !!obj.msg ) {
            
        } else {
            $("#"+obj.id).trigger("click");
        }
    });
    return false;
}
$(document).on("click", "button[class^=_cancelForm]", function( e ) {
    e.preventDefault();
    $("#product_menu").trigger("click");
});

$(document).on("click", "button[class^=_submitForm]", function( e ) {
    e.preventDefault();
    var i=0;
    $(".input").removeClass("warning");
    $('.input').each(function() {
        if(!$(this).val()){
            $(this).addClass("warning");
            i++;
        }
    });

    if ( i === 0 ) {
        $form = e.target.dataset;
        if ( ( $form.country ) &&  ( $form.country != "US" ) ) {
            alert("Invalid US Address");
            return false;
        }
        var action   = $form.action;
        var data     = $('form[name='+$form.form+']').serialize();
        __post__( action , data );
    }
    return false;
});


