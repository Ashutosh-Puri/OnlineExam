<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ExamSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\ResultSeeder;
use Database\Seeders\SubjectSeeder;
use Database\Seeders\QuestionSeeder;
use Database\Seeders\AssignExamSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            SubjectSeeder::class,
            ExamSeeder::class,
            QuestionSeeder::class,
            AssignExamSeeder::class,
            ResultSeeder::class,
        ]);
    }
}
