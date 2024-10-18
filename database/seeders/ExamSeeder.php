<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exam::create( [
            'id'=>1,
            'name'=>'Unit Test 1',
            'subject_id'=>1,
            'date'=>'2023-03-20',
            'time'=>'10',
            'attempt'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 02:03:48',
            'updated_at'=>'2023-03-20 02:03:48'
            ] );
            
            
                        
            Exam::create( [
            'id'=>2,
            'name'=>'Unit Test 1',
            'subject_id'=>2,
            'date'=>'2023-03-20',
            'time'=>'10',
            'attempt'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 02:05:57',
            'updated_at'=>'2023-03-20 02:05:57'
            ] );
            
            
                        
            Exam::create( [
            'id'=>3,
            'name'=>'Unit Test 1',
            'subject_id'=>3,
            'date'=>'2023-03-22',
            'time'=>'20',
            'attempt'=>1,
            'status'=>0,
            'created_at'=>'2023-03-20 02:06:29',
            'updated_at'=>'2023-03-20 22:45:50'
            ] );
            
            
                        
            Exam::create( [
            'id'=>4,
            'name'=>'Unit Test 1',
            'subject_id'=>4,
            'date'=>'2023-03-21',
            'time'=>'25',
            'attempt'=>2,
            'status'=>0,
            'created_at'=>'2023-03-20 02:08:20',
            'updated_at'=>'2023-03-20 23:24:50'
            ] );
            
            
    }
}
