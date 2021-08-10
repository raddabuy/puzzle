<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class AppBaseController extends Controller
{
    /**
     * @param array $data
     * @param int $code
     * @return mixed
     */
    public function responseOk($data = [], $code = \Symfony\Component\HttpFoundation\Response::HTTP_OK)
    {
        return Response::json([
            'success' => true,
            'data' => $data
        ], $code);
    }

    /**
     * @param null $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendWithErrorCode($message = null, $code = 404)
    {
        return Response::json([
            'error' => [
                'code' => intval($code),
                'message' => $message
            ],
            'success' => false
        ], $code);
    }
}
