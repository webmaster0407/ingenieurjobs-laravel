@foreach($options as $option)
    <div class="form-check">
        <label class="form-check-label">
            <input{{ in_array($option['value'], explode(",", $value))  ? " checked" : "" }} type="checkbox" id="{{ $name }}" name="{{ $name }}" value="{{ $option['value'] }}"
            class="form-check-input{{ $varNameError ?? '' }}">
            {{ $option['text'] }}
        </label>
    </div>
@endforeach