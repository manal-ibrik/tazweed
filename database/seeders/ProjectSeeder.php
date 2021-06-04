<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $projects = array(
            ["projects_title" => "Hill side villas jumeirah golf estate.",
                "projects_location" => "Dubai, UAE.",
                "projects_date" => "2016-01-01",
                "projects_size" => "580 Ton",
                "projects_client" => "Chisol Investments",
                "projects_consultant" => "Global Engeneering Consultants",
                "projects_application" => "Lower front Print,Mobile Access Solution",
                "projects_image" => "assets/images/tzw_024-405x300 (1).jpg"
            ],
            ["projects_title" => "Hill side villas jumeirah golf estate.",
                "projects_location" => "Dubai, UAE.",
                "projects_date" => "2016-01-01",
                "projects_size" => "580 Ton",
                "projects_client" => "Chisol Investments",
                "projects_consultant" => "Global Engeneering Consultants",
                "projects_application" => "Lower front Print,Mobile Access Solution",
                "projects_image" => "assets/images/tzw_024-405x300 (1).jpg"
            ]
        );
        foreach ($projects as $project) {
            Project::create($project);
        }
    }

}
