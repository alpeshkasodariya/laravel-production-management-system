<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Log;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
         if (Auth::check() && Auth::user()->user_type=='admin'){
            if (Auth::check()){
                if(Auth::user()->user_type=='admin'){
                     return view('users.index', ['users' => $model->orderBy('name', 'asc')->paginate(15)]);
                }else{
                     return view('users.index', ['users' => $model->where('user_type',Auth::user()->user_type)->orderBy('name', 'asc')->paginate(15)]);
                }
             } 
            return view('users.index', ['users' => $model->paginate(15)]);
         }else{
           return redirect('me-admin')->with('error', 'Permission denied'); 
        }
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->user_type=='admin'){
            return view('users.create');
        }else{
           return redirect('me-admin')->with('error', 'Permission denied'); 
        }
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, User $model)
    {
        $model->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

        return redirect()->route('user.index')->withStatus(__('User successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        if (Auth::check() && Auth::user()->user_type=='admin'){
            if ($user->id == 1) {
                return redirect()->route('user.index');
            }
    
            return view('users.edit', compact('user'));
        }else{
           return redirect('me-admin')->with('error', 'Permission denied'); 
        }
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User  $user)
    {
        $hasPassword = $request->get('password');
        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));
        $user->update(array('total_points' => $request->total_points));
        return redirect()->route('user.index')->withStatus(__('User successfully updated.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User  $user)
    {
         if (Auth::check() && Auth::user()->user_type=='admin'){
            if ($user->id == 1) {
                return abort(403);
            }
    
            $user->delete();
    
            return redirect()->route('user.index')->withStatus(__('User successfully deleted.'));
         }else{
           return redirect('me-admin')->with('error', 'Permission denied'); 
        }
    }
}
