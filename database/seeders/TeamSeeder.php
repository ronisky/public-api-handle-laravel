<?php

namespace Database\Seeders;

use App\Models\Rider;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedLTS();
        $this->seedQST();
        $this->seedAFC();
    }

    public function seedLTS()
    {
        $this->command->info("Started seeding Jhon");
        $this->command->info("--------------------------");
        $team = Team::firstOrCreate([
            'name' => 'Jhon',
            'team_type' => 'WT',
            'abbreviation' => 'LTS',
            'bike_brand' => 'Nike',
            'shirt_image' => 'https://miro.medium.com/max/1400/1*cJUVJJSWPj9WFIJlvf7dKg.jpeg'
        ]);

        $this->command->info("Team seeder");

        $riders = [
            [
                'team_id' => $team->id,
                'name' => 'Jhon',
                'surname' => 'Wick',
                'nation' => 'IDN',
                'weight' => '75',
                'height' => '100',
                'mugshot_image' => 'https://miro.medium.com/max/1400/1*cJUVJJSWPj9WFIJlvf7dKg.jpeg'
            ],
            [
                'team_id' => $team->id,
                'name' => 'Jhon',
                'surname' => 'Doe',
                'nation' => 'IDN',
                'weight' => '85',
                'height' => '110',
                'mugshot_image' => 'https://miro.medium.com/max/1400/1*cJUVJJSWPj9WFIJlvf7dKg.jpeg'
            ],
            [
                'team_id' => $team->id,
                'name' => 'Jhon',
                'surname' => 'Jane',
                'nation' => 'IDN',
                'weight' => '65',
                'height' => '85',
                'mugshot_image' => 'https://miro.medium.com/max/1400/1*cJUVJJSWPj9WFIJlvf7dKg.jpeg'
            ],
        ];
        foreach ($riders as $rider) {
            Rider::firstOrCreate($rider);
            $this->command->info("Seeded rider: " . $rider['name'] . " " . $rider['surname']);
        }
        $this->command->info("-----------");
        $this->command->info("Done seeding Jhon");
    }
    public function seedQST()
    {
        $this->command->info("Started seeding Jane");
        $this->command->info("--------------------------");
        $team = Team::firstOrCreate([
            'name' => 'Jane',
            'team_type' => 'QT',
            'abbreviation' => 'QST',
            'bike_brand' => 'Adiddas',
            'shirt_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/800px-Adidas_Logo.svg.png?20220310161517'
        ]);

        $this->command->info("Team seeder");

        $riders = [
            [
                'team_id' => $team->id,
                'name' => 'Jane',
                'surname' => 'Wick',
                'nation' => 'IDN',
                'weight' => '75',
                'height' => '100',
                'mugshot_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/800px-Adidas_Logo.svg.png?20220310161517'
            ],
            [
                'team_id' => $team->id,
                'name' => 'Jane',
                'surname' => 'Doe',
                'nation' => 'IDN',
                'weight' => '85',
                'height' => '110',
                'mugshot_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/800px-Adidas_Logo.svg.png?20220310161517'
            ],
            [
                'team_id' => $team->id,
                'name' => 'Jane',
                'surname' => 'Jane',
                'nation' => 'IDN',
                'weight' => '65',
                'height' => '85',
                'mugshot_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/800px-Adidas_Logo.svg.png?20220310161517'
            ],
        ];
        foreach ($riders as $rider) {
            Rider::firstOrCreate($rider);
            $this->command->info("Seeded rider: " . $rider['name'] . " " . $rider['surname']);
        }
        $this->command->info("-----------");
        $this->command->info("Done seeding Jane");
    }
    public function seedAFC()
    {
        $this->command->info("Started seeding Jin");
        $this->command->info("--------------------------");
        $team = Team::firstOrCreate([
            'name' => 'Jin',
            'team_type' => 'ST',
            'abbreviation' => 'AFC',
            'bike_brand' => 'Adiddas',
            'shirt_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/800px-Adidas_Logo.svg.png?20220310161517'
        ]);

        $this->command->info("Team seeder");

        $riders = [
            [
                'team_id' => $team->id,
                'name' => 'Jin',
                'surname' => 'Wick',
                'nation' => 'IDN',
                'weight' => '75',
                'height' => '100',
                'mugshot_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/800px-Adidas_Logo.svg.png?20220310161517'
            ],
            [
                'team_id' => $team->id,
                'name' => 'Jin',
                'surname' => 'Doe',
                'nation' => 'IDN',
                'weight' => '85',
                'height' => '110',
                'mugshot_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/800px-Adidas_Logo.svg.png?20220310161517'
            ],
            [
                'team_id' => $team->id,
                'name' => 'Jin',
                'surname' => 'Jane',
                'nation' => 'IDN',
                'weight' => '65',
                'height' => '85',
                'mugshot_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/800px-Adidas_Logo.svg.png?20220310161517'
            ],
        ];
        foreach ($riders as $rider) {
            Rider::firstOrCreate($rider);
            $this->command->info("Seeded rider: " . $rider['name'] . " " . $rider['surname']);
        }
        $this->command->info("-----------");
        $this->command->info("Done seeding Jin");
    }
}
