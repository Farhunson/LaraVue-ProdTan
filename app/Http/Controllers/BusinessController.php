<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import file model Business
use App\Business;

class BusinessController extends Controller
{
    // mengambil semua data
    public function all()
    {
        return Business::all();
    }

    // mengambil data by id
    public function show($id)
    {
        return Business::find($id);
    }

    // menambah data
    public function store(Request $request)
    {
        return Business::create($request->all());
    }

    // mengubah data
    public function update($id, Request $request)
    {
        $business = Business::find($id);
        $business->update($request->all());
        return $business;
    }

    // menghapus data
    public function delete($id)
    {
        $business = Business::find($id);
        $business->delete();
        return 204;
    }
}