<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('messages.index');

        // $d = Message::find(1);
        // return $d->messageDetail;
        
        $messageList = Message::all();
        return view("messages.index", compact('messageList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view("messages.create");
        // $msg = Message::find($request->messageId);
        
        // $msg->messageDate = $msg->messageDate;
        // $msg->save();
        // return redirect("/messages");
        //dd('hello');
        return view("messages.create");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $msg = new Message;
        $msg->messageDate = $request->date;
        $msg->messageDetail = $request->detail;
        $msg->save();
        return redirect("/messages");
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
        $msg = Message::find($id);
        return view('messages.edit', compact('msg'));
        dd($id);
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
        //return 123;
        //dd ($request);
        $msg = Message::find($id);
        $msg->messageDate = $request->date;
        $msg->messageDetail = $request->detail;
        $msg->save();
        return redirect("/messages");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msg = Message::find($id);
        $msg->delete();
        return redirect("/messages");
    }

    function front(){
        $messageList = Message::all();
        return view("index", compact('messageList'));
    }
}
