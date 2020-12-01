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
        $image = Captcha::getImage($request->get('captcha-id'));

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
        return Captcha::getView($request->get('captcha-id'));
    }
}
