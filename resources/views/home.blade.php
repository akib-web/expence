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
                    @php
                        $c = json_encode([[
                            'id'=>1,
                            'name'=>'Akib',
                            ],[
                            'id'=>2,
                            'name'=>'javed',
                            ]
                        ]);
                    @endphp
                    {{-- <expence-add title="Akib" data_id="100">hello testing</expence-add> --}}
                    <Expence :data="{{ $c }}"></Expence>
                    {{ __('You are logged in !') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
