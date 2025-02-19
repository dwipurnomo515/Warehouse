<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Tymon\JWTAuth\Facades\JWTAuth;

// class AuthController extends Controller
// {
//     public function login(Request $request)
//     {
//         $credentials = $request->validate([
//             'email' => 'required|email',
//             'password' => 'required',
//         ]);

//         if (Auth::attempt($credentials)) {
//             $user = Auth::user();
//             $token = JWTAuth::fromUser($user);

//             return response()->json([
//                 'message' => 'Login successful',
//                 'token' => $token,
//                 'user' => $user
//             ]);
//         }

//         return response()->json(['message' => 'Invalid credentials'], 401);
//     }

//     public function logout(Request $request)
//     {
//         JWTAuth::invalidate(JWTAuth::getToken());

//         return response()->json(['message' => 'Successfully logged out']);
//     }
// }

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockTransaction;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($token = Auth::attempt($credentials)) {
            session(['token' => $token]);
            return redirect()->route('dashboard')->withCookie(cookie('token', $token, 60));
        }
        return back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Auth::logout();;
        session()->forget('token');
        return redirect()->route('login');
    }
    public function dashboard()
    { {
            $totalProducts = Product::count();

            $incomingStock = StockTransaction::where('type', 'in')->sum('quantity');

            $outgoingStock = StockTransaction::where('type', 'out')->sum('quantity');

            return view('dashboard', compact('totalProducts', 'incomingStock', 'outgoingStock'));
        }
    }
}
