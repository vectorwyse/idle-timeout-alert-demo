@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        Current session lifetime is {{ config('session.lifetime') }} minutes. <br /><br />
        As long as you remain on this page, a dialog will appear when there is 30 seconds remaining. <br /><br />
        Feel free to open this page in multiple tabs. The dialogs should all appear at the same time!
    </div>
</div>
<timeout-dialog v-bind:ignore-activity="true"></timeout-dialog>
@endsection
