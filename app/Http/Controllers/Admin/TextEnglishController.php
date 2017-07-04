<?php

namespace Pacerini\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Pacerini\Http\Controllers\Controller;
use Pacerini\Models\TextEnglish;

class TextEnglishController extends Controller
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
            $textEnglish = TextEnglish::findOrFail($id);

            $params = [
                'title' => 'Configurações',
                'textEnglish' => $textEnglish,
            ];

            return view('admin.textEnglish.textEnglish_edit')->with($params);
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
            $textEnglish = TextEnglish::findOrFail($id);
            $textEnglish->about = $request->input('about');
            $textEnglish->about_li = $request->input('about_li');
            $textEnglish->about_li_2 = $request->input('about_li_2');
            $textEnglish->about_li_3 = $request->input('about_li_3');
            $textEnglish->about_experience = $request->input('about_experience');
            $textEnglish->about_conclusion = $request->input('about_conclusion');
            $textEnglish->service_1 = $request->input('service_1');
            $textEnglish->service_2 = $request->input('service_2');
            $textEnglish->service_3 = $request->input('service_3');
            $textEnglish->service_4 = $request->input('service_4');
            $textEnglish->service_5 = $request->input('service_5');
            $textEnglish->service_6 = $request->input('service_6');
            $textEnglish->service_7 = $request->input('service_7');
            $textEnglish->schedule = $request->input('schedule');

            $textEnglish->save();

            return redirect()->route('texto-ingles.edit', ['id' => 1])->with('success', "Configurações foram alteradas com sucesso.");
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
