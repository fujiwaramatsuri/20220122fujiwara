<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EloquentController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from authors');
        return view('index', ['items' => $items]);
    }
    public function thanks()
    {
        return view('thanks');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
        ];
  DB::insert('insert into authors (name, email) values (:name,  :email)', $param);
        return redirect('/');
    }}