@if ($contacts->count())
@foreach ($contacts as $contact)

    <div>
    <h1>Cellphone</h1>
    {{ $contact->cell_number }}
    </div>
    <div>
    <h1>Phone</h1>
    {{ $contact->phone_number }}
    </div>
    <div>
    <h1>Address</h1>
        {{ $contact->address }}
    </div>
    <h1>Email</h1>
    {{ $contact->email_address }}
    </div>
    <div>
    <h1>Bank Name</h1>
    {{ $contact->account_name }}
    </div>
    <div>
    <h1>Bank Number</h1>
        {{ $contact->account_number }}
    </div>
  
@endforeach
@else
    There are no information on Contact Us.
@endif