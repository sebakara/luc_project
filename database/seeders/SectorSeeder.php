<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('sectors')->delete();
        
        \DB::table('sectors')->insert(array (
            0 => 
            array (
                'id' => 10101,
                'name' => 'GITEGA',
                'district' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 10102,
                'name' => 'KANYINYA',
                'district' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10103,
                'name' => 'KIGALI',
                'district' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10104,
                'name' => 'KIMISAGARA',
                'district' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 10105,
                'name' => 'MAGERAGERE',
                'district' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 10106,
                'name' => 'MUHIMA',
                'district' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10107,
                'name' => 'NYAKABANDA',
                'district' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10108,
                'name' => 'NYAMIRAMBO',
                'district' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10109,
                'name' => 'NYARUGENGE',
                'district' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10110,
                'name' => 'RWEZAMENYO',
                'district' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 10201,
                'name' => 'BUMBOGO',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 10202,
                'name' => 'GATSATA',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 10203,
                'name' => 'GIKOMERO',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 10204,
                'name' => 'GISOZI',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 10205,
                'name' => 'JABANA',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 10206,
                'name' => 'JALI',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 10207,
                'name' => 'KACYIRU',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 10208,
                'name' => 'KIMIHURURA',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 10209,
                'name' => 'KIMIRONKO',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 10210,
                'name' => 'KINYINYA',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 10211,
                'name' => 'NDERA',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 10212,
                'name' => 'NDUBA',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 10213,
                'name' => 'REMERA',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 10214,
                'name' => 'RUSORORO',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 10215,
                'name' => 'RUTUNGA',
                'district' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 10301,
                'name' => 'GAHANGA',
                'district' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 10302,
                'name' => 'GATENGA',
                'district' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 10303,
                'name' => 'GIKONDO',
                'district' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 10304,
                'name' => 'KAGARAMA',
                'district' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 10305,
                'name' => 'KANOMBE',
                'district' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 10306,
                'name' => 'KICUKIRO',
                'district' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 10307,
                'name' => 'KIGARAMA',
                'district' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 10308,
                'name' => 'MASAKA',
                'district' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 10309,
                'name' => 'NIBOYE',
                'district' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 10310,
                'name' => 'NYARUGUNGA',
                'district' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 20101,
                'name' => 'BUSASAMANA',
                'district' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 20102,
                'name' => 'BUSORO',
                'district' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 20103,
                'name' => 'CYABAKAMYI',
                'district' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 20104,
                'name' => 'KIBILIZI',
                'district' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 20105,
                'name' => 'KIGOMA',
                'district' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 20106,
                'name' => 'MUKINGO',
                'district' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 20107,
                'name' => 'MUYIRA',
                'district' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 20108,
                'name' => 'NTYAZO',
                'district' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 20109,
                'name' => 'NYAGISOZI',
                'district' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 20110,
                'name' => 'RWABICUMA',
                'district' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 20201,
                'name' => 'GIKONKO',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 20202,
                'name' => 'GISHUBI',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 20203,
                'name' => 'KANSI',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 20204,
                'name' => 'KIBIRIZI',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 20205,
                'name' => 'KIGEMBE',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 20206,
                'name' => 'MAMBA',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 20207,
                'name' => 'MUGANZA',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 20208,
                'name' => 'MUGOMBWA',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 20209,
                'name' => 'MUKINDO',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 20210,
                'name' => 'MUSHA',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 20211,
                'name' => 'NDORA',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 20212,
                'name' => 'NYANZA',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 20213,
                'name' => 'SAVE',
                'district' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 20301,
                'name' => 'BUSANZE',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 20302,
                'name' => 'CYAHINDA',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 20303,
                'name' => 'KIBEHO',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 20304,
                'name' => 'KIVU',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 20305,
                'name' => 'MATA',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 20306,
                'name' => 'MUGANZA',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 20307,
                'name' => 'MUNINI',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 20308,
                'name' => 'NGERA',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 20309,
                'name' => 'NGOMA',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 20310,
                'name' => 'NYABIMATA',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 20311,
                'name' => 'NYAGISOZI',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 20312,
                'name' => 'RUHERU',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 20313,
                'name' => 'RURAMBA',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 20314,
                'name' => 'RUSENGE',
                'district' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 20401,
                'name' => 'GISHAMVU',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 20402,
                'name' => 'HUYE',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 20403,
                'name' => 'KARAMA',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 20404,
                'name' => 'KIGOMA',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 20405,
                'name' => 'KINAZI',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 20406,
                'name' => 'MARABA',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 20407,
                'name' => 'MBAZI',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 20408,
                'name' => 'MUKURA',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 20409,
                'name' => 'NGOMA',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 20410,
                'name' => 'RUHASHYA',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 20411,
                'name' => 'RUSATIRA',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 20412,
                'name' => 'RWANIRO',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 20413,
                'name' => 'SIMBI',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 20414,
                'name' => 'TUMBA',
                'district' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 20501,
                'name' => 'BURUHUKIRO',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 20502,
                'name' => 'CYANIKA',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 20503,
                'name' => 'GASAKA',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 20504,
                'name' => 'GATARE',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 20505,
                'name' => 'KADUHA',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 20506,
                'name' => 'KAMEGERI',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 20507,
                'name' => 'KIBIRIZI',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 20508,
                'name' => 'KIBUMBWE',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 20509,
                'name' => 'KITABI',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 20510,
                'name' => 'MBAZI',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 20511,
                'name' => 'MUGANO',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 20512,
                'name' => 'MUSANGE',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 20513,
                'name' => 'MUSEBEYA',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 20514,
                'name' => 'MUSHUBI',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 20515,
                'name' => 'NKOMANE',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 20516,
                'name' => 'TARE',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 20517,
                'name' => 'UWINKINGI',
                'district' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 20601,
                'name' => 'BWERAMANA',
                'district' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 20602,
                'name' => 'BYIMANA',
                'district' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 20603,
                'name' => 'KABAGALI',
                'district' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 20604,
                'name' => 'KINAZI',
                'district' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 20605,
                'name' => 'KINIHIRA',
                'district' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 20606,
                'name' => 'MBUYE',
                'district' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 20607,
                'name' => 'MWENDO',
                'district' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 20608,
                'name' => 'NTONGWE',
                'district' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 20609,
                'name' => 'RUHANGO',
                'district' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 20701,
                'name' => 'CYEZA',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 20702,
                'name' => 'KABACUZI',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 20703,
                'name' => 'KIBANGU',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 20704,
                'name' => 'KIYUMBA',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 20705,
                'name' => 'MUHANGA',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 20706,
                'name' => 'MUSHISHIRO',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 20707,
                'name' => 'NYABINONI',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 20708,
                'name' => 'NYAMABUYE',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 20709,
                'name' => 'NYARUSANGE',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 20710,
                'name' => 'RONGI',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 20711,
                'name' => 'RUGENDABARI',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 20712,
                'name' => 'SHYOGWE',
                'district' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 20801,
                'name' => 'GACURABWENGE',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 20802,
                'name' => 'KARAMA',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 20803,
                'name' => 'KAYENZI',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 20804,
                'name' => 'KAYUMBU',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 20805,
                'name' => 'MUGINA',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 20806,
                'name' => 'MUSAMBIRA',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 20807,
                'name' => 'NGAMBA',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 20808,
                'name' => 'NYAMIYAGA',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 20809,
                'name' => 'NYARUBAKA',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 20810,
                'name' => 'RUGARIKA',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 20811,
                'name' => 'RUKOMA',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 20812,
                'name' => 'RUNDA',
                'district' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 30101,
                'name' => 'BWISHYURA',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 30102,
                'name' => 'GASHARI',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 30103,
                'name' => 'GISHYITA',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 30104,
                'name' => 'GITESI',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 30105,
                'name' => 'MUBUGA',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 30106,
                'name' => 'MURAMBI',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 30107,
                'name' => 'MURUNDI',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 30108,
                'name' => 'MUTUNTU',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 30109,
                'name' => 'RUBENGERA',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 30110,
                'name' => 'RUGABANO',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 30111,
                'name' => 'RUGANDA',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 30112,
                'name' => 'RWANKUBA',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 30113,
                'name' => 'TWUMBA',
                'district' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 30201,
                'name' => 'BONEZA',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 30202,
                'name' => 'GIHANGO',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 30203,
                'name' => 'KIGEYO',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 30204,
                'name' => 'KIVUMU',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 30205,
                'name' => 'MANIHIRA',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 30206,
                'name' => 'MUKURA',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 30207,
                'name' => 'MURUNDA',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 30208,
                'name' => 'MUSASA',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 30209,
                'name' => 'MUSHONYI',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 30210,
                'name' => 'MUSHUBATI',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 30211,
                'name' => 'NYABIRASI',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 30212,
                'name' => 'RUHANGO',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 30213,
                'name' => 'RUSEBEYA',
                'district' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 30301,
                'name' => 'BUGESHI',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 30302,
                'name' => 'BUSASAMANA',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 30303,
                'name' => 'CYANZARWE',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 30304,
                'name' => 'GISENYI',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 30305,
                'name' => 'KANAMA',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 30306,
                'name' => 'KANZENZE',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 30307,
                'name' => 'MUDENDE',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 30308,
                'name' => 'NYAKIRIBA',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 30309,
                'name' => 'NYAMYUMBA',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 30310,
                'name' => 'NYUNDO',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 30311,
                'name' => 'RUBAVU',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 30312,
                'name' => 'RUGERERO',
                'district' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 30401,
                'name' => 'BIGOGWE',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 30402,
                'name' => 'JENDA',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 30403,
                'name' => 'JOMBA',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 30404,
                'name' => 'KABATWA',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 30405,
                'name' => 'KARAGO',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 30406,
                'name' => 'KINTOBO',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 30407,
                'name' => 'MUKAMIRA',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 30408,
                'name' => 'MURINGA',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 30409,
                'name' => 'RAMBURA',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 30410,
                'name' => 'RUGERA',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 30411,
                'name' => 'RUREMBO',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 30412,
                'name' => 'SHYIRA',
                'district' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 30501,
                'name' => 'BWIRA',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 30502,
                'name' => 'GATUMBA',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 30503,
                'name' => 'HINDIRO',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 30504,
                'name' => 'KABAYA',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 30505,
                'name' => 'KAGEYO',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 30506,
                'name' => 'KAVUMU',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 30507,
                'name' => 'MATYAZO',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 30508,
                'name' => 'MUHANDA',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 30509,
                'name' => 'MUHORORO',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 30510,
                'name' => 'NDARO',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 30511,
                'name' => 'NGORORERO',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 30512,
                'name' => 'NYANGE',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 30513,
                'name' => 'SOVU',
                'district' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 30601,
                'name' => 'BUGARAMA',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 30602,
                'name' => 'BUTARE',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 30603,
                'name' => 'BWEYEYE',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 30604,
                'name' => 'GASHONGA',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 30605,
                'name' => 'GIHEKE',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 30606,
                'name' => 'GIHUNDWE',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 30607,
                'name' => 'GIKUNDAMVURA',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 30608,
                'name' => 'GITAMBI',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 30609,
                'name' => 'KAMEMBE',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 30610,
                'name' => 'MUGANZA',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 30611,
                'name' => 'MURURU',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 30612,
                'name' => 'NKANKA',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 30613,
                'name' => 'NKOMBO',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 30614,
                'name' => 'NKUNGU',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 30615,
                'name' => 'NYAKABUYE',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 30616,
                'name' => 'NYAKARENZO',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 30617,
                'name' => 'NZAHAHA',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 30618,
                'name' => 'RWIMBOGO',
                'district' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 30701,
                'name' => 'BUSHEKERI',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 30702,
                'name' => 'BUSHENGE',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 30703,
                'name' => 'CYATO',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 30704,
                'name' => 'GIHOMBO',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 30705,
                'name' => 'KAGANO',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 30706,
                'name' => 'KANJONGO',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 30707,
                'name' => 'KARAMBI',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 30708,
                'name' => 'KARENGERA',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 30709,
                'name' => 'KIRIMBI',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 30710,
                'name' => 'MACUBA',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 30711,
                'name' => 'MAHEMBE',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 30712,
                'name' => 'NYABITEKERI',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 30713,
                'name' => 'RANGIRO',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 30714,
                'name' => 'RUHARAMBUGA',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 30715,
                'name' => 'SHANGI',
                'district' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 40101,
                'name' => 'BASE',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 40102,
                'name' => 'BUREGA',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 40103,
                'name' => 'BUSHOKI',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 40104,
                'name' => 'BUYOGA',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 40105,
                'name' => 'CYINZUZI',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 40106,
                'name' => 'CYUNGO',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 40107,
                'name' => 'KINIHIRA',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 40108,
                'name' => 'KISARO',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 40109,
                'name' => 'MASORO',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 40110,
                'name' => 'MBOGO',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 40111,
                'name' => 'MURAMBI',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 40112,
                'name' => 'NGOMA',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 40113,
                'name' => 'NTARABANA',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 40114,
                'name' => 'RUKOZO',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 40115,
                'name' => 'RUSIGA',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 40116,
                'name' => 'SHYORONGI',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 40117,
                'name' => 'TUMBA',
                'district' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 40201,
                'name' => 'BUSENGO',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 40202,
                'name' => 'COKO',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 40203,
                'name' => 'CYABINGO',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 40204,
                'name' => 'GAKENKE',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 40205,
                'name' => 'GASHENYI',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 40206,
                'name' => 'JANJA',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 40207,
                'name' => 'KAMUBUGA',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 40208,
                'name' => 'KARAMBO',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 40209,
                'name' => 'KIVURUGA',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 40210,
                'name' => 'MATABA',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 40211,
                'name' => 'MINAZI',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 40212,
                'name' => 'MUGUNGA',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 40213,
                'name' => 'MUHONDO',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 40214,
                'name' => 'MUYONGWE',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 40215,
                'name' => 'MUZO',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 40216,
                'name' => 'NEMBA',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 40217,
                'name' => 'RULI',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 40218,
                'name' => 'RUSASA',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 40219,
                'name' => 'RUSHASHI',
                'district' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 40301,
                'name' => 'BUSOGO',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 40302,
                'name' => 'CYUVE',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 40303,
                'name' => 'GACACA',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 40304,
                'name' => 'GASHAKI',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 40305,
                'name' => 'GATARAGA',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 40306,
                'name' => 'KIMONYI',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 40307,
                'name' => 'KINIGI',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 40308,
                'name' => 'MUHOZA',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 40309,
                'name' => 'MUKO',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 40310,
                'name' => 'MUSANZE',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 40311,
                'name' => 'NKOTSI',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 40312,
                'name' => 'NYANGE',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 40313,
                'name' => 'REMERA',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 40314,
                'name' => 'RWAZA',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 40315,
                'name' => 'SHINGIRO',
                'district' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 40401,
                'name' => 'BUNGWE',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 40402,
                'name' => 'BUTARO',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 40403,
                'name' => 'CYANIKA',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 40404,
                'name' => 'CYERU',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 40405,
                'name' => 'GAHUNGA',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 40406,
                'name' => 'GATEBE',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 40407,
                'name' => 'GITOVU',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 40408,
                'name' => 'KAGOGO',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 40409,
                'name' => 'KINONI',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 40410,
                'name' => 'KINYABABA',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 40411,
                'name' => 'KIVUYE',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 40412,
                'name' => 'NEMBA',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 40413,
                'name' => 'RUGARAMA',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 40414,
                'name' => 'RUGENGABARI',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 40415,
                'name' => 'RUHUNDE',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 40416,
                'name' => 'RUSARABUYE',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 40417,
                'name' => 'RWERERE',
                'district' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 40501,
                'name' => 'BUKURE',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 40502,
                'name' => 'BWISIGE',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 40503,
                'name' => 'BYUMBA',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 40504,
                'name' => 'CYUMBA',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 40505,
                'name' => 'GITI',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 40506,
                'name' => 'KAGEYO',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 40507,
                'name' => 'KANIGA',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 40508,
                'name' => 'MANYAGIRO',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 40509,
                'name' => 'MIYOVE',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 40510,
                'name' => 'MUKARANGE',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 40511,
                'name' => 'MUKO',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 40512,
                'name' => 'MUTETE',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 40513,
                'name' => 'NYAMIYAGA',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 40514,
                'name' => 'NYANKENKE',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 40515,
                'name' => 'RUBAYA',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 40516,
                'name' => 'RUKOMO',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 40517,
                'name' => 'RUSHAKI',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 40518,
                'name' => 'RUTARE',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 40519,
                'name' => 'RUVUNE',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 40520,
                'name' => 'RWAMIKO',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 40521,
                'name' => 'SHANGASHA',
                'district' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 50101,
                'name' => 'FUMBWE',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 50102,
                'name' => 'GAHENGERI',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 50103,
                'name' => 'GISHALI',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 50104,
                'name' => 'KARENGE',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 50105,
                'name' => 'KIGABIRO',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 50106,
                'name' => 'MUHAZI',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 50107,
                'name' => 'MUNYAGA',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 50108,
                'name' => 'MUNYIGINYA',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 50109,
                'name' => 'MUSHA',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 50110,
                'name' => 'MUYUMBU',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 50111,
                'name' => 'MWULIRE',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 50112,
                'name' => 'NYAKALIRO',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 50113,
                'name' => 'NZIGE',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 50114,
                'name' => 'RUBONA',
                'district' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 50201,
                'name' => 'GATUNDA',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 50202,
                'name' => 'KARAMA',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 50203,
                'name' => 'KARANGAZI',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 50204,
                'name' => 'KATABAGEMU',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 50205,
                'name' => 'KIYOMBE',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 50206,
                'name' => 'MATIMBA',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 50207,
                'name' => 'MIMURI',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 50208,
                'name' => 'MUKAMA',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 50209,
                'name' => 'MUSHERI',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 50210,
                'name' => 'NYAGATARE',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 50211,
                'name' => 'RUKOMO',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 50212,
                'name' => 'RWEMPASHA',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 50213,
                'name' => 'RWIMIYAGA',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 50214,
                'name' => 'TABAGWE',
                'district' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 50301,
                'name' => 'GASANGE',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 50302,
                'name' => 'GATSIBO',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 50303,
                'name' => 'GITOKI',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 50304,
                'name' => 'KABARORE',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 50305,
                'name' => 'KAGEYO',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 50306,
                'name' => 'KIRAMURUZI',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 50307,
                'name' => 'KIZIGURO',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 50308,
                'name' => 'MUHURA',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 50309,
                'name' => 'MURAMBI',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 50310,
                'name' => 'NGARAMA',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 50311,
                'name' => 'NYAGIHANGA',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 50312,
                'name' => 'REMERA',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 50313,
                'name' => 'RUGARAMA',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 50314,
                'name' => 'RWIMBOGO',
                'district' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 50401,
                'name' => 'GAHINI',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 50402,
                'name' => 'KABARE',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 50403,
                'name' => 'KABARONDO',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 50404,
                'name' => 'MUKARANGE',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 50405,
                'name' => 'MURAMA',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 50406,
                'name' => 'MURUNDI',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 50407,
                'name' => 'MWIRI',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 50408,
                'name' => 'NDEGO',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 50409,
                'name' => 'NYAMIRAMA',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 50410,
                'name' => 'RUKARA',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 50411,
                'name' => 'RURAMIRA',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 50412,
                'name' => 'RWINKWAVU',
                'district' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 50501,
                'name' => 'GAHARA',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 50502,
                'name' => 'GATORE',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 50503,
                'name' => 'KIGARAMA',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 50504,
                'name' => 'KIGINA',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 50505,
                'name' => 'KIREHE',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 50506,
                'name' => 'MAHAMA',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 50507,
                'name' => 'MPANGA',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 50508,
                'name' => 'MUSAZA',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 50509,
                'name' => 'MUSHIKIRI',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 50510,
                'name' => 'NASHO',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 50511,
                'name' => 'NYAMUGARI',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 50512,
                'name' => 'NYARUBUYE',
                'district' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 50601,
                'name' => 'GASHANDA',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 50602,
                'name' => 'JARAMA',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 50603,
                'name' => 'KAREMBO',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 50604,
                'name' => 'KAZO',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 50605,
                'name' => 'KIBUNGO',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 50606,
                'name' => 'MUGESERA',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 50607,
                'name' => 'MURAMA',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 50608,
                'name' => 'MUTENDERI',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 50609,
                'name' => 'REMERA',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 50610,
                'name' => 'RUKIRA',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 50611,
                'name' => 'RUKUMBERI',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 50612,
                'name' => 'RURENGE',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 50613,
                'name' => 'SAKE',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 50614,
                'name' => 'ZAZA',
                'district' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 50701,
                'name' => 'GASHORA',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 50702,
                'name' => 'JURU',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 50703,
                'name' => 'KAMABUYE',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 50704,
                'name' => 'MAREBA',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 50705,
                'name' => 'MAYANGE',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 50706,
                'name' => 'MUSENYI',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 50707,
                'name' => 'MWOGO',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 50708,
                'name' => 'NGERUKA',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 50709,
                'name' => 'NTARAMA',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 50710,
                'name' => 'NYAMATA',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 50711,
                'name' => 'NYARUGENGE',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 50712,
                'name' => 'RIRIMA',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 50713,
                'name' => 'RUHUHA',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 50714,
                'name' => 'RWERU',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 50715,
                'name' => 'SHYARA',
                'district' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
