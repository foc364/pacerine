<?php

namespace Larashop\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Larashop\Http\Controllers\Controller;
use Larashop\Models\Config;

class ConfigsOrientationController extends Controller
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
            $config = Config::findOrFail($id);
       
            $params = [
                'title' => 'Configurações',
                'text_orientation' => $config->text_orientation,
                'text_orientation_1' => $config->text_orientation_1,
                'text_orientation_2' => $config->text_orientation_2,
                'text_orientation_3' => $config->text_orientation_3,
            ];

            return view('admin.configsOrientation.configsOrientation_edit')->with($params);
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
            $config = Config::findOrFail($id);
          
            $config->text_orientation = $request->input('text_orientation');
            $config->text_orientation_1 = $request->input('text_orientation_1');
            $config->text_orientation_2 = $request->input('text_orientation_2');
            $config->text_orientation_3 = $request->input('text_orientation_3');
            $config->save();

            return redirect()->route('configuracoes-orientacao.edit', ['id' => 1])->with('success', "Configurações foram alteradas com sucesso.");
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
