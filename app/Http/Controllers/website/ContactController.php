<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Program;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;
use App\Mail\ContactNotification\ContactNotification as ContactNotificationContactNotification;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        return response()->view('website.contact' , compact('programs'));
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
        $rules = [
            'name_en' => 'required',
            'message_en' => 'required',
            'email' => 'required|email',
            'type' => 'required',
            'mobile' => 'required',
        ];

        $this->validate($request, $rules);

        $data = [
            'name_en' => $request->input('name_en'),
            'message_en' => $request->input('message_en'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'type' => $request->input('type'),
        ];

        $data['name_ar'] = 'eeee';
        $data['message_ar'] = 'eeeee';

        Contact::query()->create($data);
        $successMessage = "<div class='sent-message d-block'>Your message has been sent. Thank you!</div>";

        return $successMessage;

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
