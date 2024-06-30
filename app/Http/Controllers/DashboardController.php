<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index() {
        $BookCount = Book::count();
        $CategoryCount = category::count();
        $UserCount = User::count();
        return view('dashboard', ['book_count' => $BookCount, 'category_count' => $CategoryCount, 'user_count' => $UserCount]);
        return view('dashboard');
    }
}
