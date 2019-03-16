<?php

namespace fakul\Http\Controllers;

use fakul\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Record::all();
        return response()->json($records);
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
        $record = new  Record();
        $record->variant = $request->variant;
        $record->date_of_taking = $request->date_of_taking;
        if($record->save()){
            return $record;
        }
        else{
            return response()->json(['message'=>'failed'],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \fakul\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record_id)
    {
        //
        $record = Record::where('id',$record_id)->get();

        return response()->json($record);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \fakul\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \fakul\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        $record = Record::find($record)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \fakul\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
