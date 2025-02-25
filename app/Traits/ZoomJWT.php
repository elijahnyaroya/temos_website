<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

class ZoomJWT
{
    public function generateZoomToken()
    {
        $key = env('ZOOM_API_KEY', '');
        $secret = env('ZOOM_API_SECRET', '');

        $payload = [
            'iss' => $key,
            'exp' =>"1496091964000"// strtotime('+1 minute'),
        ];
        $dataDetail =  \Firebase\JWT\JWT::encode($payload, $secret, 'HS256');
        Log::info("DATA TOKEN KEY +++++++");
        ///Log::info($dataDetail);
        Log::info("DATA TOKEN KEY +++++++");
        return  $dataDetail;
    }
    private function retrieveZoomUrl()
    {
        return env('ZOOM_API_URL', '');
    }
    private function zoomRequest()
    {
        $jwt = $this->generateZoomToken();
        return \Illuminate\Support\Facades\Http::withHeaders([
            'authorization' => 'Bearer ' . $jwt,
            'content-type' => 'application/json',
        ]);
    }

    public function zoomGet(string $path, array $query = [])
    {
        $url = $this->retrieveZoomUrl();
        $request = $this->zoomRequest();
        return $request->get($url . $path, $query);
    }

    public function zoomPost(string $path, array $body = [])
    {
        $url = $this->retrieveZoomUrl();
        $request = $this->zoomRequest();
        return $request->post($url . $path, $body);
    }

    public function zoomPatch(string $path, array $body = [])
    {
        $url = $this->retrieveZoomUrl();
        $request = $this->zoomRequest();
        Log::info("UPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP");
        Log::info($url . $path);
        Log::info("UPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP");
        return $request->patch($url . $path, $body);
    }

    public function zoomDelete(string $path, array $body = [])
    {
        $url = $this->retrieveZoomUrl();
        $request = $this->zoomRequest();
        return $request->delete($url . $path, $body);
    }
}
