<select class="form-control" id="_States">
    <option selected>Choose</option>
    @foreach ($states as $state)

    <option value="{{ $state->id }}">{{ $state->name }}</option>
    @endforeach
</select>
