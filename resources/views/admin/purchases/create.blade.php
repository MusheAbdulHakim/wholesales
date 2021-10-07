@extends('layouts.app')

@push('page-css')
<link href="{{asset('assets/extra-libs/prism/prism.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="row">
    <div class="col s12 l11">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title activator">Make New Purchase </h5>
                <form method="post" action="{{route('purchases.store')}}">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="supplier" id="supplier">
                                @foreach (App\Models\Supplier::get() as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                            <label for="supplier">Supplier</label>
                        </div>
                    </div>
                    <div class="row form-repeater">
                        <div data-repeater-list="products">
                            <div data-repeater-item>
                                <div class="input-field col s4">
                                    <input id="product" type="text" name="name">
                                    <label for="product">Product</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="quantity" type="text" name="quantity">
                                    <label for="quantity">Quantity</label>
                                </div>
                                <div class="input-field col s3">
                                    <input id="expiry_date" class="datepicker" type="text" name="expiry_date">
                                    <label for="expiry_date">Expiry Date</label>
                                </div>
                                <div class="input-field col s1">
                                    <button data-repeater-delete="" data-position="top" data-delay="50" data-tooltip="Remove" class="btn red waves-effect waves-light tooltipped" type="button"><i class="material-icons">clear</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" data-repeater-create="" class="btn teal waves-effect waves-light m-l-10">Add Product
                        </button>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="cost" name="cost" type="text">
                            <label for="cost">Purchase Cost</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="comment" class="materialize-textarea" name="comment" data-length="255"></textarea>
                            <label for="comment">Comment</label>
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
@endpush