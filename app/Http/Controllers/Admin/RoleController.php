<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RolesValidateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\User;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::all();
        return view('admin.allroles',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('admin.roles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolesValidateRequest $request)
    {
            //return $request->all();
            $roles = Role::create([
                "name"=>$request->get('name')
            ]);
            if($roles->save()){
                return redirect()->to('admin/roles')->with('status','Create Role Success');
            }else{
                return "fial";
            }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user =User::find($id);
        $roles =Role::all();
        $selectedRoles=$user->roles()->pluck('name')->toArray();

        return view('admin.edituser',compact('user','roles','selectedRoles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $user = User::whereId($id)->FirstOrFail();


            $user->syncRoles($request->get('role'));


            return redirect()->to('admin/'.$user->id.'/edit')->with('status','success update Roles');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
