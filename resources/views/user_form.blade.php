@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                <div class="card-body">
                    {!! Form::model($objek, ['action' => $action, 'method' => $method]) !!}

                    <div>
                        <label for="name">Nama</label>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        <span class="text-helper">{{ $errors->first('name') }}</span>
                    </div>

                    <div>
                        <label for="email">Email</label>
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        <span class="text-helper">{{ $errors->first('email') }}</span>
                    </div>

                    <div>
                        <label for="password">Password</label>
                        {!! Form::text('password', null, ['class' => 'form-control']) !!}
                        <span class="text-helper">{{ $errors->first('password') }}</span>
                    </div>
                    <div>
                        <label for="password_confirmation">Konfirmasi Password</label>
                        {!! Form::text('password-confirmation', null, ['class' => 'form-control']) !!}
                        <span class="text-helper">{{ $errors->first('password-confirmation') }}</span>
                    </div>
                    {!! Form::submit($nama-stombol, ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
