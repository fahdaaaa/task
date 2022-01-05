<select  class="form-control" id="_Countries">
    <option selected>Choose</option>
    @foreach ($countries as $country)

    <option value="{{ $country->id }}">{{ $country->name }}</option>
    @endforeach
</select>
