<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\ImageManagerStatic as Image;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //var_dump($data['email'] . "." . $data['photo']->getClientOriginalExtension());
        //exit();
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'regex:/^[\w]+@(uniara)+\.(edu)+\.((br)+)?$/i'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ra' => ['required', 'string', 'min:8', 'max:8', 'unique:users'],
            'course_id' => ['required', 'numeric', 'exists:courses,id']
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if( array_key_exists('photo', $data) ){
            $photo = $data['photo'];
            
            $filename = $data['email'] . "." . $data['photo']->getClientOriginalExtension();
            $path  = public_path('images/users/'.$filename);
            //$data['minhafoto'] = $data['email'] . "." . $data['photo']->getClientOriginalExtension();
            Image::make($photo->getRealPath())->crop(300, 300)->save($path);
            //$image ->save(url('/').'/images/users/' . $data['minhafoto']);
            
            return User::create([
                'name' => $data['name'],
                'ra' => $data['ra'],
                'course_id' => $data['course_id'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'photo' => $filename
            ]);
        }

        return User::create([
            'name' => $data['name'],
            'ra' => $data['ra'],
            'course_id' => $data['course_id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }
}
