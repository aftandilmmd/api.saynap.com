<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return ContactResource::collection(User::first()->contacts()->paginate(500));
    }

    public function create()
    {
        //
    }

    public function store(ContactRequest $request)
    {
        return auth()->user()->company->contacts()->create($request->validated());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
