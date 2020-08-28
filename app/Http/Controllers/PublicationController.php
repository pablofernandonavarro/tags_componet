<?php

namespace App\Http\Controllers;
use App\Publication;
use App\publication as AppPublication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index() {

        $publications = Publication::orderBy('id','DESC')->get();
        return view ('admin.tag.index',compact ('publications'));
    }
    
    public function store(Request $request){
        $tags = explode(',', $request->tags);

    	$publication = Publication::create($request->all());
    	$publication->tag($tags);

    	return back()->with('info', 'publicaion creado con éxito');
    }

    
}
