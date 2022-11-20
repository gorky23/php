@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center pt-5" style="margin-top: 40px;">
        <div class="col-6 mt-5" style="border-radius: 5px; background-color: #f2f2f2; padding: 40px; opacity: 0.8;">
            <h1>Edytujesz Fakturę {{ $invoice -> id }}</h1>
            <form action="{{ route('invoices.update', ['id' => $invoice->id]) }}" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                {{ csrf_field() }}
                @method('PUT')
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Numer faktury</label>
                        <input value={{ $invoice->number }} class="form-control" id="number" name="number" type="text" placeholder="Proszę wprowadzić numer faktury"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Data wystawienia</label>
                        <input value={{ $invoice->date }} class="form-control" id="date" name="date" type="date" placeholder="Prosze wprowadzić datę"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Kwota</label>
                        <input value={{ $invoice->total }} class="form-control" id="total" name="total" type="text" placeholder="Proszę wprowadzić kwotę faktury"/>
                    </div>
                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit" >Zapisz fakturę</button></div>
            </form>
        </div>
    </div>
@endsection
