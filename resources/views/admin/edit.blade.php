@extends('admin.index')

@section('title', 'Edit Product')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="my-4">Edit Product</h2>
                <form method="POST" action="/postedit/{{ $products->id }}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group mb-3">
                        <label class="my-3">Enter Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" value="{{ $products->image }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="drink">Drink</label>
                      <input type="text" class="form-control" name="drink" id="drink" placeholder="Enter drink" value="{{ $products->drink }}">
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="desc">Desc</label>
                      <input type="text" class="form-control" name="desc" id="desc" placeholder="Enter desc" value="{{ $products->desc }}">
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="price">Price</label>
                      <input type="number" class="form-control" name="price" id="price" placeholder="Enter price" value="{{ $products->price }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning">EDIT</button>
                </form>
            </div>
        </div>
    </div>

@endsection