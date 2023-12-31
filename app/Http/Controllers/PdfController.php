<?php

namespace App\Http\Controllers;



use PDF;
use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function cetakincome()
    {
      $income =  DB::table('incomes')->where('user_id', auth()->user()->id)->latest()
            ->get();

      $pdf = PDF::loadView('dashboard.income-pdf.index', ['incomes' => $income]);
    return $pdf->stream('Laporan-Data-Pendapatan.pdf');
    }
    public function cetakexpense()
    {
      $expense =  DB::table('expenses')->where('user_id', auth()->user()->id)->latest()
            ->get();

      $pdf = PDF::loadView('dashboard.expense-pdf.index', ['expenses' => $expense]);
    return $pdf->stream('Laporan-Data-Pengeluaran.pdf');
    }
}
