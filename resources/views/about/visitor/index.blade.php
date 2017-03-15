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
    <div class="location">
    <h1>Location</h1>
    {{ $about->location }}
    </div>
    <div class="bank-account">
    <h1>Bank Account</h1>
        {{ $about->bank_account }}
    </div>
    <div class="email-account">
    <h1>Email</h1>
    {{ $about->email_account }}
    </div>





@endforeach
@else
    There are no information on About.
@endif