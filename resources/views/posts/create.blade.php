@extends('layouts.app')

@section('content')
<div class="container">
<form action="/p" enctype="multipart/form-data" method="post">
@csrf
    <div class="col-8 offset-2">
      <div class="form-group row">

                            <label for="caption" class="col-md-4 col-form-label text-md-left"><h2>{{ __('Caption') }}</h2></label>
                           
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}">

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 
            </div>

                <div class="row">
                            <label for="image" class="col-md-4 col-form-label text-md-left"><h3>{{ __('Image') }}</h3></label>
                            <input  type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row pt-4">
                            <button class="btn btn-primary">Add new post </button>
                        </div>
                        </div>
                        </form>
                        </div>
                    

@endsection