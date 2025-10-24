<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\task;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Call UserSeeder to insert all users
        // $this->call(UserSeeder::class);

        Task::factory(1523)->create();

//         User::factory()->create([
//             'name' => 's/u',
//             'email' => 'su@su.su',
//             'rfc' => 'susu00000000 ',
//             'direction' => 'su',
//             'position' => 'su',
//             'sex' => 'femenino',
//             'password' => Hash::make('su0000000000'),
//         ]);
//
//
//         User::factory()->create([
//             'name' => 'PATRICIA DEL CARMEN HERNANDEZ BAAS',
//             'email' => 'MRDE@yandex.com',
//             'rfc' => 'MRDE240820',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('MRDE058793405467'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ANA LILIA HERRERA CHI',
//             'email' => 'EARL@live.com',
//             'rfc' => 'EARL014281',
//             'direction' => 'DIRECCION DE GESTION SOCIAL',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('EARL960938687032'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ROXANA YOMARA SOLIS GARRIDO',
//             'email' => 'RASR@gmail.com',
//             'rfc' => 'RASR265949',
//             'direction' => 'DIRECCION DE GESTION SOCIAL',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('RASR329305457587'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LETICIA DE MONSERRAT LARA GUERRERO',
//             'email' => 'RRER@pm.me',
//             'rfc' => 'RRER601811',
//             'direction' => 'DIRECCION DE GESTION SOCIAL',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('RRER424924311677'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE ISRAEL LUNA ARJONA',
//             'email' => 'AJSO@gmail.com',
//             'rfc' => 'AJSO493426',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('AJSO434617443251'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GABRIELA DE JESUS MUT ORTIZ',
//             'email' => 'IIUI@icloud.com',
//             'rfc' => 'IIUI705349',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('IIUI298385475827'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'OSCAR JOSUE MUÑOZ SIMA',
//             'email' => 'OOOC@hotmail.com',
//             'rfc' => 'OOOC529792',
//             'direction' => 'ÓRGANO INTERNO DE CONTROL',
//             'position' => 'TITULAR ORGANO INTERNO DE CONTROL',
//             'sex' => 'masculino',
//             'password' => Hash::make('OOOC902880741704'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALEJANDRO MOO CERVERA',
//             'email' => 'AEJR@me.com',
//             'rfc' => 'AEJR611170',
//             'direction' => 'SECRETARÍA GENERAL',
//             'position' => 'SECRETARIO GENERAL',
//             'sex' => 'masculino',
//             'password' => Hash::make('AEJR313760365235'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GUADALUPE ESTHER CARDENAS GUERRERO',
//             'email' => 'RSEE@outlook.com',
//             'rfc' => 'RSEE393822',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'AUDITOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('RSEE536925869964'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARITZA DEL CARMEN ARCOS CRUZ',
//             'email' => 'CAOD@yahoo.com',
//             'rfc' => 'CAOD737688',
//             'direction' => 'DIRECCION DE CONTROL DE PROCESOS LEGISLATIVOS',
//             'position' => 'DIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('CAOD740782808811'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MIGUEL GONZALEZ FLORES',
//             'email' => 'RGLZ@yahoo.com',
//             'rfc' => 'RGLZ945489',
//             'direction' => 'DIRECCION DE FINANZAS',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('RGLZ936012922517'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'IRLANDA JAQUELINE FIERROS BOJORQUEZ',
//             'email' => 'AJIJ@protonmail.com',
//             'rfc' => 'AJIJ251243',
//             'direction' => 'JUNTA DE GOBIERNO Y ADMINISTRACION',
//             'position' => 'DIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('AJIJ347006585343'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'HUGO DANIEL MORA CASANOVA',
//             'email' => 'AOOA@yahoo.com',
//             'rfc' => 'AOOA877942',
//             'direction' => 'DIRECCION DE GESTION SOCIAL',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('AOOA615432203552'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LUISA DEL ROSARIO GUERRERO GARCIA',
//             'email' => 'SEIE@protonmail.com',
//             'rfc' => 'SEIE192406',
//             'direction' => 'UNIDAD DE TRASNPARENCIA',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('SEIE674685918378'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE DEL CARMEN MARTINEZ NUÑEZ',
//             'email' => 'EUDM@inbox.com',
//             'rfc' => 'EUDM863745',
//             'direction' => 'ÓRGANO INTERNO DE CONTROL',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('EUDM509438645036'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'EDUARDO MARTIN SOBERANIS MONTALVO',
//             'email' => 'ITRA@gmail.com',
//             'rfc' => 'ITRA587941',
//             'direction' => 'DIRECCION DE ARCHIVO LEGISLATIVO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('ITRA441081929386'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE FERNANDO PUC YE',
//             'email' => 'PYDP@mail.com',
//             'rfc' => 'PYDP306234',
//             'direction' => 'SECRETARÍA GENERAL',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('PYDP931720969942'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FRYNE DEL SOCORRO CRUZ YERBES',
//             'email' => 'OERO@hotmail.com',
//             'rfc' => 'OERO849673',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('OERO568848542904'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RUBEN EDUARDO JIMENEZ JUAREZ',
//             'email' => 'RRUZ@protonmail.com',
//             'rfc' => 'RRUZ857654',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('RRUZ499921918060'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SONIA ALEJANDRA CASTILLO PERALTA',
//             'email' => 'ANAL@fastmail.com',
//             'rfc' => 'ANAL665047',
//             'direction' => 'DIRECCION DE APOYO PARLAMENTARIO',
//             'position' => 'DIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('ANAL368444039137'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALFONSO ELIAS LOPEZ CASTRO',
//             'email' => 'NCSN@outlook.com',
//             'rfc' => 'NCSN367840',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('NCSN698178189957'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RAMON ELIAS CEBALLOS CAMBRANIS',
//             'email' => 'LANA@yahoo.com',
//             'rfc' => 'LANA262052',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('LANA441760246010'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'NESTOR MAURICIO BARRERA ESQUIVEL',
//             'email' => 'RSMS@zoho.com',
//             'rfc' => 'RSMS836126',
//             'direction' => 'DIRECCION DE COMUNICACIÓN SOCIAL',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('RSMS585550335559'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA DE LOS ANGELES ZAMORA MAYA',
//             'email' => 'OLOL@live.com',
//             'rfc' => 'OLOL907491',
//             'direction' => 'DIRECCION DE GESTION SOCIAL',
//             'position' => 'DIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('OLOL286020835020'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MINERVA GUADALUPE REJON MENA',
//             'email' => 'MUAA@hushmail.com',
//             'rfc' => 'MUAA245447',
//             'direction' => 'ÓRGANO INTERNO DE CONTROL',
//             'position' => 'DIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('MUAA776192809733'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JORGE ALBERTO LOPEZ ORTEGA',
//             'email' => 'JEAE@mail.com',
//             'rfc' => 'JEAE478808',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('JEAE633064524775'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RUBEN EMILIO LEDESMA VAZQUEZ',
//             'email' => 'LMRE@pm.me',
//             'rfc' => 'LMRE373782',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('LMRE057254933259'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ADDA MARISOL RAMOS TORRES',
//             'email' => 'SARL@gmail.com',
//             'rfc' => 'SARL807138',
//             'direction' => 'DIRECCION DE CONTROL DE PROCESOS LEGISLATIVOS',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('SARL532806551173'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARTA ELIZABET PECH CAUICH',
//             'email' => 'AMCC@inbox.com',
//             'rfc' => 'AMCC218055',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('AMCC233587319930'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE MANUEL HERNANDEZ VALLE',
//             'email' => 'SDEA@hotmail.com',
//             'rfc' => 'SDEA783943',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('SDEA471299258805'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'TERESITA DE JESUS DELGADO NOVELO',
//             'email' => 'TLEA@gmx.com',
//             'rfc' => 'TLEA362890',
//             'direction' => 'SECRETARÍA TÉCNICA',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('TLEA393487587598'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'KAREN VIETMEIER CAHUICH',
//             'email' => 'EVIC@gmx.com',
//             'rfc' => 'EVIC098069',
//             'direction' => 'SECRETARÍA TÉCNICA',
//             'position' => 'DIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('EVIC632480872545'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ADRIANA GEORGINA SANDOVAL MARTINEZ',
//             'email' => 'ENIG@gmail.com',
//             'rfc' => 'ENIG739246',
//             'direction' => 'DIRECCION DE CONTROL DE PROCESOS LEGISLATIVOS',
//             'position' => 'DIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('ENIG580246110012'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GEORGINA BELEN BARRERA COLLI',
//             'email' => 'LAAB@gmail.com',
//             'rfc' => 'LAAB439569',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'DIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('LAAB948189907255'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALFREDO REYES JIMENEZ',
//             'email' => 'FEMR@zoho.com',
//             'rfc' => 'FEMR637393',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('FEMR364033210384'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MANUEL CANDELARIO CAMAL PAAT',
//             'email' => 'UACD@fastmail.com',
//             'rfc' => 'UACD125171',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('UACD692746110970'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FRANCISCO JULIAN TAMAY CHI',
//             'email' => 'IJOJ@inbox.com',
//             'rfc' => 'IJOJ536503',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('IJOJ439035074783'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JULIO ALBERTO ESTRELLA CHUC',
//             'email' => 'JUUR@rocketmail.com',
//             'rfc' => 'JUUR489467',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('JUUR969101180350'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RICARDO FRANCISCO RODRIGUEZ CERVERA',
//             'email' => 'OENR@rocketmail.com',
//             'rfc' => 'OENR708907',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('OENR266973378991'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA DE GUADALUPE CARDOZO ORTIZ',
//             'email' => 'UEPI@tutanota.com',
//             'rfc' => 'UEPI397025',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('UEPI064599510367'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CLAUDIA MARIELA CAN VAZQUEZ',
//             'email' => 'MUIA@fastmail.com',
//             'rfc' => 'MUIA105085',
//             'direction' => 'DIRECCION DE FINANZAS',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('MUIA314415676549'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JULIO CESAR MUÑOZ REYES',
//             'email' => 'AEOY@msn.com',
//             'rfc' => 'AEOY847872',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('AEOY142028500747'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LILIA MARGARITA PEREZ CAAMAL',
//             'email' => 'AERP@fastmail.com',
//             'rfc' => 'AERP449540',
//             'direction' => 'DIRECCION DE CONTROL DE PROCESOS LEGISLATIVOS',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('AERP687764001234'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE ROBERTO CAB SANCHEZ',
//             'email' => 'REAA@icloud.com',
//             'rfc' => 'REAA299170',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('REAA475619790940'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'DAVID RICARDO SANSORES CHAN',
//             'email' => 'DODH@gmail.com',
//             'rfc' => 'DODH085368',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('DODH427851673629'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JORGE ANTONIO BAZAN ZUBELDIA',
//             'email' => 'NDAE@rocketmail.com',
//             'rfc' => 'NDAE519550',
//             'direction' => 'UNIDAD DE TRASNPARENCIA',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('NDAE943187858450'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SERGIO MANUEL VEGA CARRILLO',
//             'email' => 'LSRG@zoho.com',
//             'rfc' => 'LSRG774781',
//             'direction' => 'DIRECCION DE INFORMATICA',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('LSRG510448345902'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ORLANDO JAVIER BARBOSA CASTILLO',
//             'email' => 'OECI@tutanota.com',
//             'rfc' => 'OECI128229',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('OECI453261560597'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA DEL CARMEN SOSA ULLOA',
//             'email' => 'OLOL@icloud.com',
//             'rfc' => 'OLOL149666',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'DIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('OLOL620611959028'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALVARO SANDOVAL CURMINA',
//             'email' => 'VAOO@rocketmail.com',
//             'rfc' => 'VAOO856353',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('VAOO938369533579'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GILBERTO REYES CUEVAS',
//             'email' => 'OEUA@msn.com',
//             'rfc' => 'OEUA983477',
//             'direction' => 'ÓRGANO INTERNO DE CONTROL',
//             'position' => 'DIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('OEUA549435753997'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JONHNI ABRAHAM BUZON VERA',
//             'email' => 'IABN@gmx.com',
//             'rfc' => 'IABN300548',
//             'direction' => 'DIRECCION DE ARCHIVO LEGISLATIVO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('IABN589362554131'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MANUEL FRANCISCO SOSA HUICAB',
//             'email' => 'ICAC@inbox.com',
//             'rfc' => 'ICAC745016',
//             'direction' => 'DIRECCION DE INFORMATICA',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('ICAC608008628261'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GASPAR ALEJANDRO SANCHEZ CHAN',
//             'email' => 'EDJA@live.com',
//             'rfc' => 'EDJA896158',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('EDJA831487597783'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GUILLERMO CAMBRANIS PEREZ',
//             'email' => 'LIPC@live.com',
//             'rfc' => 'LIPC560160',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('LIPC294052143090'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ERIK DANIEL URIBE DOMINGUEZ',
//             'email' => 'MIEN@me.com',
//             'rfc' => 'MIEN232053',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('MIEN559008063703'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FERNANDO JOAQUIN VIANA NUÑEZ',
//             'email' => 'AEOU@icloud.com',
//             'rfc' => 'AEOU244121',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('AEOU582264485217'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ANDRES ALBERTO CHAN COUOH',
//             'email' => 'DLOS@tutanota.com',
//             'rfc' => 'DLOS385962',
//             'direction' => 'DIRECCION DE CONTROL DE PROCESOS LEGISLATIVOS',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('DLOS880711508333'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'KERREL DICLAUDIA VILLARINO PERERA',
//             'email' => 'ONII@fastmail.com',
//             'rfc' => 'ONII781270',
//             'direction' => 'DIRECCION DE CONTROL DE PROCESOS LEGISLATIVOS',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('ONII198435972132'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RUSBY AZUL DAMIAN PLASCENCIA',
//             'email' => 'IPZL@me.com',
//             'rfc' => 'IPZL757446',
//             'direction' => 'DIRECCION DE FINANZAS',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('IPZL801326174532'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JULIA ESPERANZA RUIZ CASTELLOT',
//             'email' => 'LETT@live.com',
//             'rfc' => 'LETT559614',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('LETT347384779245'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIO ENRIQUE MORENO RAMOS',
//             'email' => 'RNNM@hushmail.com',
//             'rfc' => 'RNNM979222',
//             'direction' => 'DIRECCION DE INFORMATICA',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('RNNM726867815189'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ELIUD JOKSAN RIOS MANZANILLA',
//             'email' => 'JAJO@gmail.com',
//             'rfc' => 'JAJO076899',
//             'direction' => 'DIRECCION DE FINANZAS',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('JAJO370303060021'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE LUIS SANSORES PEREZ',
//             'email' => 'UEJS@gmail.com',
//             'rfc' => 'UEJS782046',
//             'direction' => 'SECRETARÍA TÉCNICA',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('UEJS598279588210'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIAN DEL ROSARIO MARQUEZ OCAMPO',
//             'email' => 'IROR@icloud.com',
//             'rfc' => 'IROR096858',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('IROR086563032249'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE GUADALUPE FUENTES ALDANA',
//             'email' => 'UGSA@msn.com',
//             'rfc' => 'UGSA937889',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('UGSA915324691427'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'URIEL ASAIAS NAAL CHABLE',
//             'email' => 'URAH@mail.com',
//             'rfc' => 'URAH729303',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('URAH257925707404'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'EDUARDO MARTIN VERA REYES',
//             'email' => 'ORED@hushmail.com',
//             'rfc' => 'ORED914606',
//             'direction' => 'DIRECCION DE FINANZAS',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('ORED566609558034'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LUIS FERNANDO ALAYOLA MOO',
//             'email' => 'NRFL@yahoo.com',
//             'rfc' => 'NRFL229677',
//             'direction' => 'DIRECCION DE COMUNICACIÓN SOCIAL',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('NRFL623544308019'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'NALLELY ECHEVERRIA CABALLERO',
//             'email' => 'BLRE@gmail.com',
//             'rfc' => 'BLRE602317',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('BLRE980402089886'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA GUADALUPE CORINA POZOS LANZ',
//             'email' => 'OPAU@icloud.com',
//             'rfc' => 'OPAU467174',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('OPAU537195670700'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ANA ELISA VARGAS ROSADO',
//             'email' => 'SLSS@msn.com',
//             'rfc' => 'SLSS387923',
//             'direction' => 'SECRETARÍA GENERAL',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('SLSS659138561848'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JHONI ARMANDO PULIDO YAH',
//             'email' => 'DNUD@gmail.com',
//             'rfc' => 'DNUD174569',
//             'direction' => 'DIRECCION DE CONTROL DE PROCESOS LEGISLATIVOS',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('DNUD872459878496'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CIRENIA DE LOS ANGELES CORDOVA SANTOS',
//             'email' => 'ACNR@me.com',
//             'rfc' => 'ACNR670189',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('ACNR470628603196'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'TANIA ESTEFANIA SANCHEZ CAN',
//             'email' => 'ANEA@me.com',
//             'rfc' => 'ANEA330066',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('ANEA129216050004'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIEL CORTES RAMON',
//             'email' => 'AALR@live.com',
//             'rfc' => 'AALR791899',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('AALR955890754458'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ROBERTO ABRAHAM MARTINEZ NOZ',
//             'email' => 'RARN@gmail.com',
//             'rfc' => 'RARN394819',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('RARN713830888317'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FELIPA GUADALUPE CACERES HORTA',
//             'email' => 'LSAT@zoho.com',
//             'rfc' => 'LSAT050215',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('LSAT822511663878'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'EDUARDO HUMBERTO BALAN BURGOS',
//             'email' => 'ROGD@live.com',
//             'rfc' => 'ROGD394269',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA ESPECIALIZADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('ROGD923578906473'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'PERLA LETICIA YAN QUIJANO',
//             'email' => 'NTTI@hushmail.com',
//             'rfc' => 'NTTI307569',
//             'direction' => 'DIRECCION DE CONTROL DE PROCESOS LEGISLATIVOS',
//             'position' => 'ANALISTA',
//             'sex' => 'femenino',
//             'password' => Hash::make('NTTI500042501581'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LAURA MARTINA ZAPATA ARCHIVOR',
//             'email' => 'AAAA@hotmail.com',
//             'rfc' => 'AAAA431383',
//             'direction' => 'COORDINACION DE ASESORES',
//             'position' => 'ANALISTA',
//             'sex' => 'femenino',
//             'password' => Hash::make('AAAA113337211390'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'NORMA GUADALUPE CORONEL DIAZ',
//             'email' => 'NUNR@rocketmail.com',
//             'rfc' => 'NUNR642683',
//             'direction' => 'DIRECCION DE COMUNICACIÓN SOCIAL',
//             'position' => 'ANALISTA',
//             'sex' => 'femenino',
//             'password' => Hash::make('NUNR821974964597'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARDONIO CARMONA NOLASCO',
//             'email' => 'AADD@yandex.com',
//             'rfc' => 'AADD389715',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'ANALISTA',
//             'sex' => 'masculino',
//             'password' => Hash::make('AADD278248258923'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALONSO PUC YE',
//             'email' => 'LUUA@protonmail.com',
//             'rfc' => 'LUUA177176',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'ANALISTA',
//             'sex' => 'masculino',
//             'password' => Hash::make('LUUA953625627697'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LAURA NOEMI UC NAAL',
//             'email' => 'OOAN@aol.com',
//             'rfc' => 'OOAN615290',
//             'direction' => 'DIRECCION DE FINANZAS',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('OOAN724419486978'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SONIA DE LA LUZ ALPUCHE SIERRA',
//             'email' => 'HACS@msn.com',
//             'rfc' => 'HACS463091',
//             'direction' => 'SECRETARÍA GENERAL',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('HACS721208249802'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'EMILIO RODRIGUEZ HERRERA',
//             'email' => 'EEOE@protonmail.com',
//             'rfc' => 'EEOE133078',
//             'direction' => 'DIRECCION DE ARCHIVO LEGISLATIVO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('EEOE100788268416'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'EMMANUEL JESUS TURRIZA AGUILAR',
//             'email' => 'UZSE@aol.com',
//             'rfc' => 'UZSE080787',
//             'direction' => 'ÓRGANO INTERNO DE CONTROL',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('UZSE635529425671'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GENESIS BELEN CASTILLO MAAS',
//             'email' => 'GASC@hushmail.com',
//             'rfc' => 'GASC449833',
//             'direction' => 'ÓRGANO INTERNO DE CONTROL',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('GASC028442325621'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ANDRES DE JESUS ALEJANDRE RODRIGUEZ',
//             'email' => 'GJED@protonmail.com',
//             'rfc' => 'GJED244831',
//             'direction' => 'DIRECCION DE FINANZAS',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('GJED281187282983'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'BENJAMIN PINZON QUINTANA',
//             'email' => 'ANAN@rocketmail.com',
//             'rfc' => 'ANAN098665',
//             'direction' => 'SECRETARÍA GENERAL',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('ANAN249015445776'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'BERENICE YANET XOOL VILLARREAL',
//             'email' => 'NVLE@yandex.com',
//             'rfc' => 'NVLE644032',
//             'direction' => 'DIRECCION DE FINANZAS',
//             'position' => 'ANALISTA',
//             'sex' => 'femenino',
//             'password' => Hash::make('NVLE269858632761'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALBA JAEL MOO RAMIREZ',
//             'email' => 'EAIR@inbox.com',
//             'rfc' => 'EAIR372490',
//             'direction' => 'DIRECCION DE FINANZAS',
//             'position' => 'ANALISTA',
//             'sex' => 'femenino',
//             'password' => Hash::make('EAIR632095820680'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CARLOS MOISES VAZQUEZ MENDICUTI',
//             'email' => 'OLQU@yahoo.com',
//             'rfc' => 'OLQU485938',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA',
//             'sex' => 'masculino',
//             'password' => Hash::make('OLQU393194526686'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ENRIQUE HUMBERTO LARA PARRAO',
//             'email' => 'EBHE@inbox.com',
//             'rfc' => 'EBHE150211',
//             'direction' => 'DIRECCION DE COMUNICACIÓN SOCIAL',
//             'position' => 'ANALISTA',
//             'sex' => 'masculino',
//             'password' => Hash::make('EBHE323574741736'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ROCIO VERONICA UC MASS',
//             'email' => 'AOUI@yandex.com',
//             'rfc' => 'AOUI795594',
//             'direction' => 'DIRECCION DE COMUNICACIÓN SOCIAL',
//             'position' => 'ANALISTA',
//             'sex' => 'femenino',
//             'password' => Hash::make('AOUI772738095695'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CHRISTIAN ALEXANDER BE PECH',
//             'email' => 'ERAN@rocketmail.com',
//             'rfc' => 'ERAN161947',
//             'direction' => 'DIRECCION DE COMUNICACIÓN SOCIAL',
//             'position' => 'ANALISTA',
//             'sex' => 'masculino',
//             'password' => Hash::make('ERAN320344452864'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GUILLERMO ALBERTO ROSADO CHUC',
//             'email' => 'UMOO@fastmail.com',
//             'rfc' => 'UMOO640083',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA',
//             'sex' => 'masculino',
//             'password' => Hash::make('UMOO106687114876'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ENRIQUE ALONZO TAMAY TUYUB',
//             'email' => 'RNOE@mail.com',
//             'rfc' => 'RNOE098023',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('RNOE309352874715'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RICARDO FRANYUTTI ORTIZ CUEVAS',
//             'email' => 'AEAF@inbox.com',
//             'rfc' => 'AEAF029007',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('AEAF756760268539'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LUIS RODOLFO KANTUN DZUL',
//             'email' => 'UUAD@live.com',
//             'rfc' => 'UUAD388007',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('UUAD484930215826'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CARMEN ROSA GONZALEZ CARPIZO',
//             'email' => 'MSCG@pm.me',
//             'rfc' => 'MSCG219858',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('MSCG424326094036'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'AMANDA GUADALUPE TORRES NOLASCO',
//             'email' => 'AAEA@pm.me',
//             'rfc' => 'AAEA940605',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('AAEA044513748058'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RENZZO MOISES VILLEGAS HEREDIA',
//             'email' => 'OIDH@gmail.com',
//             'rfc' => 'OIDH516990',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'masculino',
//             'password' => Hash::make('OIDH379407730602'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'NANCY ARCELIA MOO AMADOR',
//             'email' => 'EMII@hushmail.com',
//             'rfc' => 'EMII684535',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'SUBDIRECTOR',
//             'sex' => 'femenino',
//             'password' => Hash::make('EMII943325398844'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CARLOS ALBERTO BORGES CHI',
//             'email' => 'ECLO@protonmail.com',
//             'rfc' => 'ECLO477545',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA',
//             'sex' => 'masculino',
//             'password' => Hash::make('ECLO674658329914'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ERIKA ESTEFANIA UCAN CANUL',
//             'email' => 'CCNA@gmail.com',
//             'rfc' => 'CCNA197213',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA',
//             'sex' => 'femenino',
//             'password' => Hash::make('CCNA604356348493'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE EDUARDO CHAVARRIA SOLER',
//             'email' => 'DOAD@yandex.com',
//             'rfc' => 'DOAD638876',
//             'direction' => 'SECRETARÍA TÉCNICA',
//             'position' => 'ANALISTA',
//             'sex' => 'masculino',
//             'password' => Hash::make('DOAD687339628355'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LIGIA DEL JESUS SEGOVIA PRESUEL',
//             'email' => 'EEUL@gmail.com',
//             'rfc' => 'EEUL103373',
//             'direction' => 'DIRECCION DE GESTION SOCIAL',
//             'position' => 'ANALISTA',
//             'sex' => 'femenino',
//             'password' => Hash::make('EEUL148796981890'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'HENRY RENE TUZ BALAN',
//             'email' => 'NAAY@live.com',
//             'rfc' => 'NAAY568457',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'ANALISTA',
//             'sex' => 'masculino',
//             'password' => Hash::make('NAAY328924206466'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CRISTIAN GUADALUPE RODRIGUEZ LOPEZ',
//             'email' => 'IIIT@yahoo.com',
//             'rfc' => 'IIIT144806',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'ANALISTA',
//             'sex' => 'masculino',
//             'password' => Hash::make('IIIT877886640721'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MIREYA LUCELY RIVERO PEREZ',
//             'email' => 'VIEY@pm.me',
//             'rfc' => 'VIEY296698',
//             'direction' => 'UNIDAD DE TRASNPARENCIA',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'femenino',
//             'password' => Hash::make('VIEY691276417074'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GLORIA DEL ROSARIO JIMENEZ CUPUL',
//             'email' => 'UMUE@me.com',
//             'rfc' => 'UMUE228708',
//             'direction' => 'SECRETARÍA GENERAL',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('UMUE922598376601'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LAURA DEL JESUS COLLI AKE',
//             'email' => 'EEDC@mail.com',
//             'rfc' => 'EEDC603882',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('EEDC968507472971'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JAVIER DAVID ROMERO TUN',
//             'email' => 'DRRD@icloud.com',
//             'rfc' => 'DRRD444837',
//             'direction' => 'DIRECCION DE APOYO PARLAMENTARIO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('DRRD785438924490'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RAFAEL ARMANDO DZIB AVILA',
//             'email' => 'ADLI@yandex.com',
//             'rfc' => 'ADLI178931',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('ADLI873183233082'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GLADYS MARGARITA GRAMAJO PIEDRASANTA',
//             'email' => 'GMGI@msn.com',
//             'rfc' => 'GMGI245140',
//             'direction' => 'SECRETARÍA TÉCNICA',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('GMGI871169053309'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ROMAN LEON HERRERA',
//             'email' => 'EROR@zoho.com',
//             'rfc' => 'EROR819260',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('EROR718574819614'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FRANCISCO DEL CARMEN MEZA CAAMAL',
//             'email' => 'SNNZ@icloud.com',
//             'rfc' => 'SNNZ604838',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'masculino',
//             'password' => Hash::make('SNNZ409261996564'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LUCELY MERCEDES AC NAAL',
//             'email' => 'EEDC@yahoo.com',
//             'rfc' => 'EEDC194898',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'femenino',
//             'password' => Hash::make('EEDC328284131212'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RODRIGO DANIEL VILLARINO GUTIERREZ',
//             'email' => 'GIRD@tutanota.com',
//             'rfc' => 'GIRD936149',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'masculino',
//             'password' => Hash::make('GIRD170418890740'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE LUIS MONTENEGRO CU',
//             'email' => 'UJCN@tutanota.com',
//             'rfc' => 'UJCN643465',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'masculino',
//             'password' => Hash::make('UJCN497236985268'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'DAVID AGUILAR ESCAMILLA',
//             'email' => 'LAII@hushmail.com',
//             'rfc' => 'LAII656356',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'masculino',
//             'password' => Hash::make('LAII074183400482'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SILVIA VERONICA GONZALEZ MUÑOZ',
//             'email' => 'ZVCG@msn.com',
//             'rfc' => 'ZVCG211158',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'femenino',
//             'password' => Hash::make('ZVCG616113169771'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'DANIEL DZIB CANCHE',
//             'email' => 'CBBL@pm.me',
//             'rfc' => 'CBBL421836',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'masculino',
//             'password' => Hash::make('CBBL346647585502'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'HUGO DEL JESUS ALDANA FUENTES',
//             'email' => 'NEOG@hotmail.com',
//             'rfc' => 'NEOG895129',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('NEOG940027688402'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'VICTOR HUGO ZAMORANO RUIZ',
//             'email' => 'VGAH@outlook.com',
//             'rfc' => 'VGAH276574',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('VGAH123200954493'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JORGE ALBERTO XOOL VILLARREAL',
//             'email' => 'REBE@protonmail.com',
//             'rfc' => 'REBE182767',
//             'direction' => 'SECRETARÍA TÉCNICA',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('REBE674401526664'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GERARDO DANIEL MUÑOZ CHAN',
//             'email' => 'MDDD@aol.com',
//             'rfc' => 'MDDD110842',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('MDDD551035012274'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LYDIA MARGARITA CORTEZ ZUBIETA',
//             'email' => 'DTAR@hushmail.com',
//             'rfc' => 'DTAR056972',
//             'direction' => 'DIRECCION DE FINANZAS',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('DTAR796839705042'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LAURA DEL CARMEN GUERRERO GARCIA',
//             'email' => 'RAAL@hushmail.com',
//             'rfc' => 'RAAL042077',
//             'direction' => 'DIRECCION DE APOYO PARLAMENTARIO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('RAAL333225825973'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARLENE DE JESUS GRAMAJO PIEDRASANTA',
//             'email' => 'GMIS@rocketmail.com',
//             'rfc' => 'GMIS901546',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'femenino',
//             'password' => Hash::make('GMIS987455195126'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CARMEN ILIANA PEREZ PUERTO',
//             'email' => 'EZZP@gmx.com',
//             'rfc' => 'EZZP089524',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'femenino',
//             'password' => Hash::make('EZZP250772733809'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARCOS ELIAS CHE UC',
//             'email' => 'EHLR@yandex.com',
//             'rfc' => 'EHLR390154',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'masculino',
//             'password' => Hash::make('EHLR846135298631'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JULIO CESAR CHI GALA',
//             'email' => 'ECUR@aol.com',
//             'rfc' => 'ECUR784042',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE GRUPO',
//             'sex' => 'masculino',
//             'password' => Hash::make('ECUR051620281253'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FLOR DE MARIA GUADALUPE COLLI EK',
//             'email' => 'GELC@gmail.com',
//             'rfc' => 'GELC433958',
//             'direction' => 'DIRECCION DE APOYO PARLAMENTARIO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('GELC192109160152'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JESUS ALEJANDRO JIMENEZ RAMIREZ',
//             'email' => 'AISA@me.com',
//             'rfc' => 'AISA756901',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('AISA817064703197'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JORGE ALBERTO CAMBRANIS DZIB',
//             'email' => 'EBEC@me.com',
//             'rfc' => 'EBEC161332',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('EBEC763254263062'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA VERONICA RICO TINAJERO',
//             'email' => 'EIII@gmx.com',
//             'rfc' => 'EIII723676',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('EIII943314810502'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CARLOS HUMBERTO EK MORENO',
//             'email' => 'RRBE@live.com',
//             'rfc' => 'RRBE279264',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('RRBE372279576215'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'VICTOR ROMAN ORTIZ ABREU',
//             'email' => 'MIAV@zoho.com',
//             'rfc' => 'MIAV844940',
//             'direction' => 'DIRECCION DE INFORMATICA',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('MIAV169372383559'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'YOKO KIWA ZAPATA VERA',
//             'email' => 'PKWK@gmail.com',
//             'rfc' => 'PKWK830995',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('PKWK227429068759'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'PAUL ALFREDO ARCE ONTIVEROS',
//             'email' => 'OIAR@msn.com',
//             'rfc' => 'OIAR327724',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('OIAR756761271819'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ELIAS NOE BAEZA AKE',
//             'email' => 'KSSZ@tutanota.com',
//             'rfc' => 'KSSZ560355',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('KSSZ133607867389'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'HIPSI MARISOL ESTRELLA GUILLERMO',
//             'email' => 'RIHL@live.com',
//             'rfc' => 'RIHL584525',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('RIHL863647494836'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MONICA FERNANDEZ MONTUFAR',
//             'email' => 'UMAI@inbox.com',
//             'rfc' => 'UMAI065853',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('UMAI280018400272'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARICELA FLORES MOO',
//             'email' => 'AIMR@me.com',
//             'rfc' => 'AIMR044660',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('AIMR228157966845'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ABIGAIL GUTIERREZ MORALES',
//             'email' => 'EGTZ@icloud.com',
//             'rfc' => 'EGTZ502756',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('EGTZ895879238860'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'BALBINA ALEJANDRA HIDALGO ZAVALA',
//             'email' => 'AGLA@rocketmail.com',
//             'rfc' => 'AGLA082701',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('AGLA265521003418'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'DAVID ENRIQUE CABALLERO CABALLERO',
//             'email' => 'RNRA@icloud.com',
//             'rfc' => 'RNRA565387',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('RNRA961682769944'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'NYLDA MARIA JONGUITUD PEREZ',
//             'email' => 'ATDL@icloud.com',
//             'rfc' => 'ATDL413254',
//             'direction' => 'DIRECCION DE INFORMATICA',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('ATDL492465104927'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LILIANA GUADALUPE YERBES DZUL',
//             'email' => 'EAUL@mail.com',
//             'rfc' => 'EAUL994279',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('EAUL352277457137'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ELEAZAR PECH CAUICH',
//             'email' => 'HCUE@tutanota.com',
//             'rfc' => 'HCUE589129',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('HCUE920136782115'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'KARINA SANTIAGO TOLEDO',
//             'email' => 'DAIG@tutanota.com',
//             'rfc' => 'DAIG224277',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('DAIG525931832298'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CECILIA GUADALUPE CAHUN UC',
//             'email' => 'LLUU@aol.com',
//             'rfc' => 'LLUU636586',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('LLUU018457585932'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GABRIELA DEL CARMEN CHAN ORTIZ',
//             'email' => 'BTCA@aol.com',
//             'rfc' => 'BTCA347270',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('BTCA166887458987'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE ANTONIO JIMENEZ GUTIERREZ',
//             'email' => 'NEJT@live.com',
//             'rfc' => 'NEJT033152',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('NEJT676295236113'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'DALILA DEL CARMEN MATA PEREZ',
//             'email' => 'RREA@rocketmail.com',
//             'rfc' => 'RREA717692',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('RREA412705763485'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JORGE PEREZ FALCONI',
//             'email' => 'NGEC@rocketmail.com',
//             'rfc' => 'NGEC707232',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('NGEC758491510240'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ENA AMERICA GARCIA GARCIA',
//             'email' => 'AAIG@live.com',
//             'rfc' => 'AAIG980794',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('AAIG492021746518'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ISMAEL LOPEZ GARCES',
//             'email' => 'RLLZ@msn.com',
//             'rfc' => 'RLLZ768714',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('RLLZ083283964061'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MAYDA ARACELY MAS TUN',
//             'email' => 'CLCE@yandex.com',
//             'rfc' => 'CLCE630928',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('CLCE111849441046'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GASPAR DE JESUS NAH MISS',
//             'email' => 'AMHE@gmail.com',
//             'rfc' => 'AMHE588147',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('AMHE558775614451'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'AMILCAR MARIANO AKE MAY',
//             'email' => 'CMRM@live.com',
//             'rfc' => 'CMRM636664',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('CMRM046953566728'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ROSA MARIA CHAVEZ ACOSTA',
//             'email' => 'HASR@yahoo.com',
//             'rfc' => 'HASR427339',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('HASR421858492589'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JUAN ROMAN VICTORIA MARTINEZ',
//             'email' => 'NIIM@inbox.com',
//             'rfc' => 'NIIM894639',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('NIIM162835288464'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JAZMIN GUADALUPE RICO LEZAMA',
//             'email' => 'CCAI@yandex.com',
//             'rfc' => 'CCAI804330',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('CCAI424274372624'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FRANCISCO ISIDORO COYOC PEREZ',
//             'email' => 'ODEO@gmail.com',
//             'rfc' => 'ODEO148121',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('ODEO605830385303'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ROBERTO EDUARDO CARRILLO GONZALEZ',
//             'email' => 'OLRO@zoho.com',
//             'rfc' => 'OLRO104597',
//             'direction' => 'DIRECCION DE CONTROL DE PROCESOS LEGISLATIVOS',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('OLRO583788645380'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SCARLETH VAUGHT BURGOS',
//             'email' => 'HVGU@live.com',
//             'rfc' => 'HVGU875256',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('HVGU407838634691'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'DAHER ANTONIO PUCH RIVERA',
//             'email' => 'ONER@hushmail.com',
//             'rfc' => 'ONER419280',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('ONER248584848797'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GLADYS SOFIA RIVERA LOPEZ',
//             'email' => 'ELPE@msn.com',
//             'rfc' => 'ELPE618682',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('ELPE688703923701'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'VERONICA MARGARITA ROCA MENDEZ',
//             'email' => 'EONT@zoho.com',
//             'rfc' => 'EONT216386',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('EONT662426090803'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'OMAR ALBERTO TALANGO CERVANTES',
//             'email' => 'NANT@mail.com',
//             'rfc' => 'NANT494624',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('NANT135779951016'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CARLOS ENRIQUE UCAN YAM',
//             'email' => 'ASAY@zoho.com',
//             'rfc' => 'ASAY024587',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('ASAY195926111340'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FRANCISCA ZARATE LOPEZ',
//             'email' => 'ZPLE@gmx.com',
//             'rfc' => 'ZPLE003333',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('ZPLE691890040234'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'DIANA LUISA AGUILAR RUELAS',
//             'email' => 'ILNL@yahoo.com',
//             'rfc' => 'ILNL460472',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('ILNL999438614885'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA ANDREA SANDOVAL VILLA',
//             'email' => 'ANAS@pm.me',
//             'rfc' => 'ANAS471725',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('ANAS468044197135'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSUE DAVID CASTILLO ',
//             'email' => 'JSLD@me.com',
//             'rfc' => 'JSLD400894',
//             'direction' => 'DIRECCION DE SERVICIOS ADMINISTRATIVOS',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('JSLD026834652674'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GUADALUPE DEL SOCORRO SOSA HUCHIN',
//             'email' => 'IAAD@pm.me',
//             'rfc' => 'IAAD482235',
//             'direction' => 'SECRETARÍA TÉCNICA',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('IAAD653288086056'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SILVIA DEL CARMEN KUMUL MENDOZA',
//             'email' => 'RDLI@pm.me',
//             'rfc' => 'RDLI715891',
//             'direction' => 'COORDINACION DE ASESORES',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('RDLI676431714207'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JUAN DIAZ ORTEGA',
//             'email' => 'IREO@live.com',
//             'rfc' => 'IREO908317',
//             'direction' => 'COORDINACION DE ASESORES',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('IREO452092335331'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MANUELITA DEL JESUS GARCIA ROMERO',
//             'email' => 'MANA@protonmail.com',
//             'rfc' => 'MANA689945',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('MANA180645468508'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SCARLET MORALES ZAPATA',
//             'email' => 'ROTL@yahoo.com',
//             'rfc' => 'ROTL206372',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('ROTL299778251255'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'PEDRO ARMENTIA LOPEZ',
//             'email' => 'DOEP@hotmail.com',
//             'rfc' => 'DOEP801844',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('DOEP446757463420'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALDO ROMAN CONTRERAS UC',
//             'email' => 'NANA@live.com',
//             'rfc' => 'NANA115240',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('NANA853438764760'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'TANIA DOMINGUEZ FERNANDEZ',
//             'email' => 'DIEF@rocketmail.com',
//             'rfc' => 'DIEF595116',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('DIEF672951237746'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'TANIA GONZALEZ PEREZ',
//             'email' => 'NEOE@yandex.com',
//             'rfc' => 'NEOE479037',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('NEOE128612738228'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'PEDRO HERNANDEZ MACDONALD',
//             'email' => 'DDEL@zoho.com',
//             'rfc' => 'DDEL477751',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('DDEL146496418975'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'IGNACIO JOSE MUÑOZ HERNANDEZ',
//             'email' => 'SHJM@icloud.com',
//             'rfc' => 'SHJM473157',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('SHJM908583059619'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JORGE SALIM ABRAHAM QUIJANO',
//             'email' => 'ARUR@aol.com',
//             'rfc' => 'ARUR532467',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('ARUR465883124563'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'KARLA GISSEL ARROYO ALVARADO',
//             'email' => 'ARDG@hushmail.com',
//             'rfc' => 'ARDG709075',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('ARDG580280312743'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MONICA PALOMA ORTEGA BALAM',
//             'email' => 'AOOB@tutanota.com',
//             'rfc' => 'AOOB170746',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('AOOB985836996194'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA DEL MAR MARCIN MENDEZ',
//             'email' => 'NAND@hushmail.com',
//             'rfc' => 'NAND663140',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('NAND508945547868'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GABRIELA IVETTE CHAN NAVARRETE',
//             'email' => 'BHAR@pm.me',
//             'rfc' => 'BHAR168087',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('BHAR594842376364'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JONATHAN JOSEPH DIAZ CONCHA',
//             'email' => 'PJNC@gmail.com',
//             'rfc' => 'PJNC940516',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'masculino',
//             'password' => Hash::make('PJNC519063084104'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALEJANDRA DEL CARMEN JUSTINIANO BAEZ',
//             'email' => 'MEMD@me.com',
//             'rfc' => 'MEMD483446',
//             'direction' => 'AUDITORIA SUPERIOR DEL ESTADO',
//             'position' => 'JEFE DE DEPARTAMENTO',
//             'sex' => 'femenino',
//             'password' => Hash::make('MEMD044609826468'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MIGUEL ANGEL POOL ALPUCHE',
//             'email' => 'OONP@protonmail.com',
//             'rfc' => 'OONP836686',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('OONP659697357563'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'DELMA DEL CARMEN RABELO CUEVAS',
//             'email' => 'VMRU@gmx.com',
//             'rfc' => 'VMRU354910',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('VMRU275935827312'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA DEL ROSARIO CRUZ HERNANDEZ',
//             'email' => 'NERR@tutanota.com',
//             'rfc' => 'NERR832335',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('NERR531372590862'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JHOSUE JESUS RODRIGUEZ GOLIB',
//             'email' => 'SJJS@aol.com',
//             'rfc' => 'SJJS852159',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('SJJS720323747735'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ANA MARIA LOPEZ HERNANDEZ',
//             'email' => 'RIAE@live.com',
//             'rfc' => 'RIAE229520',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('RIAE488625890916'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA DEL CARMEN AVALOS TRUJILLO',
//             'email' => 'EDAT@tutanota.com',
//             'rfc' => 'EDAT671949',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'femenino',
//             'password' => Hash::make('EDAT620709085489'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ANDRES FERNANDEZ DEL VALLE LAISEQUILLA',
//             'email' => 'FEEL@fastmail.com',
//             'rfc' => 'FEEL395054',
//             'direction' => 'CONGRESO DEL ESTADO',
//             'position' => 'DIPUTADO',
//             'sex' => 'masculino',
//             'password' => Hash::make('FEEL255213618750'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FABIAN ZAYD ROQUE MARTINEZ',
//             'email' => 'BANY@aol.com',
//             'rfc' => 'BANY395020',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('BANY596930250187'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LUIS FELIPE CHAB ',
//             'email' => 'EAEL@gmx.com',
//             'rfc' => 'EAEL724457',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('EAEL197780146620'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LUISA FERNANDA PACHECO VALLADARES',
//             'email' => 'NDED@zoho.com',
//             'rfc' => 'NDED934523',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('NDED290132257789'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ESTEFANIA ABRAHAM DOMINGUEZ',
//             'email' => 'ANGM@yandex.com',
//             'rfc' => 'ANGM899876',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('ANGM519862317925'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'EMILIANO PATRON GONZALEZ',
//             'email' => 'OEOA@gmx.com',
//             'rfc' => 'OEOA090024',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('OEOA689117581612'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA CONCEPCION ARCOS JIMENEZ',
//             'email' => 'IERC@hotmail.com',
//             'rfc' => 'IERC988141',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('IERC736090934130'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SALVADOR JAUREGUI GONZALEZ',
//             'email' => 'AZUA@tutanota.com',
//             'rfc' => 'AZUA024376',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('AZUA372063243680'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JEANCARLO DE JESUS SANCHEZ BOLON',
//             'email' => 'JSEH@hushmail.com',
//             'rfc' => 'JSEH429042',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('JSEH601771175369'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CHRISTOPHER ALEXANDER GOMEZ HUCHIN',
//             'email' => 'ECET@yahoo.com',
//             'rfc' => 'ECET186346',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('ECET820395353862'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ANAMITA OCAÑA FRANCO',
//             'email' => 'CRCA@gmx.com',
//             'rfc' => 'CRCA255600',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('CRCA627300913929'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GLADYS BEATRIZ SOSA GARCIA',
//             'email' => 'ABTC@tutanota.com',
//             'rfc' => 'ABTC145233',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('ABTC365091187839'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ARLENE ROSA GUEVARA BELLO',
//             'email' => 'VBGA@inbox.com',
//             'rfc' => 'VBGA644514',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('VBGA753629330947'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RAFAEL DE LA CRUZ KU KANTUN',
//             'email' => 'LKAN@msn.com',
//             'rfc' => 'LKAN981558',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('LKAN059997830028'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'IRVING HOWARD AC CHI',
//             'email' => 'DGCG@msn.com',
//             'rfc' => 'DGCG139094',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('DGCG425684824708'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LUIS GABRIEL CANCHE CANUL',
//             'email' => 'CAAE@hushmail.com',
//             'rfc' => 'CAAE355875',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('CAAE199678613273'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALONDRA ABIGAIL CABALLERO JIMENEZ',
//             'email' => 'MEGJ@mail.com',
//             'rfc' => 'MEGJ043118',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('MEGJ766401597992'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'PEDRO HERNANDEZ ZACARIAS',
//             'email' => 'AAHE@me.com',
//             'rfc' => 'AAHE810428',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('AAHE568391208660'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FREDY DEL CARMEN VILLANUEVA JIMENEZ',
//             'email' => 'RYVV@inbox.com',
//             'rfc' => 'RYVV810861',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('RYVV098303428091'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA DEL CARMEN MERCADO RODRIGUEZ',
//             'email' => 'ANUM@tutanota.com',
//             'rfc' => 'ANUM048638',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('ANUM881115123553'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'IVETTE DEL CARMEN MOLINA QUE',
//             'email' => 'MELL@mail.com',
//             'rfc' => 'MELL647857',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('MELL510228679251'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LEON FELIPE REYES PEREZ',
//             'email' => 'LNSE@yahoo.com',
//             'rfc' => 'LNSE405119',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('LNSE347610756492'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JOSE FRANCISCO LOPEZ CORTES',
//             'email' => 'CPSC@hotmail.com',
//             'rfc' => 'CPSC812791',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('CPSC830784658810'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JESUS ALEJANDRO BAUTISTA CHAN',
//             'email' => 'IIDS@yandex.com',
//             'rfc' => 'IIDS910867',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('IIDS871528242085'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GUILLERMO RAMON DZIB QUEB',
//             'email' => 'EIOI@icloud.com',
//             'rfc' => 'EIOI570901',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('EIOI345405778468'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALBERTO DE JESUS CASTILLO MENDOZA',
//             'email' => 'CLOA@fastmail.com',
//             'rfc' => 'CLOA518358',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('CLOA927478201981'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'NATALI CONCEPCION GONZALEZ MOO',
//             'email' => 'APNN@mail.com',
//             'rfc' => 'APNN775465',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('APNN217478752751'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA DE LOURDES ROSADO BRITO',
//             'email' => 'MIIR@hushmail.com',
//             'rfc' => 'MIIR337642',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('MIIR152329603187'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FRANCISCO JESUS PECH ACEVEDO',
//             'email' => 'EJSO@msn.com',
//             'rfc' => 'EJSO785006',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('EJSO957993859760'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'GERARDO DE JESUS MEX AVILA',
//             'email' => 'VSXE@yandex.com',
//             'rfc' => 'VSXE504120',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('VSXE213925058421'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'EMILIO GABRIEL HUCHIN HERNANDEZ',
//             'email' => 'ALCG@protonmail.com',
//             'rfc' => 'ALCG786892',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('ALCG477787173702'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ORAIMA BARAJAS VILLASEÑOR',
//             'email' => 'MARE@mail.com',
//             'rfc' => 'MARE777866',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('MARE244641104212'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CARLOS ALBERTO BAUTISTA ARROYO',
//             'email' => 'SBIC@me.com',
//             'rfc' => 'SBIC708458',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('SBIC361386417400'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALONDRA DEL ROSARIO MISS BALAM',
//             'email' => 'IARS@hotmail.com',
//             'rfc' => 'IARS345686',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('IARS965445470294'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JESUS DAVID CARRION MARTIN',
//             'email' => 'AUDM@pm.me',
//             'rfc' => 'AUDM703491',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('AUDM499472063147'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'BRISEYDA XILONEN JIMENEZ CASTILLO',
//             'email' => 'CIBE@icloud.com',
//             'rfc' => 'CIBE038792',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('CIBE136901007744'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SAMANTA JOSEFINA MEDINA R DE LA GALA',
//             'email' => 'DNSA@zoho.com',
//             'rfc' => 'DNSA623702',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('DNSA468018419714'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'KARINA LIZETH AGUILAR RODRIGUEZ',
//             'email' => 'RGGA@yandex.com',
//             'rfc' => 'RGGA946310',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('RGGA677972537590'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'KARLA GUADALUPE PEREZ LLANOS',
//             'email' => 'AALR@yandex.com',
//             'rfc' => 'AALR795086',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('AALR471094902660'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'IRIS GABRIELA GARCIA MORENO',
//             'email' => 'ACAR@gmail.com',
//             'rfc' => 'ACAR397414',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('ACAR371900455715'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FATIMA GUTIERREZ PEREZ',
//             'email' => 'ERZE@live.com',
//             'rfc' => 'ERZE360821',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('ERZE248220187900'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SERGIO AGUSTIN EK CHE',
//             'email' => 'SGUS@pm.me',
//             'rfc' => 'SGUS892437',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('SGUS943093950893'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RAMON ALFONSO MENA PINZON',
//             'email' => 'OOOZ@aol.com',
//             'rfc' => 'OOOZ968382',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('OOOZ021841482683'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'HOENER DEL CARMEN COLLI CASANOVA',
//             'email' => 'DMON@pm.me',
//             'rfc' => 'DMON443464',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('DMON262031502203'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALEJANDRO DEL JESUS RAMIREZ MAY',
//             'email' => 'AAAE@rocketmail.com',
//             'rfc' => 'AAAE264179',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('AAAE567774368846'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALVARO NOE ESCAMILLA CAHUICH',
//             'email' => 'ALAI@icloud.com',
//             'rfc' => 'ALAI230458',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('ALAI641119063266'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'BALTAZAR CIMA HERNANDEZ',
//             'email' => 'CAHA@tutanota.com',
//             'rfc' => 'CAHA663104',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('CAHA644575036355'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'CLAUDIA ELIZABETH VALLADARES BAQUEDANO',
//             'email' => 'SEIL@zoho.com',
//             'rfc' => 'SEIL219705',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('SEIL324933945673'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'DANIEL ALFREDO ESCAMILLA AVALOS',
//             'email' => 'LAIL@pm.me',
//             'rfc' => 'LAIL801553',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('LAIL466118883799'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'EDGAR DAMIAN CARRION MARTIN',
//             'email' => 'RDEA@live.com',
//             'rfc' => 'RDEA057947',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('RDEA807538738485'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'FILIBERTO MIGUEL HERNANDEZ ROJAS',
//             'email' => 'IIAO@icloud.com',
//             'rfc' => 'IIAO835821',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('IIAO811482603433'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'JESUS ALBERTO HEREDIA MAGAÑA',
//             'email' => 'DRGA@live.com',
//             'rfc' => 'DRGA863759',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('DRGA864451656213'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'LLUVIA DEL JESUS CU DZIB',
//             'email' => 'AEVU@yahoo.com',
//             'rfc' => 'AEVU445534',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('AEVU569520093002'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'RIBIN CASTRO CORONADO',
//             'email' => 'BBON@tutanota.com',
//             'rfc' => 'BBON783184',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'masculino',
//             'password' => Hash::make('BBON826990257412'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ALESSANDRA GUADALUPE MARTINEZ VELA',
//             'email' => 'ZGSA@tutanota.com',
//             'rfc' => 'ZGSA472109',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('ZGSA380964025109'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'BIANCA GRACIELA CHAN CAB',
//             'email' => 'CCCI@tutanota.com',
//             'rfc' => 'CCCI876336',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('CCCI952568105916'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'SURI YARELI GUZMAN PECH',
//             'email' => 'EIEP@rocketmail.com',
//             'rfc' => 'EIEP750980',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('EIEP712161631286'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'ERIKA JATZIRI GALINDO GONZALEZ',
//             'email' => 'GIDK@msn.com',
//             'rfc' => 'GIDK036915',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('GIDK178959361761'),
//         ]);
//
//         User::factory()->create([
//             'name' => 'MARIA GUADALUPE GARCIA ZEFERINO',
//             'email' => 'GIAR@live.com',
//             'rfc' => 'GIAR450879',
//             'direction' => '',
//             'position' => 'SPPHAS',
//             'sex' => 'femenino',
//             'password' => Hash::make('GIAR717029976224'),
//         ]);


    }
}
