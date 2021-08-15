@extends('layouts.medic')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Add Product
@endsection


@section('content')
<div class="dashboard-main-content">

    @if(session('success'))
    <h5 style="color: green">{{ session('success') }}</h5>
    @endif

    <div class="dashboard-header-wrap">
      <h2 class="dashboard">Add a Product</h2>
    </div>
    <div class="module">
      <div class="w-form">
        <form id="email-form" class="create-course-form" action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <label for="Product-Name" class="field-label">Product Name</label>
            <input type="text" class="course-text-input w-input" maxlength="256" name="name" data-name="Product Name" placeholder="" id="Product-Name" required="">

            @error('name')
                <small style="color: red">{{ $message }}</small>
            @enderror

            <label for="Categories-Name" class="field-label">Categories</label>
            <select name="category_id" class="course-text-input w-input" id="category">
                <option value="">Select Category</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <small style="color: red">{{ $message }}</small>
             @enderror

            <label for="Categories-Name" class="field-label">Sub categories</label>
            <select name="subCategory_id" class="course-text-input w-input" id="subcategory">
                <option value="">Select sub category</option>
            </select>
            @error('subCategory_id')
            <small style="color: red">{{ $message }}</small>
             @enderror


            <label for="Price" class="field-label">Price</label>
            <input type="text" class="course-text-input w-input" maxlength="256" name="price" data-name="Price" placeholder="$" id="Price" required="">
            @error('price')
            <small style="color: red">{{ $message }}</small>
             @enderror


            <label for="email" class="field-label">Product Description</label>
            <textarea name="description" maxlength="5000" id="field" required="" class="description-input w-input"></textarea>

            @error('description')
            <small style="color: red">{{ $message }}</small>
        @enderror


          <div class="product-wrap">
            <div class="settings-label">Product Image</div>
            <a onclick="event.preventDefault(); document.getElementById('image').click()" class="back-button upload-videos w-button">Upload</a>
            <input id="image" type="file" name="image" style="display: none;">
            <p class="paragraph-small">You can upload images up to 400x400px.</p>
            @error('image')
            <small style="color: red">{{ $message }}</small>
             @enderror

          </div><input type="submit" value="Submit" data-wait="Please wait..." class="course-form-submit-button w-button">
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
</div>
 
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $("#category").on("change", function(){
               
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let category = $("#category").val(); 

                $.ajax({

                  url  : "{{ route('getsub') }}",
                  type : "POST", 
                  data : {
                      category : category
                  },
                  success : function(data)
                  {
                      $("#subcategory").html(data.success);
                  }

                });


            });
        });
    </script>
@endsection