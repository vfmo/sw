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
    $(".return").on("click", function(e) {
        $("#product_menu").trigger("click");
    })
});

</script>