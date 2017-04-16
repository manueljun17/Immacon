@if ($abouts->count())
@foreach ($abouts as $about)
    <div class="mission">
    <h1>Mission</h1>
    {{ $about->mission }}
    </div>
    <div class="vision">
    <h1>Vision</h1>
    {{ $about->vision }}
    </div>
    <div class="history">
    <h1>History</h1>
        {{ $about->history }}
    </div>
  
@endforeach
@else
    There are no information on About.
@endif