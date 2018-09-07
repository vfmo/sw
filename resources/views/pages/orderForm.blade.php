
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
<input type="hidden" name="country" id="country" >

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
        <input name="street_address" id="location" class="input" placeholder="Street Address" value="{{ $data['street_address'] or '' }}" autocomplete="off"  >
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
        <input name="city" id="city" class="input" placeholder="City" value="{{ $data['city'] or '' }}" style="width: 150px;" required>
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
        <input name="state" id="state" class="input" placeholder="State" value="{{ $data['state'] or '' }}" style="width: 150px;" required>
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
        <input name="zip_code" id="zip_code" class="input"  placeholder="Zip Code" value="{{ $data['zip_code'] or '' }}" style="width: 150px;" required>
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
                    data-country="US"
            
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCScHJS6NbJD0yOVL5uCy3kdkeupe4b3Gw&libraries=places&callback=initAutocomplete"
async defer></script>


<script>
  var autocomplete;
  var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'short_name',
    postal_code: 'short_name'
  };

  function initAutocomplete() {
    autocomplete = new google.maps.places.Autocomplete(
    document.getElementById('location'),{ componentRestrictions: { country: 'US'  } });
    autocomplete.addListener('place_changed', locationFill);
  }

  function locationFill() {
    var place = autocomplete.getPlace();
    var add = "";
    for (var i = 0; i < place.address_components.length; i++) {
      var addressType = place.address_components[i].types[0];
      if (componentForm[addressType]) {
        var val = place.address_components[i][componentForm[addressType]];
        switch ( addressType ) {
          case "street_number":
            add = val+" ";
            break;
          case "route":
            add += val;
            break;
          case "locality":
            document.getElementById("city").value = val;
            break;
          case "administrative_area_level_1":
            document.getElementById("state").value = val;
            break;
          case "country":
            document.getElementById("country").value = val;
            break;addressType
          case "postal_code":addressType
            document.getElementById("zip_code").value = val;
            break;

        }
        document.getElementById("location").value = add;
      }
    }
  }
</script>
 