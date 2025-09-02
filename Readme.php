$user = User::where('email',$request->e,ail)->first();

   if (!$user ||Hash::check ($request->password, $user) )

$token = $user->createToken(name: 'auth_token')->plainTextToken;
return response()->json([
    [
        'status' => 'success',
        'message' => 'User Logged In Successfully',
        'data => [
            'user' => $user,
            'access_token' => $token,
        ]'
    ], 200
]);