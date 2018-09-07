
<button class="_click_ button is-info" id="product_addForm" data-url="/productController/productForm" >Add Product</button>

<table class="table">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th>Name</th>
      <th>Width</th>
      <th>Length</th>
      <th>Height</th>
      <th>Weight</th>
      <th class="has-text-right">$ Value</th>
    </tr>
  </thead>
   <tbody>
    @foreach ( $data as $key => $value )
    <tr id="tr-{{ $value['id'] }}">
        <td><a class="_delete_"  data-id="{{ $value["id"] }}" ><i class="fas fa-trash"></i></a> </td>
        <td><a class="_edit_"  data-id="{{ $value["id"] }}" ><i class="fas fa-edit" ></i></a> </td>
        <td><a class="_view_"  data-id="{{ $value["id"] }}" ><i class="fas fa-eye" ></i></a> </td>
        <td class="has-text-right">{{ $value["product_name"] }}</td>
        {{--  <td>{{ $value["product_description"] }}</td>  --}}
        <td class="has-text-right">{{ $value["width"] }}</td>
        <td class="has-text-right">{{ $value["length"] }}</td>
        <td class="has-text-right">{{ $value["height"] }}</td>
        <td class="has-text-right">{{ $value["weight"] }}</td>
        <td class="has-text-right">${{ number_format($value["product_value"],2) }}</td>
    </tr>
    @endforeach
    </tbody>
</table>


<script>
$(function() {
    $("a[class=_delete_]").on("click", function(event) {
        var answer = confirm("This will delete any item exists in order. Continue to delete ?")
        if (answer) {
             $(this).closest('tr').remove();
             __post__( "/productController/deleteProduct" , { "id" : $(this).data("id") } );
        }
    });
    $("a[class=_edit_]").on("click", function(event) {
       __get( '/productController/productEditForm/'+$(this).data("id") ).done( function( ret ) { $("#_body_").html("").html( ret ); });
    });
    $("a[class=_view_]").on("click", function(event) {
       __get( '/productController/productViewForm/'+$(this).data("id") ).done( function( ret ) { $("#_body_").html("").html( ret ); });
    });

});

</script>