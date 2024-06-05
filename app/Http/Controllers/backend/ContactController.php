<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $list = Contact::where('status','!=',0)->get();
        return view('backend.contact.index', compact('list'));
    }
    public function trash()
    {
        
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function status(string $id)
    {
        //
    }
    public function delete(string $id)
    {
        //
    }

    public function restore(string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
