<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;  
class FriendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $friends = Friend::all();
        
        return view('friends.index',[
            'friends' =>$friends,
            ]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $friend = new Friend;

        return view('friends.create', [
            'friend' => $friend,
        ]);
    }

    public function rental()
    {
         $friend = new Friend;

        return view('friends.rental', [
            'friend' => $friend,
        ]);
        
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
     public function store(Request $request)
    {   $friend = new Friend;
        $friend->content = $request->content;
        $friend->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             $friend = Friend::find($id);

        return view('friends.show', [
            'friend' => $friend,
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
           $friend = Friend::find($id);

        return view('friends.edit', [
            'friend' => $friend,
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
        $friend = Friend::find($id);
        $friend->content = $request->content;
        $friend->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $friend = Friend::find($id);
        $friend->delete();

        return redirect('/');
    
    }
    
      public function jump()
    {
         $friend = new Friend;

        return view('friends.jump', [
            'friend' => $friend,
        ]);
    }
    
       public function picture()
    {
         $friend = new Friend;

        return view('friends.picture', [
            'friend' => $friend,
        ]);
    }
    
}
