<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guestbook;

class GuestbookController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
    $guestbooks = Guestbook::all();
    return view('guestbook',['guestbooks'=> $guestbooks]);
  }
  public function getOne($id)
  {
    $guestbook = Guestbook::find($id);
    return view('guestbook', ['guestbook'=> $Guestbook]);
}
