@extends('layouts.app')

@push('page-css')
<link href="{{asset('assets/extra-libs/prism/prism.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="row">
    <div class="col s12 l11">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title activator">Add Product To Stock<h5>
                <form method="post" enctype="multipart/form-data" action="{{route('products.store')}}">
                    @csrf
                    <div class="row">
                        <div class="input-field col s6">
                            <select name="purchase" id="purchase">
                                <option disabled selected>Choose product</option>
                                @foreach (App\Models\Purchase::get() as $purchase)
                                    @if (!empty($purchase->products))
                                    @foreach ($purchase->products as $product)
                                    <option data-product="{{$product['name']}}" value="{{$purchase->id}}">{{$product['name']}}</option>
                                    @endforeach
                                    @endif
                                @endforeach
                            </select>
                            <label for="purchase">Product Name</label>
                            <input type="hidden" name="product" id="product_name">
                        </div>
                        <div class="input-field col s6">
                            <select class="autocomplete" name="category" id="category">
                                <option disabled selected>Choose Product Category</option>
                                @if (!empty(App\Models\Category::get()))
                                    @foreach (App\Models\Category::get() as $category)
                                     <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <label for="category">Category</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="price" name="price" type="text">
                            <label for="price">Selling Price</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="discount" name="discount" value="0" type="text">
                            <label for="discount">Discount (%)</label>
                            <small>Discounts are calculated in percentages.Eg if 5% just enter 5.</small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="file-field input-field col s12">
                            <div class="btn blue darken-1">
                                <input id="image" type="file" name="image">
                                <label for="image">Product Image</label>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="description" class="materialize-textarea" name="description" data-length="255"></textarea>
                            <label for="description">Description</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn green waves-effect waves-light right" type="submit" name="submit">Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection

@push('page-js')
<script src="{{asset('assets/extra-libs/prism/prism.js')}}"></script>
<script src="{{asset('dist/js/pages/forms/jquery.validate.min.js')}}"></script>
<script>
    $(document).ready(function(){

        $('select#purchase').on('change', function() {
            var product_name = $('select#purchase option:selected').attr('data-product');
            $('#product_name').val(product_name);
        });

    });
</script>
@endpush