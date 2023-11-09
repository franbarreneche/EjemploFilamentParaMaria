<?php

namespace App\Actions;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SendIoTMessageAction {
    public function execute(array $data) {
        // dd($data);
        $response = Http::get('http://www.google.com', $data);
        Log::debug($response);

        return [
            'status' => 'ok',
            'message' => 'Mensaje enviado'
        ];
    }
}
