<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;



class AuthController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth:api', except: ['login', 'register']),
        ];
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',

            // Campos opcionales presentes en la migración
            'rfc' => 'nullable|string|size:13|unique:users,rfc',
            'curp' => 'nullable|string|size:18|unique:users,curp',
            'direction' => 'nullable|string|max:250',
            'position' => 'nullable|string|max:35',
            'sex' => 'nullable|in:masculino,femenino',
            'lvl' => 'nullable|string|max:10',
            'tipo' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        $user = \App\Models\User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'rfc' => $validatedData['rfc'] ?? null,
            'curp' => $validatedData['curp'] ?? null,
            'direction' => $validatedData['direction'] ?? null,
            'position' => $validatedData['position'] ?? null,
            'sex' => $validatedData['sex'] ?? null,
            'lvl' => $validatedData['lvl'] ?? null,
            'tipo' => $validatedData['tipo'] ?? 3,
            'status' => $validatedData['status'] ?? true,
        ]);

    $token = $this->guard()->login($user);

        return $this->respondWithToken($token);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

    if (! $token = $this->guard()->attempt($credentials)) {
            return response()->json(['error' => 'No autorizado'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
    return response()->json($this->guard()->user());
    }

    public function logout()
    {
    $this->guard()->logout();

        return response()->json(['mensaje' => 'Cierre de sesión exitoso']);
    }

    public function refresh()
    {
    return $this->respondWithToken($this->guard()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 60
        ]);
    }

    /**
     * Guard JWT tipado para ayudar al IDE/analizadores estáticos.
     */
    protected function guard(): \Tymon\JWTAuth\JWTGuard
    {
        /** @var \Tymon\JWTAuth\JWTGuard $guard */
        $guard = auth('api');
        return $guard;
    }
}
