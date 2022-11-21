@extends('layouts.app')
@section('content')

    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show col-2" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container d-flex justify-content-center col-8">
        <div class="col-12 mt-5" style="border-radius: 5px; background-color: #f2f2f2; padding: 40px; opacity: 0.8;">
          <h1 style="padding-bottom: 10px;">Lista faktur</h1>
          <div class="d-flex justify-content-center align-items-center mx-4">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Numer faktury</th>
                    <th scope="col">Data</th>
                    <th scope="col">Kwota</th>
                    <th scope="col">Akcje</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ( $invoices as $invoice)
                    <tr>
                        <th scope="row">{{ $invoice->id }}</th>
                        <td>{{ $invoice->number }}</td>
                        <td>{{ $invoice->date }}</td>
                        <td>{{ $invoice->total }}</td>
                        <td><div class="btn-group"><a href="{{ route('invoices.edit', ['id' => $invoice->id]) }}" class="btn btn-primary btn-sm" style="margin-right: 3px;">Edytuj</a>
                            <form method="POST" action="{{ route('invoices.delete', ['id' => $invoice->id]) }}">
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


