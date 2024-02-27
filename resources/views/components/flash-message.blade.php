@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="position-fixed top-0 start-50 translate-middle-x bg-danger text-white px-4 py-3">
    <p>{{session('message')}}</p>
</div>
@endif