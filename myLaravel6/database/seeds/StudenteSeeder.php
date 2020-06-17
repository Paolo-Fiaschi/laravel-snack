<?php
use App\Studente;
use Illuminate\Database\Seeder;

class StudenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Studente::class, 100) -> create();
    }
}
