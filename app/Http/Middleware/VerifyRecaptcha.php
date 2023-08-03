<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyRecaptcha
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $request->input('g-recaptcha-response');

        if (!$this->isValidRecaptchaResponse($response)) {
            return response()->json(['error' => 'Invalid reCAPTCHA response'], 422);
        }

        return $next($request);
    }

    private function isValidRecaptchaResponse($response)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => config('app.recaptcha_secret_key'),
            'response' => $response,
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
            ],
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $jsonResult = json_decode($result, true);

        return isset($jsonResult['success']) && $jsonResult['success'] === true;
    }
}
