<div class="content">
<h1 class="is-size-3">Client Information</h1>
<br><strong>Name</strong> :  {{ $data['name'] }}
<br>
<br><strong>Street </strong> :  {{ $data['street_address'] }}
<br><strong>City</strong> :  {{ $data['city'] }}
<br><strong>State</strong> :  {{ $data['state'] }}
<br><strong>Zip Code</strong> :  {{ $data['zip_code'] }}
<br><strong>Phone Number</strong> :  {{ $data['phone_number'] }}
<br><strong>Quantity Ordered</strong> :  {{ $data['quantity'] }}



<hr>
<h3>Item ordered</h3>

<br>Product Name : {{ $data['catalogs']['product_name'] }}
<br>Product Description : {{ $data['catalogs']['product_description'] }}
<br>Width : {{ number_format($data['catalogs']['width'],2) }}
<br>Length  : {{ number_format($data['catalogs']['length'],2) }}
<br>Height  : {{ number_format($data['catalogs']['height'],2) }}
<br>Weight  : {{ number_format($data['catalogs']['weight'],2) }}
<br>Product Value  : ${{ number_format($data['catalogs']['product_value'],2) }}

<br><br>
<button class="return_order_menu button is-info">Return</button>

</div>
<script>
$(function() {
    $(".return_order_menu").on("click", function(e) {
        $("#product_order").trigger("click");
    })
});

</script>