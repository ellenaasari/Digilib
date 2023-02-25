<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stokBuku = Book::query()->select('stock')->get();
        $totalBuku = 0;
        foreach ($stokBuku as $stokBuku) {
            $totalBuku += $stokBuku->stock;
        }
        $pinjamBuku = Book::query()->select('being_borrowed')->get();
        $totalPinjam = 0;
        foreach ($pinjamBuku as $pinjamBuku) {
            $totalPinjam += $pinjamBuku->being_borrowed;
        }
        $totalPinjam;
        $populer = Book::query()
            ->join('detail_borrows', 'books.code', '=', 'detail_borrows.code_book')
            ->selectRaw('title, price, count(detail_borrows.code_book) as total')
            ->groupBy('title', 'price')
            ->orderBy('total', 'desc')            
            ->get();      
        
        return view('dashboard', ['totalBuku'=> $totalBuku, 'totalPinjam' => $totalPinjam, 'populer' => $populer]);

    }
}
