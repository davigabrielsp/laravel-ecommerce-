<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Model
{
    public function index(Request $request)
    {
        $data = [];
        return view('site.home');
    }
}
