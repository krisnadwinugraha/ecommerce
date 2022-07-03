<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Dashboard;
use App\Models\User;
use App\Models\Home;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', [
            "dashboard" => Dashboard::all(),
            "user" => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'       => 'required',
            'email'      => 'required|email',
      
        ]);
        $validatedData['password'] = Hash::make($request -> password);

        User::create($validatedData);

        return redirect('user')->with('success', 'new Post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.update', [
            "dashboard" => Dashboard::all(),
            "barang" => User::all(),
            'user' => User::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.edit', [
            "dashboard" => Dashboard::all(),
            "barang" => User::all(),
            'user' => User::find($id)
        ]);
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

        $validatedData = $request->validate([
            'name'       => 'required',
            'email'      => 'required|email',
            'level'       => 'required',
      
        ]);
        $validatedData['password'] = Hash::make($request -> password);

        User::whereId($id)->update($validatedData);
        
        return redirect('user')->with('success', 'new Post');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('user')->with('success', 'Data is successfully deleted');
    }

    public function add()
    {
        return view('user_create', [
            "dashboard" => Dashboard::all(),
            "user" => User::all()
        ]);
    }

}
