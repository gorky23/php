@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Lista użytkowników:</h1>
            <table class="table table-hover table-bordered">
                <thead class="table-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->phone_number }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
