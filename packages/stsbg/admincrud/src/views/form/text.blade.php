<div class="form-group">
    <label for="input-{{ $name }}">{{ $label }}</label>
    <textarea id="input-{{ $name }}" name="{{ $name }}" class="form-control">{{ $slot }}</textarea>
</div>