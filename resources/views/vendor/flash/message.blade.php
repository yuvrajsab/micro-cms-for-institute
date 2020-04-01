@if (session()->has('flash_notification'))
<div class="notification-container d-flex flex-column">
    @foreach (session('flash_notification', collect())->toArray() as $message)

    @if ($message['overlay'])
    @include('flash::modal', [
    'modalClass' => 'flash-modal',
    'title' => $message['title'],
    'body' => $message['message']
    ])
    @else
    <div class="alert 
    alert-{{ $message['level'] }}
    {{ $message['important'] ? 'alert-important' : '' }} shadow-sm w-100" role="alert">
        @if ($message['important'])
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        @endif

        <strong>{!! $message['message'] !!}</strong>
    </div>
    @endif

    @endforeach
</div>
@endif

{{ session()->forget('flash_notification') }}