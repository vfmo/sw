
<section class="hero">
  <div class="hero-body">
    <div class="container">
        <h2>Client Orders</h2>
        <button class="_click_ button is-info" data-url="/productController/orderForm" >Add Order</button>

        <table class="table">
        <thead>
            <tr>
            <th>Order ID</th>
            <th>Name</th>
            <th>View</th>
            <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if( !empty( $data ) )
            @foreach ( $data as $key => $value )
            <tr id="tr-{{ $value['id'] }}">
                <td class="has-text-right">{{ $value["id"] }}</td>
                <td class="has-text-right">{{ $value["name"] }}</td>
                <td><a class="_viewOrder_" data-id="{{ $value['id'] }}" ><i class="fas fa-eye"  ></i></a> </td>
                <td><a class="_deleteOrder_" data-id="{{ $value['id'] }}"><i class="fas fa-trash"  ></i></a> </td>
            </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>
  </div>
</section>  

<script>
$(function() {
    $("a[class=_deleteOrder_]").on("click", function(event) {
        var answer = confirm("Continue to delete?")
        if (answer) {
             $(this).closest('tr').remove();
             __post__( "/productController/deleteOrder" , { "id" : +$(this).data("id") } );
        }
    });
    $("a[class=_edit_]").on("click", function(event) {
       __get( '/productController/productEditForm/'+$(this).data("id") ).done( function( ret ) { $("#_body_").html("").html( ret ); });
    });
    $("a[class=_viewOrder_]").on("click", function(event) {
       __get( '/productController/orderViewDetail/'+$(this).data("id") ).done( function( ret ) { $("#_body_").html("").html( ret ); });
    });

});

</script>