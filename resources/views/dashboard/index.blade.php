@extends('layouts.layoutTask')
@section('content')


    <section id="select" class="container marg-top">


        <div class="containe">
            <div class="row align-items-start">
                <div class="col">
                    <label for="inputEmail4" class="form-label">countries</label>
                    <div id="countries"></div>

                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">states</label>
                    <div id="states">
                        <select  class="form-control" id="_Countries">
                            <option selected>Choose</option>
                        
                        </select>

                    </div>


                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">cities</label>
                    <div id="cities">
                        <select  class="form-control" id="_Countries">
                            <option selected>Choose</option>
                        
                        </select>
                    </div>


                </div>


            </div>
    </section>

<section id="dataView">

</section>
   






<script src="{{ asset('Assets/app.js') }}"></script>


@endsection
