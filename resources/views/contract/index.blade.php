@extends('layouts.app')
@section('content')

    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show col-2" role="alert" style="margin: 0 auto;">
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container d-flex justify-content-center col-8">
        <div class="col-12 mt-5" style="border-radius: 5px; background-color: #f2f2f2; padding: 40px; opacity: 0.8;">
          <h1 style="padding-bottom: 10px;">Lista umów</h1>
          <div class="d-flex justify-content-center align-items-center mx-4">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Numer umowy</th>
                    <th scope="col">Kontrahent</th>
                    <th scope="col">Umowa dotyczy</th>
                    <th scope="col">Data zawarcia</th>
                    <th scope="col">Data realizacji</th>
                    <th scope="col">Data wygaśnięcia</th>
                    <th scope="col">Uwagi</th>
                    <th scope="col">Aneks</th>
                    <th scope="col">Skan</th>
                    <th scope="col">Akcje</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ( $contracts as $contract)
                    <tr>
                        <th scope="row">{{ $contract->id }}</th>
                        <td>{{ $contract->contract_number }}</td>
                        <td>{{ $contract->contractor }}</td>
                        <td>{{ $contract->contract_applies }}</td>
                        <td>{{ $contract->date_conclusion_contract }}</td>
                        <td>{{ $contract->execution_date }}</td>
                        <td>{{ $contract->contract_expiration_date }}</td>
                        <td>{{ $contract->remarks }}</td>
                        <td>{{ $contract->annex }}</td>
                        <td>{{ $contract->scan }}</td>
                        <td><div class="btn-group"><a href="{{ route('contract.edit', ['id' => $contract->id]) }}" class="btn btn-primary btn-sm" style="margin-right: 3px;">Edytuj</a>
                            <form method="POST" action="{{ route('contract.delete', ['id' => $contract->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                            </form></div>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
@endsection


