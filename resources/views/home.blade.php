@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <expence-add title="Akib" data_id="100">hello testing</expence-add> --}}
                    <Expence></Expence>
                    {{ __('You are logged in !') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
