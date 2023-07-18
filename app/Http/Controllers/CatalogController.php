<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
class CatalogController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('catalog.index', ['title'=>'Prices', 'services'=>$services]);
    }
}
