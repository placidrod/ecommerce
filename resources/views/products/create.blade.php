@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<h1>Create a Product</h1>
	<hr>
	<form action="/products" method="post">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-md-8">
				@include('errors.form-errors')
				<div class="form-group">
					<label for="title">Product Title</label>
					<input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
				</div>
				<div class="form-group">
					<label for="short_description">Short Description</label>
					<textarea class="form-control" id="short_description" name="short_description" rows="4">{{ old('short_description') }}</textarea>
				</div>
				<div class="form-group">
					<label for="long_description">Long Description</label>
					<textarea class="form-control" id="long_description" name="long_description" rows="10">{{ old('long_description') }}</textarea>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="price">Price</label>
					<input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
				</div>
				<div class="form-group">
					<label for="discount">Discount Rate</label>
					<input type="text" class="form-control" id="discount" name="discount" value="{{ old('discount') }}">
				</div>
				<div class="form-group">
					<label for="discounted_price">Discounted Price</label>
					<input type="text" class="form-control" id="discounted_price" name="discounted_price" value="{{ old('discounted_price') }}">
				</div>
				<div class="input-group">
					<span class="input-group-btn">
						<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
							<i class="fa fa-picture-o"></i> Choose
						</a>
					</span>
					<input id="thumbnail" class="form-control" type="text" name="featured_image">
				</div>
				<img id="holder" style="margin-top:15px;max-height:100px;">
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection