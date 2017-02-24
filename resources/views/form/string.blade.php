<div class="form-group">
    <label for="input-{{ $id }}">{{ $label }}</label>
    <input type="text" id="input-{{ $id }}" name="{{ $id }}" class="form-control" value="{{ $slot }}" />
</div>