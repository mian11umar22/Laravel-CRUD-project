<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function show(){
        $contact =DB::table('contacts')->paginate(4);
        return view('contact',['data'=>$contact]);
    }
    public function SingleContact(string $id)
    {
        $office= DB::table('contacts')->where('id',$id)->get();
        return view('singlecontact',['data'=>$office]);
    }
    public function Delete(string $id){
       $del= DB::table('contacts')->where('id',$id)->delete();
       if($del)
       return redirect()->route('contact');
       }
       public function Add( contactrequest $req){
        $add =DB::table('contacts')->insert([
'name'=> $req->name,
'email'=> $req->email,
'address'=> $req->address,
'phone'=> $req->phone
        ]);
        if($add){
            return redirect()->route('contact');
        }
        else{
            echo "contact not added";
        }

       }
       public function UpdateSingle(string $id){
        $single =DB::table('contacts')->find($id);
        return view('UpdateContact',['item'=>$single]);
        
}
public function Update(contactrequest $req ,$id){
    $update =DB::table('contacts')->where('id',$id)->update([
'name'=> $req->name,
'email'=> $req->email,
'address'=> $req->address,
'phone'=> $req->phone]);
if($update){
    return redirect()->route('contact');
}
else {
    echo "Not Upadated";
}
}

}
 

