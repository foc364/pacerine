<?php

namespace Pacerini\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Pacerini\Http\Controllers\Controller;
use Pacerini\Models\TextSpanish;

class TextSpanishController extends Controller
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
            $textSpanish = TextSpanish::findOrFail($id);

            $params = [
                'title' => 'Configurações',
                'textSpanish' => $textSpanish,
            ];

            return view('admin.textSpanish.textSpanish_edit')->with($params);
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
            $textSpanish = TextSpanish::findOrFail($id);
            $textSpanish->about = $request->input('about');
            $textSpanish->about_li = $request->input('about_li');
            $textSpanish->about_li_2 = $request->input('about_li_2');
            $textSpanish->about_li_3 = $request->input('about_li_3');
            $textSpanish->about_experience = $request->input('about_experience');
            $textSpanish->about_conclusion = $request->input('about_conclusion');
            $textSpanish->service_1 = $request->input('service_1');
            $textSpanish->service_2 = $request->input('service_2');
            $textSpanish->service_3 = $request->input('service_3');
            $textSpanish->service_4 = $request->input('service_4');
            $textSpanish->service_5 = $request->input('service_5');
            $textSpanish->service_6 = $request->input('service_6');
            $textSpanish->service_7 = $request->input('service_7');
            $textSpanish->schedule = $request->input('schedule');

            $textSpanish->save();

            return redirect()->route('texto-espanhol.edit', ['id' => 1])->with('success', "Configurações foram alteradas com sucesso.");
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
