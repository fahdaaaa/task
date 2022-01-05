@extends('layouts.layoutTask')
@section('content')

<div class="pull-left">
    <h2>States</h2>
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
                @foreach ($states as $state)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $state->name }}</td>
                        <td>{{ $state->native }}</td>
                        <td>
                            <form action="{{ route('states.update', $state->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('states.show', $state->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('states.edit', $state->id) }}">Edit</a>

                                @csrf
                                @method('PUT')

                                @if($state->flag =='0')
                                
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

            {!! $states->links('pagination::bootstrap-4') !!}
            @endsection
