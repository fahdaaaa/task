@extends('layouts.layoutTask')
@section('content')

<div class="pull-left">
    <h2>Countries</h2>
</div>                
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($countries as $country)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->native }}</td>
                        <td>
                            <form action="{{ route('countries.update', $country->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('countries.show', $country->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('countries.edit', $country->id) }}">Edit</a>

                                @csrf
                                @method('PUT')

                                @if($country->flag =='0')
                                
                                    <input type="text" hidden  name="flag" value="1">
                                    <button type="submit"  class="btn btn-success">allow</button>
                                @else
                                    <input type="text" hidden  name="flag" value="0">
                                    <button type="submit"  class="btn btn-danger">block</button>
                                @endif

                               
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {!! $countries->links('pagination::bootstrap-4') !!}
            @endsection
