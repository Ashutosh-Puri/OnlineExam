<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create( [
            'id'=>1,
            'name'=>'Advance Operating System',
            'code'=>'CSUT121',
            'status'=>0,
            'created_at'=>'2023-03-19 21:12:35',
            'updated_at'=>'2023-03-19 21:12:35'
            ] );
            
            
                        
            Subject::create( [
            'id'=>2,
            'name'=>'Mobile Technologies',
            'code'=>'CSUT122',
            'status'=>0,
            'created_at'=>'2023-03-19 21:14:50',
            'updated_at'=>'2023-03-19 21:14:50'
            ] );
            
            
                        
            Subject::create( [
            'id'=>3,
            'name'=>'Software Project Management',
            'code'=>'CSUT123',
            'status'=>0,
            'created_at'=>'2023-03-19 21:18:10',
            'updated_at'=>'2023-03-19 21:18:10'
            ] );
            
            
                        
            Subject::create( [
            'id'=>4,
            'name'=>'Project  Related Assignment',
            'code'=>'CSDP124A',
            'status'=>0,
            'created_at'=>'2023-03-19 21:24:26',
            'updated_at'=>'2023-03-19 21:24:26'
            ] );
    }
}
