<?php
//Ajoute un message dans la base de donnée
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ContactController extends Controller
{
    public function index()
    {
      return view('contact');
    }
    public function insertOne(Request $request)
    {
      $message = new Message;
      $message->name = $request->name;
      $message->email = $request->email;
      $message->message = $request->message;
      $message->save();
      return redirect('/contact');

    }
}
