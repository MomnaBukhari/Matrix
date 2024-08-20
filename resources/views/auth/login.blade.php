@extends('mainlayout')

@section('title')
    Matrix - Login
@endsection

@section('section1')
    <div class="auth-container">
        <div>
            <h2>Login</h2>
            <form action="{{ route('logindone') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required value="{{ old('email') }}">
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn-primary">Login</button>
            </form>
        </div>
        <div>
            Not Registered Yet? <a href="{{ route('signup') }}">Sign up</a>
        </div>
    </div>
@endsection
