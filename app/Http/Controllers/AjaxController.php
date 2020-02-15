<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AjaxController extends Controller
{
    public function napisteNam(Request $request)
    {
        $error = [];
        if (empty($request->contact)) {
            $error['contact'] = '<li>pole e-mail, nebo telefon je povinné</li>';
        }
        if (empty($request->message)) {
            $error['message'] = '<li>prosím napište zprávu</li>';
        }
        if (empty($request->confirm)) {
            $error['confirm'] = '<li>prosím potvrďte souhlas se zpracováním osobních údajů</li>';
        }

        if (count($error)) {
            return ['status' => 'error', 'error' => '<ul>'.implode('', $error).'</ul>'];
        }

        $text = "WEB NÁS BAVÍ\n\nbyl odeslán dotaz z kontaktního formuláře\n\nJméno: " . $request->name . "\n\nKontakt: " . $request->contact . "\n\nZpráva: " . $request->message;

        if (!empty($request->re) && $request->re == 'chobot') {
            try {
                Mail::raw($text, function ($message) {
                    $message->subject('Web nás baví - kontaktní formulář');
                    $message->from('info@wnb.cz');
                    $message->to('info@wnb.cz');
                    $message->cc('michal@wnb.cz');
                });
            } catch (\Exception $e) {
                return [
                    'status' => 'error',
                    'error' => '<ul><li>email se nepodařilo odeslat, zkuste to prosím znovu</li></ul>'
                ];
            }
        }

        return ['status' => 'success'];
    }
}
