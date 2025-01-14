<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        // Kullanıcının sadece tek token'ını silmek için
        $request->user()->currentAccessToken()->delete();

        // Tüm token’ları silmek isterseniz:
        // $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Çıkış yapıldı'
        ], 200);
    }
}
