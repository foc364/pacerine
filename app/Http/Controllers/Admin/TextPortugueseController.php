<?php

namespace Pacerini\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Pacerini\Http\Controllers\Controller;
use Pacerini\Models\TextPortuguese;

class TextPortugueseController extends Controller
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
            $textPortuguese = TextPortuguese::findOrFail($id);

            $params = [
                'title' => 'Configurações',
                'textPortuguese' => $textPortuguese,
            ];

            return view('admin.textPortuguese.textPortuguese_edit')->with($params);
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
            $textPortuguese = TextPortuguese::findOrFail($id);
            $textPortuguese->about = $request->input('about');
            $textPortuguese->about_li = $request->input('about_li');
            $textPortuguese->about_li_2 = $request->input('about_li_2');
            $textPortuguese->about_li_3 = $request->input('about_li_3');
            $textPortuguese->about_experience = $request->input('about_experience');
            $textPortuguese->about_conclusion = $request->input('about_conclusion');
            $textPortuguese->service_1 = $request->input('service_1');
            $textPortuguese->service_2 = $request->input('service_2');
            $textPortuguese->service_3 = $request->input('service_3');
            $textPortuguese->service_4 = $request->input('service_4');
            $textPortuguese->service_5 = $request->input('service_5');
            $textPortuguese->service_6 = $request->input('service_6');
            $textPortuguese->service_7 = $request->input('service_7');
            $textPortuguese->schedule = $request->input('schedule');

            $textPortuguese->save();

            return redirect()->route('texto-portugues.edit', ['id' => 1])->with('success', "Configurações foram alteradas com sucesso.");
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
