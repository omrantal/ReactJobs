<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(6)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        \App\Models\Job::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Job::create([
        //     'title' => 'React.js Senior Developer',
        //     'tags' => 'react, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo
        //         reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat
        //         consequatur! Expedita ab consectur tenetur delensiti'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
