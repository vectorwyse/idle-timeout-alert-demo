@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        Current session lifetime is {{ config('session.lifetime') }} minutes. <br /><br />
        If you are idle when 30 seconds is remaining, the dialog will appear. <br /><br />
        While you are active, a ping to the server will be sent in the background keeping your session alive.
    </div>
</div>
<timeout-dialog></timeout-dialog>
@endsection
