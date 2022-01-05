@extends('layouts.layoutTask')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> --</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cities.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $city->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>state_id:</strong>
            {{ $city->state_id }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>state_code:</strong>
            {{ $city->state_code }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>country_id:</strong>
            {{ $city->country_id }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>country_code:</strong>
            {{ $city->country_code }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>latitude:</strong>
            {{ $city->latitude }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>longitude:</strong>
            {{ $city->longitude }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>flag:</strong>
            {{ $city->flag }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>wikiDataId:</strong>
            {{ $city->wikiDataId }}
        </div>
    </div>
 
    
   
</div>
@endsection


