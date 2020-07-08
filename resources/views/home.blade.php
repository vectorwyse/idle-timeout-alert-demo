@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            --}}
            <div class="card">
                <div class="card-header">Demo pages</div>

                <div class="card-body">
                    <ul>
                        <li>
                            <a href="/demo-default">Demo 1</a> : Dialog accounts for mouse/keyboard activity (Default behavior)
                        </li>
                        <li>
                            <a href="/demo-ignore-activity">Demo 2</a> : Dialog appears regardless of mouse/keyboard activity
                        </li>
                        <li>
                            <a href="/demo-keep-alive">Demo 3</a> : Dialog never appears
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
