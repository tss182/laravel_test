<div class="position-relative">
    <label for="input-{{ $field }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    <div class="position-absolute top-50 mt-1 px-3">
        <i class="{{ $icon }}"></i>
    </div>
    <input type="{{ $type }}" id="input-{{ $field }}" class="form-control rounded-5 ps-5"
           name="{{ $field }}" value="{{ old($field) }}" aria-describedby="{{ $label }}" />
</div>
