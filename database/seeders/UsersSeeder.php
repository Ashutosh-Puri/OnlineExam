<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create( [
            'id'=>1,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'role'=>1,
            'email_verified_at'=>'2023-03-19 10:09:51',
            'password'=>'$2y$10$h0X38gabm03mGQWA8uenwOVXGiY6mLVum2vPuTN/riss5UfzQ1/gG',
            'remember_token'=>NULL,
            'created_at'=>'2023-03-19 04:39:13',
            'updated_at'=>'2023-03-19 04:39:13'
            ] );
            
            
                        
            User::create( [
            'id'=>2,
            'name'=>'Ashutosh',
            'email'=>'ashutoshpuri2000@gmail.com',
            'role'=>0,
            'email_verified_at'=>'2023-03-21 04:49:10',
            'password'=>'$2y$10$PBa1uq9pPJjSJiJcP2DFJ.iujoPqLsT3t4yjsjP2l.GMSZ2n4q4cq',
            'remember_token'=>NULL,
            'created_at'=>'2023-03-20 02:35:56',
            'updated_at'=>'2023-03-20 02:35:56'
            ] );
    }
}
