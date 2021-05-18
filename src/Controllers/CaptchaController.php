<?php

namespace Igoshev\Captcha\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
use Igoshev\Captcha\Facades\Captcha;

class CaptchaController extends Controller
{
    /**
     * Get image.
     *
     * @return mixed
     */
    public function image(Request $request)
    {
        $captchaId = $request->get('captcha-id');
        if(!isset($captchaId)) {
            abort(400);
        }

        $image = Captcha::getImage($captchaId);

        return response($image)->header('Expires', 'Mon, 26 Jul 1997 05:00:00 GMT')
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate')
            ->header('Cache-Control', 'post-check=0, pre-check=0', false)
            ->header('Pragma', 'no-cache')
            ->header('Content-Type', 'image/png');
    }

    /**
     * Get html <img> tag.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function imageTag(Request $request)
    {
        $captchaId = $request->get('captcha-id');
        if(!isset($captchaId)) {
            abort(400);
        }

        return Captcha::getView($captchaId);
    }
}
