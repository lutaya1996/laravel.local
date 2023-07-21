<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::all();

        return view('catalog.index', ['title'=>'Prices', 'services'=>$services, 'request'=>$request]);
    }
}
