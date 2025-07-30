<form {{ $attributes(['class' => 'max-w-2xl mx-auto space-y-6', 'method' => 'GET']) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>

{{-- This form component is used to create forms with a consistent style and structure. It accepts attributes for class and method, and includes CSRF protection and method spoofing if necessary. --}}
