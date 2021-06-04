<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = array(
            ["news_title" => "TAZWEED TECHNICAL EVENT",
                "news_description" => "At an evening seminar it co-hosted with Samsung. Tazweed addressed design challenges, specifically in relation to diversity and equipment sizing in high rise buildings in Sharjah, UAE – a market purportedly dominated by DX systems. But one that the company said would do well to look into VRF technology",
                "news_date" => "2016-01-01",
                "news_image" => "assets/images/DSC_0243.JPG"
            ],
            ["news_title" => "SAVE MONEY & TTIME",
                "news_description" => "Around the globe, we are confronted with the day by day difficulties of COVID-19 pandemic.As an organization situated in Dubai, we at Tazweed",
                "news_date" => "2016-01-01",
                "news_image" => "assets/images/DSC_0243.JPG"
            ], ["news_title" => "TAZWEED TECHNICAL EVENT",
                "news_description" => "At an evening seminar it co-hosted with Samsung. Tazweed addressed design challenges, specifically in relation to diversity and equipment sizing in high rise buildings in Sharjah, UAE – a market purportedly dominated by DX systems. But one that the company said would do well to look into VRF technology",
                "news_date" => "2016-01-01",
                "news_image" => "assets/images/DSC_0243.JPG"
            ]
        );
        foreach ($news as $new) {
            News::create($new);
        }
    }
}
