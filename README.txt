php artisan make:filament-user
             Name: admin
    Email address: a@a.a
    Password:1234567890

    now to make both "Vendors & Users" Panel in this php artisan make:filament-page ApproveVendors --type=custom Dashboard, I want it to show all listed Vendors & Users, can make a new Users and Approving Users to become a Vendors.

    $user = User::where('email',$request->e,ail)->first();

   if (!) ($request->password, $user)

---------------------------------------
[Q] - [Error 500] undefined method App\Models\User::createToken()
I able to fix it using this:
#in User.php
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Laravel\Sanctum\HasApiTokens; 

class User extends Authenticatable 

{ use HasFactory, Notifiable, HasApiTokens; // <--- Adding "HasApiTokens" to here.
...
}