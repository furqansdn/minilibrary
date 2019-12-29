@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h3>Login</h3>
        <form action="{{ route('login') }}" class="col s12" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" class="validate @error('email') invalid @enderror" name="email" value=" {{old('email')}} ">
                    <label for="">Email</label>
                    @error('email')
                        <span class="helper-text" data-error=" {{ $message }} "></span>
                    @enderror
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" class="@error('password') invalid @enderror" name="password" value="">
                    <label for="">Password</label>
                    @error('password')
                        <span class="helper-text" data-error=" {{ $message }} "></span>
                    @enderror
                </div>
                <div class="input-field col s12">
                    <input type="submit" value="Login" class="waves-effect waves-light btn red accent-1">
                </div>
            </div>
        </form>
    </div>
@endsection
    