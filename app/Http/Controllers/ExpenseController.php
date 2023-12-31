<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = DB::table('expenses')->where('user_id', auth()->user()->id)->get();
        return view('dashboard.expense.index',[
            'expenses' => $expenses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.expense.create', [
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExpenseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nominal' => 'required|integer|max:99999999999999999',
            'keperluan' => 'required|max:2000',
            'notes' => 'required|max:3000',
        ]);

        // gambar opsional

        $validatedData['user_id'] = auth()->user()->id;
        
        Expense::create($validatedData);

        return redirect('/dashboard/expense')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        return view('dashboard.expense.edit', [
            'expense' => $expense,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpenseRequest  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        $rules = [
            'nominal' => 'required|integer|max:99999999999999999',
            'keperluan' => 'required|max:1263',
            'notes' => 'required|max:3000',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        
        Expense::where('id', $expense->id)
            ->update($validatedData);

        return redirect('/dashboard/expense')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        Expense::destroy($expense->id);
        return redirect('/dashboard/expense')->with('success', 'Data Berhasil Dihapus');
    }
}
