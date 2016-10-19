<?php

use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Venue::truncate();
        \App\Training::truncate();
        \App\TrainingFacilitator::truncate();
        \App\TrainingParticipant::truncate();

        factory(\App\Venue::class, 10)->create();
        factory(\App\Training::class, 10)->create()->each(function ($t) {

            // need to randomly select from venues
            $venue = \App\Venue::inRandomOrder()->first();
            $t->venue_id = $venue->id;

            // need to randomly select from administrator users
            $creator = \App\User::with(['roles' => function ($query) {
                return $query->where('name', 'administrator');
            }])->limit(1)->inRandomOrder()->first();
            $t->creator_id = $creator->id;

            // need to randomly select from trainer users
            $trainer = \App\User::with(['roles' => function ($query) {
                return $query->where('name', 'trainer');
            }])->limit(1)->inRandomOrder()->first();
            $t->trainer_id = $trainer->id;

            // add facilitators
            $facilitators = \App\User::with(['roles' => function ($query) {
                return $query->where('name', 'facilitator');
            }])->limit(3)->inRandomOrder()->get();
            foreach ($facilitators as $key => $value) {
                \App\TrainingFacilitator::create([
                    'user_id' => $value->id,
                    'training_id' => $t->id,
                ]);
            }

            // add participants
            $participants = \App\User::with(['roles' => function ($query) {
                return $query->where('name', 'participant');
            }])->limit(20)->inRandomOrder()->get();
            foreach ($participants as $key => $value) {
                \App\TrainingParticipant::create([
                    'user_id' => $value->id,
                    'training_id' => $t->id,
                    'absence' => 0,
                    'status' => 0,
                ]);
            }

            $t->save();
        });
    }
}
