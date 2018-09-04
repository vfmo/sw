
<button class="_click_ button is-info" data-url="/productController/orderForm" >Add Order</button>

<table class="table">
  <thead>
    <tr>
      <th>Order ID</th>
      <th>Name</th>
      <th>View Order</th>
    </tr>
  </thead>
   <tbody>
    @if( !empty( $data ) )
    @foreach ( $data as $key => $value )
    <tr id="tr-{{ $value['id'] }}">
        <td class="has-text-right">{{ $value["id"] }}</td>
        <td class="has-text-right">{{ $value["name"] }}</td>
        <td><a class="_view_"  data-id="{{ $value["id"] }}" >view</a> </td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>


<script>
$(function() {
    $("a[class=_delete_]").on("click", function(event) {
        var answer = confirm("Continue to delete?")
        if (answer) {
             $(this).closest('tr').remove();
             __post__( "/productController/deleteProduct" , { "id" : event.target.dataset.id } );
        }
    });
    $("a[class=_edit_]").on("click", function(event) {
       __get( '/productController/productEditForm/'+event.target.dataset.id ).done( function( ret ) { $("#_body_").html("").html( ret ); });
    });
    $("a[class=_view_]").on("click", function(event) {
       __get( '/productController/productViewForm/'+event.target.dataset.id ).done( function( ret ) { $("#_body_").html("").html( ret ); });
    });

});

</script>