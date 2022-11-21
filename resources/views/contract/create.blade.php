@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center pt-5" style="margin-top: 40px;">
        <div class="col-6 mt-5" style="border-radius: 5px; background-color: #f2f2f2; padding: 40px; opacity: 0.8;">
            <h1>Dodaj Fakturę</h1>
            <form action="{{ route('invoices.store') }}" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Numer umowy</label>
                        <input class="form-control" id="contract_number" name="contract_number" type="text" placeholder="Proszę wprowadzić numer umowy"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Kontrahent</label>
                        <input class="form-control" id="contractor" name="contractor" type="text" placeholder="Prosze wprowadzić kontrahenta"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Umowa dotyczy</label>
                        <input class="form-control" id="total" name="total" type="text" placeholder="Proszę wprowadzić kwotę faktury"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Numer faktury</label>
                        <input class="form-control" id="number" name="number" type="text" placeholder="Proszę wprowadzić numer faktury"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Numer faktury</label>
                        <input class="form-control" id="number" name="number" type="text" placeholder="Proszę wprowadzić numer faktury"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Numer faktury</label>
                        <input class="form-control" id="number" name="number" type="text" placeholder="Proszę wprowadzić numer faktury"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Numer faktury</label>
                        <input class="form-control" id="number" name="number" type="text" placeholder="Proszę wprowadzić numer faktury"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Numer faktury</label>
                        <input class="form-control" id="number" name="number" type="text" placeholder="Proszę wprowadzić numer faktury"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Numer faktury</label>
                        <input class="form-control" id="number" name="number" type="text" placeholder="Proszę wprowadzić numer faktury"/>
                    </div>
                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit" >Dodaj fakturę</button></div>
            </form>    
        </div>
    </div>
@endsection
