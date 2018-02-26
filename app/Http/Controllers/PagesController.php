<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        return view('pages.home');
    }

    function about()
    {
        return view('pages.about');
    }

    function classes()
    {
        return view('pages.classes');
    }

    function contact()
    {
        return view('pages.contact');
    }

    function contactsubmit(Request $request)
    {
        $name = $request->name;
        return redirect()->route('thankyou', ['name'=> $name]);
    }

    function login()
    {
        return view('pages.login');
    }

    function register()
    {
        return view('pages.register');
    }

    function logout()
    {
        return view('pages.logout');
    }

    function thankyou($name)
    {
        return view('pages.thankyou')-> with(compact('name'));
    }

    function viewmessages()
    {
        return view('pages.viewmsgs');
    }

    function viewmessagesubmit(Request $request)
    {
        /*
         $data = $request->all();
        return redirect()->route('viewcontactmessage', ['messageID'=> $data["messageID"]]);
*/
    }

    function viewcontactmessage($messageID)
    {
        return view('pages.viewcontactmsg')-> with(compact('messageID'));
    }

    function deletemessage(Request $request)
    {
        dd($request);
    }

}
