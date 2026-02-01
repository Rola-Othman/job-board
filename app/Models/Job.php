<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job
{
    public static function getAllJobs()
    {
        return [
            ['id' => 1, 'title' => 'Software Engineer', 'description' => 'Develop and maintain software applications.'],
            ['id' => 2, 'title' => 'Data Analyst', 'description' => 'Analyze data to help make business decisions.'],
            ['id' => 3, 'title' => 'Project Manager', 'description' => 'Oversee project planning and execution.'],
        ];
    }
}
