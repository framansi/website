@component('mail::message')
# Email autogenerata dal sistema

L'utente {{ $data['name'] }} con email {{$data['email']}} ha utilizzato il form del sito.<br>

--------
Ha inviato il seguente messaggio: <br>
    <p class="italic">{{ $data['message'] }}</p>

@endcomponent
