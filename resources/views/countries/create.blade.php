@extends('layouts.layoutTask')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Countries</h2>
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
    <form class="row g-3" action="{{ route('countries.store') }}" method="POST" >
      @csrf
     
        <div class="col-md-3">
          <label for="inputPassword4" class="form-label">name</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="col-md-3">
            <label for="inputEmail4" class="form-label">iso3</label>
            <input type="text" class="form-control" name="iso3">
        </div>
        <div class="col-md-3">
            <label for="inputPassword4" class="form-label">numeric_code</label>
            <input type="text" class="form-control" name="numeric_code">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">iso2</label>
              <input type="text" class="form-control" name="iso2">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">phonecode</label>
            <input type="text" class="form-control" name="phonecode">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">capital</label>
              <input type="text" class="form-control" name="capital">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">currency</label>
            <input type="text" class="form-control" name="currency">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">currency_name</label>
              <input type="text" class="form-control" name="currency_name">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">currency_symbol</label>
            <input type="text" class="form-control" name="currency_symbol">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">tld</label>
              <input type="text" class="form-control" name="tld">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">native</label>
            <input type="text" class="form-control" name="native">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">region</label>
              <input type="text" class="form-control" name="region">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">subregion</label>
            <input type="text" class="form-control" name="subregion">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">timezones</label>
              <input type="text" class="form-control" name="timezones">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">translations</label>
            <input type="text" class="form-control" name="translations">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">latitude</label>
              <input type="text" class="form-control" name="latitude">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">longitude</label>
            <input type="text" class="form-control" name="longitude">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">emoji</label>
              <input type="text" class="form-control" name="emoji">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">emojiU</label>
            <input type="text" class="form-control" name="emojiU">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">created_at</label>
              <input type="text" class="form-control" name="created_at">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">updated_at</label>
            <input type="text" class="form-control" name="updated_at">
          </div>
          <div class="col-md-3">
              <label for="inputEmail4" class="form-label">flag</label>
              <input type="text" class="form-control" name="flag">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">wikiDataId</label>
            <input type="text" class="form-control" name="wikiDataId">
          </div>
      
     
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="submit" class="btn btn-success">Add</button>

        </div>
      </form>


      
</section>
@endsection
