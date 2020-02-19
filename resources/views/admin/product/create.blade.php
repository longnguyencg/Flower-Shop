@extends('layouts.admin.admin')
@section('page-heading','Add Product')
@section('content')
    <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control" name="name" required >
        </div>

        <div class="form-group">
            <label >Quantity</label>
            <input type="number" class="form-control" name="quantity" required >
        </div>
        <div class="form-group">
            <label >Price</label>
            <input type="number" class="form-control" name="price" required >
        </div>
        <div class="form-group">
            <label >Sale</label>
            <input type="number" class="form-control" name="sale" placeholder="10%" required >
        </div>
        <div class="form-group">
            <label>Size</label>
            <select class="form-control" name="size">
                <option>X</option>
                <option>L</option>
                <option>XL</option>
            </select>
        </div>
        <div class="form-group">
            <label>Form</label>
            <select class="form-control" name="form">
                <option>Bo hoa</option>
                <option>Lang hoa</option>
                <option>Binh Hoa</option>
            </select>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Theme</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="theme[]" value="option1" checked>
                        <label class="form-check-label" >
                            Sinh Nhat
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="theme[]" value="option2">
                        <label class="form-check-label">
                            Hoa cuoi
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="theme[]" value="option3" >
                        <label class="form-check-label">
                            Chia buon
                        </label>
                    </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Type</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="type[]" value="option1" checked>
                        <label class="form-check-label">
                            Hoa hong
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="type[]"  value="option2">
                        <label class="form-check-label" >
                            Hoa Lan
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="type[]" value="option3" >
                        <label class="form-check-label" >
                            Hoc cuc
                        </label>
                    </div>
            </div>
        </fieldset>
        <div class="form-group">
            <label>image</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control ckeditor" name="description" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
