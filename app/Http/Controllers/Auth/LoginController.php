<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\LoginResource;
use App\Http\Services\Auth\LoginService;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LoginController extends Controller
{
    protected LoginService $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function login(LoginRequest $request){
        try {
            $data = $this->loginService->login($request->all());
            if (is_null($data[0])){
                return response([], 400);
            }

            return new LoginResource(['user'=> $data[0], 'token' => $data[1]]);
        } catch (Exception $e) {
//            echo $e->getMessage();
            info($e->getMessage());
            abort(500);
        }
    }
}
