<?php

namespace Pacerini\Http\Controllers\Site;

use Illuminate\Http\Request;
use Pacerini\Http\Controllers\Controller;
use Snowfire\Beautymail\Beautymail;
use Pacerini\Formatters\PhoneNumber;
use Pacerini\Models\Config;
use Pacerini\Models\Place;
use Pacerini\Models\HealthInsurance;
use Pacerini\Models\Schedule;
use Response;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*
        $schedules = (new Schedule)->getSchedulesAvailableByDate($request->input('date'));

        $config = Config::find(1);
     
        $params = [
            'request' => $request,
            'schedules' => (!empty($schedules) ? (new Schedule)->formatScheduleKeyValueEqual($schedules) : ['' => 'Agenda Lotada']),
            'healthInsurances' => HealthInsurance::pluck('name', 'name'),
            'config' => $config,
            'phoneNumber' => new PhoneNumber,
            'places' => Place::where('active', 1)->get(),
        ];
        */
        return view('site.home')->with($params);
    }
  
    public function sendEmail(Request $request) 
    {
        $beautymail = app()->make(Beautymail::class);

        $beautymail->send('emails.welcome', $request->all(), function($message) use ($config) {

        $message
            ->from('site@pacerini.com.br')
            ->to( 'foc364@gmail.com', '')
            ->subject('Agendamento de consulta');
        });

        return Response::json("Enviado com sucesso");

    }
}