<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreIncomeRequest;
use App\Http\Requests\UpdateIncomeRequest;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = DB::table('incomes')->where('user_id', auth()->user()->id)->latest()->paginate(10);
        return view('dashboard.income.index',[
            'incomes' => $incomes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.income.create', [
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIncomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nominal' => 'required|integer|max:99999999999999999',
            'asal_pendapatan' => 'required|max:2000',
            'notes' => 'required|max:3000',
        ]);

        // gambar opsional

        $validatedData['user_id'] = auth()->user()->id;
        
        Income::create($validatedData);

        return redirect('/dashboard/income')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        // return view('dashboard.income.show', [
        //     'income' => $income
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        return view('dashboard.income.edit', [
            'income' => $income,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncomeRequest  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        $rules = [
            'nominal' => 'required|integer|max:99999999999999999',
            'asal_pendapatan' => 'required|max:2000',
            'notes' => 'required|max:3000',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        
        Income::where('id', $income->id)
            ->update($validatedData);

        return redirect('/dashboard/income')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        Income::destroy($income->id);
        return redirect('/dashboard/income')->with('success', 'Data Berhasil Dihapus');
    }

}
