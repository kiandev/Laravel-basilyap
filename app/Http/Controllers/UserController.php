<?php

namespace App\Http\Controllers;

Use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'image' => $request->get('image'),
            'tokenid' => $request->get('tokenid')
        ]);
        $user->save();
        return 1;
    }

    public function login(Request $request)
    {
        if ($user = DB::table('users')
            ->where('email', '=', $request->get('email'))
            ->where('password', '=', $request->get('password'))
            ->get()) {
            return $user;
        } else {
            return 0;
        }
    }

    public function email(Request $request)
    {
        if ($user = DB::table('users')
            ->where('email', '=', $request->get('email'))
            ->exists()) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
