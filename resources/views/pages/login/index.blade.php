@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="login-form">
                    <h2 class="text-center mb-4">Logowanie</h2>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Hasło</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Hasło" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Zapamiętaj mnie</label>
                    </div>
                    <button class="btn btn-primary d-block w-100" type="submit">Zaloguj się</button>
                </form>
            </div>
        </div>
    </div>
@endsection
