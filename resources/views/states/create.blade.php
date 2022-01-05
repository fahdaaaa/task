@extends('layouts.layoutTask')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New States</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('countries.index') }}"> Back</a>
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
    <form class="row g-3" action="{{ route('states.store') }}" method="POST" >
      @csrf
      
        <div class="col-md-3">
          <label for="inputEmail4" class="form-label">id</label>
          <input type="text" class="form-control" name="id">
        </div>
        <div class="col-md-3">
          <label for="inputPassword4" class="form-label">name</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="col-md-3">
            <label for="inputEmail4" class="form-label">country_id</label>
            <input type="text" class="form-control" name="country_id">
        </div>
        <div class="col-md-3">
            <label for="inputPassword4" class="form-label">country_code</label>
            <input type="text" class="form-control" name="country_code">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">fips_code</label>
              <input type="text" class="form-control" name="fips_code">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">iso2</label>
            <input type="text" class="form-control" name="iso2">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">type</label>
              <input type="text" class="form-control" name="type">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">latitude</label>
            <input type="text" class="form-control" name="latitude">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">longitude</label>
              <input type="text" class="form-control" name="longitude">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">flag</label>
            <input type="text" class="form-control" name="flag">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">wikiDataId</label>
              <input type="text" class="form-control" name="wikiDataId">
          </div>
          
     
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save</button>

        </div>
      </form>


      
</section>
@endsection
