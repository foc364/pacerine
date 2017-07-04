<?php

namespace Pacerini\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Pacerini\Http\Controllers\Controller;
use Pacerini\Models\Contact;

class ConfigsContactController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try
        {
            $contact = Contact::findOrFail($id);

            $params = [
                'title' => 'Configurações',
                'contact' => $contact,
            ];

            return view('admin.configsContact.configsContact_edit')->with($params);
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
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
        try
        {
            $contact = Contact::findOrFail($id);
          
            $contact->email = $request->input('email');
            $contact->phone = $request->input('phone');
            $contact->phone_2 = $request->input('phone_2');
            $contact->save();

            return redirect()->route('configuracoes-contato.edit', ['id' => 1])->with('success', "Configurações foram alteradas com sucesso.");
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }
}
