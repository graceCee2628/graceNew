<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use App\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /*TO LOAD THE ADMIN DASH BOARD*/

    public function index()
    {
        $tickets = Ticket::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.index')->with('tickets', $tickets);
    }

    /*FOR WEB USER TO VIEW HIS OWN TICKETS*/
    public function my_ticket()
    {

        $user_id=Auth::user()->id;
        $user=User::find($user_id);
        return view ('my_ticket')->with('tickets', $user->tickets);
    }

    /*TO VIEW THE SELECTED TICKET*/   
    public function show($id)
    {
        $tickets = Ticket::find($id); 
        return view ('admin.show')->with('tickets', $tickets);
    }

    public function ticket_accepted($id)
    {
        return '123';
       
    }

    public function update($id)
    {
        return '123';
       
    }         

}
