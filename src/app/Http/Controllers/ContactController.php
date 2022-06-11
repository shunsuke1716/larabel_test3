<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact1 = $request->only('first','last');
        $contact2 = $request->only('gender','email','postcode','address','building_name','opinion');
        $name = $contact1['first'].' '.$contact1['last'];
        $contact3 = array('fullname' => $name);
        $contact = $contact3+$contact2;
        #return $request;
        return view('confirm', ['contact' => $contact]);
    }

    public function store(Request $request)
    {
        $contact = $request->only('fullname','gender','email','postcode','address','building_name','opinion');
        #return $contact;
        Contact::create($contact);
        return view('thanks');
    }
    public function admin()
    {
        $items = DB::select('select id,fullname,gender,email,opinion from contacts');
        #return $items;
        return view('admin',['items'=>$items]);
    }


    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from authors where id =:id', $param);
        return view('delete', ['form' => $item[0]]);
        return redirect('/admin');
    }

    public function search(Request $request)
    {
        $item = Author::where('name', 'LIKE',"%{$request->input}%")->first();
        $param =[
            'input' => $request->input,
            'item'=>item
        ];
        return view('admin',$param);
    }

}
