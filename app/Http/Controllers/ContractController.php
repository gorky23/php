<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        return view('contract.index', ['contracts' => $contracts]);
    }

    public function create()
    {
        return view('contract.create');
    }

    public function edit($id)
    {
        $contract = Contract::find($id);

        return view('contracts.edit', ['contract' => $contract]);
    }

    public function store(Request $request)
    {
        $contract = new Contract();
        $contract->contract_number = $request->contract_number;
        $contract->contractor = $request->contractor;
        $contract->contract_applies = $request->contract_applies;
        $contract->date_conclusion_contract = $request->date_conclusion_contract;
        $contract->execution_date = $request->execution_date;
        $contract->contract_expiration_date = $request->contract_expiration_date;
        $contract->remarks = $request->remarks;
        $contract->annex = $request->annex;
        $contract->scan = $request->scan;

        $contract->save();
        return redirect()->route('contract.index')->with('message', 'Umowa dodana poprawnie');
    }

    public function update($id, Request $request)
    {
        $contract = Contract::find($id);

        $contract->contract_number = $request->contract_number;
        $contract->contractor = $request->contractor;
        $contract->contract_applies = $request->contract_applies;
        $contract->date_conclusion_contract = $request->date_conclusion_contract;
        $contract->execution_date = $request->execution_date;
        $contract->contract_expiration_date = $request->contract_expiration_date;
        $contract->remarks = $request->remarks;
        $contract->annex = $request->annex;
        $contract->scan = $request->scan;

        $contract->save();
        return redirect()->route('contracts.index')->with('message', 'Umowa zmieniona poprawnie');
    }

    public function delete($id)
    {
        Contract::destroy($id);

        return redirect()->route('contracts.index')->with('message', 'Umowa została usunięta');
    }
}
