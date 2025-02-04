<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Configuracione;
use App\Models\Consultorio;
use App\Models\Doctor;
use App\Models\Horario;
use App\Models\Secretaria;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);-

        $this->call([RoleSeeder::class,]);
       
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678')
        ])->assignRole('admin');




        User::create([
            'name' => 'Secretaria',
            'email' => 'secretaria@admin.com',
            'password' => Hash::make('12345678')
        ])->assignRole('secretaria');

        Secretaria::create([
            'nombres' => 'Secretaria',
            'apellidos' => '1',
            'ci' => '12463600',
            'celular' => '4269897',
            'fecha_nacimiento' => '10/10/2000',
            'direccion' => 'Av Blanco galindo',
            'user_id' => '2'
        ]);


      

        User::create([
            'name' => 'Doctor1',
            'email' => 'doctor1@admin.com',
            'password' => Hash::make('12345678')
        ])->assignRole('doctor');

        Doctor::create([
            'nombres' => 'Doctor1',
            'apellidos' => 'HUANCA',
            'telefono' => '4565656',
            'licencia_medica' => '000112323',
            'especialidad' => 'PEDIATRIA',
            'user_id' => '3'
        ]);

        User::create([
            'name' => 'Doctor2',
            'email' => 'doctor2@admin.com',
            'password' => Hash::make('12345678')
        ])->assignRole('doctor');

        Doctor::create([
            'nombres' => 'Doctor2',
            'apellidos' => 'PERES',
            'telefono' => '4565456',
            'licencia_medica' => '0001122323',
            'especialidad' => 'ODONTOLOGIA',
            'user_id' => '4'
        ]);

        User::create([
            'name' => 'Doctor3',
            'email' => 'doctor3@admin.com',
            'password' => Hash::make('12345678')
        ])->assignRole('doctor');

        Doctor::create([
            'nombres' => 'Doctor3',
            'apellidos' => 'CHECO',
            'telefono' => '4565666',
            'licencia_medica' => '0001133323',
            'especialidad' => 'FORENSE',
            'user_id' => '5'
        ]);

        Consultorio::create([

            'nombre' => 'PEDIATRIA',
            'ubicacion' => 'HPTL. CANADA',
            'capacidad' => '10',
            'telefono' => '',
            'especialidad' => 'PEDiATRIA',
            'estado' => 'ACTIVO',

        ]);

        Consultorio::create([

            'nombre' => 'ODONTOLOGIA',
            'ubicacion' => 'HPTL. CUSCHIERI',
            'capacidad' => '20',
            'telefono' => '4454545',
            'especialidad' => 'ODONTOLOGIA',
            'estado' => 'ACTIVO',

        ]);


        Consultorio::create([

            'nombre' => 'FORENSE',
            'ubicacion' => 'HPTL. TUMANCHA',
            'capacidad' => '110',
            'telefono' => '001010s',
            'especialidad' => 'FORENSE',
            'estado' => 'ACTIVO',

        ]);


        User::create([
            'name' => 'Paciente1',
            'email' => 'paciente1@admin.com',
            'password' => Hash::make('12345678')
        ])->assignRole('paciente');

        User::create([
            'name' => 'Usuario1',
            'email' => 'usuario1@admin.com',
            'password' => Hash::make('12345678')
        ])->assignRole('usuario');



        $this->call([PacienteSeeder::class,]);


        ///creacion de horarios
        Horario::create([
            'dia'=>'LUNES',
            'hora_inicio'=>'08:00:00',
            'hora_fin'=>'14:00:00',
            'doctor_id'=>'1',
            'consultorio_id'=>'1'
        ]);

        Configuracione::create([
            'nombre' => 'HOSPITAL ANDRES CUSCHIERI',
            'direccion' => 'AV. blanco galindo km9 LADO NORTE N 456',
            'telefono' => '4269897-123124',
            'correo' => 'andres@admin.com',
            'logo' => 'logos/Vow3lCequT7J13VrAwuCOzHRZ290JDNSWIRrOMS5.png'
        ]);
    }
}
