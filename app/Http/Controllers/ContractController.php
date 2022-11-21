<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        return view('contracts.index', ['contracts' => $contracts]);
    }

    public function create()
    {
        return view('contracts.create');
    }

    public function edit($id)
    {
        $contract = Contract::find($id);

        return view('contracts.edit', ['contract' => $contract]);
    }

    public function store(Request $request)
    {
        $contract = new Contract();
        $contract->number = $request->number;
        $contract->date = $request->date;
        $contract->total = $request->total;

        $contract->save();
        return redirect()->route('contracts.index')->with('message', 'Umowa dodana poprawnie');
    }

    public function update($id, Request $request)
    {
        $contract = Contract::find($id);

        $contract->number = $request->number;
        $contract->date = $request->date;
        $contract->total = $request->total;

        $contract->save();
        return redirect()->route('contracts.index')->with('message', 'Umowa zmieniona poprawnie');
    }

    public function delete($id)
    {
        Contract::destroy($id);

        return redirect()->route('contracts.index')->with('message', 'Umowa została usunięta');
    }
}
