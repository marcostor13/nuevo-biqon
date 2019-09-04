<?php

namespace Biqon\Http\Controllers;

use Illuminate\Http\Request;
use Biqon\Dashboard;
use Illuminate\Support\Facades\Auth;

class URLController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('pages.urls',['path' => 'urls']);
    }

    public function indexSinUrls(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('pages.sinurls',['path' => 'sinurls']);
    }

    public function indexDashboard(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $id = Auth::id();

        $iframe = Dashboard::where('user_id', $id)->first();                  

        return view('pages.dashboard', ['path' => 'dashboard', 'iframe' => $iframe->url]);        
        
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
        //
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
