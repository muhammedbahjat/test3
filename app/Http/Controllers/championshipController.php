<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Resources\championshipsResource;
use App\Http\Resources\championshipsResource2;
use App\Http\Resources\playersResource;
use App\Models\championship;
use App\Models\player;
use App\Models\goal;
use DB;

class championshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champs =  championshipsResource::collection(championship::with(['players'])->get());

        return response()->json(['meassage' => 'success','championships' => $champs],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = array(
            'name' => 'required',
            'image' => 'required',
            'team_count' => 'required',
            'group_count' => 'required',
            'play_system' => 'required',
            'sharing_type' => 'required',
            'lot_type' => 'required',
            'region' => 'required',
            'sharing_price' => 'required',
            'match_price' => 'required',
            'match_count' => 'required',
            'start_date' => 'required',
            'other_services' => 'required',
            'condition' => 'required',
            'awards' => 'required',
              );

              $validator = Validator::make( $request->all(), $rules);
    
              if ($validator->fails()) {
                return response()->json(['errors'=>$validator->errors()]);
              }

              $champ = new championship;

              $champ->name = $request->name;
              $champ->image = $request->image;
              $champ->team_count = $request->team_count;
              $champ->group_count = $request->group_count;
              $champ->play_system = $request->play_system;
              $champ->sharing_type = $request->sharing_type;
              $champ->lot_type = $request->lot_type;
              $champ->region = $request->region;
              $champ->sharing_price = $request->sharing_price;
              $champ->match_price = $request->match_price;
              $champ->match_count = $request->match_count;
              $champ->start_date = $request->start_date;
              $champ->other_services = $request->other_services;
              $champ->condition = $request->condition;
              $champ->awards = $request->awards;

              $champ->save();
            
              return response()->json(['message'=> 'success'],200);
    }

    /**
     * Display the championship resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $champ = championshipsResource::collection(championship::with(['players'])->where("id",$id)->get());
        return response()->json(['message' => 'success','championships' => $champ],200);
    }
     /**
     * Display the players resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function players($id)
    {
        $champ = championshipsResource2::collection(championship::with(['players'])
        
        ->where("id",$id)->get());

        return response()->json(['message' => 'success','championships' => $champ],200);

       
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
