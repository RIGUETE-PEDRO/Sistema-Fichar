<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $agora = Carbon::now(); 

       DB::table('roles')->insert([
            ['nome' => 'recepcionista','created_at' => $agora,'updated_at' => $agora],
            ['nome' => 'admin','created_at' => $agora,'updated_at' => $agora],
            ['nome' => 'medico','created_at' => $agora,'updated_at' => $agora],
            ['nome' => 'paciente','created_at' => $agora,'updated_at' => $agora],

        ]);
    }
}
