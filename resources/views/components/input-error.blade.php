@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-danger']) }}> <strong>{{ $message }}</strong></p>
@enderror
