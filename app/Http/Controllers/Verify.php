<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\Exception;

class Verify extends Controller
{
    public function verifyUser($token)
    {

        try {
            $client     = new Client();
            $request    = $client->request('POST',env('API_FUNCTION_VERIFY',null).$token);
            $response   = $request->getBody()->getContents();
            $data       = json_decode($response, true);
            $data_token = ['karyawan' => $token];

            if ($data["status"] == 200) {
                Session:: put('token',$token);
                return redirect('/employes');
            }
        } catch (\Exception $e) {
            $response = $e->getResponse();
            if($response == null){
                    return redirect('/');
                }else{
                $responseStatusCode   = $response->getStatuscode();
                $responseReasonPhrase = $response->getreasonPhrase();
                }

    return redirect('/');
}
    }

    public function submit(Request $request)
    {
        $token  = $request->token;
        $email  = $request->email;
        $nama   = $request->nama;
        $nik    = $request->nik;
        $mobile = $request->mobile;

        try {
            $client  = new Client();
            $request = $client->request('POST',env('API_SUBMIT', null), [
                'headers'     => ['Content-Type' => 'application/x-www-form-urlencoded'],
                'form_params' => [
                    'token'  => $token,
                    'email'  => $email,
                    'nama'   => $nama,
                    'nik'    => $nik,
                    'mobile' => $mobile,
                    ]
                    ]);
                $response = $request->getBody()->getContents();
                $data     = json_decode($response, true);

            if ($data["status"] == 200) {
                return redirect('/success');
            }
        } catch (\Exception $e) {
            $response = $e->getResponse();
            if($response == null){
                    return redirect('/');
                }else{
                $responseStatusCode   = $response->getStatuscode();
                $responseReasonPhrase = $response->getreasonPhrase();
                }

        return redirect('/');
}
    }
}
