<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        // for ($i=0; $i < 10; $i++) { 
        //     $project = new Project();
        //     $project->title = fake()->word();
        //     $project->description = fake()->sentence();
        //     $project->start_date = fake()->dateTimeBetween('-1 week', '+1 week');
        //     $project->end_date = fake()->dateTimeBetween('-1 week', '+1 week');
        //     $project->category = fake()->word();
        //     $project->languages = fake()->word();
        //     $project->project_status = fake()->word();
        //     $project->save();
        // }

        // vuole 3 parametri , uno la stringa , da dove partire e l'ultimo quanto andare avanti, taglia la stringa ce metti dentro, fake mette dentro una stringa a caso, puo essere piu lunga della specificata, la tagiamo e non da errore, sicurezza.
        
        
        for($i=0; $i < 10; $i++){
            $title = substr(fake()->sentence(),0,255);//richiamiamo un dato del faker , inseriremo la lista di tutti i campi delle colonne che vogliamo validare , diamo un dato fake e di impostarci il titolo da 0 a 255 chars, Helper function, mette a disposizione funzioni per le stringhe 
            Project::create([
                'title'=>  $title,
                'description' => fake()->text(),
                'start_date' => fake()->date(),
                'end_date' => fake()->date(),
                'category' => fake()->word(),
                'languages' => fake()->word(),
                'project_status' => fake()->word(),
            ]);
        }
    }
}
