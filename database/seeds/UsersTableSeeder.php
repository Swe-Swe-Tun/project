<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filepath= public_path()."/file/user.json";
        $data=file_get_contents($filepath);
        $json = json_decode($data);

        foreach ($json as $user){
            DB::table('users')->insert([
                "name" =>$user->name,
                "email"=>$user->email,
                "password"=>$user->password,
                "remember_token"=>$user->remember_token,
                "created_at"=>$user->created_at,
                "updated_at"=>Carbon::now()
            ]);
        }
    }
}
