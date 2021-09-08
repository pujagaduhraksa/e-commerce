@extends('admin.index')

@section('title', 'Add Product')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="my-4">Add Product</h2>
                <form method="POST" action="/postcreate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="my-3">Enter Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="drink">Drink</label>
                      <input type="text" class="form-control" name="drink" id="drink" placeholder="Enter drink">
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="desc">Desc</label>
                      <input type="text" class="form-control" name="desc" id="desc" placeholder="Enter desc">
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="price">Price</label>
                      <input type="number" class="form-control" name="price" id="price" placeholder="Enter price">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-danger">ADD</button>
                </form>
            </div>
        </div>
    </div>

@endsection