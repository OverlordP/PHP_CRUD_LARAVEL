<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use App\Http\Requests\AccesoRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AutenticarController extends Controller
{

    public function registro (RegistroRequest $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =bcrypt($request->password);

        $user->save();

        return response()->json([
            'res'=> true,
            'msg'=>'Usuario registrado'
        ],200);
    }

    public function acceso (AccesoRequest $request){
        $user = User::where('email', $request->email)->first();
 
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'msg' => ['Credenciales no validas'],
            ]);
        }
     
        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json([
            'res'=> true,
            'token'=> $token
        ],200);
    }

    
    public function cerrartoken (Request $request){
        

        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'res'=> true,
            'msg'=>'Token Eliminado'
        ],200);
    }

    //
}
