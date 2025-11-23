<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\User;
use App\Models\Pinjam;


class AdminController extends Controller
{
    public function dashboard(){
       $members = User::where('role', 'member')->count();
        $books = Buku::count();
        $loans = Pinjam::count();
        $overdue = Pinjam::where('status', 'overdue')->count(); 
       return view('admin.dashboard', compact('members', 'books', 'loans', 'overdue'));
    }
}
