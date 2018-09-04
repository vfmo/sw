
<style>
input[type=number] {
    width: 150px;
}
 
.warning {
    border: 1px solid red;
}

</style>

<div class="columns ">
    <div class="column has-text-centered">
        <h1 class="is-size-3">Customer Order</h1>
    </div>
</div>

<div class="container">

<form name="orderForm" >
<input type="hidden" name="id" value="{{ $data['id'] or '' }}" >


<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Product Name</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control ">
        <div class="select">
            {!! Form::select('catalog_id', $catalogs, array('class' => 'select') ) !!}
        </div>
      </p>
    </div>
  </div>
</div>


<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Name</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input name="name" class="input" type="text" value="{{ $data['name'] or '' }}"  placeholder="Customer Name" required>
      </p>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Street Address</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input name="street_address" class="input" placeholder="Street Address" value="{{ $data['street_address'] or '' }}" >
    </div>
  </div>
</div>


<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">City</label>
  </div>
  <div class="field-body">
    
    <div class="field">
      <p class="control">
        <input name="city" class="input" placeholder="City" value="{{ $data['city'] or '' }}" style="width: 150px;" required>
      </p>
    </div>
  </div>

  
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">State</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input name="state" class="input" placeholder="State" value="{{ $data['state'] or '' }}" style="width: 150px;" required>
      </p>
    </div>
  </div>
</div>


<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Zip Code</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input name="zip_code" class="input"  placeholder="Zip Code" value="{{ $data['zip_code'] or '' }}" style="width: 150px;" required>
      </p>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Phone Number</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input name="phone_number" class="input"  placeholder="Phone Number" value="{{ $data['phone_number'] or '' }}" style="width: 150px;" required>
      </p>
    </div>
  </div>
</div>


<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Quantity</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control has-icons-left ">
        <input name="quantity" class="input" type="number" placeholder="Qty" value="{{ $data['quantity'] or '' }}" style="width: 125px;" required>
      </p>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
  </div>
  <div class="field-body">
        <div class="field is-grouped">
        <div class="control">
            <button class="_submitForm button is-link "
                    data-action="/productController/addOrder"
                    data-form="orderForm"
            
            >Add</button>
        </div>
        <div class="control">
            <button class="_cancelForm button is-text ">Cancel</button>
        </div>
        </div>

  </div>
</div>
</div>
</form>

<script>



</script>