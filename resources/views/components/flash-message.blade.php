@if (session()->has('status'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="text-green-400 m-2 p-4 bg-green-200">
        <p>
            {{ session('status') }}
        </p>
    </div>
@endif

{{-- @if (session()->has('status'))
    <div class="text-green-400 m-2 p-4 bg-green-200">{{ session()->get('status') }}</div>
@endif --}}
