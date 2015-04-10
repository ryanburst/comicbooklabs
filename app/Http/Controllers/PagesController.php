<?php namespace Burst\Http\Controllers;

use Burst\Http\Requests;
use Burst\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home() {
    return view('pages.home');
  }

}
