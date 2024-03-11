@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="login-form">
                    <h2 class="text-center mb-4">Logowanie</h2>
                    <div class="mb-3">
                        <label for="project_name" class="form-label">Nazwa projektu</label>
                        <input type="text" id="project_name" class="form-control" placeholder="Nazwa projektu" required autofocus>
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
