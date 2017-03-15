<div class="form-group">
    <label for="input-{{ $name }}">{{ $label }}</label>
    <select id="input-{{ $name }}" name="{{ $name }}" class="form-control">
    	@foreach ($source as $item)

    		@if (strval($slot) == $item->id)
    			<option value="{{ $item->id }}" selected>{{ $item->value }}</option>
    		@else
    			<option value="{{ $item->id }}">{{ $item->value }}</option>
    		@endif

    	@endforeach
    </select>

</div>