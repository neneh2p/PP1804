<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\TicketRequest;
use Auth;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listTicket =Ticket::all();
        return view('admin.ticket.list')->with(compact('listTicket'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ticket.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketRequest $request)
    {   
        $ticket = new Ticket();
        $ticket->title = $request->title;
        $ticket->content = $request->content;
        $ticket->slug = str_slug($request->title);
        $ticket->status = $request->status;
        $ticket->user_id = Auth::user()->id; //Id User logining
        $ticket->save();

        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('admin.ticket.show')->with(compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::findorFail($id);
        return view('admin.ticket.edit')->with(compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(TicketRequest $request, $id)
    {
        //dd($request->all());
        $ticket = Ticket::findorFail($id);
        $ticket->title = $request->title;
        $ticket->content = $request->content;
        $ticket->slug = str_slug($request->title);
        $ticket->status = $request->status;
        $ticket->user_id = Auth::user()->id; //Id User logining
        $ticket->save();

        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::destroy($id);

        return redirect()->route('tickets.index');
    }

    public function editTicket($id)
    {
        $ticket = Ticket::findorFail($id);
        
        return view('admin.ticket.edit')->with(compact('ticket'));
    }

    public function updateTicket(TicketRequest $request, $id)
    {
        $ticket = Ticket::findorFail($id);
        $ticket->title = $request->title;
        $ticket->content = $request->content;
        $ticket->slug = str_slug($request->title);
        $ticket->status = $request->status;
        $ticket->user_id = Auth::user()->id; //Id User logining
        $ticket->save();

        return redirect()->route('tickets.index');
    }
}
