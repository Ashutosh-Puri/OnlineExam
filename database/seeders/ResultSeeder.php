<?php

namespace Database\Seeders;

use App\Models\Result;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Result::create( [
            'id'=>1,
            'user_id'=>1,
            'exam_id'=>4,
            'marks'=>'9',
            'status'=>2,
            'created_at'=>'2023-03-20 03:20:11',
            'updated_at'=>'2023-03-20 03:20:11'
            ] );
            
            
                        
            Result::create( [
            'id'=>2,
            'user_id'=>2,
            'exam_id'=>4,
            'marks'=>'6',
            'status'=>2,
            'created_at'=>'2023-03-20 23:20:48',
            'updated_at'=>'2023-03-20 23:20:48'
            ] );
            
            
                        
            Result::create( [
            'id'=>3,
            'user_id'=>2,
            'exam_id'=>4,
            'marks'=>'1',
            'status'=>2,
            'created_at'=>'2023-03-20 23:35:00',
            'updated_at'=>'2023-03-20 23:35:00'
            ] );
            
            
    }
}
