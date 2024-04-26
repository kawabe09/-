<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts=Contact::all();

        return view('admin', compact('contacts'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name','last_name','gender','email','tel','address','building','category_id','detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact=$request->only(['first_name','last_name','gender','email','tel','address','building','category_id','detail']);
        Contact::create($contact);
        return view('thanks');
    }

    public function destroy(Request $request)
    {
        Category::find($request->id)->delete();

        return redirect('/admin')->with('message', 'カテゴリを削除しました');
    }
}
