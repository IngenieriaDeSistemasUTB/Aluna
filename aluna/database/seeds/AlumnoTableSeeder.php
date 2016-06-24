   <?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      DB::table('alumno')->insert([
      'nombres' => "Javier Eduardo",
      'apellidos' => "Castellar Bustillo",
      'tipo_documento' => "C.C",
      'numero_documento' => "465484949",
      'fecha_nacimiento' => "01/07/1989",
      'departamento' => "Bolivar",
      'municipio' =>  "Cartagena",
      'edad' => "26",
      'direccion_residencia' => "avenida siempre viva 123",
      'nombre_persona' => "Laura",
      'apellido_persona' => "Castellar",
      'parentesco' => "hermana",
      'nombre_padre' => "Javier",
      'apellido_padre' => "Castellar",
      'tipo_documentop' => "C.C",
      'numero_documentop' => "1128060687",
      'direccion_padre' => "avenida siempre viva 123",
      'tel_padre' => "6642707",
      'dir_trabajop' => "no tiene",
      'tel_trabajop' => "6642707",
      'nombre_madre' => "Zully",
      'apellido_madre' => "Bustillo",
      'tipo_documentom' => "C.C",
      'numero_documentom' => "1128060647",
      'direccion_madre' => "avenida siempre viva 123",
      'tel_madre' => "6642707",
      'dir_trabajom' => "no tiene",
      'tel_trabajom' => "6642707",
      'nombre_acudiente' => "Javier",
      'apellido_acudiente' => "Castelar Bustillo",
      'tipo_documentopa' => "C.C",
      'numero_documentoa' => "1128060627",
      'direccion_acudiente' => "avenida siempre viva 123",
      'tel_acudiente' => "6642707",
      'dir_trabajoa' => "no tiene",
      'tel_trabajoa' => "6642707",
      'nombre_emergencia' => "Cecilia",
      'apellido_emergencia' => "Castellar Bustillo",

      'direccion_emergencia' => "avenida siempreviva 123",
      'tel_emergencia' => "3173796062",
      'tel_trabajoe' => "3173796062",
      'fecha_matricula' => "22/04/2016",
      'convenio' => "ICBF",
      'modulo' => "Azul",
      'programa' => "Delfin",



      //'role' => 'admin',

      'created_at' => $faker->dateTime(),
      'updated_at' => $faker->dateTime(),
    ]);

    $faker = Faker::create();
    DB::table('alumno')->insert([
    'nombres' => "Cecilua Alejandra",
    'apellidos' => "Castellar Bustillo",
    'tipo_documento' => "C.C",
    'numero_documento' => "13234567899",
    'fecha_nacimiento' => "01/07/1989",
    'departamento' => "Bolivar",
    'municipio' =>  "Cartagena",
    'edad' => "26",
    'direccion_residencia' => "avenida siempre viva 123",
    'nombre_persona' => "Laura",
    'apellido_persona' => "Castellar",
    'parentesco' => "hermana",
    'nombre_padre' => "Javier",
    'apellido_padre' => "Castellar",
    'tipo_documentop' => "C.C",
    'numero_documentop' => "1128060687",
    'direccion_padre' => "avenida siempre viva 123",
    'tel_padre' => "6642707",
    'dir_trabajop' => "no tiene",
    'tel_trabajop' => "6642707",
    'nombre_madre' => "Zully",
    'apellido_madre' => "Bustillo",
    'tipo_documentom' => "C.C",
    'numero_documentom' => "1128060647",
    'direccion_madre' => "avenida siempre viva 123",
    'tel_madre' => "6642707",
    'dir_trabajom' => "no tiene",
    'tel_trabajom' => "6642707",
    'nombre_acudiente' => "Javier",
    'apellido_acudiente' => "Castelar Bustillo",
    'tipo_documentopa' => "C.C",
    'numero_documentoa' => "1128060627",
    'direccion_acudiente' => "avenida siempre viva 123",
    'tel_acudiente' => "6642707",
    'dir_trabajoa' => "no tiene",
    'tel_trabajoa' => "6642707",
    'nombre_emergencia' => "Javier Eduardo",
    'apellido_emergencia' => "Castellar Bustillo",
    'direccion_emergencia' => "avenida siempreviva 123",
    'tel_emergencia' => "3173796062",
    'tel_trabajoe' => "3173796062",
    'fecha_matricula' => "22/04/2016",
    'convenio' => "ICBF",
    'modulo' => "Azul",
    'programa' => "Delfin",



    //'role' => 'admin',

    'created_at' => $faker->dateTime(),
    'updated_at' => $faker->dateTime(),
  ]);

    /*  for($i = 0; $i <=50; $i ++ ) {
        DB::table('alumno')->insert([
        'nombres' => $faker->firstname,
        'apellidos' => $faker->lastname,
        'tipo_documento' => "T.I",
        'numero_documento' => $faker->ean13,
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'departamento' => "Bolivar",
        'municipio' => "Cartagena",
        'edad' => "12",
        'direccion_residencia' => $faker->address,
        'nombre_persona' => $faker->firstname,
        'apellido_persona' => $faker->lastname,
        'parentesco' => "hermana",
        'nombre_padre' => $faker->firstname,
        'apellido_padre' => $faker->lastname,
        'tipo_documentop' => "C.C",
        'numero_documentop' => $faker->ean13,
        'direccion_padre' => $faker->address,
        'tel_padre' => $faker->phoneNumber,
        'dir_trabajop' => $faker->address,
        'tel_trabajop' => $faker->phoneNumber,
        'nombre_madre' => $faker->firstname,
        'apellido_madre' => $faker->lastname,
        'tipo_documentom' => $faker->"C.C",
        'numero_documentom' => $faker->ean13,
        'direccion_madre' => $faker->address,
        'tel_madre' => $faker->phoneNumber,
        'dir_trabajom' => $faker->address,
        'tel_trabajom' => $faker->phoneNumber,
        'nombre_acudiente' => $faker->firstname,
        'apellido_acudiente' => $faker->lastname,
        'tipo_documentopa' => $faker->"C.C",
        'numero_documentoa' => $faker->ean13,
        'direccion_acudiente' => $faker->address,
        'tel_acudiente' => $faker->phone,
        'dir_trabajoa' => $faker->address,
        'tel_trabajoa' => $faker->phoneNumber,
        'nombre_emergencia' => $faker->firstname,
        'apellido_emergencia' => $faker->lastname,
        'direccion_emergencia' => $faker->address,
        'tel_emergencia' => $faker->phoneNumber,
        'tel_trabajoe' => $faker->phoneNumber,
        'fecha_matricula' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'convenio' => "ICBF",
        'modulo' => "Azul",
        'programa' => "Delfin",
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
      ]);*/
      }


    }
