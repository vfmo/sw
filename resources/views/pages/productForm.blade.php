
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
        <h1 class="is-size-3">Product Information</h1>
    </div>
</div>

<div class="container">

<form name="productForm" >
<input type="hidden" name="id" value="{{ $data['id'] or '' }}" >

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Name</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input name="product_name" class="input" type="text" value="{{ $data['product_name'] or '' }}"  placeholder="Product Name" required>
      </p>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Description</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <textarea name="product_description" class="textarea" placeholder="Description" required> {{ $data['product_description'] or '' }}</textarea>
      </p>
    </div>
  </div>
</div>


<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Width</label>
  </div>
  <div class="field-body">
    
    <div class="field">
      <p class="control">
        <input name="width" class="input" type="number" placeholder="Width" value="{{ $data['width'] or '' }}"  required>
      </p>
    </div>
  </div>

  
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Length</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input name="length" class="input" type="number" placeholder="Length" value="{{ $data['length'] or '' }}"  required>
      </p>
    </div>
  </div>
</div>


<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Height</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input name="height" class="input" type="number" placeholder="Height" value="{{ $data['height'] or '' }}"  required>
      </p>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Weight</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
        <input name="weight" class="input" type="number" placeholder="Weight" value="{{ $data['weight'] or '' }}"  required>
      </p>
    </div>
  </div>
</div>


<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Value</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control has-icons-left ">
        <input name="product_value" class="input" type="number" placeholder="US Dollars" value="{{ $data['product_value'] or '' }}" required>
        <span class="icon is-small is-left">
            <i class="fas fa-dollar-sign"></i>
        </span>
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
                    data-action="/productController/addProduct"
                    data-form="productForm"
            
            >Submit</button>
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