@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center pt-5" style="margin-top: 40px;">
        <div class="col-6 mt-5" style="border-radius: 5px; background-color: #f2f2f2; padding: 40px; opacity: 0.8;">
            <h1>Edytujesz umowę {{ $contract -> id }}</h1>
            <form action="{{ route('contract.update', ['id' => $contract->id]) }}" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                {{ csrf_field() }}
                @method('PUT')
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Numer umowy</label>
                        <input value={{ $contract->contract_number }} class="form-control" id="contract_number" name="contract_number" type="text" placeholder="Proszę wprowadzić numer umowy"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Kontrahent</label>
                        <input value={{ $contract->contractor }} class="form-control" id="contractor" name="contractor" type="text" placeholder="Proszę wprowadzić kontrahenta"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Umowa dotyczy</label>
                        <input value={{ $contract->contract_applies }} class="form-control" id="contract_applies" name="contract_applies" type="text" placeholder="Czego umowa dotyczy"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Data zawarcia umowy</label>
                        <input value={{ $contract->date_conclusion_contract }} class="form-control" id="date_conclusion_contract" name="date_conclusion_contract" type="date" placeholder="Kiedy umowa była zawarta"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Data realizacji</label>
                        <input value={{ $contract->execution_date }} class="form-control" id="execution_date" name="execution_date" type="date" placeholder="Proszę wprowadzić datę realizacji umowy"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Data wygaśnięcia</label>
                        <input value={{ $contract->contract_expiration_date }} class="form-control" id="contract_expiration_date" name="contract_expiration_date" type="date" placeholder="Proszę wprowadzić datę wygaśnięcia umowy"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Uwagi</label>
                        <input value={{ $contract->remarks }} class="form-control" id="remarks" name="remarks" type="text" placeholder="Jakieś uwagi"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Aneks</label>
                        <input value={{ $contract->annex }} class="form-control" id="annex" name="annex" type="text" placeholder="Aneks do umowy"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Skan</label>
                        <input value={{ $contract->scan }} class="form-control" id="scan" name="scan" type="text" placeholder="Skan dokumentu - pdf"/>
                    </div>
                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit" >Zapisz umowę</button></div>
            </form>
        </div>
    </div>
@endsection
