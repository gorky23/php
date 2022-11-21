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
                        <input class="form-control" id="contract_applies" name="contract_applies" type="text" placeholder="Umowa dotyczy..."/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Data zawarcia umowy</label>
                        <input class="form-control" id="date_conclusion_contract" name="date_conclusion_contract" type="date" placeholder="Proszę wprowadzić dataę zawarcia umowy"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Data realizacji</label>
                        <input class="form-control" id="execution_date" name="execution_date" type="date" placeholder="Proszę wprowadzić datę realizacji umowy"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Data wygaśnięcia</label>
                        <input class="form-control" id="contract_expiration_date" name="contract_expiration_date" type="date" placeholder="Proszę wprowadzić datę wygaśnięcia umowy"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Uwagi</label>
                        <input class="form-control" id="remarks" name="remarks" type="text" placeholder="Uwagi jak są..."/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Aneks</label>
                        <input class="form-control" id="annex" name="annex" type="text" placeholder="Aneks do umowy..."/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Skan</label>
                        <input class="form-control" id="scan" name="scan" type="text" placeholder="Scan dokumentu - pdf"/>
                    </div>
                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit" >Dodaj umowę</button></div>
            </form>    
        </div>
    </div>
@endsection
