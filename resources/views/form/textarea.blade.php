<div class="form-group">
    <label for="textarea-{{ $id }}">{{ $label }}</label>
    <textarea id="textarea-{{ $id }}" name="{{ $id }}" class="form-control">{{ $slot }}</textarea>
</div>