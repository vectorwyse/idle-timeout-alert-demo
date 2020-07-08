@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        Current session lifetime is {{ config('session.lifetime') }} minutes. <br /><br />
        As long as you remain on this page, the dialog will never appear. <br /><br />
        A ping to the server will be sent in the background and your session will never expire.
    </div>
</div>
<timeout-dialog v-bind:ignore-activity="true"></timeout-dialog>
@endsection
