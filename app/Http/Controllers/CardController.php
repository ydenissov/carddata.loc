<?php


namespace App\Http\Controllers;
use App\Card;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;


class CardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        // Requests throttle per minute
        $this->middleware('throttle:120,1');
    }

    public function searchCardByVIN($vin)
    {
        return Card::where('vin', '=', $vin)->orderBy('created_at', 'DESC')->firstOrFail();
    }

    public function searchCardByGosNumber($number)
    {
        return Card::where('gos_number', '=', $number)->orderBy('created_at', 'DESC')->firstOrFail();
    }

    public function searchCardByKuzov($kuzov)
    {
        return Card::where('kuzov', '=', $kuzov)->orderBy('created_at', 'DESC')->firstOrFail();
    }

    public function store(Request $request)
    {
        // Simple check for empty data
        if ((!$request->get('vin')) && (!$request->get('kuzov')) && (!$request->get('shassi'))) {
            return 'Bad Data';
        }
        $userId = User::where('api_token', '=', $request->header('Api-Token'))->first();
        return Card::create(array_merge($request->all(), ['who_create' => $userId->id, 'ip_addr' => $request->ip()]));
    }

}
