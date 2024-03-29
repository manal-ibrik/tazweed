<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $contactus_data = ContactUs::All()->toArray();
        $contactus = array(
            'contact_us_fax' => $contactus_data['0']['contact_us_fax'],
            'contact_us_phone' => $contactus_data['0']['contact_us_phone'],
            'contact_us_email' => $contactus_data['0']['contact_us_email'],
            'contact_us_title' => $contactus_data['0']['contact_us_title'],
            'contact_us_address' => $contactus_data['0']['contact_us_address'],
            'contact_us_map' => $contactus_data['0']['contact_us_map'],
        );
        return view('contactus', $contactus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $contactMessage = new ContactUs;
        $request->validate(['email' => 'email|required']);
        $contactMessage->from = $request->name;
        $contactMessage->email = $request->email;
        $contactMessage->msj = $request->msj;
        $contactMessage->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs) {
        //
    }

}
