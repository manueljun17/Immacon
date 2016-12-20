<?php

namespace App\Http\Controllers;

use File;

use App\Parishofficers;

use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ParishOfficersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $parishofficers = Parishofficers::where(function($query) use ($request) {
            //filter by keyword entered
            if( ( $term = $request->get('term') ) ) {
                $query->where('name', 'like', '%' . $term . '%');
                $query->orWhere('position', 'like', '%' . $term . '%');
            }
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('parishofficers.index', compact('parishofficers'));
    }

    public function autocomplete(Request $request)
    {
        //Prevent this method called by non ajax
        if($request->ajax())
        {
            $parishofficers = Parishofficers::where(function($query) use ($request) {
                //filter by keyword entered
                if( ( $term = $request->get('term') ) ) {
                    $query->where('name', 'like', '%' . $term . '%');
                    $query->orWhere('position', 'like', '%' . $term . '%');
                }
            })
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        //Convert to json
        foreach ($parishofficers as $parishofficer) {
          $results[] = ['id' => $parishofficer->id, 'value' => $parishofficer->name];
        }
        return response()->json($results);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $defaultImage = 'image/settings/default.png';
        return view('parishofficers.create', compact('defaultImage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Parishofficers $parishofficers, Request $request)
    {
        $rules = [
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'user_image'=>'required|image'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
        return Redirect::route('parishofficers.create')
        ->withErrors($validator)
        ->withInput();
        }
        $file = $request->file('user_image');
        $mytime = Carbon::now()->format('s-h-d-');
        $destinationPath = 'image/profile/';
        $extension = $file->getClientOriginalExtension();
        $filename= $mytime . $file->getClientOriginalName();
        // $filename= $mytime.$file->getClientOriginalName();
        $uploadSuccess = $request->file('user_image')
        ->move($destinationPath, $filename);
        $parishofficers->create([
            'name' => $request->get('name'),
            'position' => $request->get('position'),
            'description' => $request->get('description'),
            'user_image' => $destinationPath . $filename 
        ]);
        return Redirect::to('parishofficers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $parishofficers = ParishOfficers::find($id);
        return view('parishofficers.show',compact('parishofficers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $defaultImage = 'image/settings/default.png';
        $parishofficers = ParishOfficers::find($id);
        return view('parishofficers.edit',compact('parishofficers','defaultImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Parishofficers $parishofficers, Request $request)
    {
        $rules = [
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'user_image'=>'image'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
        return Redirect::route('parishofficers.edit', array($parishofficers->id))
        ->withErrors($validator)
        ->withInput();
        }
        if( $request->file('user_image')) {
            $mytime = Carbon::now()->format('s-h-d-');
            File::delete($parishofficers->user_image);
            $file = $request->file('user_image');
            $destinationPath = 'image/profile/';
            $extension = $file->getClientOriginalExtension();
            $filename= $mytime . $file->getClientOriginalName();
            $uploadSuccess = $request->file('user_image')
            ->move($destinationPath, $filename);
            $parishofficers->update([
                'name' => $request->get('name'),
                'position' => $request->get('position'),
                'description' => $request->get('description'),
                'user_image' => $destinationPath . $filename 
            ]);
        }
        else {
            $parishofficers->update([
                'name' => $request->get('name'),
                'position' => $request->get('position'),
                'description' => $request->get('description')
            ]);
        }
    	return redirect('parishofficers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parishofficer = ParishOfficers::find($id);
        File::delete($parishofficer->user_image);
        $parishofficer->delete();
        return Redirect::route('parishofficers');
    }

}
