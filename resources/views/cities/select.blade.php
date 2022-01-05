

<select id="_Cities" class="form-control">
    <option selected>Choose</option>
    @foreach ($cities as $city)

    <option value="{{ $city->id }}">{{ $city->name }}</option>
    @endforeach
</select>
