
@extends('layouts.layoutTask')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('states.index') }}"> Back</a>
        </div>
    </div>
</div>




   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   


<section id="form" class="container marg-top">
    <form class="row g-3" action="{{ route('states.update',$state->id) }}" method="POST" >
      @csrf

        @csrf
        @method('PUT')
      
       
        <div class="col-md-3">
          <label for="inputPassword4" class="form-label">name</label>
          <input type="text" class="form-control" name="name" value="{{ $state->name }}">
        </div>
        <div class="col-md-3">
            <label for="inputEmail4" class="form-label">country_id</label>
            <input type="text" class="form-control" name="iso3" value="{{ $state->country_id }}">
        </div>
        <div class="col-md-3">
            <label for="inputPassword4" class="form-label">country_code</label>
            <input type="text" class="form-control" name="numeric_code" value="{{ $state->country_code }}">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">iso2</label>
              <input type="text" class="form-control" name="iso2" value="{{ $state->iso2 }}">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">fips_code</label>
            <input type="text" class="form-control" name="phonecode" value="{{ $state->fips_code }}">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">iso2</label>
              <input type="text" class="form-control" name="capital" value="{{ $state->iso2 }}">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">type</label>
            <input type="text" class="form-control" name="currency" value="{{ $state->type }}">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">latitude</label>
              <input type="text" class="form-control" name="currency_name" value="{{ $state->latitude }}">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">longitude</label>
            <input type="text" class="form-control" name="currency_symbol" value="{{ $state->longitude }}">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">flag</label>
              <input type="text" class="form-control" name="tld" value="{{ $state->flag }}">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">wikiDataId</label>
            <input type="text" class="form-control" name="native" value="{{ $state->wikiDataId }}">
          </div>
          
      
     
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save</button>

        </div>
      </form>


      
</section>
@endsection
