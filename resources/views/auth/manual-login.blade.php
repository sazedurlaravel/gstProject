@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
           <div class="card-header">{{ __('Login') }}</div>
           <div class="card-body">
            <form method="POST" action="{{ route('login.custom') }}">
                @csrf

                <div class="row mb-3">
                    <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('Applicant ID') }}</label>

                    <div class="col-md-6">
                        <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" required>

                        @error('id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        <a class="btn btn-info" href="{{url('/')}}">Home</a>

                    </div>

                </div>
            </form>
        </div>



            </div>
        </div>
    </div>
</div>
@endsection
