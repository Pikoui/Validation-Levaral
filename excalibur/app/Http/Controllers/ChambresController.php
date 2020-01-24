<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chambres;
use App\Http\Controllers\ChambresController;    

class ChambresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $chambres = Chambres::all();
    
            return view('chambers.index', compact('chambres'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chambers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required',
            'number'=>'required',
            'taken'=>'required',
            'booking'=>'required'
        ]);

        $chambre = new Chambres([
            'type'=> $request->get('type'),
            'number' => $request->get('number'),
            'taken' => $request->get('taken'),
            'booking' => $request->get('booking'),
        ]);
        $chambre->save();
        return redirect('/chambres')->with('success', 'Chambre saved!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function edit($id)
        {
            $chambre = Chambre::find($id);
            return view('chambres.edit', compact('chambre'));        
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function update(Request $request, $id)
        {
            $request->validate([
                'name'=>'required',
                'number'=>'required',
                'taken'=>'required',
                'booking'=>'required'
            ]);
    
            $chambre = Chambre::find($id);
            $chambre->type = $request->get('type');
            $chambre->number =  $request->get('number');
            $chambre->taken = $request->get('taken');
            $chambre->booking = $request->get('booking');
            $chambre->save();
    
            return redirect('/Chambres')->with('success', 'Chambre updated!');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function destroy($id)
        {
            $chambre = Chambre::find($id);
            $chambre->delete();
    
            return redirect('/chambres')->with('success', 'Chambre deleted!');
        }
    }

