<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Organization;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class OrganizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $organizations = Organization::where(function($query) use ($request) {
            //filter by keyword entered
            if( ( $term = $request->get('term') ) ) {
                $query->where('name', 'like', '%' . $term . '%');
                $query->orWhere('description', 'like', '%' . $term . '%');
            }
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Organization $organizations, Request $request )
    {
        $validator = Validator::make($request->all(), $this->validator());
        if($validator->fails()){
            return Redirect::route('organizations.create')
            ->withErrors($validator)
            ->withInput();
        }
        $organizations->create([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);
        return Redirect::to('organizations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organizations = Organization::find($id);
        return view('organizations.show',compact('organizations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organizations = Organization::find($id);
        return view('organizations.edit',compact('organizations'));
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
        $validator = Validator::make($request->all(), $this->validator());
        if($validator->fails()){
        return Redirect::route('organizations.edit', array($parishofficers->id))
        ->withErrors($validator)
        ->withInput();
        }
        $organizations = Organization::find($id);
        $organizations->update([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);
        return Redirect::to('organizations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organizations = Organization::find($id);
        $organizations->delete();
        return Redirect::route('organizations');
    }
    /**
     * Get Rules
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function validator()
    {
        return [
            'name' => 'required|min:3',
            'description' => 'required:5',
        ];
    }
}