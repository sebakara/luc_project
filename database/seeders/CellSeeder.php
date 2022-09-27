<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cells')->delete();
        
        \DB::table('cells')->insert(array (
            0 => 
            array (
                'id' => 1010101,
                'name' => 'AKABAHIZI',
                'sector' => 10101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1010102,
                'name' => 'AKABEZA',
                'sector' => 10101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1010103,
                'name' => 'GACYAMO',
                'sector' => 10101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1010104,
                'name' => 'KIGARAMA',
                'sector' => 10101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1010105,
                'name' => 'KINYANGE',
                'sector' => 10101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1010106,
                'name' => 'KORA',
                'sector' => 10101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1010201,
                'name' => 'NYAMWERU',
                'sector' => 10102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1010202,
                'name' => 'NZOVE',
                'sector' => 10102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1010203,
                'name' => 'TABA',
                'sector' => 10102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010301,
                'name' => 'KIGALI',
                'sector' => 10103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1010302,
                'name' => 'MWENDO',
                'sector' => 10103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1010303,
                'name' => 'NYABUGOGO',
                'sector' => 10103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1010304,
                'name' => 'RURIBA',
                'sector' => 10103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1010305,
                'name' => 'RWESERO',
                'sector' => 10103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1010401,
                'name' => 'KAMUHOZA',
                'sector' => 10104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1010402,
                'name' => 'KATABARO',
                'sector' => 10104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1010403,
                'name' => 'KIMISAGARA',
                'sector' => 10104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1010501,
                'name' => 'KANKUBA',
                'sector' => 10105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1010502,
                'name' => 'KAVUMU',
                'sector' => 10105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1010503,
                'name' => 'MATABA',
                'sector' => 10105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1010504,
                'name' => 'NTUNGAMO',
                'sector' => 10105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1010505,
                'name' => 'NYARUFUNZO',
                'sector' => 10105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1010506,
                'name' => 'NYARURENZI',
                'sector' => 10105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1010507,
                'name' => 'RUNZENZE',
                'sector' => 10105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1010601,
                'name' => 'AMAHORO',
                'sector' => 10106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1010602,
                'name' => 'KABASENGEREZI',
                'sector' => 10106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1010603,
                'name' => 'KABEZA',
                'sector' => 10106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1010604,
                'name' => 'NYABUGOGO',
                'sector' => 10106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1010605,
                'name' => 'RUGENGE',
                'sector' => 10106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1010606,
                'name' => 'TETERO',
                'sector' => 10106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1010607,
                'name' => 'UBUMWE',
                'sector' => 10106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1010701,
                'name' => 'MUNANIRA I',
                'sector' => 10107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1010702,
                'name' => 'MUNANIRA II',
                'sector' => 10107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1010703,
                'name' => 'NYAKABANDA I',
                'sector' => 10107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1010704,
                'name' => 'NYAKABANDA II',
                'sector' => 10107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1010801,
                'name' => 'CYIVUGIZA',
                'sector' => 10108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1010802,
                'name' => 'GASHARU',
                'sector' => 10108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1010803,
                'name' => 'MUMENA',
                'sector' => 10108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1010804,
                'name' => 'RUGARAMA',
                'sector' => 10108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1010901,
                'name' => 'AGATARE',
                'sector' => 10109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1010902,
                'name' => 'BIRYOGO',
                'sector' => 10109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1010903,
                'name' => 'KIYOVU',
                'sector' => 10109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1010904,
                'name' => 'RWAMPARA',
                'sector' => 10109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1011001,
                'name' => 'KABUGURU I',
                'sector' => 10110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1011002,
                'name' => 'KABUGURU II',
                'sector' => 10110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1011003,
                'name' => 'RWEZAMENYO I',
                'sector' => 10110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1011004,
                'name' => 'RWEZAMENYO II',
                'sector' => 10110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1020101,
                'name' => 'KINYAGA',
                'sector' => 10201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1020102,
                'name' => 'MUSAVE',
                'sector' => 10201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1020103,
                'name' => 'MVUZO',
                'sector' => 10201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1020104,
                'name' => 'NGARA',
                'sector' => 10201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1020105,
                'name' => 'NKUZUZU',
                'sector' => 10201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1020106,
                'name' => 'NYABIKENKE',
                'sector' => 10201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1020107,
                'name' => 'NYAGASOZI',
                'sector' => 10201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1020201,
                'name' => 'KARURUMA',
                'sector' => 10202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1020202,
                'name' => 'NYAMABUYE',
                'sector' => 10202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1020203,
                'name' => 'NYAMUGARI',
                'sector' => 10202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1020301,
                'name' => 'GASAGARA',
                'sector' => 10203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1020302,
                'name' => 'GICACA',
                'sector' => 10203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1020303,
                'name' => 'KIBARA',
                'sector' => 10203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1020304,
                'name' => 'MUNINI',
                'sector' => 10203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1020305,
                'name' => 'MURAMBI',
                'sector' => 10203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1020401,
                'name' => 'MUSEZERO',
                'sector' => 10204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1020402,
                'name' => 'RUHANGO',
                'sector' => 10204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1020501,
                'name' => 'AKAMATAMU',
                'sector' => 10205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1020502,
                'name' => 'BWERAMVURA',
                'sector' => 10205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1020503,
                'name' => 'KABUYE',
                'sector' => 10205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1020504,
                'name' => 'KIDASHYA',
                'sector' => 10205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1020505,
                'name' => 'NGIRYI',
                'sector' => 10205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1020601,
                'name' => 'AGATEKO',
                'sector' => 10206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1020602,
                'name' => 'BUHIZA',
                'sector' => 10206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1020603,
                'name' => 'MUKO',
                'sector' => 10206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1020604,
                'name' => 'NKUSI',
                'sector' => 10206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1020605,
                'name' => 'NYABULIBA',
                'sector' => 10206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1020606,
                'name' => 'NYAKABUNGO',
                'sector' => 10206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1020607,
                'name' => 'NYAMITANGA',
                'sector' => 10206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1020701,
                'name' => 'KAMATAMU',
                'sector' => 10207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1020702,
                'name' => 'KAMUTWA',
                'sector' => 10207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1020703,
                'name' => 'KIBAZA',
                'sector' => 10207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1020801,
                'name' => 'KAMUKINA',
                'sector' => 10208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1020802,
                'name' => 'KIMIHURURA',
                'sector' => 10208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1020803,
                'name' => 'RUGANDO',
                'sector' => 10208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1020901,
                'name' => 'BIBARE',
                'sector' => 10209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1020902,
                'name' => 'KIBAGABAGA',
                'sector' => 10209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1020903,
                'name' => 'NYAGATOVU',
                'sector' => 10209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1021001,
                'name' => 'GACURIRO',
                'sector' => 10210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1021002,
                'name' => 'GASHARU',
                'sector' => 10210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1021003,
                'name' => 'KAGUGU',
                'sector' => 10210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1021004,
                'name' => 'MURAMA',
                'sector' => 10210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1021101,
                'name' => 'BWIZA',
                'sector' => 10211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1021102,
                'name' => 'CYARUZINGE',
                'sector' => 10211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1021103,
                'name' => 'KIBENGA',
                'sector' => 10211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1021104,
                'name' => 'MASORO',
                'sector' => 10211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1021105,
                'name' => 'MUKUYU',
                'sector' => 10211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1021106,
                'name' => 'RUDASHYA',
                'sector' => 10211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1021201,
                'name' => 'BUTARE',
                'sector' => 10212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1021202,
                'name' => 'GASANZE',
                'sector' => 10212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1021203,
                'name' => 'GASURA',
                'sector' => 10212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1021204,
                'name' => 'GATUNGA',
                'sector' => 10212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1021205,
                'name' => 'MUREMURE',
                'sector' => 10212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1021206,
                'name' => 'SHA',
                'sector' => 10212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1021207,
                'name' => 'SHANGO',
                'sector' => 10212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1021301,
                'name' => 'NYABISINDU',
                'sector' => 10213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1021302,
                'name' => 'NYARUTARAMA',
                'sector' => 10213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1021303,
                'name' => 'RUKIRI I',
                'sector' => 10213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1021304,
                'name' => 'RUKIRI II',
                'sector' => 10213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1021401,
                'name' => 'BISENGA',
                'sector' => 10214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1021402,
                'name' => 'GASAGARA',
                'sector' => 10214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1021403,
                'name' => 'KABUGA I',
                'sector' => 10214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1021404,
                'name' => 'KABUGA II',
                'sector' => 10214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1021405,
                'name' => 'KINYANA',
                'sector' => 10214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1021406,
                'name' => 'MBANDAZI',
                'sector' => 10214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1021407,
                'name' => 'NYAGAHINGA',
                'sector' => 10214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1021408,
                'name' => 'RUHANGA',
                'sector' => 10214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1021501,
                'name' => 'GASABO',
                'sector' => 10215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1021502,
                'name' => 'INDATEMWA',
                'sector' => 10215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1021503,
                'name' => 'KABALIZA',
                'sector' => 10215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1021504,
                'name' => 'KACYATWA',
                'sector' => 10215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1021505,
                'name' => 'KIBENGA',
                'sector' => 10215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1021506,
                'name' => 'KIGABIRO',
                'sector' => 10215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1030101,
                'name' => 'GAHANGA',
                'sector' => 10301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1030102,
                'name' => 'KAGASA',
                'sector' => 10301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1030103,
                'name' => 'KAREMBURE',
                'sector' => 10301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1030104,
                'name' => 'MURINJA',
                'sector' => 10301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1030105,
                'name' => 'NUNGA',
                'sector' => 10301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1030106,
                'name' => 'RWABUTENGE',
                'sector' => 10301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1030201,
                'name' => 'GATENGA',
                'sector' => 10302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1030202,
                'name' => 'KARAMBO',
                'sector' => 10302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1030203,
                'name' => 'NYANZA',
                'sector' => 10302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1030204,
                'name' => 'NYARURAMA',
                'sector' => 10302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1030301,
                'name' => 'KAGUNGA',
                'sector' => 10303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1030302,
                'name' => 'KANSEREGE',
                'sector' => 10303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1030303,
                'name' => 'KINUNGA',
                'sector' => 10303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1030401,
                'name' => 'KANSEREGE',
                'sector' => 10304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1030402,
                'name' => 'MUYANGE',
                'sector' => 10304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1030403,
                'name' => 'RUKATSA',
                'sector' => 10304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1030501,
                'name' => 'BUSANZA',
                'sector' => 10305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1030502,
                'name' => 'KABEZA',
                'sector' => 10305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1030503,
                'name' => 'KARAMA',
                'sector' => 10305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1030504,
                'name' => 'RUBIRIZI',
                'sector' => 10305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1030601,
                'name' => 'GASHARU',
                'sector' => 10306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1030602,
                'name' => 'KAGINA',
                'sector' => 10306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1030603,
                'name' => 'KICUKIRO',
                'sector' => 10306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1030604,
                'name' => 'NGOMA',
                'sector' => 10306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1030701,
                'name' => 'BWERANKORI',
                'sector' => 10307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1030702,
                'name' => 'KARUGIRA',
                'sector' => 10307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1030703,
                'name' => 'KIGARAMA',
                'sector' => 10307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1030704,
                'name' => 'NYARURAMA',
                'sector' => 10307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1030705,
                'name' => 'RWAMPARA',
                'sector' => 10307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1030801,
                'name' => 'AYABARAYA',
                'sector' => 10308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1030802,
                'name' => 'CYIMO',
                'sector' => 10308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1030803,
                'name' => 'GAKO',
                'sector' => 10308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1030804,
                'name' => 'GITARAGA',
                'sector' => 10308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1030805,
                'name' => 'MBABE',
                'sector' => 10308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1030806,
                'name' => 'RUSHESHE',
                'sector' => 10308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1030901,
                'name' => 'GATARE',
                'sector' => 10309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1030902,
                'name' => 'NIBOYE',
                'sector' => 10309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1030903,
                'name' => 'NYAKABANDA',
                'sector' => 10309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1031001,
                'name' => 'KAMASHASHI',
                'sector' => 10310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1031002,
                'name' => 'NONKO',
                'sector' => 10310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1031003,
                'name' => 'RWIMBOGO',
                'sector' => 10310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2010101,
                'name' => 'GAHONDO',
                'sector' => 20101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2010102,
                'name' => 'KAVUMU',
                'sector' => 20101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2010103,
                'name' => 'KIBINJA',
                'sector' => 20101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2010104,
                'name' => 'NYANZA',
                'sector' => 20101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2010105,
                'name' => 'RWESERO',
                'sector' => 20101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2010201,
                'name' => 'GITOVU',
                'sector' => 20102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2010202,
                'name' => 'KIMIRAMA',
                'sector' => 20102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2010203,
                'name' => 'MASANGANO',
                'sector' => 20102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2010204,
                'name' => 'MUNYINYA',
                'sector' => 20102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2010205,
                'name' => 'RUKINGIRO',
                'sector' => 20102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2010206,
                'name' => 'SHYIRA',
                'sector' => 20102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2010301,
                'name' => 'KADAHO',
                'sector' => 20103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2010302,
                'name' => 'KARAMA',
                'sector' => 20103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2010303,
                'name' => 'NYABINYENGA',
                'sector' => 20103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2010304,
                'name' => 'NYARURAMA',
                'sector' => 20103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2010305,
                'name' => 'RUBONA',
                'sector' => 20103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2010401,
                'name' => 'CYERU',
                'sector' => 20104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2010402,
                'name' => 'MBUYE',
                'sector' => 20104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2010403,
                'name' => 'MUTUTU',
                'sector' => 20104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2010404,
                'name' => 'RWOTSO',
                'sector' => 20104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2010501,
                'name' => 'BUTANSINDA',
                'sector' => 20105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2010502,
                'name' => 'BUTARA',
                'sector' => 20105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2010503,
                'name' => 'GAHOMBO',
                'sector' => 20105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2010504,
                'name' => 'GASORO',
                'sector' => 20105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2010505,
                'name' => 'MULINJA',
                'sector' => 20105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2010601,
                'name' => 'CYEREZO',
                'sector' => 20106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2010602,
                'name' => 'GATAGARA',
                'sector' => 20106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2010603,
                'name' => 'KIRULI',
                'sector' => 20106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2010604,
                'name' => 'MPANGA',
                'sector' => 20106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2010605,
                'name' => 'NGWA',
                'sector' => 20106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2010606,
                'name' => 'NKOMERO',
                'sector' => 20106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2010701,
                'name' => 'GATI',
                'sector' => 20107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 2010702,
                'name' => 'MIGINA',
                'sector' => 20107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 2010703,
                'name' => 'NYAMIYAGA',
                'sector' => 20107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 2010704,
                'name' => 'NYAMURE',
                'sector' => 20107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 2010705,
                'name' => 'NYUNDO',
                'sector' => 20107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 2010801,
                'name' => 'BUGALI',
                'sector' => 20108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 2010802,
                'name' => 'CYOTAMAKARA',
                'sector' => 20108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 2010803,
                'name' => 'KAGUNGA',
                'sector' => 20108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 2010804,
                'name' => 'KATARARA',
                'sector' => 20108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 2010901,
                'name' => 'GAHUNGA',
                'sector' => 20109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 2010902,
                'name' => 'KABIRIZI',
                'sector' => 20109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 2010903,
                'name' => 'KABUGA',
                'sector' => 20109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 2010904,
                'name' => 'KIRAMBI',
                'sector' => 20109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 2010905,
                'name' => 'RURANGAZI',
                'sector' => 20109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 2011001,
                'name' => 'GACU',
                'sector' => 20110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 2011002,
                'name' => 'GISHIKE',
                'sector' => 20110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 2011003,
                'name' => 'MUBUGA',
                'sector' => 20110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 2011004,
                'name' => 'MUSHIRARUNGU',
                'sector' => 20110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 2011005,
                'name' => 'NYARUSANGE',
                'sector' => 20110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 2011006,
                'name' => 'RUNGA',
                'sector' => 20110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 2020101,
                'name' => 'CYIRI',
                'sector' => 20201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 2020102,
                'name' => 'GASAGARA',
                'sector' => 20201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 2020103,
                'name' => 'GIKONKO',
                'sector' => 20201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 2020104,
                'name' => 'MBOGO',
                'sector' => 20201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 2020201,
                'name' => 'GABIRO',
                'sector' => 20202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 2020202,
                'name' => 'NYABITARE',
                'sector' => 20202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 2020203,
                'name' => 'NYAKIBUNGO',
                'sector' => 20202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 2020204,
                'name' => 'NYERANZI',
                'sector' => 20202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 2020301,
                'name' => 'AKABOTI',
                'sector' => 20203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 2020302,
                'name' => 'BWIZA',
                'sector' => 20203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 2020303,
                'name' => 'SABUSARO',
                'sector' => 20203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 2020304,
                'name' => 'UMUNINI',
                'sector' => 20203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 2020401,
                'name' => 'DUWANI',
                'sector' => 20204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 2020402,
                'name' => 'KIBIRIZI',
                'sector' => 20204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 2020403,
                'name' => 'MUYIRA',
                'sector' => 20204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 2020404,
                'name' => 'RUTURO',
                'sector' => 20204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 2020501,
                'name' => 'AGAHABWA',
                'sector' => 20205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 2020502,
                'name' => 'GATOVU',
                'sector' => 20205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 2020503,
                'name' => 'IMPINGA',
                'sector' => 20205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 2020504,
                'name' => 'NYABIKENKE',
                'sector' => 20205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 2020505,
                'name' => 'RUBONA',
                'sector' => 20205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 2020506,
                'name' => 'RUSAGARA',
                'sector' => 20205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 2020601,
                'name' => 'GAKOMA',
                'sector' => 20206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 2020602,
                'name' => 'KABUMBWE',
                'sector' => 20206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 2020603,
                'name' => 'MAMBA',
                'sector' => 20206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 2020604,
                'name' => 'MUYAGA',
                'sector' => 20206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 2020605,
                'name' => 'RAMBA',
                'sector' => 20206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 2020701,
                'name' => 'CYUMBA',
                'sector' => 20207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 2020702,
                'name' => 'MUGANZA',
                'sector' => 20207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 2020703,
                'name' => 'REMERA',
                'sector' => 20207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 2020704,
                'name' => 'RWAMIKO',
                'sector' => 20207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 2020705,
                'name' => 'SAGA',
                'sector' => 20207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 2020801,
                'name' => 'BAZIRO',
                'sector' => 20208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 2020802,
                'name' => 'KIBAYI',
                'sector' => 20208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 2020803,
                'name' => 'KIBU',
                'sector' => 20208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 2020804,
                'name' => 'MUGOMBWA',
                'sector' => 20208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 2020805,
                'name' => 'MUKOMACARA',
                'sector' => 20208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 2020901,
                'name' => 'GITEGA',
                'sector' => 20209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 2020902,
                'name' => 'MUKIZA',
                'sector' => 20209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 2020903,
                'name' => 'NYABISAGARA',
                'sector' => 20209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 2020904,
                'name' => 'RUNYINYA',
                'sector' => 20209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 2021001,
                'name' => 'BUKINANYANA',
                'sector' => 20210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 2021002,
                'name' => 'GATOVU',
                'sector' => 20210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 2021003,
                'name' => 'KIGARAMA',
                'sector' => 20210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 2021004,
                'name' => 'KIMANA',
                'sector' => 20210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 2021101,
                'name' => 'BWEYA',
                'sector' => 20211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 2021102,
                'name' => 'CYAMUKUZA',
                'sector' => 20211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 2021103,
                'name' => 'DAHWE',
                'sector' => 20211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 2021104,
                'name' => 'GISAGARA',
                'sector' => 20211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 2021105,
                'name' => 'MUKANDE',
                'sector' => 20211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 2021201,
                'name' => 'HIGIRO',
                'sector' => 20212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 2021202,
                'name' => 'NYAMUGARI',
                'sector' => 20212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 2021203,
                'name' => 'NYARUTEJA',
                'sector' => 20212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 2021204,
                'name' => 'UMUBANGA',
                'sector' => 20212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 2021301,
                'name' => 'GATOKI',
                'sector' => 20213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 2021302,
                'name' => 'MUNAZI',
                'sector' => 20213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 2021303,
                'name' => 'RWANZA',
                'sector' => 20213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 2021304,
                'name' => 'SHYANDA',
                'sector' => 20213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 2021305,
                'name' => 'ZIVU',
                'sector' => 20213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 2030101,
                'name' => 'KIRARANGOMBE',
                'sector' => 20301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 2030102,
                'name' => 'NKANDA',
                'sector' => 20301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 2030103,
                'name' => 'NTEKO',
                'sector' => 20301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 2030104,
                'name' => 'RUNYOMBYI',
                'sector' => 20301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 2030105,
                'name' => 'SHORORO',
                'sector' => 20301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 2030201,
                'name' => 'COKO',
                'sector' => 20302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 2030202,
                'name' => 'CYAHINDA',
                'sector' => 20302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 2030203,
                'name' => 'GASASA',
                'sector' => 20302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 2030204,
                'name' => 'MUHAMBARA',
                'sector' => 20302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 2030205,
                'name' => 'RUTOBWE',
                'sector' => 20302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 2030301,
                'name' => 'GAKOMA',
                'sector' => 20303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 2030302,
                'name' => 'KIBEHO',
                'sector' => 20303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 2030303,
                'name' => 'MBASA',
                'sector' => 20303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 2030304,
                'name' => 'MPANDA',
                'sector' => 20303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 2030305,
                'name' => 'MUBUGA',
                'sector' => 20303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 2030306,
                'name' => 'NYANGE',
                'sector' => 20303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 2030401,
                'name' => 'CYANYIRANKORA',
                'sector' => 20304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 2030402,
                'name' => 'GAHURIZO',
                'sector' => 20304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 2030403,
                'name' => 'KIMINA',
                'sector' => 20304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 2030404,
                'name' => 'KIVU',
                'sector' => 20304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 2030405,
                'name' => 'RUGERERO',
                'sector' => 20304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 2030501,
                'name' => 'GORWE',
                'sector' => 20305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 2030502,
                'name' => 'MURAMBI',
                'sector' => 20305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 2030503,
                'name' => 'NYAMABUYE',
                'sector' => 20305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 2030504,
                'name' => 'RAMBA',
                'sector' => 20305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 2030505,
                'name' => 'RWAMIKO',
                'sector' => 20305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 2030601,
                'name' => 'MUGANZA',
                'sector' => 20306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 2030602,
                'name' => 'RUKORE',
                'sector' => 20306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 2030603,
                'name' => 'SAMIYONGA',
                'sector' => 20306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 2030604,
                'name' => 'UWACYIZA',
                'sector' => 20306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 2030701,
                'name' => 'GIHETA',
                'sector' => 20307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 2030702,
                'name' => 'NGARURIRA',
                'sector' => 20307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 2030703,
                'name' => 'NGERI',
                'sector' => 20307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 2030704,
                'name' => 'NTWALI',
                'sector' => 20307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 2030705,
                'name' => 'NYARURE',
                'sector' => 20307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 2030801,
                'name' => 'BITARE',
                'sector' => 20308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 2030802,
                'name' => 'MUKUGE',
                'sector' => 20308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 2030803,
                'name' => 'MURAMA',
                'sector' => 20308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 2030804,
                'name' => 'NYAMIRAMA',
                'sector' => 20308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 2030805,
                'name' => 'NYANZA',
                'sector' => 20308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 2030806,
                'name' => 'YARAMBA',
                'sector' => 20308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 2030901,
                'name' => 'FUGI',
                'sector' => 20309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 2030902,
                'name' => 'KIBANGU',
                'sector' => 20309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 2030903,
                'name' => 'KIYONZA',
                'sector' => 20309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 2030904,
                'name' => 'MBUYE',
                'sector' => 20309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 2030905,
                'name' => 'NYAMIRAMA',
                'sector' => 20309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 2030906,
                'name' => 'RUBONA',
                'sector' => 20309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 2031001,
                'name' => 'GIHEMVU',
                'sector' => 20310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 2031002,
                'name' => 'KABERE',
                'sector' => 20310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 2031003,
                'name' => 'MISHUNGERO',
                'sector' => 20310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 2031004,
                'name' => 'NYABIMATA',
                'sector' => 20310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 2031005,
                'name' => 'RUHINGA',
                'sector' => 20310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 2031101,
                'name' => 'MARABA',
                'sector' => 20311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 2031102,
                'name' => 'MWOYA',
                'sector' => 20311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 2031103,
                'name' => 'NKAKWA',
                'sector' => 20311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 2031104,
                'name' => 'NYAGISOZI',
                'sector' => 20311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 2031201,
                'name' => 'GITITA',
                'sector' => 20312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 2031202,
                'name' => 'KABERE',
                'sector' => 20312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 2031203,
                'name' => 'REMERA',
                'sector' => 20312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 2031204,
                'name' => 'RUYENZI',
                'sector' => 20312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 2031205,
                'name' => 'UWUMUSEBEYA',
                'sector' => 20312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 2031301,
                'name' => 'GABIRO',
                'sector' => 20313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 2031302,
                'name' => 'GISEKE',
                'sector' => 20313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 2031303,
                'name' => 'NYARUGANO',
                'sector' => 20313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 2031304,
                'name' => 'RUGOGWE',
                'sector' => 20313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 2031305,
                'name' => 'RURAMBA',
                'sector' => 20313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 2031401,
                'name' => 'BUNGE',
                'sector' => 20314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 2031402,
                'name' => 'CYUNA',
                'sector' => 20314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 2031403,
                'name' => 'GIKUNZI',
                'sector' => 20314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 2031404,
                'name' => 'MARIBA',
                'sector' => 20314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 2031405,
                'name' => 'RARANZIGE',
                'sector' => 20314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 2031406,
                'name' => 'RUSENGE',
                'sector' => 20314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 2040101,
                'name' => 'NYAKIBANDA',
                'sector' => 20401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 2040102,
                'name' => 'NYUMBA',
                'sector' => 20401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 2040103,
                'name' => 'RYAKIBOGO',
                'sector' => 20401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 2040104,
                'name' => 'SHORI',
                'sector' => 20401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 2040201,
                'name' => 'MUYOGORO',
                'sector' => 20402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 2040202,
                'name' => 'NYAKAGEZI',
                'sector' => 20402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 2040203,
                'name' => 'RUKIRA',
                'sector' => 20402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 2040204,
                'name' => 'SOVU',
                'sector' => 20402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 2040301,
                'name' => 'BUHORO',
                'sector' => 20403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 2040302,
                'name' => 'BUNAZI',
                'sector' => 20403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 2040303,
                'name' => 'GAHORORO',
                'sector' => 20403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 2040304,
                'name' => 'KIBINGO',
                'sector' => 20403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 2040305,
                'name' => 'MUHEMBE',
                'sector' => 20403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 2040401,
                'name' => 'GISHIHE',
                'sector' => 20404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 2040402,
                'name' => 'KABATWA',
                'sector' => 20404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 2040403,
                'name' => 'KABUGA',
                'sector' => 20404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 2040404,
                'name' => 'KARAMBI',
                'sector' => 20404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 2040405,
                'name' => 'MUSEBEYA',
                'sector' => 20404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 2040406,
                'name' => 'NYABISINDU',
                'sector' => 20404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 2040407,
                'name' => 'RUGARAMA',
                'sector' => 20404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 2040408,
                'name' => 'SHANGA',
                'sector' => 20404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 2040501,
                'name' => 'BYINZA',
                'sector' => 20405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 2040502,
                'name' => 'GAHANA',
                'sector' => 20405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 2040503,
                'name' => 'GITOVU',
                'sector' => 20405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 2040504,
                'name' => 'KABONA',
                'sector' => 20405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 2040505,
                'name' => 'SAZANGE',
                'sector' => 20405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 2040601,
                'name' => 'BUREMERA',
                'sector' => 20406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 2040602,
                'name' => 'GASUMBA',
                'sector' => 20406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 2040603,
                'name' => 'KABUYE',
                'sector' => 20406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 2040604,
                'name' => 'KANYINYA',
                'sector' => 20406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 2040605,
                'name' => 'SHANGA',
                'sector' => 20406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 2040606,
                'name' => 'SHYEMBE',
                'sector' => 20406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 2040701,
                'name' => 'GATOBOTOBO',
                'sector' => 20407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 2040702,
                'name' => 'KABUGA',
                'sector' => 20407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 2040703,
                'name' => 'MUTUNDA',
                'sector' => 20407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 2040704,
                'name' => 'MWULIRE',
                'sector' => 20407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 2040705,
                'name' => 'RUGANGO',
                'sector' => 20407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 2040706,
                'name' => 'RUSAGARA',
                'sector' => 20407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 2040707,
                'name' => 'TARE',
                'sector' => 20407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 2040801,
                'name' => 'BUKOMEYE',
                'sector' => 20408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 2040802,
                'name' => 'BUVUMU',
                'sector' => 20408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 2040803,
                'name' => 'ICYERU',
                'sector' => 20408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 2040804,
                'name' => 'RANGO A',
                'sector' => 20408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 2040901,
                'name' => 'BUTARE',
                'sector' => 20409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 2040902,
                'name' => 'KABUREMERA',
                'sector' => 20409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 2040903,
                'name' => 'MATYAZO',
                'sector' => 20409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 2040904,
                'name' => 'NGOMA',
                'sector' => 20409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 2041001,
                'name' => 'BUSHESHI',
                'sector' => 20410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 2041002,
                'name' => 'GATOVU',
                'sector' => 20410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 2041003,
                'name' => 'KARAMA',
                'sector' => 20410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 2041004,
                'name' => 'MARA',
                'sector' => 20410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 2041005,
                'name' => 'MUHORORO',
                'sector' => 20410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 2041006,
                'name' => 'RUGOGWE',
                'sector' => 20410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 2041007,
                'name' => 'RUHASHYA',
                'sector' => 20410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 2041101,
                'name' => 'BUHIMBA',
                'sector' => 20411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 2041102,
                'name' => 'GAFUMBA',
                'sector' => 20411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 2041103,
                'name' => 'KIMIREHE',
                'sector' => 20411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 2041104,
                'name' => 'KIMUNA',
                'sector' => 20411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 2041105,
                'name' => 'KIRUHURA',
                'sector' => 20411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 2041106,
                'name' => 'MUGOGWE',
                'sector' => 20411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 2041201,
                'name' => 'GATWARO',
                'sector' => 20412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 2041202,
                'name' => 'KAMWAMBI',
                'sector' => 20412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 2041203,
                'name' => 'KIBIRARO',
                'sector' => 20412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 2041204,
                'name' => 'MWENDO',
                'sector' => 20412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 2041205,
                'name' => 'NYAMABUYE',
                'sector' => 20412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 2041206,
                'name' => 'NYARUHOMBO',
                'sector' => 20412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 2041207,
                'name' => 'SHYUNGA',
                'sector' => 20412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 2041301,
                'name' => 'CYENDAJURU',
                'sector' => 20413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 2041302,
                'name' => 'GISAKURA',
                'sector' => 20413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 2041303,
                'name' => 'KABUSANZA',
                'sector' => 20413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 2041304,
                'name' => 'MUGOBORE',
                'sector' => 20413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 2041305,
                'name' => 'NYANGAZI',
                'sector' => 20413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 2041401,
                'name' => 'CYARWA',
                'sector' => 20414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 2041402,
                'name' => 'CYIMANA',
                'sector' => 20414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 2041403,
                'name' => 'GITWA',
                'sector' => 20414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 2041404,
                'name' => 'MPARE',
                'sector' => 20414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 2041405,
                'name' => 'RANGO B',
                'sector' => 20414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 2050101,
                'name' => 'BUSHIGISHIGI',
                'sector' => 20501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 2050102,
                'name' => 'BYIMANA',
                'sector' => 20501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 2050103,
                'name' => 'GIFURWE',
                'sector' => 20501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 2050104,
                'name' => 'KIZIMYAMURIRO',
                'sector' => 20501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 2050105,
                'name' => 'MUNINI',
                'sector' => 20501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 2050106,
                'name' => 'RAMBYA',
                'sector' => 20501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 2050201,
                'name' => 'GITEGA',
                'sector' => 20502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 2050202,
                'name' => 'KARAMA',
                'sector' => 20502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 2050203,
                'name' => 'KIYUMBA',
                'sector' => 20502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 2050204,
                'name' => 'NGOMA',
                'sector' => 20502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 2050205,
                'name' => 'NYANZA',
                'sector' => 20502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 2050206,
                'name' => 'NYANZOGA',
                'sector' => 20502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 2050301,
                'name' => 'KIGEME',
                'sector' => 20503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 2050302,
                'name' => 'NGIRYI',
                'sector' => 20503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 2050303,
                'name' => 'NYABIVUMU',
                'sector' => 20503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 2050304,
                'name' => 'NYAMUGARI',
                'sector' => 20503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 2050305,
                'name' => 'NZEGA',
                'sector' => 20503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 2050306,
                'name' => 'REMERA',
                'sector' => 20503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 2050401,
                'name' => 'BAKOPFU',
                'sector' => 20504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 2050402,
                'name' => 'GATARE',
                'sector' => 20504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 2050403,
                'name' => 'MUKONGORO',
                'sector' => 20504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 2050404,
                'name' => 'RUGANDA',
                'sector' => 20504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 2050405,
                'name' => 'SHYERU',
                'sector' => 20504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 2050501,
                'name' => 'KAVUMU',
                'sector' => 20505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 2050502,
                'name' => 'MURAMBI',
                'sector' => 20505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 2050503,
                'name' => 'MUSENYI',
                'sector' => 20505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 2050504,
                'name' => 'NYABISINDU',
                'sector' => 20505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 2050505,
                'name' => 'NYAMIYAGA',
                'sector' => 20505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 2050601,
                'name' => 'BWAMA',
                'sector' => 20506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 2050602,
                'name' => 'KAMEGERI',
                'sector' => 20506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 2050603,
                'name' => 'KIREHE',
                'sector' => 20506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 2050604,
                'name' => 'KIZI',
                'sector' => 20506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 2050605,
                'name' => 'NYARUSIZA',
                'sector' => 20506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 2050606,
                'name' => 'RUSUSA',
                'sector' => 20506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 2050701,
                'name' => 'BUGARAMA',
                'sector' => 20507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 2050702,
                'name' => 'BUGARURA',
                'sector' => 20507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 2050703,
                'name' => 'GASHIHA',
                'sector' => 20507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 2050704,
                'name' => 'KARAMBO',
                'sector' => 20507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 2050705,
                'name' => 'RUHUNGA',
                'sector' => 20507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 2050706,
                'name' => 'UWINDEKEZI',
                'sector' => 20507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 2050801,
                'name' => 'BWENDA',
                'sector' => 20508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 2050802,
                'name' => 'GAKANKA',
                'sector' => 20508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 2050803,
                'name' => 'KIBIBI',
                'sector' => 20508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 2050804,
                'name' => 'NYAKIZA',
                'sector' => 20508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 2050901,
                'name' => 'KAGANO',
                'sector' => 20509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 2050902,
                'name' => 'MUJUGA',
                'sector' => 20509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 2050903,
                'name' => 'MUKUNGU',
                'sector' => 20509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 2050904,
                'name' => 'SHABA',
                'sector' => 20509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 2050905,
                'name' => 'UWINGUGU',
                'sector' => 20509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 2051001,
                'name' => 'MANWARI',
                'sector' => 20510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 2051002,
                'name' => 'MUTIWINGOMA',
                'sector' => 20510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 2051003,
                'name' => 'NGAMBI',
                'sector' => 20510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 2051004,
                'name' => 'NGARA',
                'sector' => 20510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 2051101,
                'name' => 'GITONDORERO',
                'sector' => 20511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 2051102,
                'name' => 'GITWA',
                'sector' => 20511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 2051103,
                'name' => 'RUHINGA',
                'sector' => 20511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 2051104,
                'name' => 'SOVU',
                'sector' => 20511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 2051105,
                'name' => 'SUTI',
                'sector' => 20511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 2051106,
                'name' => 'YONDE',
                'sector' => 20511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 2051201,
                'name' => 'GASAVE',
                'sector' => 20512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 2051202,
                'name' => 'JENDA',
                'sector' => 20512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 2051203,
                'name' => 'MASAGARA',
                'sector' => 20512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 2051204,
                'name' => 'MASANGANO',
                'sector' => 20512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 2051205,
                'name' => 'MASIZI',
                'sector' => 20512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 2051206,
                'name' => 'NYAGISOZI',
                'sector' => 20512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 2051301,
                'name' => 'GATOVU',
                'sector' => 20513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 2051302,
                'name' => 'NYARURAMBI',
                'sector' => 20513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 2051303,
                'name' => 'RUGANO',
                'sector' => 20513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 2051304,
                'name' => 'RUNEGE',
                'sector' => 20513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 2051305,
                'name' => 'RUSEKERA',
                'sector' => 20513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 2051306,
                'name' => 'SEKERA',
                'sector' => 20513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 2051401,
                'name' => 'BUTETERI',
                'sector' => 20514,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 2051402,
                'name' => 'CYOBE',
                'sector' => 20514,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 2051403,
                'name' => 'GASHWATI',
                'sector' => 20514,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 2051501,
                'name' => 'BITANDARA',
                'sector' => 20515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 2051502,
                'name' => 'MUSARABA',
                'sector' => 20515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 2051503,
                'name' => 'MUTENGERI',
                'sector' => 20515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 2051504,
                'name' => 'NKOMANE',
                'sector' => 20515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 2051505,
                'name' => 'NYARWUNGO',
                'sector' => 20515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 2051506,
                'name' => 'TWIYA',
                'sector' => 20515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cells')->insert(array (
            0 => 
            array (
                'id' => 2051601,
                'name' => 'BUHORO',
                'sector' => 20516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2051602,
                'name' => 'GASARENDA',
                'sector' => 20516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2051603,
                'name' => 'GATOVU',
                'sector' => 20516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2051604,
                'name' => 'KAGANZA',
                'sector' => 20516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2051605,
                'name' => 'NKUMBURE',
                'sector' => 20516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 2051606,
                'name' => 'NYAMIGINA',
                'sector' => 20516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2051701,
                'name' => 'BIGUMIRA',
                'sector' => 20517,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 2051702,
                'name' => 'GAHIRA',
                'sector' => 20517,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2051703,
                'name' => 'KIBYAGIRA',
                'sector' => 20517,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2051704,
                'name' => 'MUDASOMWA',
                'sector' => 20517,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 2051705,
                'name' => 'MUNYEGE',
                'sector' => 20517,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2051706,
                'name' => 'RUGOGWE',
                'sector' => 20517,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2060101,
                'name' => 'BUHANDA',
                'sector' => 20601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 2060102,
                'name' => 'GITISI',
                'sector' => 20601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 2060103,
                'name' => 'MURAMA',
                'sector' => 20601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 2060104,
                'name' => 'RUBONA',
                'sector' => 20601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 2060105,
                'name' => 'RWINYANA',
                'sector' => 20601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 2060201,
                'name' => 'KAMUSENYI',
                'sector' => 20602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 2060202,
                'name' => 'KIRENGERI',
                'sector' => 20602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 2060203,
                'name' => 'MAHEMBE',
                'sector' => 20602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 2060204,
                'name' => 'MPANDA',
                'sector' => 20602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 2060205,
                'name' => 'MUHORORO',
                'sector' => 20602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 2060206,
                'name' => 'NTENYO',
                'sector' => 20602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 2060207,
                'name' => 'NYAKABUYE',
                'sector' => 20602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 2060301,
                'name' => 'BIHEMBE',
                'sector' => 20603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 2060302,
                'name' => 'KARAMBI',
                'sector' => 20603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 2060303,
                'name' => 'MUNANIRA',
                'sector' => 20603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 2060304,
                'name' => 'REMERA',
                'sector' => 20603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 2060305,
                'name' => 'RWESERO',
                'sector' => 20603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 2060306,
                'name' => 'RWOGA',
                'sector' => 20603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 2060401,
                'name' => 'BURIMA',
                'sector' => 20604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 2060402,
                'name' => 'GISALI',
                'sector' => 20604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 2060403,
                'name' => 'KINAZI',
                'sector' => 20604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 2060404,
                'name' => 'RUBONA',
                'sector' => 20604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 2060405,
                'name' => 'RUTABO',
                'sector' => 20604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 2060501,
                'name' => 'BWERAMVURA',
                'sector' => 20605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 2060502,
                'name' => 'GITINDA',
                'sector' => 20605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 2060503,
                'name' => 'KIRWA',
                'sector' => 20605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 2060504,
                'name' => 'MUYUNZWE',
                'sector' => 20605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 2060505,
                'name' => 'NYAKOGO',
                'sector' => 20605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 2060506,
                'name' => 'RUKINA',
                'sector' => 20605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 2060601,
                'name' => 'CYANZA',
                'sector' => 20606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 2060602,
                'name' => 'GISANGA',
                'sector' => 20606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 2060603,
                'name' => 'KABUGA',
                'sector' => 20606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 2060604,
                'name' => 'KIZIBERE',
                'sector' => 20606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 2060605,
                'name' => 'MBUYE',
                'sector' => 20606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 2060606,
                'name' => 'MWENDO',
                'sector' => 20606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 2060607,
                'name' => 'NYAKAREKARE',
                'sector' => 20606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 2060701,
                'name' => 'GAFUNZO',
                'sector' => 20607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 2060702,
                'name' => 'GISHWERU',
                'sector' => 20607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 2060703,
                'name' => 'KAMUJISHO',
                'sector' => 20607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 2060704,
                'name' => 'KIGARAMA',
                'sector' => 20607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 2060705,
                'name' => 'KUBUTARE',
                'sector' => 20607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 2060706,
                'name' => 'MUTARA',
                'sector' => 20607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 2060707,
                'name' => 'NYABIBUGU',
                'sector' => 20607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 2060708,
                'name' => 'SARUHESHYI',
                'sector' => 20607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 2060801,
                'name' => 'GAKO',
                'sector' => 20608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 2060802,
                'name' => 'KAREBA',
                'sector' => 20608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 2060803,
                'name' => 'KAYENZI',
                'sector' => 20608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 2060804,
                'name' => 'KEBERO',
                'sector' => 20608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 2060805,
                'name' => 'NYAGISOZI',
                'sector' => 20608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 2060806,
                'name' => 'NYAKABUNGO',
                'sector' => 20608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 2060807,
                'name' => 'NYARURAMA',
                'sector' => 20608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 2060901,
                'name' => 'BUHORO',
                'sector' => 20609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 2060902,
                'name' => 'BUNYOGOMBE',
                'sector' => 20609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 2060903,
                'name' => 'GIKOMA',
                'sector' => 20609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 2060904,
                'name' => 'MUNINI',
                'sector' => 20609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 2060905,
                'name' => 'MUSAMO',
                'sector' => 20609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 2060906,
                'name' => 'NYAMAGANA',
                'sector' => 20609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 2060907,
                'name' => 'RWOGA',
                'sector' => 20609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 2060908,
                'name' => 'TAMBWE',
                'sector' => 20609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 2070101,
                'name' => 'BIRINGAGA',
                'sector' => 20701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 2070102,
                'name' => 'KIGARAMA',
                'sector' => 20701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 2070103,
                'name' => 'KIVUMU',
                'sector' => 20701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 2070104,
                'name' => 'MAKERA',
                'sector' => 20701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 2070105,
                'name' => 'NYARUNYINYA',
                'sector' => 20701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 2070106,
                'name' => 'SHORI',
                'sector' => 20701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 2070201,
                'name' => 'BURAMBA',
                'sector' => 20702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 2070202,
                'name' => 'BUTARE',
                'sector' => 20702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 2070203,
                'name' => 'KABUYE',
                'sector' => 20702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 2070204,
                'name' => 'KAVUMU',
                'sector' => 20702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 2070205,
                'name' => 'KIBYIMBA',
                'sector' => 20702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 2070206,
                'name' => 'NGARAMA',
                'sector' => 20702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 2070207,
                'name' => 'NGOMA',
                'sector' => 20702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 2070208,
                'name' => 'SHOLI',
                'sector' => 20702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 2070301,
                'name' => 'GISHARU',
                'sector' => 20703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 2070302,
                'name' => 'GITEGA',
                'sector' => 20703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 2070303,
                'name' => 'JURWE',
                'sector' => 20703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 2070304,
                'name' => 'MUBUGA',
                'sector' => 20703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 2070305,
                'name' => 'RUBYINIRO',
                'sector' => 20703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 2070306,
                'name' => 'RYAKANIMBA',
                'sector' => 20703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 2070401,
                'name' => 'BUDENDE',
                'sector' => 20704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 2070402,
                'name' => 'NDAGO',
                'sector' => 20704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 2070403,
                'name' => 'REMERA',
                'sector' => 20704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 2070404,
                'name' => 'RUHINA',
                'sector' => 20704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 2070405,
                'name' => 'RUKERI',
                'sector' => 20704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 2070501,
                'name' => 'KANYINYA',
                'sector' => 20705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 2070502,
                'name' => 'NGANZO',
                'sector' => 20705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 2070503,
                'name' => 'NYAMIRAMA',
                'sector' => 20705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 2070504,
                'name' => 'REMERA',
                'sector' => 20705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 2070505,
                'name' => 'TYAZO',
                'sector' => 20705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 2070601,
                'name' => 'MATYAZO',
                'sector' => 20706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 2070602,
                'name' => 'MUNAZI',
                'sector' => 20706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 2070603,
                'name' => 'NYAGASOZI',
                'sector' => 20706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 2070604,
                'name' => 'RUKARAGATA',
                'sector' => 20706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 2070605,
                'name' => 'RWASARE',
                'sector' => 20706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 2070606,
                'name' => 'RWIGERERO',
                'sector' => 20706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 2070701,
                'name' => 'GASHORERA',
                'sector' => 20707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 2070702,
                'name' => 'MASANGANO',
                'sector' => 20707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 2070703,
                'name' => 'MBUGA',
                'sector' => 20707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 2070704,
                'name' => 'MUVUMBA',
                'sector' => 20707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 2070705,
                'name' => 'NYARUSOZI',
                'sector' => 20707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 2070801,
                'name' => 'GAHOGO',
                'sector' => 20708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 2070802,
                'name' => 'GIFUMBA',
                'sector' => 20708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 2070803,
                'name' => 'GITARAMA',
                'sector' => 20708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 2070804,
                'name' => 'REMERA',
                'sector' => 20708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 2070901,
                'name' => 'MBIRIRI',
                'sector' => 20709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 2070902,
                'name' => 'MUSONGATI',
                'sector' => 20709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 2070903,
                'name' => 'NGARU',
                'sector' => 20709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 2070904,
                'name' => 'RUSOVU',
                'sector' => 20709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 2071001,
                'name' => 'GASAGARA',
                'sector' => 20710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 2071002,
                'name' => 'GASHARU',
                'sector' => 20710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 2071003,
                'name' => 'KARAMBO',
                'sector' => 20710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 2071004,
                'name' => 'NYAMIRAMBO',
                'sector' => 20710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 2071005,
                'name' => 'RUHANGO',
                'sector' => 20710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 2071101,
                'name' => 'GASAVE',
                'sector' => 20711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 2071102,
                'name' => 'KANYANA',
                'sector' => 20711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 2071103,
                'name' => 'KIBAGA',
                'sector' => 20711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 2071104,
                'name' => 'MPINGA',
                'sector' => 20711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 2071105,
                'name' => 'NSANGA',
                'sector' => 20711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 2071201,
                'name' => 'KININI',
                'sector' => 20712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 2071202,
                'name' => 'MBARE',
                'sector' => 20712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 2071203,
                'name' => 'MUBUGA',
                'sector' => 20712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 2071204,
                'name' => 'RULI',
                'sector' => 20712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 2080101,
                'name' => 'GIHINGA',
                'sector' => 20801,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 2080102,
                'name' => 'GIHIRA',
                'sector' => 20801,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 2080103,
                'name' => 'KIGEMBE',
                'sector' => 20801,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 2080104,
                'name' => 'NKINGO',
                'sector' => 20801,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 2080201,
                'name' => 'BITARE',
                'sector' => 20802,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 2080202,
                'name' => 'BUNYONGA',
                'sector' => 20802,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 2080203,
                'name' => 'MUGANZA',
                'sector' => 20802,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 2080204,
                'name' => 'NYAMIREMBE',
                'sector' => 20802,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 2080301,
                'name' => 'BUGARAMA',
                'sector' => 20803,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 2080302,
                'name' => 'CUBI',
                'sector' => 20803,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 2080303,
                'name' => 'KAYONZA',
                'sector' => 20803,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 2080304,
                'name' => 'KIRWA',
                'sector' => 20803,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 2080305,
                'name' => 'MATABA',
                'sector' => 20803,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 2080306,
                'name' => 'NYAMIRAMA',
                'sector' => 20803,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 2080401,
                'name' => 'BUSORO',
                'sector' => 20804,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 2080402,
                'name' => 'GASEKE',
                'sector' => 20804,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 2080403,
                'name' => 'GIKO',
                'sector' => 20804,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 2080404,
                'name' => 'MUYANGE',
                'sector' => 20804,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 2080501,
                'name' => 'JENDA',
                'sector' => 20805,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 2080502,
                'name' => 'KABUGONDO',
                'sector' => 20805,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 2080503,
                'name' => 'MBATI',
                'sector' => 20805,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2080504,
                'name' => 'MUGINA',
                'sector' => 20805,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 2080505,
                'name' => 'NTEKO',
                'sector' => 20805,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 2080601,
                'name' => 'BUHORO',
                'sector' => 20806,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 2080602,
                'name' => 'CYAMBWE',
                'sector' => 20806,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 2080603,
                'name' => 'KARENGERA',
                'sector' => 20806,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 2080604,
                'name' => 'KIVUMU',
                'sector' => 20806,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2080605,
                'name' => 'MPUSHI',
                'sector' => 20806,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2080606,
                'name' => 'RUKAMBURA',
                'sector' => 20806,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2080701,
                'name' => 'KABUGA',
                'sector' => 20807,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2080702,
                'name' => 'KAZIRABONDE',
                'sector' => 20807,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2080703,
                'name' => 'MAREMBO',
                'sector' => 20807,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2080801,
                'name' => 'BIBUNGO',
                'sector' => 20808,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2080802,
                'name' => 'KABASHUMBA',
                'sector' => 20808,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2080803,
                'name' => 'KIDAHWE',
                'sector' => 20808,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2080804,
                'name' => 'MUKINGA',
                'sector' => 20808,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2080805,
                'name' => 'NGOMA',
                'sector' => 20808,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2080901,
                'name' => 'GITARE',
                'sector' => 20809,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2080902,
                'name' => 'KAMBYEYI',
                'sector' => 20809,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2080903,
                'name' => 'KIGUSA',
                'sector' => 20809,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2080904,
                'name' => 'NYAGISHUBI',
                'sector' => 20809,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2080905,
                'name' => 'RUYANZA',
                'sector' => 20809,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2081001,
                'name' => 'BIHEMBE',
                'sector' => 20810,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2081002,
                'name' => 'KIGESE',
                'sector' => 20810,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2081003,
                'name' => 'MASAKA',
                'sector' => 20810,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2081004,
                'name' => 'NYARUBUYE',
                'sector' => 20810,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2081005,
                'name' => 'SHELI',
                'sector' => 20810,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2081101,
                'name' => 'BUGOBA',
                'sector' => 20811,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2081102,
                'name' => 'BUGURI',
                'sector' => 20811,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2081103,
                'name' => 'GISHYESHYE',
                'sector' => 20811,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2081104,
                'name' => 'MUREHE',
                'sector' => 20811,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2081105,
                'name' => 'MWIRUTE',
                'sector' => 20811,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2081106,
                'name' => 'REMERA',
                'sector' => 20811,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2081107,
                'name' => 'TABA',
                'sector' => 20811,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2081201,
                'name' => 'GIHARA',
                'sector' => 20812,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2081202,
                'name' => 'KABAGESERA',
                'sector' => 20812,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2081203,
                'name' => 'KAGINA',
                'sector' => 20812,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2081204,
                'name' => 'MUGANZA',
                'sector' => 20812,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2081205,
                'name' => 'RUYENZI',
                'sector' => 20812,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 3010101,
                'name' => 'BURUNGA',
                'sector' => 30101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 3010102,
                'name' => 'GASURA',
                'sector' => 30101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 3010103,
                'name' => 'GITARAMA',
                'sector' => 30101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 3010104,
                'name' => 'KAYENZI',
                'sector' => 30101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 3010105,
                'name' => 'KIBUYE',
                'sector' => 30101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 3010106,
                'name' => 'KINIHA',
                'sector' => 30101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 3010107,
                'name' => 'NYARUSAZI',
                'sector' => 30101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 3010201,
                'name' => 'BIRAMBO',
                'sector' => 30102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 3010202,
                'name' => 'MUSASA',
                'sector' => 30102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 3010203,
                'name' => 'MWENDO',
                'sector' => 30102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 3010204,
                'name' => 'RUGOBAGOBA',
                'sector' => 30102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 3010205,
                'name' => 'TONGATI',
                'sector' => 30102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 3010301,
                'name' => 'BUHORO',
                'sector' => 30103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 3010302,
                'name' => 'CYANYA',
                'sector' => 30103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 3010303,
                'name' => 'KIGARAMA',
                'sector' => 30103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 3010304,
                'name' => 'MUNANIRA',
                'sector' => 30103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 3010305,
                'name' => 'MUSASA',
                'sector' => 30103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 3010306,
                'name' => 'NGOMA',
                'sector' => 30103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 3010401,
                'name' => 'GASHARU',
                'sector' => 30104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 3010402,
                'name' => 'GITEGA',
                'sector' => 30104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 3010403,
                'name' => 'KANUNGA',
                'sector' => 30104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 3010404,
                'name' => 'KIRAMBO',
                'sector' => 30104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 3010405,
                'name' => 'MUNANIRA',
                'sector' => 30104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 3010406,
                'name' => 'NYAMIRINGA',
                'sector' => 30104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 3010407,
                'name' => 'RUHINGA',
                'sector' => 30104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 3010408,
                'name' => 'RWARIRO',
                'sector' => 30104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 3010501,
                'name' => 'KAGABIRO',
                'sector' => 30105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 3010502,
                'name' => 'MURANGARA',
                'sector' => 30105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 3010503,
                'name' => 'NYAGATOVU',
                'sector' => 30105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 3010504,
                'name' => 'RYARUHANGA',
                'sector' => 30105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 3010601,
                'name' => 'MUBUGA',
                'sector' => 30106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 3010602,
                'name' => 'MUHORORO',
                'sector' => 30106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 3010603,
                'name' => 'NKOTO',
                'sector' => 30106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 3010604,
                'name' => 'NYARUNYINYA',
                'sector' => 30106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 3010605,
                'name' => 'SHYEMBE',
                'sector' => 30106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 3010701,
                'name' => 'BUKIRO',
                'sector' => 30107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 3010702,
                'name' => 'KABAYA',
                'sector' => 30107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 3010703,
                'name' => 'KAMINA',
                'sector' => 30107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 3010704,
                'name' => 'KAREBA',
                'sector' => 30107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 3010705,
                'name' => 'NYAMUSHISHI',
                'sector' => 30107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 3010706,
                'name' => 'NZARATSI',
                'sector' => 30107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 3010801,
                'name' => 'BYOGO',
                'sector' => 30108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 3010802,
                'name' => 'GASHARU',
                'sector' => 30108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 3010803,
                'name' => 'GISAYURA',
                'sector' => 30108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 3010804,
                'name' => 'KANYEGE',
                'sector' => 30108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 3010805,
                'name' => 'KINYONZWE',
                'sector' => 30108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 3010806,
                'name' => 'MURENGEZO',
                'sector' => 30108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 3010807,
                'name' => 'RWUFI',
                'sector' => 30108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 3010901,
                'name' => 'BUBAZI',
                'sector' => 30109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 3010902,
                'name' => 'GACACA',
                'sector' => 30109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 3010903,
                'name' => 'GISANZE',
                'sector' => 30109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 3010904,
                'name' => 'GITWA',
                'sector' => 30109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 3010905,
                'name' => 'KIBIRIZI',
                'sector' => 30109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 3010906,
                'name' => 'MATABA',
                'sector' => 30109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 3010907,
                'name' => 'NYARUGENGE',
                'sector' => 30109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 3010908,
                'name' => 'RURAGWE',
                'sector' => 30109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 3011001,
                'name' => 'GISIZA',
                'sector' => 30110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 3011002,
                'name' => 'GITEGA',
                'sector' => 30110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 3011003,
                'name' => 'GITOVU',
                'sector' => 30110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 3011004,
                'name' => 'KABUGA',
                'sector' => 30110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 3011005,
                'name' => 'MUBUGA',
                'sector' => 30110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 3011006,
                'name' => 'MUCYIMBA',
                'sector' => 30110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 3011007,
                'name' => 'RUFUNGO',
                'sector' => 30110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 3011008,
                'name' => 'RWUNGO',
                'sector' => 30110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 3011009,
                'name' => 'TYAZO',
                'sector' => 30110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 3011101,
                'name' => 'BIGUHU',
                'sector' => 30111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 3011102,
                'name' => 'KABINGO',
                'sector' => 30111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 3011103,
                'name' => 'KINYOVU',
                'sector' => 30111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 3011104,
                'name' => 'KIVUMU',
                'sector' => 30111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 3011105,
                'name' => 'NYABIKERI',
                'sector' => 30111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 3011106,
                'name' => 'NYAMUGWAGWA',
                'sector' => 30111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 3011107,
                'name' => 'RUBONA',
                'sector' => 30111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 3011108,
                'name' => 'RUGOBAGOBA',
                'sector' => 30111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 3011201,
                'name' => 'BIGUGU',
                'sector' => 30112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 3011202,
                'name' => 'BISESERO',
                'sector' => 30112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 3011203,
                'name' => 'GASATA',
                'sector' => 30112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 3011204,
                'name' => 'MUNINI',
                'sector' => 30112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 3011205,
                'name' => 'NYAKAMIRA',
                'sector' => 30112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 3011206,
                'name' => 'NYARUSANGA',
                'sector' => 30112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 3011207,
                'name' => 'RUBAZO',
                'sector' => 30112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 3011208,
                'name' => 'RUBUMBA',
                'sector' => 30112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 3011301,
                'name' => 'BIHUMBE',
                'sector' => 30113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 3011302,
                'name' => 'GAKUTA',
                'sector' => 30113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 3011303,
                'name' => 'GISOVU',
                'sector' => 30113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 3011304,
                'name' => 'GITABURA',
                'sector' => 30113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 3011305,
                'name' => 'KAVUMU',
                'sector' => 30113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 3011306,
                'name' => 'MUREHE',
                'sector' => 30113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 3011307,
                'name' => 'RUTABI',
                'sector' => 30113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 3020101,
                'name' => 'BUSHAKA',
                'sector' => 30201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 3020102,
                'name' => 'KABIHOGO',
                'sector' => 30201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 3020103,
                'name' => 'NKIRA',
                'sector' => 30201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 3020104,
                'name' => 'REMERA',
                'sector' => 30201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 3020201,
                'name' => 'BUGINA',
                'sector' => 30202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 3020202,
                'name' => 'CONGO-NIL',
                'sector' => 30202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 3020203,
                'name' => 'MATABA',
                'sector' => 30202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 3020204,
                'name' => 'MURAMBI',
                'sector' => 30202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 3020205,
                'name' => 'RUHINGO',
                'sector' => 30202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 3020206,
                'name' => 'SHYEMBE',
                'sector' => 30202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 3020207,
                'name' => 'TEBA',
                'sector' => 30202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 3020301,
                'name' => 'BUHINDURE',
                'sector' => 30203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 3020302,
                'name' => 'NKORA',
                'sector' => 30203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 3020303,
                'name' => 'NYAGAHINIKA',
                'sector' => 30203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 3020304,
                'name' => 'RUKARAGATA',
                'sector' => 30203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 3020401,
                'name' => 'BUNYONI',
                'sector' => 30204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 3020402,
                'name' => 'BUNYUNJU',
                'sector' => 30204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 3020403,
                'name' => 'KABERE',
                'sector' => 30204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 3020404,
                'name' => 'KABUJENJE',
                'sector' => 30204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 3020405,
                'name' => 'KARAMBI',
                'sector' => 30204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 3020406,
                'name' => 'NGANZO',
                'sector' => 30204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 3020501,
                'name' => 'HANIRO',
                'sector' => 30205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 3020502,
                'name' => 'MUYIRA',
                'sector' => 30205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 3020503,
                'name' => 'TANGABO',
                'sector' => 30205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 3020601,
                'name' => 'KABUGA',
                'sector' => 30206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 3020602,
                'name' => 'KAGANO',
                'sector' => 30206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 3020603,
                'name' => 'KAGEYO',
                'sector' => 30206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 3020604,
                'name' => 'KAGUSA',
                'sector' => 30206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 3020605,
                'name' => 'KARAMBO',
                'sector' => 30206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 3020606,
                'name' => 'MWENDO',
                'sector' => 30206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 3020701,
                'name' => 'KIRWA',
                'sector' => 30207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 3020702,
                'name' => 'MBURAMAZI',
                'sector' => 30207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 3020703,
                'name' => 'RUGEYO',
                'sector' => 30207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 3020704,
                'name' => 'TWABUGEZI',
                'sector' => 30207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 3020801,
                'name' => 'GABIRO',
                'sector' => 30208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 3020802,
                'name' => 'GISIZA',
                'sector' => 30208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 3020803,
                'name' => 'MURAMBI',
                'sector' => 30208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 3020804,
                'name' => 'NYARUBUYE',
                'sector' => 30208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 3020901,
                'name' => 'BIRUYI',
                'sector' => 30209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 3020902,
                'name' => 'KAGURIRO',
                'sector' => 30209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 3020903,
                'name' => 'MAGABA',
                'sector' => 30209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 3020904,
                'name' => 'RURARA',
                'sector' => 30209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 3021001,
                'name' => 'BUMBA',
                'sector' => 30210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 3021002,
                'name' => 'CYARUSERA',
                'sector' => 30210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 3021003,
                'name' => 'GITWA',
                'sector' => 30210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 3021004,
                'name' => 'MAGERAGERE',
                'sector' => 30210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 3021005,
                'name' => 'SURE',
                'sector' => 30210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 3021101,
                'name' => 'BUSUKU',
                'sector' => 30211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 3021102,
                'name' => 'CYIVUGIZA',
                'sector' => 30211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 3021103,
                'name' => 'MUBUGA',
                'sector' => 30211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 3021104,
                'name' => 'NGOMA',
                'sector' => 30211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 3021105,
                'name' => 'TERIMBERE',
                'sector' => 30211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 3021201,
                'name' => 'GATARE',
                'sector' => 30212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 3021202,
                'name' => 'GIHIRA',
                'sector' => 30212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 3021203,
                'name' => 'KAVUMU',
                'sector' => 30212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 3021204,
                'name' => 'NYAKARERA',
                'sector' => 30212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 3021205,
                'name' => 'RUGASA',
                'sector' => 30212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 3021206,
                'name' => 'RUNDOYI',
                'sector' => 30212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 3021301,
                'name' => 'KABONA',
                'sector' => 30213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 3021302,
                'name' => 'MBERI',
                'sector' => 30213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 3021303,
                'name' => 'REMERA',
                'sector' => 30213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 3021304,
                'name' => 'RURONDE',
                'sector' => 30213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 3030101,
                'name' => 'BURINGO',
                'sector' => 30301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 3030102,
                'name' => 'BUTAKA',
                'sector' => 30301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 3030103,
                'name' => 'HEHU',
                'sector' => 30301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 3030104,
                'name' => 'KABUMBA',
                'sector' => 30301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 3030105,
                'name' => 'MUTOVU',
                'sector' => 30301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 3030106,
                'name' => 'NSHERIMA',
                'sector' => 30301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 3030107,
                'name' => 'RUSIZA',
                'sector' => 30301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 3030201,
                'name' => 'GACURABWENGE',
                'sector' => 30302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 3030202,
                'name' => 'GASIZA',
                'sector' => 30302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 3030203,
                'name' => 'GIHONGA',
                'sector' => 30302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 3030204,
                'name' => 'KAGESHI',
                'sector' => 30302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 3030205,
                'name' => 'MAKORO',
                'sector' => 30302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 3030206,
                'name' => 'NYACYONGA',
                'sector' => 30302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 3030207,
                'name' => 'RUSURA',
                'sector' => 30302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 3030301,
                'name' => 'BUSIGARI',
                'sector' => 30303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 3030302,
                'name' => 'CYANZARWE',
                'sector' => 30303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 3030303,
                'name' => 'GORA',
                'sector' => 30303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 3030304,
                'name' => 'KINYANZOVU',
                'sector' => 30303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 3030305,
                'name' => 'MAKURIZO',
                'sector' => 30303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 3030306,
                'name' => 'RWANGARA',
                'sector' => 30303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 3030307,
                'name' => 'RWANZEKUMA',
                'sector' => 30303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 3030308,
                'name' => 'RYABIZIGE',
                'sector' => 30303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 3030401,
                'name' => 'AMAHORO',
                'sector' => 30304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 3030402,
                'name' => 'BUGOYI',
                'sector' => 30304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 3030403,
                'name' => 'KIVUMU',
                'sector' => 30304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 3030404,
                'name' => 'MBUGANGARI',
                'sector' => 30304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 3030405,
                'name' => 'NENGO',
                'sector' => 30304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 3030406,
                'name' => 'RUBAVU',
                'sector' => 30304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 3030407,
                'name' => 'UMUGANDA',
                'sector' => 30304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 3030501,
                'name' => 'KAMUHOZA',
                'sector' => 30305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 3030502,
                'name' => 'KARAMBO',
                'sector' => 30305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 3030503,
                'name' => 'MAHOKO',
                'sector' => 30305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 3030504,
                'name' => 'MUSABIKE',
                'sector' => 30305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 3030505,
                'name' => 'NKOMANE',
                'sector' => 30305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 3030506,
                'name' => 'RUSONGATI',
                'sector' => 30305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 3030507,
                'name' => 'YUNGWE',
                'sector' => 30305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 3030601,
                'name' => 'KANYIRABIGOGO',
                'sector' => 30306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 3030602,
                'name' => 'KIREREMA',
                'sector' => 30306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 3030603,
                'name' => 'MURAMBA',
                'sector' => 30306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 3030604,
                'name' => 'NYAMIKONGI',
                'sector' => 30306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 3030605,
                'name' => 'NYAMIRANGO',
                'sector' => 30306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 3030606,
                'name' => 'NYARUTEME',
                'sector' => 30306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 3030701,
                'name' => 'BIHUNGWE',
                'sector' => 30307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 3030702,
                'name' => 'KANYUNDO',
                'sector' => 30307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 3030703,
                'name' => 'MICINYIRO',
                'sector' => 30307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 3030704,
                'name' => 'MIRINDI',
                'sector' => 30307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 3030705,
                'name' => 'NDORANYI',
                'sector' => 30307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 3030706,
                'name' => 'RUNGU',
                'sector' => 30307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 3030707,
                'name' => 'RWANYAKAYAGA',
                'sector' => 30307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 3030801,
                'name' => 'BISIZI',
                'sector' => 30308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 3030802,
                'name' => 'GIKOMBE',
                'sector' => 30308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 3030803,
                'name' => 'KANYEFURWE',
                'sector' => 30308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 3030804,
                'name' => 'NYARUSHYAMBA',
                'sector' => 30308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 3030901,
                'name' => 'BURUSHYA',
                'sector' => 30309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 3030902,
                'name' => 'BUSORO',
                'sector' => 30309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 3030903,
                'name' => 'KINIGI',
                'sector' => 30309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 3030904,
                'name' => 'KIRAGA',
                'sector' => 30309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 3030905,
                'name' => 'MUNANIRA',
                'sector' => 30309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 3030906,
                'name' => 'RUBONA',
                'sector' => 30309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 3031001,
                'name' => 'BAHIMBA',
                'sector' => 30310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 3031002,
                'name' => 'GATOVU',
                'sector' => 30310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 3031003,
                'name' => 'KAVOMO',
                'sector' => 30310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 3031004,
                'name' => 'KIGARAMA',
                'sector' => 30310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 3031005,
                'name' => 'MUKONDO',
                'sector' => 30310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 3031006,
                'name' => 'NYUNDO',
                'sector' => 30310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 3031007,
                'name' => 'TERIMBERE',
                'sector' => 30310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 3031101,
                'name' => 'BUHAZA',
                'sector' => 30311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 3031102,
                'name' => 'BURINDA',
                'sector' => 30311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 3031103,
                'name' => 'BYAHI',
                'sector' => 30311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 3031104,
                'name' => 'GIKOMBE',
                'sector' => 30311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 3031105,
                'name' => 'MURAMBI',
                'sector' => 30311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 3031106,
                'name' => 'MURARA',
                'sector' => 30311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 3031107,
                'name' => 'RUKOKO',
                'sector' => 30311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 3031201,
                'name' => 'BASA',
                'sector' => 30312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 3031202,
                'name' => 'GISA',
                'sector' => 30312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 3031203,
                'name' => 'KABILIZI',
                'sector' => 30312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 3031204,
                'name' => 'MUHIRA',
                'sector' => 30312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 3031205,
                'name' => 'RUGERERO',
                'sector' => 30312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 3031206,
                'name' => 'RUSHUBI',
                'sector' => 30312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 3031207,
                'name' => 'RWAZA',
                'sector' => 30312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 3040101,
                'name' => 'ARUSHA',
                'sector' => 30401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 3040102,
                'name' => 'BASUMBA',
                'sector' => 30401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 3040103,
                'name' => 'KIJOTE',
                'sector' => 30401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 3040104,
                'name' => 'KORA',
                'sector' => 30401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 3040105,
                'name' => 'MUHE',
                'sector' => 30401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 3040106,
                'name' => 'REGA',
                'sector' => 30401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 3040201,
                'name' => 'BUKINANYANA',
                'sector' => 30402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 3040202,
                'name' => 'GASIZI',
                'sector' => 30402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 3040203,
                'name' => 'KABATEZI',
                'sector' => 30402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 3040204,
                'name' => 'KAREBA',
                'sector' => 30402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 3040205,
                'name' => 'NYIRAKIGUGU',
                'sector' => 30402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 3040206,
                'name' => 'REGA',
                'sector' => 30402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 3040301,
                'name' => 'GASIZA',
                'sector' => 30403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 3040302,
                'name' => 'GASURA',
                'sector' => 30403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 3040303,
                'name' => 'GISIZI',
                'sector' => 30403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 3040304,
                'name' => 'GURIRO',
                'sector' => 30403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 3040305,
                'name' => 'KAVUMU',
                'sector' => 30403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 3040306,
                'name' => 'NYAMITANZI',
                'sector' => 30403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 3040401,
                'name' => 'BATIKOTI',
                'sector' => 30404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 3040402,
                'name' => 'CYAMVUMBA',
                'sector' => 30404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 3040403,
                'name' => 'GIHORWE',
                'sector' => 30404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 3040404,
                'name' => 'MYUGA',
                'sector' => 30404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 3040405,
                'name' => 'NGANDO',
                'sector' => 30404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 3040406,
                'name' => 'RUGARAMA',
                'sector' => 30404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 3040501,
                'name' => 'BUSORO',
                'sector' => 30405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 3040502,
                'name' => 'CYAMABUYE',
                'sector' => 30405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 3040503,
                'name' => 'GATAGARA',
                'sector' => 30405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 3040504,
                'name' => 'GIHIRWA',
                'sector' => 30405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 3040505,
                'name' => 'KADAHENDA',
                'sector' => 30405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 3040506,
                'name' => 'KARENGERA',
                'sector' => 30405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 3040601,
                'name' => 'GATOVU',
                'sector' => 30406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 3040602,
                'name' => 'KINTOBO',
                'sector' => 30406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 3040603,
                'name' => 'NYAGISOZI',
                'sector' => 30406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 3040604,
                'name' => 'NYAMUGARI',
                'sector' => 30406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 3040605,
                'name' => 'RUKONDO',
                'sector' => 30406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 3040606,
                'name' => 'RYINYO',
                'sector' => 30406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 3040701,
                'name' => 'GASIZI',
                'sector' => 30407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 3040702,
                'name' => 'JABA',
                'sector' => 30407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 3040703,
                'name' => 'KANYOVE',
                'sector' => 30407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 3040704,
                'name' => 'RUBAYA',
                'sector' => 30407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 3040705,
                'name' => 'RUGESHI',
                'sector' => 30407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 3040706,
                'name' => 'RUKOMA',
                'sector' => 30407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 3040707,
                'name' => 'RURENGERI',
                'sector' => 30407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 3040801,
                'name' => 'GISIZI',
                'sector' => 30408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 3040802,
                'name' => 'MULINGA',
                'sector' => 30408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 3040803,
                'name' => 'MWIYANIKE',
                'sector' => 30408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 3040804,
                'name' => 'NKOMANE',
                'sector' => 30408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 3040805,
                'name' => 'NYAMASHEKE',
                'sector' => 30408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 3040806,
                'name' => 'RWANTOBO',
                'sector' => 30408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 3040901,
                'name' => 'BIREMBO',
                'sector' => 30409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 3040902,
                'name' => 'GURIRO',
                'sector' => 30409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 3040903,
                'name' => 'KIBISABO',
                'sector' => 30409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 3040904,
                'name' => 'MUTAHO',
                'sector' => 30409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 3040905,
                'name' => 'NYUNDO',
                'sector' => 30409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 3040906,
                'name' => 'RUGAMBA',
                'sector' => 30409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 3041001,
                'name' => 'GAKORO',
                'sector' => 30410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 3041002,
                'name' => 'MARANGARA',
                'sector' => 30410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 3041003,
                'name' => 'NYAGAHONDO',
                'sector' => 30410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 3041004,
                'name' => 'NYARUTEMBE',
                'sector' => 30410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 3041005,
                'name' => 'RUREMBO',
                'sector' => 30410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 3041006,
                'name' => 'TYAZO',
                'sector' => 30410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 3041101,
                'name' => 'GAHONDO',
                'sector' => 30411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 3041102,
                'name' => 'GITEGA',
                'sector' => 30411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 3041103,
                'name' => 'KIRIMBOGO',
                'sector' => 30411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 3041104,
                'name' => 'MURAMBI',
                'sector' => 30411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 3041105,
                'name' => 'MWANA',
                'sector' => 30411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 3041106,
                'name' => 'RWAZA',
                'sector' => 30411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 3041201,
                'name' => 'CYIMANZOVU',
                'sector' => 30412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 3041202,
                'name' => 'KANYAMITANA',
                'sector' => 30412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 3041203,
                'name' => 'KINTARURE',
                'sector' => 30412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 3041204,
                'name' => 'MPINGA',
                'sector' => 30412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 3041205,
                'name' => 'MUTANDA',
                'sector' => 30412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 3041206,
                'name' => 'SHAKI',
                'sector' => 30412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 3050101,
                'name' => 'BUNGWE',
                'sector' => 30501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 3050102,
                'name' => 'CYAHAFI',
                'sector' => 30501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 3050103,
                'name' => 'GASHUBI',
                'sector' => 30501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 3050104,
                'name' => 'KABARONDO',
                'sector' => 30501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cells')->insert(array (
            0 => 
            array (
                'id' => 3050105,
                'name' => 'RUHINDAGE',
                'sector' => 30501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3050201,
                'name' => 'CYOME',
                'sector' => 30502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3050202,
                'name' => 'GATSIBO',
                'sector' => 30502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 3050203,
                'name' => 'KAMASIGA',
                'sector' => 30502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 3050204,
                'name' => 'KARAMBO',
                'sector' => 30502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 3050205,
                'name' => 'RUHANGA',
                'sector' => 30502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 3050206,
                'name' => 'RUSUMO',
                'sector' => 30502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 3050301,
                'name' => 'GATARE',
                'sector' => 30503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 3050302,
                'name' => 'GATEGA',
                'sector' => 30503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 3050303,
                'name' => 'KAJINGE',
                'sector' => 30503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 3050304,
                'name' => 'MARANTIMA',
                'sector' => 30503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 3050305,
                'name' => 'RUGENDABARI',
                'sector' => 30503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 3050306,
                'name' => 'RUNYINYA',
                'sector' => 30503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 3050401,
                'name' => 'BUSUNZU',
                'sector' => 30504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 3050402,
                'name' => 'GASEKE',
                'sector' => 30504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 3050403,
                'name' => 'KABAYA',
                'sector' => 30504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 3050404,
                'name' => 'MWENDO',
                'sector' => 30504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 3050405,
                'name' => 'NGOMA',
                'sector' => 30504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 3050406,
                'name' => 'NYENYERI',
                'sector' => 30504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 3050501,
                'name' => 'KAGESHI',
                'sector' => 30505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 3050502,
                'name' => 'KIRWA',
                'sector' => 30505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 3050503,
                'name' => 'MUKORE',
                'sector' => 30505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 3050504,
                'name' => 'MURAMBA',
                'sector' => 30505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 3050505,
                'name' => 'NYAMATA',
                'sector' => 30505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 3050506,
                'name' => 'RWAMAMARA',
                'sector' => 30505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 3050601,
                'name' => 'BIREMBO',
                'sector' => 30506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 3050602,
                'name' => 'GITWA',
                'sector' => 30506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 3050603,
                'name' => 'MURINZI',
                'sector' => 30506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 3050604,
                'name' => 'NYAMUGEYO',
                'sector' => 30506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 3050605,
                'name' => 'RUGESHI',
                'sector' => 30506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 3050606,
                'name' => 'TETERO',
                'sector' => 30506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 3050701,
                'name' => 'BINANA',
                'sector' => 30507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 3050702,
                'name' => 'GITEGA',
                'sector' => 30507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 3050703,
                'name' => 'MATARE',
                'sector' => 30507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 3050704,
                'name' => 'RUTARE',
                'sector' => 30507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 3050705,
                'name' => 'RWAMIKO',
                'sector' => 30507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 3050801,
                'name' => 'BUGARURA',
                'sector' => 30508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 3050802,
                'name' => 'GASIZA',
                'sector' => 30508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 3050803,
                'name' => 'MASHYA',
                'sector' => 30508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 3050804,
                'name' => 'NGANZO',
                'sector' => 30508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 3050805,
                'name' => 'NGOMA',
                'sector' => 30508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 3050806,
                'name' => 'RUTAGARA',
                'sector' => 30508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 3050901,
                'name' => 'BWERAMANA',
                'sector' => 30509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 3050902,
                'name' => 'MUBUGA',
                'sector' => 30509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 3050903,
                'name' => 'MYIHA',
                'sector' => 30509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 3050904,
                'name' => 'RUGOGWE',
                'sector' => 30509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 3050905,
                'name' => 'RUSORORO',
                'sector' => 30509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 3050906,
                'name' => 'SANZA',
                'sector' => 30509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 3051001,
                'name' => 'BIJYOJYO',
                'sector' => 30510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 3051002,
                'name' => 'BITABAGE',
                'sector' => 30510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 3051003,
                'name' => 'KABAGESHI',
                'sector' => 30510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 3051004,
                'name' => 'KIBANDA',
                'sector' => 30510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 3051005,
                'name' => 'KINYOVI',
                'sector' => 30510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 3051101,
                'name' => 'KASEKE',
                'sector' => 30511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 3051102,
                'name' => 'KAZABE',
                'sector' => 30511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 3051103,
                'name' => 'MUGANO',
                'sector' => 30511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 3051104,
                'name' => 'NYANGE',
                'sector' => 30511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 3051105,
                'name' => 'RUSUSA',
                'sector' => 30511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 3051106,
                'name' => 'TORERO',
                'sector' => 30511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 3051201,
                'name' => 'BAMBIRO',
                'sector' => 30512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 3051202,
                'name' => 'GASEKE',
                'sector' => 30512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 3051203,
                'name' => 'NSIBO',
                'sector' => 30512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 3051204,
                'name' => 'VUGANYANA',
                'sector' => 30512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 3051301,
                'name' => 'BIREMBO',
                'sector' => 30513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 3051302,
                'name' => 'KAGANO',
                'sector' => 30513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 3051303,
                'name' => 'KANYANA',
                'sector' => 30513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 3051304,
                'name' => 'MUSENYI',
                'sector' => 30513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 3051305,
                'name' => 'NYABIPFURA',
                'sector' => 30513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 3051306,
                'name' => 'RUTOVU',
                'sector' => 30513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 3060101,
                'name' => 'NYANGE',
                'sector' => 30601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 3060102,
                'name' => 'PERA',
                'sector' => 30601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 3060103,
                'name' => 'RYANKANA',
                'sector' => 30601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 3060201,
                'name' => 'BUTANDA',
                'sector' => 30602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 3060202,
                'name' => 'GATERERI',
                'sector' => 30602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 3060203,
                'name' => 'NYAMIHANDA',
                'sector' => 30602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 3060204,
                'name' => 'RWAMBOGO',
                'sector' => 30602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 3060301,
                'name' => 'GIKUNGU',
                'sector' => 30603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 3060302,
                'name' => 'KIYABO',
                'sector' => 30603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 3060303,
                'name' => 'MURWA',
                'sector' => 30603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 3060304,
                'name' => 'NYAMUZI',
                'sector' => 30603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 3060305,
                'name' => 'RASANO',
                'sector' => 30603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 3060401,
                'name' => 'BIREMBO',
                'sector' => 30604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 3060402,
                'name' => 'BUHOKORO',
                'sector' => 30604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 3060403,
                'name' => 'KABAKOBWA',
                'sector' => 30604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 3060404,
                'name' => 'KACYUMA',
                'sector' => 30604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 3060405,
                'name' => 'KAMUREHE',
                'sector' => 30604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 3060406,
                'name' => 'KAREMEREYE',
                'sector' => 30604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 3060407,
                'name' => 'MUTI',
                'sector' => 30604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 3060408,
                'name' => 'RUSAYO',
                'sector' => 30604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 3060501,
                'name' => 'CYENDAJURU',
                'sector' => 30605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 3060502,
                'name' => 'GAKOMEYE',
                'sector' => 30605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 3060503,
                'name' => 'GIHEKE',
                'sector' => 30605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 3060504,
                'name' => 'KAMASHANGI',
                'sector' => 30605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 3060505,
                'name' => 'KIGENGE',
                'sector' => 30605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 3060506,
                'name' => 'NTURA',
                'sector' => 30605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 3060507,
                'name' => 'RWEGA',
                'sector' => 30605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 3060508,
                'name' => 'TURAMBI',
                'sector' => 30605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 3060601,
                'name' => 'BURUNGA',
                'sector' => 30606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 3060602,
                'name' => 'GATSIRO',
                'sector' => 30606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 3060603,
                'name' => 'GIHAYA',
                'sector' => 30606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 3060604,
                'name' => 'KAGARA',
                'sector' => 30606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 3060605,
                'name' => 'KAMATITA',
                'sector' => 30606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 3060606,
                'name' => 'SHAGASHA',
                'sector' => 30606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 3060701,
                'name' => 'KIZURA',
                'sector' => 30607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 3060702,
                'name' => 'MPINGA',
                'sector' => 30607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 3060703,
                'name' => 'NYAMIGINA',
                'sector' => 30607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 3060801,
                'name' => 'CYINGWA',
                'sector' => 30608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 3060802,
                'name' => 'GAHUNGERI',
                'sector' => 30608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 3060803,
                'name' => 'HANGABASHI',
                'sector' => 30608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 3060804,
                'name' => 'MASHESHA',
                'sector' => 30608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 3060901,
                'name' => 'CYANGUGU',
                'sector' => 30609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 3060902,
                'name' => 'GIHUNDWE',
                'sector' => 30609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 3060903,
                'name' => 'KAMASHANGI',
                'sector' => 30609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 3060904,
                'name' => 'KAMURERA',
                'sector' => 30609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 3060905,
                'name' => 'RUGANDA',
                'sector' => 30609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 3061001,
                'name' => 'CYARUKARA',
                'sector' => 30610,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 3061002,
                'name' => 'GAKONI',
                'sector' => 30610,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 3061003,
                'name' => 'SHARA',
                'sector' => 30610,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 3061101,
                'name' => 'GAHINGA',
                'sector' => 30611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 3061102,
                'name' => 'KABAHINDA',
                'sector' => 30611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 3061103,
                'name' => 'KABASIGIRIRA',
                'sector' => 30611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 3061104,
                'name' => 'KAGARAMA',
                'sector' => 30611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 3061105,
                'name' => 'KARAMBI',
                'sector' => 30611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 3061106,
                'name' => 'MIKO',
                'sector' => 30611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 3061107,
                'name' => 'TARA',
                'sector' => 30611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 3061201,
                'name' => 'GITWA',
                'sector' => 30612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 3061202,
                'name' => 'KAMANYENGA',
                'sector' => 30612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 3061203,
                'name' => 'KANGAZI',
                'sector' => 30612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 3061204,
                'name' => 'KINYAGA',
                'sector' => 30612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 3061205,
                'name' => 'RUGABANO',
                'sector' => 30612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 3061301,
                'name' => 'BIGOGA',
                'sector' => 30613,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 3061302,
                'name' => 'BUGARURA',
                'sector' => 30613,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 3061303,
                'name' => 'ISHYWA',
                'sector' => 30613,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 3061304,
                'name' => 'KAMAGIMBO',
                'sector' => 30613,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 3061305,
                'name' => 'RWENJE',
                'sector' => 30613,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 3061401,
                'name' => 'GATARE',
                'sector' => 30614,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 3061402,
                'name' => 'KIZIGURO',
                'sector' => 30614,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 3061403,
                'name' => 'MATABA',
                'sector' => 30614,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 3061404,
                'name' => 'RYAMUHIRWA',
                'sector' => 30614,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 3061501,
                'name' => 'GASEBEYA',
                'sector' => 30615,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 3061502,
                'name' => 'GASEKE',
                'sector' => 30615,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 3061503,
                'name' => 'KAMANU',
                'sector' => 30615,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 3061504,
                'name' => 'KIZIHO',
                'sector' => 30615,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 3061505,
                'name' => 'MASHYUZA',
                'sector' => 30615,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 3061506,
                'name' => 'NYABINTARE',
                'sector' => 30615,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 3061601,
                'name' => 'GATARE',
                'sector' => 30616,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 3061602,
                'name' => 'KABAGINA',
                'sector' => 30616,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 3061603,
                'name' => 'KABUYE',
                'sector' => 30616,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 3061604,
                'name' => 'KANOGA',
                'sector' => 30616,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 3061605,
                'name' => 'KARANGIRO',
                'sector' => 30616,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 3061606,
                'name' => 'MURAMBI',
                'sector' => 30616,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 3061607,
                'name' => 'RUSAMBU',
                'sector' => 30616,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 3061701,
                'name' => 'BUTAMBAMO',
                'sector' => 30617,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 3061702,
                'name' => 'KIGENGE',
                'sector' => 30617,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 3061703,
                'name' => 'MURYA',
                'sector' => 30617,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 3061704,
                'name' => 'NYENJI',
                'sector' => 30617,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 3061705,
                'name' => 'REBERO',
                'sector' => 30617,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 3061706,
                'name' => 'RWINZUKI',
                'sector' => 30617,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 3061801,
                'name' => 'KARENGE',
                'sector' => 30618,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 3061802,
                'name' => 'MUHEHWE',
                'sector' => 30618,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 3061803,
                'name' => 'MUSHAKA',
                'sector' => 30618,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 3061804,
                'name' => 'RUBUGU',
                'sector' => 30618,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 3061805,
                'name' => 'RUGANDA',
                'sector' => 30618,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 3070101,
                'name' => 'BUVUNGIRA',
                'sector' => 30701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 3070102,
                'name' => 'MPUMBU',
                'sector' => 30701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 3070103,
                'name' => 'NGOMA',
                'sector' => 30701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 3070104,
                'name' => 'NYARUSANGE',
                'sector' => 30701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 3070201,
                'name' => 'GASHEKE',
                'sector' => 30702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 3070202,
                'name' => 'IMPALA',
                'sector' => 30702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 3070203,
                'name' => 'KAGATAMU',
                'sector' => 30702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 3070204,
                'name' => 'KARUSIMBI',
                'sector' => 30702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 3070301,
                'name' => 'BISUMO',
                'sector' => 30703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 3070302,
                'name' => 'MURAMBI',
                'sector' => 30703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 3070303,
                'name' => 'MUTONGO',
                'sector' => 30703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 3070304,
                'name' => 'RUGARI',
                'sector' => 30703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 3070401,
                'name' => 'BUTARE',
                'sector' => 30704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 3070402,
                'name' => 'GITWA',
                'sector' => 30704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 3070403,
                'name' => 'JARAMA',
                'sector' => 30704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 3070404,
                'name' => 'KIBINGO',
                'sector' => 30704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 3070405,
                'name' => 'MUBUGA',
                'sector' => 30704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 3070501,
                'name' => 'GAKO',
                'sector' => 30705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 3070502,
                'name' => 'MUBUMBANO',
                'sector' => 30705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 3070503,
                'name' => 'NINZI',
                'sector' => 30705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 3070504,
                'name' => 'RWESERO',
                'sector' => 30705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 3070505,
                'name' => 'SHARA',
                'sector' => 30705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 3070601,
                'name' => 'KIBOGORA',
                'sector' => 30706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 3070602,
                'name' => 'KIGARAMA',
                'sector' => 30706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 3070603,
                'name' => 'KIGOYA',
                'sector' => 30706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 3070604,
                'name' => 'RARO',
                'sector' => 30706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 3070605,
                'name' => 'SUSA',
                'sector' => 30706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 3070701,
                'name' => 'GASOVU',
                'sector' => 30707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 3070702,
                'name' => 'GITWE',
                'sector' => 30707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 3070703,
                'name' => 'KABUGA',
                'sector' => 30707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 3070704,
                'name' => 'KAGARAMA',
                'sector' => 30707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 3070705,
                'name' => 'RUSHYARARA',
                'sector' => 30707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 3070801,
                'name' => 'GASAYO',
                'sector' => 30708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 3070802,
                'name' => 'GASHASHI',
                'sector' => 30708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 3070803,
                'name' => 'HIGIRO',
                'sector' => 30708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 3070804,
                'name' => 'MIKO',
                'sector' => 30708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 3070805,
                'name' => 'MWEZI',
                'sector' => 30708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 3070901,
                'name' => 'CYIMPINDU',
                'sector' => 30709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 3070902,
                'name' => 'KARENGERA',
                'sector' => 30709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 3070903,
                'name' => 'MUHORORO',
                'sector' => 30709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 3070904,
                'name' => 'NYARUSANGE',
                'sector' => 30709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 3071001,
                'name' => 'GATARE',
                'sector' => 30710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 3071002,
                'name' => 'MUTONGO',
                'sector' => 30710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 3071003,
                'name' => 'NYAKABINGO',
                'sector' => 30710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 3071004,
                'name' => 'RUGARI',
                'sector' => 30710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 3071005,
                'name' => 'VUGANGOMA',
                'sector' => 30710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 3071101,
                'name' => 'GISOKE',
                'sector' => 30711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 3071102,
                'name' => 'KAGARAMA',
                'sector' => 30711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 3071103,
                'name' => 'NYAGATARE',
                'sector' => 30711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 3071104,
                'name' => 'NYAKAVUMU',
                'sector' => 30711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 3071201,
                'name' => 'KIGABIRO',
                'sector' => 30712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 3071202,
                'name' => 'KINUNGA',
                'sector' => 30712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 3071203,
                'name' => 'MARIBA',
                'sector' => 30712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 3071204,
                'name' => 'MUYANGE',
                'sector' => 30712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 3071205,
                'name' => 'NTANGO',
                'sector' => 30712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 3071301,
                'name' => 'BANDA',
                'sector' => 30713,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 3071302,
                'name' => 'GAKENKE',
                'sector' => 30713,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 3071303,
                'name' => 'JURWE',
                'sector' => 30713,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 3071304,
                'name' => 'MURAMBI',
                'sector' => 30713,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 3071401,
                'name' => 'KANAZI',
                'sector' => 30714,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 3071402,
                'name' => 'NTENDEZI',
                'sector' => 30714,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 3071403,
                'name' => 'SAVE',
                'sector' => 30714,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 3071404,
                'name' => 'WIMANA',
                'sector' => 30714,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 3071501,
                'name' => 'BURIMBA',
                'sector' => 30715,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 3071502,
                'name' => 'MATABA',
                'sector' => 30715,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 3071503,
                'name' => 'MUGERA',
                'sector' => 30715,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 3071504,
                'name' => 'NYAMUGARI',
                'sector' => 30715,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 3071505,
                'name' => 'SHANGI',
                'sector' => 30715,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 4010101,
                'name' => 'CYOHOHA',
                'sector' => 40101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 4010102,
                'name' => 'GITARE',
                'sector' => 40101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 4010103,
                'name' => 'RWAMAHWA',
                'sector' => 40101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 4010201,
                'name' => 'BUTANGAMPUNDU',
                'sector' => 40102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 4010202,
                'name' => 'KARENGERI',
                'sector' => 40102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 4010203,
                'name' => 'TABA',
                'sector' => 40102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 4010301,
                'name' => 'GASIZA',
                'sector' => 40103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 4010302,
                'name' => 'GIKO',
                'sector' => 40103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 4010303,
                'name' => 'KAYENZI',
                'sector' => 40103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 4010304,
                'name' => 'MUKOTO',
                'sector' => 40103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 4010305,
                'name' => 'NYIRANGARAMA',
                'sector' => 40103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 4010401,
                'name' => 'BUSORO',
                'sector' => 40104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 4010402,
                'name' => 'BUTARE',
                'sector' => 40104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 4010403,
                'name' => 'GAHORORO',
                'sector' => 40104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 4010404,
                'name' => 'GITUMBA',
                'sector' => 40104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 4010405,
                'name' => 'KARAMA',
                'sector' => 40104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 4010406,
                'name' => 'MWUMBA',
                'sector' => 40104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 4010407,
                'name' => 'NDARAGE',
                'sector' => 40104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 4010501,
                'name' => 'BUDAKIRANYA',
                'sector' => 40105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 4010502,
                'name' => 'MIGENDEZO',
                'sector' => 40105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 4010503,
                'name' => 'RUDOGO',
                'sector' => 40105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 4010601,
                'name' => 'BUREHE',
                'sector' => 40106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 4010602,
                'name' => 'MAREMBO',
                'sector' => 40106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 4010603,
                'name' => 'RWILI',
                'sector' => 40106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 4010701,
                'name' => 'BUTUNZI',
                'sector' => 40107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 4010702,
                'name' => 'KAREGAMAZI',
                'sector' => 40107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 4010703,
                'name' => 'MAREMBO',
                'sector' => 40107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 4010704,
                'name' => 'REBERO',
                'sector' => 40107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 4010801,
                'name' => 'GITATSA',
                'sector' => 40108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 4010802,
                'name' => 'KAMUSHENYI',
                'sector' => 40108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 4010803,
                'name' => 'KIGARAMA',
                'sector' => 40108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 4010804,
                'name' => 'MUBUGA',
                'sector' => 40108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 4010805,
                'name' => 'MURAMA',
                'sector' => 40108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 4010806,
                'name' => 'SAYO',
                'sector' => 40108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 4010901,
                'name' => 'KABUGA',
                'sector' => 40109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 4010902,
                'name' => 'KIGARAMA',
                'sector' => 40109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 4010903,
                'name' => 'KIVUGIZA',
                'sector' => 40109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 4010904,
                'name' => 'NYAMYUMBA',
                'sector' => 40109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 4010905,
                'name' => 'SHENGAMPULI',
                'sector' => 40109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 4011001,
                'name' => 'BUKORO',
                'sector' => 40110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 4011002,
                'name' => 'MUSHARI',
                'sector' => 40110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 4011003,
                'name' => 'NGIRAMAZI',
                'sector' => 40110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 4011004,
                'name' => 'RURENGE',
                'sector' => 40110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 4011101,
                'name' => 'BUBANGU',
                'sector' => 40111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 4011102,
                'name' => 'GATWA',
                'sector' => 40111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 4011103,
                'name' => 'MUGAMBAZI',
                'sector' => 40111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 4011104,
                'name' => 'MVUZO',
                'sector' => 40111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 4011201,
                'name' => 'KABUGA',
                'sector' => 40112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 4011202,
                'name' => 'KARAMBO',
                'sector' => 40112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 4011203,
                'name' => 'MUGOTE',
                'sector' => 40112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 4011204,
                'name' => 'MUNYARWANDA',
                'sector' => 40112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 4011301,
                'name' => 'KAJEVUBA',
                'sector' => 40113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 4011302,
                'name' => 'KIYANZA',
                'sector' => 40113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 4011303,
                'name' => 'MAHAZA',
                'sector' => 40113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 4011401,
                'name' => 'BURARO',
                'sector' => 40114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 4011402,
                'name' => 'BWIMO',
                'sector' => 40114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 4011403,
                'name' => 'MBERUKA',
                'sector' => 40114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 4011404,
                'name' => 'MBUYE',
                'sector' => 40114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 4011501,
                'name' => 'GAKO',
                'sector' => 40115,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 4011502,
                'name' => 'KIRENGE',
                'sector' => 40115,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 4011503,
                'name' => 'TABA',
                'sector' => 40115,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 4011601,
                'name' => 'BUGARAGARA',
                'sector' => 40116,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 4011602,
                'name' => 'KIJABAGWE',
                'sector' => 40116,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 4011603,
                'name' => 'MUVUMU',
                'sector' => 40116,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 4011604,
                'name' => 'RUBONA',
                'sector' => 40116,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 4011605,
                'name' => 'RUTONDE',
                'sector' => 40116,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 4011701,
                'name' => 'BARARI',
                'sector' => 40117,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 4011702,
                'name' => 'GAHABWA',
                'sector' => 40117,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 4011703,
                'name' => 'MISEZERO',
                'sector' => 40117,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 4011704,
                'name' => 'NYIRABIRORI',
                'sector' => 40117,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 4011705,
                'name' => 'TABA',
                'sector' => 40117,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 4020101,
                'name' => 'BIRAMBO',
                'sector' => 40201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 4020102,
                'name' => 'BUTERERI',
                'sector' => 40201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 4020103,
                'name' => 'BYIBUHIRO',
                'sector' => 40201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 4020104,
                'name' => 'KAMINA',
                'sector' => 40201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 4020105,
                'name' => 'KIRABO',
                'sector' => 40201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 4020106,
                'name' => 'MWUMBA',
                'sector' => 40201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 4020107,
                'name' => 'RUHANGA',
                'sector' => 40201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 4020201,
                'name' => 'KIRUKU',
                'sector' => 40202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 4020202,
                'name' => 'MBIRIMA',
                'sector' => 40202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 4020203,
                'name' => 'NYANGE',
                'sector' => 40202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 4020204,
                'name' => 'NYANZA',
                'sector' => 40202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 4020301,
                'name' => 'MUHAZA',
                'sector' => 40203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 4020302,
                'name' => 'MUHORORO',
                'sector' => 40203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 4020303,
                'name' => 'MURAMBA',
                'sector' => 40203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 4020304,
                'name' => 'MUTANDA',
                'sector' => 40203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 4020305,
                'name' => 'RUKORE',
                'sector' => 40203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 4020401,
                'name' => 'BUHETA',
                'sector' => 40204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 4020402,
                'name' => 'KAGOMA',
                'sector' => 40204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 4020403,
                'name' => 'NGANZO',
                'sector' => 40204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 4020404,
                'name' => 'RUSAGARA',
                'sector' => 40204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 4020501,
                'name' => 'NYACYINA',
                'sector' => 40205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 4020502,
                'name' => 'RUKURA',
                'sector' => 40205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 4020503,
                'name' => 'RUTABO',
                'sector' => 40205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 4020504,
                'name' => 'RUTENDERI',
                'sector' => 40205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 4020505,
                'name' => 'TABA',
                'sector' => 40205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 4020601,
                'name' => 'GAKINDO',
                'sector' => 40206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 4020602,
                'name' => 'GASHYAMBA',
                'sector' => 40206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 4020603,
                'name' => 'GATWA',
                'sector' => 40206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 4020604,
                'name' => 'KARUKUNGU',
                'sector' => 40206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 4020701,
                'name' => 'KAMUBUGA',
                'sector' => 40207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 4020702,
                'name' => 'KIDOMO',
                'sector' => 40207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 4020703,
                'name' => 'MBATABATA',
                'sector' => 40207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 4020704,
                'name' => 'RUKORE',
                'sector' => 40207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 4020801,
                'name' => 'KANYANZA',
                'sector' => 40208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 4020802,
                'name' => 'KARAMBO',
                'sector' => 40208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 4020803,
                'name' => 'KIREBE',
                'sector' => 40208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 4020901,
                'name' => 'CYINTARE',
                'sector' => 40209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 4020902,
                'name' => 'GASIZA',
                'sector' => 40209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 4020903,
                'name' => 'RUGIMBU',
                'sector' => 40209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 4020904,
                'name' => 'RUHINGA',
                'sector' => 40209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 4020905,
                'name' => 'SERERI',
                'sector' => 40209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 4021001,
                'name' => 'BUYANGE',
                'sector' => 40210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 4021002,
                'name' => 'GIKOMBE',
                'sector' => 40210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 4021003,
                'name' => 'NYUNDO',
                'sector' => 40210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 4021101,
                'name' => 'GASIHO',
                'sector' => 40211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 4021102,
                'name' => 'MUNYANA',
                'sector' => 40211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 4021103,
                'name' => 'MURAMBI',
                'sector' => 40211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 4021104,
                'name' => 'RABA',
                'sector' => 40211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 4021201,
                'name' => 'GAHINGA',
                'sector' => 40212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 4021202,
                'name' => 'MUNYANA',
                'sector' => 40212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 4021203,
                'name' => 'MUTEGO',
                'sector' => 40212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 4021204,
                'name' => 'NKOMANE',
                'sector' => 40212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 4021205,
                'name' => 'RUTABO',
                'sector' => 40212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 4021206,
                'name' => 'RUTENDERI',
                'sector' => 40212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 4021207,
                'name' => 'RWAMAMBE',
                'sector' => 40212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 4021301,
                'name' => 'BUSAKE',
                'sector' => 40213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 4021302,
                'name' => 'BWENDA',
                'sector' => 40213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 4021303,
                'name' => 'GASIZA',
                'sector' => 40213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 4021304,
                'name' => 'GIHINGA',
                'sector' => 40213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 4021305,
                'name' => 'HURO',
                'sector' => 40213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 4021306,
                'name' => 'MUSAGARA',
                'sector' => 40213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 4021307,
                'name' => 'MUSENYI',
                'sector' => 40213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 4021308,
                'name' => 'RUGANDA',
                'sector' => 40213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 4021309,
                'name' => 'RWINKUBA',
                'sector' => 40213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 4021401,
                'name' => 'BUMBA',
                'sector' => 40214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 4021402,
                'name' => 'GISIZA',
                'sector' => 40214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 4021403,
                'name' => 'KARYANGO',
                'sector' => 40214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 4021404,
                'name' => 'NGANZO',
                'sector' => 40214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 4021405,
                'name' => 'VA',
                'sector' => 40214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 4021501,
                'name' => 'KABATEZI',
                'sector' => 40215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 4021502,
                'name' => 'KIRYAMO',
                'sector' => 40215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 4021503,
                'name' => 'MUBUGA',
                'sector' => 40215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 4021504,
                'name' => 'MWIYANDO',
                'sector' => 40215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 4021505,
                'name' => 'RWA',
                'sector' => 40215,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 4021601,
                'name' => 'BURANGA',
                'sector' => 40216,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 4021602,
                'name' => 'GAHINGA',
                'sector' => 40216,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 4021603,
                'name' => 'GISOZI',
                'sector' => 40216,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 4021604,
                'name' => 'MUCACA',
                'sector' => 40216,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 4021701,
                'name' => 'BUSORO',
                'sector' => 40217,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 4021702,
                'name' => 'GIKINGO',
                'sector' => 40217,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 4021703,
                'name' => 'JANGO',
                'sector' => 40217,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 4021704,
                'name' => 'RULI',
                'sector' => 40217,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 4021705,
                'name' => 'RWESERO',
                'sector' => 40217,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 4021801,
                'name' => 'GATABA',
                'sector' => 40218,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 4021802,
                'name' => 'KAMONYI',
                'sector' => 40218,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 4021803,
                'name' => 'MURAMBI',
                'sector' => 40218,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 4021804,
                'name' => 'NYUNDO',
                'sector' => 40218,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 4021805,
                'name' => 'RUMBI',
                'sector' => 40218,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 4021806,
                'name' => 'RUREMBO',
                'sector' => 40218,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 4021901,
                'name' => 'BURIMBA',
                'sector' => 40219,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 4021902,
                'name' => 'BUSANANE',
                'sector' => 40219,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 4021903,
                'name' => 'JOMA',
                'sector' => 40219,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 4021904,
                'name' => 'KAGEYO',
                'sector' => 40219,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 4021905,
                'name' => 'MBOGO',
                'sector' => 40219,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 4021906,
                'name' => 'RAZI',
                'sector' => 40219,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 4021907,
                'name' => 'RWANKUBA',
                'sector' => 40219,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 4021908,
                'name' => 'SHYOMBWE',
                'sector' => 40219,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 4030101,
                'name' => 'GISESERO',
                'sector' => 40301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 4030102,
                'name' => 'KAVUMU',
                'sector' => 40301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 4030103,
                'name' => 'NYAGISOZI',
                'sector' => 40301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 4030104,
                'name' => 'SAHARA',
                'sector' => 40301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 4030201,
                'name' => 'BUKINANYANA',
                'sector' => 40302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 4030202,
                'name' => 'BURUBA',
                'sector' => 40302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 4030203,
                'name' => 'CYANYA',
                'sector' => 40302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 4030204,
                'name' => 'KABEZA',
                'sector' => 40302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 4030205,
                'name' => 'MIGESHI',
                'sector' => 40302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 4030206,
                'name' => 'RWEBEYA',
                'sector' => 40302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 4030301,
                'name' => 'GAKORO',
                'sector' => 40303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 4030302,
                'name' => 'GASAKUZA',
                'sector' => 40303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 4030303,
                'name' => 'KABIRIZI',
                'sector' => 40303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 4030304,
                'name' => 'KARWASA',
                'sector' => 40303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 4030401,
                'name' => 'KIGABIRO',
                'sector' => 40304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 4030402,
                'name' => 'KIVUMU',
                'sector' => 40304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 4030403,
                'name' => 'MBWE',
                'sector' => 40304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 4030404,
                'name' => 'MUHARURO',
                'sector' => 40304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 4030501,
                'name' => 'MUDAKAMA',
                'sector' => 40305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 4030502,
                'name' => 'MURAGO',
                'sector' => 40305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 4030503,
                'name' => 'RUBINDI',
                'sector' => 40305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 4030504,
                'name' => 'RUNGU',
                'sector' => 40305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 4030601,
                'name' => 'BIRIRA',
                'sector' => 40306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 4030602,
                'name' => 'BURAMIRA',
                'sector' => 40306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 4030603,
                'name' => 'KIVUMU',
                'sector' => 40306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 4030604,
                'name' => 'MBIZI',
                'sector' => 40306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 4030701,
                'name' => 'BISOKE',
                'sector' => 40307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 4030702,
                'name' => 'KAGUHU',
                'sector' => 40307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 4030703,
                'name' => 'KAMPANGA',
                'sector' => 40307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 4030704,
                'name' => 'NYABIGOMA',
                'sector' => 40307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 4030705,
                'name' => 'NYONIRIMA',
                'sector' => 40307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 4030801,
                'name' => 'CYABARARIKA',
                'sector' => 40308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 4030802,
                'name' => 'KIGOMBE',
                'sector' => 40308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 4030803,
                'name' => 'MPENGE',
                'sector' => 40308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 4030804,
                'name' => 'RUHENGERI',
                'sector' => 40308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 4030901,
                'name' => 'CYIVUGIZA',
                'sector' => 40309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 4030902,
                'name' => 'CYOGO',
                'sector' => 40309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 4030903,
                'name' => 'MBURABUTURO',
                'sector' => 40309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 4030904,
                'name' => 'SONGA',
                'sector' => 40309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 4031001,
                'name' => 'CYABAGARURA',
                'sector' => 40310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 4031002,
                'name' => 'GARUKA',
                'sector' => 40310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 4031003,
                'name' => 'KABAZUNGU',
                'sector' => 40310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 4031004,
                'name' => 'NYARUBUYE',
                'sector' => 40310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 4031005,
                'name' => 'RWAMBOGO',
                'sector' => 40310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 4031101,
                'name' => 'BIKARA',
                'sector' => 40311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 4031102,
                'name' => 'GASHINGA',
                'sector' => 40311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 4031103,
                'name' => 'MUBAGO',
                'sector' => 40311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 4031104,
                'name' => 'RUGESHI',
                'sector' => 40311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 4031105,
                'name' => 'RUYUMBA',
                'sector' => 40311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 4031201,
                'name' => 'CYIVUGIZA',
                'sector' => 40312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 4031202,
                'name' => 'KABEZA',
                'sector' => 40312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 4031203,
                'name' => 'KAMWUMBA',
                'sector' => 40312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 4031204,
                'name' => 'MUHABURA',
                'sector' => 40312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 4031205,
                'name' => 'NINDA',
                'sector' => 40312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 4031301,
                'name' => 'GASONGERO',
                'sector' => 40313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 4031302,
                'name' => 'KAMISAVE',
                'sector' => 40313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 4031303,
                'name' => 'MURANDI',
                'sector' => 40313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 4031304,
                'name' => 'MURWA',
                'sector' => 40313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 4031305,
                'name' => 'RURAMBO',
                'sector' => 40313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 4031401,
                'name' => 'BUMARA',
                'sector' => 40314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 4031402,
                'name' => 'KABUSHINGE',
                'sector' => 40314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 4031403,
                'name' => 'MUSEZERO',
                'sector' => 40314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 4031404,
                'name' => 'NTURO',
                'sector' => 40314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 4031405,
                'name' => 'NYARUBUYE',
                'sector' => 40314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 4031501,
                'name' => 'GAKINGO',
                'sector' => 40315,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 4031502,
                'name' => 'KIBUGUZO',
                'sector' => 40315,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 4031503,
                'name' => 'MUDENDE',
                'sector' => 40315,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 4031504,
                'name' => 'MUGARI',
                'sector' => 40315,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 4040101,
                'name' => 'BUNGWE',
                'sector' => 40401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 4040102,
                'name' => 'BUSHENYA',
                'sector' => 40401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 4040103,
                'name' => 'MUDUGARI',
                'sector' => 40401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 4040104,
                'name' => 'TUMBA',
                'sector' => 40401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 4040201,
                'name' => 'GATSIBO',
                'sector' => 40402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 4040202,
                'name' => 'MUBUGA',
                'sector' => 40402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 4040203,
                'name' => 'MUHOTORA',
                'sector' => 40402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 4040204,
                'name' => 'NYAMICUCU',
                'sector' => 40402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 4040205,
                'name' => 'RUSUMO',
                'sector' => 40402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 4040301,
                'name' => 'GASIZA',
                'sector' => 40403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 4040302,
                'name' => 'GISOVU',
                'sector' => 40403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 4040303,
                'name' => 'KABYINIRO',
                'sector' => 40403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 4040304,
                'name' => 'KAGITEGA',
                'sector' => 40403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 4040305,
                'name' => 'KAMANYANA',
                'sector' => 40403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 4040306,
                'name' => 'NYAGAHINGA',
                'sector' => 40403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 4040401,
                'name' => 'BUTARE',
                'sector' => 40404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 4040402,
                'name' => 'NDONGOZI',
                'sector' => 40404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 4040403,
                'name' => 'RUYANGE',
                'sector' => 40404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 4040501,
                'name' => 'BURAMBA',
                'sector' => 40405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 4040502,
                'name' => 'GISIZI',
                'sector' => 40405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 4040503,
                'name' => 'KIDAKAMA',
                'sector' => 40405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 4040504,
                'name' => 'NYANGWE',
                'sector' => 40405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 4040505,
                'name' => 'RWASA',
                'sector' => 40405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 4040601,
                'name' => 'GABIRO',
                'sector' => 40406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 4040602,
                'name' => 'MUSENDA',
                'sector' => 40406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 4040603,
                'name' => 'RWAMBOGO',
                'sector' => 40406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 4040604,
                'name' => 'RWASA',
                'sector' => 40406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 4040701,
                'name' => 'MARIBA',
                'sector' => 40407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 4040702,
                'name' => 'MUSASA',
                'sector' => 40407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 4040703,
                'name' => 'RUNOGA',
                'sector' => 40407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 4040801,
                'name' => 'KABAYA',
                'sector' => 40408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 4040802,
                'name' => 'KAYENZI',
                'sector' => 40408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 4040803,
                'name' => 'KIRINGA',
                'sector' => 40408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cells')->insert(array (
            0 => 
            array (
                'id' => 4040804,
                'name' => 'NYAMABUYE',
                'sector' => 40408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4040901,
                'name' => 'GAFUKA',
                'sector' => 40409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4040902,
                'name' => 'NKENKE',
                'sector' => 40409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4040903,
                'name' => 'NKUMBA',
                'sector' => 40409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 4040904,
                'name' => 'NTARUKA',
                'sector' => 40409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 4041001,
                'name' => 'BUGAMBA',
                'sector' => 40410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 4041002,
                'name' => 'KAGANDA',
                'sector' => 40410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 4041003,
                'name' => 'MUSASA',
                'sector' => 40410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 4041004,
                'name' => 'RUTOVU',
                'sector' => 40410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 4041101,
                'name' => 'BUKWASHURI',
                'sector' => 40411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 4041102,
                'name' => 'GASHANJE',
                'sector' => 40411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 4041103,
                'name' => 'MURWA',
                'sector' => 40411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 4041104,
                'name' => 'NYIRATABA',
                'sector' => 40411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 4041201,
                'name' => 'KIVUMU',
                'sector' => 40412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 4041202,
                'name' => 'NYAMUGARI',
                'sector' => 40412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 4041203,
                'name' => 'RUBONA',
                'sector' => 40412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 4041204,
                'name' => 'RUSHARA',
                'sector' => 40412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 4041301,
                'name' => 'CYAHI',
                'sector' => 40413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 4041302,
                'name' => 'GAFUMBA',
                'sector' => 40413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 4041303,
                'name' => 'KARANGARA',
                'sector' => 40413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 4041304,
                'name' => 'RUREMBO',
                'sector' => 40413,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 4041401,
                'name' => 'KILIBATA',
                'sector' => 40414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 4041402,
                'name' => 'MUCACA',
                'sector' => 40414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 4041403,
                'name' => 'NYANAMO',
                'sector' => 40414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 4041404,
                'name' => 'RUKANDABYUMA',
                'sector' => 40414,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 4041501,
                'name' => 'GASEKE',
                'sector' => 40415,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 4041502,
                'name' => 'GATARE',
                'sector' => 40415,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 4041503,
                'name' => 'GITOVU',
                'sector' => 40415,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 4041504,
                'name' => 'RUSEKERA',
                'sector' => 40415,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 4041601,
                'name' => 'KABONA',
                'sector' => 40416,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 4041602,
                'name' => 'NDAGO',
                'sector' => 40416,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 4041603,
                'name' => 'RUHANGA',
                'sector' => 40416,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 4041701,
                'name' => 'GACUNDURA',
                'sector' => 40417,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 4041702,
                'name' => 'GASHORO',
                'sector' => 40417,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 4041703,
                'name' => 'RUCONSHO',
                'sector' => 40417,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 4041704,
                'name' => 'RUGARI',
                'sector' => 40417,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 4050101,
                'name' => 'KARENGE',
                'sector' => 40501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 4050102,
                'name' => 'KIGABIRO',
                'sector' => 40501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 4050103,
                'name' => 'KIVUMU',
                'sector' => 40501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 4050104,
                'name' => 'RWESERO',
                'sector' => 40501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 4050201,
                'name' => 'BWISIGE',
                'sector' => 40502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 4050202,
                'name' => 'GIHUKE',
                'sector' => 40502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 4050203,
                'name' => 'MUKONO',
                'sector' => 40502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 4050204,
                'name' => 'NYABUSHINGITWA',
                'sector' => 40502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 4050301,
                'name' => 'GACURABWENGE',
                'sector' => 40503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 4050302,
                'name' => 'GISUNA',
                'sector' => 40503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 4050303,
                'name' => 'KIBALI',
                'sector' => 40503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 4050304,
                'name' => 'KIVUGIZA',
                'sector' => 40503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 4050305,
                'name' => 'MURAMA',
                'sector' => 40503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 4050306,
                'name' => 'NGONDORE',
                'sector' => 40503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 4050307,
                'name' => 'NYAKABUNGO',
                'sector' => 40503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 4050308,
                'name' => 'NYAMABUYE',
                'sector' => 40503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 4050309,
                'name' => 'NYARUTARAMA',
                'sector' => 40503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 4050401,
                'name' => 'GASUNZU',
                'sector' => 40504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 4050402,
                'name' => 'MUHAMBO',
                'sector' => 40504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 4050403,
                'name' => 'NYAKABUNGO',
                'sector' => 40504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 4050404,
                'name' => 'NYAMBARE',
                'sector' => 40504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 4050405,
                'name' => 'NYARUKA',
                'sector' => 40504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 4050406,
                'name' => 'RWANKONJO',
                'sector' => 40504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 4050501,
                'name' => 'GATOBOTOBO',
                'sector' => 40505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 4050502,
                'name' => 'MUREHE',
                'sector' => 40505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 4050503,
                'name' => 'TANDA',
                'sector' => 40505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 4050601,
                'name' => 'GIHEMBE',
                'sector' => 40506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 4050602,
                'name' => 'HOREZO',
                'sector' => 40506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 4050603,
                'name' => 'KABUGA',
                'sector' => 40506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 4050604,
                'name' => 'MUHONDO',
                'sector' => 40506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 4050605,
                'name' => 'NYAMIYAGA',
                'sector' => 40506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 4050701,
                'name' => 'BUGOMBA',
                'sector' => 40507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 4050702,
                'name' => 'GATOMA',
                'sector' => 40507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 4050703,
                'name' => 'MULINDI',
                'sector' => 40507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 4050704,
                'name' => 'NYARWAMBU',
                'sector' => 40507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 4050705,
                'name' => 'RUKURURA',
                'sector' => 40507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 4050801,
                'name' => 'KABUGA',
                'sector' => 40508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 4050802,
                'name' => 'NYIRAGIFUMBA',
                'sector' => 40508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 4050803,
                'name' => 'NYIRAVUGIZA',
                'sector' => 40508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 4050804,
                'name' => 'REMERA',
                'sector' => 40508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 4050805,
                'name' => 'RUSEKERA',
                'sector' => 40508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 4050806,
                'name' => 'RYARUYUMBA',
                'sector' => 40508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 4050901,
                'name' => 'GAKENKE',
                'sector' => 40509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 4050902,
                'name' => 'MIYOVE',
                'sector' => 40509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 4050903,
                'name' => 'MUBUGA',
                'sector' => 40509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 4051001,
                'name' => 'CYAMUGANGA',
                'sector' => 40510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 4051002,
                'name' => 'GATENGA',
                'sector' => 40510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 4051003,
                'name' => 'KIRUHURA',
                'sector' => 40510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 4051004,
                'name' => 'MUTARAMA',
                'sector' => 40510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 4051005,
                'name' => 'RUGERERO',
                'sector' => 40510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 4051006,
                'name' => 'RUSAMBYA',
                'sector' => 40510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 4051101,
                'name' => 'CYAMUHINDA',
                'sector' => 40511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 4051102,
                'name' => 'KIGOMA',
                'sector' => 40511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 4051103,
                'name' => 'MWENDO',
                'sector' => 40511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 4051104,
                'name' => 'NGANGE',
                'sector' => 40511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 4051105,
                'name' => 'REBERO',
                'sector' => 40511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 4051201,
                'name' => 'GASEKE',
                'sector' => 40512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 4051202,
                'name' => 'KABEZA',
                'sector' => 40512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 4051203,
                'name' => 'MUSENYI',
                'sector' => 40512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 4051204,
                'name' => 'MUTANDI',
                'sector' => 40512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 4051205,
                'name' => 'NYARUBUYE',
                'sector' => 40512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 4051301,
                'name' => 'GAHUMULIZA',
                'sector' => 40513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 4051302,
                'name' => 'JAMBA',
                'sector' => 40513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 4051303,
                'name' => 'KABEZA',
                'sector' => 40513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 4051304,
                'name' => 'KABUGA',
                'sector' => 40513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 4051305,
                'name' => 'KARAMBO',
                'sector' => 40513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 4051306,
                'name' => 'KIZIBA',
                'sector' => 40513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 4051307,
                'name' => 'MATABA',
                'sector' => 40513,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 4051401,
                'name' => 'BUTARE',
                'sector' => 40514,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 4051402,
                'name' => 'KIGOGO',
                'sector' => 40514,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 4051403,
                'name' => 'KINISHYA',
                'sector' => 40514,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 4051404,
                'name' => 'RUSASA',
                'sector' => 40514,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 4051405,
                'name' => 'RUTETE',
                'sector' => 40514,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 4051406,
                'name' => 'RWAGIHURA',
                'sector' => 40514,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 4051407,
                'name' => 'YARAMBA',
                'sector' => 40514,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 4051501,
                'name' => 'GIHANGA',
                'sector' => 40515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 4051502,
                'name' => 'GISHAMBASHAYO',
                'sector' => 40515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 4051503,
                'name' => 'GISHARI',
                'sector' => 40515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 4051504,
                'name' => 'MUGURAMO',
                'sector' => 40515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 4051505,
                'name' => 'NYAMIYAGA',
                'sector' => 40515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 4051601,
                'name' => 'CYEYA',
                'sector' => 40516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 4051602,
                'name' => 'CYURU',
                'sector' => 40516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 4051603,
                'name' => 'GISIZA',
                'sector' => 40516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 4051604,
                'name' => 'KINYAMI',
                'sector' => 40516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 4051605,
                'name' => 'MABARE',
                'sector' => 40516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 4051606,
                'name' => 'MUNYINYA',
                'sector' => 40516,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 4051701,
                'name' => 'GITEGA',
                'sector' => 40517,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 4051702,
                'name' => 'KAMUTORA',
                'sector' => 40517,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 4051703,
                'name' => 'KARURAMA',
                'sector' => 40517,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 4051801,
                'name' => 'BIKUMBA',
                'sector' => 40518,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 4051802,
                'name' => 'GASHARU',
                'sector' => 40518,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 4051803,
                'name' => 'GATWARO',
                'sector' => 40518,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 4051804,
                'name' => 'KIGABIRO',
                'sector' => 40518,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 4051805,
                'name' => 'MUNANIRA',
                'sector' => 40518,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 4051806,
                'name' => 'NKOTO',
                'sector' => 40518,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 4051901,
                'name' => 'CYANDARO',
                'sector' => 40519,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 4051902,
                'name' => 'GASAMBYA',
                'sector' => 40519,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 4051903,
                'name' => 'GASHIRIRA',
                'sector' => 40519,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 4051904,
                'name' => 'KABARE',
                'sector' => 40519,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 4051905,
                'name' => 'REBERO',
                'sector' => 40519,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 4051906,
                'name' => 'RUHONDO',
                'sector' => 40519,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 4052001,
                'name' => 'CYERU',
                'sector' => 40520,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 4052002,
                'name' => 'KIGABIRO',
                'sector' => 40520,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 4052003,
                'name' => 'NYAGAHINGA',
                'sector' => 40520,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 4052101,
                'name' => 'BUSHARA',
                'sector' => 40521,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 4052102,
                'name' => 'KITAZIGURWA',
                'sector' => 40521,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 4052103,
                'name' => 'NYABISHAMBI',
                'sector' => 40521,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 4052104,
                'name' => 'NYABUBARE',
                'sector' => 40521,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 4052105,
                'name' => 'SHANGASHA',
                'sector' => 40521,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 5010101,
                'name' => 'MUNUNU',
                'sector' => 50101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 5010102,
                'name' => 'NYAGASAMBU',
                'sector' => 50101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 5010103,
                'name' => 'NYAKAGUNGA',
                'sector' => 50101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 5010104,
                'name' => 'NYAMIRAMA',
                'sector' => 50101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 5010105,
                'name' => 'NYARUBUYE',
                'sector' => 50101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 5010106,
                'name' => 'SASABIRAGO',
                'sector' => 50101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 5010201,
                'name' => 'GIHUMUZA',
                'sector' => 50102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 5010202,
                'name' => 'KAGEZI',
                'sector' => 50102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 5010203,
                'name' => 'KANYANGESE',
                'sector' => 50102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 5010204,
                'name' => 'KIBARE',
                'sector' => 50102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 5010205,
                'name' => 'MUTAMWA',
                'sector' => 50102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 5010206,
                'name' => 'RUGARAMA',
                'sector' => 50102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 5010207,
                'name' => 'RUNYINYA',
                'sector' => 50102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 5010208,
                'name' => 'RWERI',
                'sector' => 50102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 5010301,
                'name' => 'BINUNGA',
                'sector' => 50103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 5010302,
                'name' => 'BWINSANGA',
                'sector' => 50103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 5010303,
                'name' => 'CYINYANA',
                'sector' => 50103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 5010304,
                'name' => 'GATI',
                'sector' => 50103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 5010305,
                'name' => 'KAVUMU',
                'sector' => 50103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 5010306,
                'name' => 'RUHIMBI',
                'sector' => 50103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 5010307,
                'name' => 'RUHUNDA',
                'sector' => 50103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 5010401,
                'name' => 'BICACA',
                'sector' => 50104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 5010402,
                'name' => 'BYIMANA',
                'sector' => 50104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 5010403,
                'name' => 'KABASORE',
                'sector' => 50104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 5010404,
                'name' => 'KANGAMBA',
                'sector' => 50104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 5010405,
                'name' => 'KARENGE',
                'sector' => 50104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 5010406,
                'name' => 'NYABUBARE',
                'sector' => 50104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 5010407,
                'name' => 'NYAMATETE',
                'sector' => 50104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 5010501,
                'name' => 'BWIZA',
                'sector' => 50105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 5010502,
                'name' => 'CYANYA',
                'sector' => 50105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 5010503,
                'name' => 'NYAGASENYI',
                'sector' => 50105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 5010504,
                'name' => 'SIBAGIRE',
                'sector' => 50105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 5010505,
                'name' => 'SOVU',
                'sector' => 50105,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 5010601,
                'name' => 'BYEZA',
                'sector' => 50106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 5010602,
                'name' => 'KABARE',
                'sector' => 50106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 5010603,
                'name' => 'KARAMBI',
                'sector' => 50106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 5010604,
                'name' => 'KARITUTU',
                'sector' => 50106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 5010605,
                'name' => 'KITAZIGURWA',
                'sector' => 50106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 5010606,
                'name' => 'MURAMBI',
                'sector' => 50106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 5010607,
                'name' => 'NSINDA',
                'sector' => 50106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 5010608,
                'name' => 'NTEBE',
                'sector' => 50106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 5010609,
                'name' => 'NYARUSANGE',
                'sector' => 50106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 5010701,
                'name' => 'KADUHA',
                'sector' => 50107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 5010702,
                'name' => 'NKUNGU',
                'sector' => 50107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 5010703,
                'name' => 'RWERU',
                'sector' => 50107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 5010704,
                'name' => 'ZINGA',
                'sector' => 50107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 5010801,
                'name' => 'BINUNGA',
                'sector' => 50108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 5010802,
                'name' => 'BWANA',
                'sector' => 50108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 5010803,
                'name' => 'CYARUKAMBA',
                'sector' => 50108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 5010804,
                'name' => 'CYIMBAZI',
                'sector' => 50108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 5010805,
                'name' => 'NKOMANGWA',
                'sector' => 50108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 5010806,
                'name' => 'NYARUBUYE',
                'sector' => 50108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 5010901,
                'name' => 'AKABARE',
                'sector' => 50109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 5010902,
                'name' => 'BUDAHANDA',
                'sector' => 50109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 5010903,
                'name' => 'KAGARAMA',
                'sector' => 50109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 5010904,
                'name' => 'MUSHA',
                'sector' => 50109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 5010905,
                'name' => 'NYABISINDU',
                'sector' => 50109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 5010906,
                'name' => 'NYAKABANDA',
                'sector' => 50109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 5011001,
                'name' => 'AKINYAMBO',
                'sector' => 50110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 5011002,
                'name' => 'BUJYUJYU',
                'sector' => 50110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 5011003,
                'name' => 'MUREHE',
                'sector' => 50110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 5011004,
                'name' => 'NTEBE',
                'sector' => 50110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 5011005,
                'name' => 'NYARUKOMBE',
                'sector' => 50110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 5011101,
                'name' => 'BICUMBI',
                'sector' => 50111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 5011102,
                'name' => 'BUSHENYI',
                'sector' => 50111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 5011103,
                'name' => 'MWULIRE',
                'sector' => 50111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 5011104,
                'name' => 'NTUNGA',
                'sector' => 50111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 5011201,
                'name' => 'BIHEMBE',
                'sector' => 50112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 5011202,
                'name' => 'GATARE',
                'sector' => 50112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 5011203,
                'name' => 'GISHORE',
                'sector' => 50112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 5011204,
                'name' => 'MUNINI',
                'sector' => 50112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 5011205,
                'name' => 'RWIMBOGO',
                'sector' => 50112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 5011301,
                'name' => 'AKANZU',
                'sector' => 50113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 5011302,
                'name' => 'KIGARAMA',
                'sector' => 50113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 5011303,
                'name' => 'MURAMA',
                'sector' => 50113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 5011304,
                'name' => 'RUGARAMA',
                'sector' => 50113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 5011401,
                'name' => 'BYINZA',
                'sector' => 50114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 5011402,
                'name' => 'KABATASI',
                'sector' => 50114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 5011403,
                'name' => 'KABUYE',
                'sector' => 50114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 5011404,
                'name' => 'KARAMBI',
                'sector' => 50114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 5011405,
                'name' => 'MABARE',
                'sector' => 50114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 5011406,
                'name' => 'NAWE',
                'sector' => 50114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 5020101,
                'name' => 'CYAGAJU',
                'sector' => 50201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 5020102,
                'name' => 'KABEZA',
                'sector' => 50201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 5020103,
                'name' => 'NYAMIKAMBA',
                'sector' => 50201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 5020104,
                'name' => 'NYAMIREMBE',
                'sector' => 50201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 5020105,
                'name' => 'NYANGARA',
                'sector' => 50201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 5020106,
                'name' => 'NYARUREMA',
                'sector' => 50201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 5020107,
                'name' => 'RWENSHEKE',
                'sector' => 50201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 5020201,
                'name' => 'BUSHARA',
                'sector' => 50202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 5020202,
                'name' => 'CYENKWANZI',
                'sector' => 50202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 5020203,
                'name' => 'GIKAGATI',
                'sector' => 50202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 5020204,
                'name' => 'GIKUNDAMVURA',
                'sector' => 50202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 5020205,
                'name' => 'KABUGA',
                'sector' => 50202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 5020206,
                'name' => 'NDEGO',
                'sector' => 50202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 5020207,
                'name' => 'NYAKIGA',
                'sector' => 50202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 5020301,
                'name' => 'KAMATE',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 5020302,
                'name' => 'KARAMA',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 5020303,
                'name' => 'KIZIRAKOME',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 5020304,
                'name' => 'MBARE',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 5020305,
                'name' => 'MUSENYI',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 5020306,
                'name' => 'NDAMA',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 5020307,
                'name' => 'NYAGASHANGA',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 5020308,
                'name' => 'NYAMIRAMA',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 5020309,
                'name' => 'RUBAGABAGA',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 5020310,
                'name' => 'RWENYEMERA',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 5020311,
                'name' => 'RWISIRABO',
                'sector' => 50203,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 5020401,
                'name' => 'BAYIGABURIRE',
                'sector' => 50204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 5020402,
                'name' => 'KADUHA',
                'sector' => 50204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 5020403,
                'name' => 'KANYEGANYEGE',
                'sector' => 50204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 5020404,
                'name' => 'KATABAGEMU',
                'sector' => 50204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 5020405,
                'name' => 'KIGARAMA',
                'sector' => 50204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 5020406,
                'name' => 'NYAKIGANDO',
                'sector' => 50204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 5020407,
                'name' => 'RUBIRA',
                'sector' => 50204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 5020408,
                'name' => 'RUGAZI',
                'sector' => 50204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 5020409,
                'name' => 'RUTOMA',
                'sector' => 50204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 5020501,
                'name' => 'GATABA',
                'sector' => 50205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 5020502,
                'name' => 'GITENGA',
                'sector' => 50205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 5020503,
                'name' => 'KABUNGO',
                'sector' => 50205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 5020504,
                'name' => 'KARAMBO',
                'sector' => 50205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 5020505,
                'name' => 'KARUJUMBA',
                'sector' => 50205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 5020506,
                'name' => 'TOVU',
                'sector' => 50205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 5020601,
                'name' => 'BWERA',
                'sector' => 50206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 5020602,
                'name' => 'BYIMANA',
                'sector' => 50206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 5020603,
                'name' => 'CYEMBOGO',
                'sector' => 50206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 5020604,
                'name' => 'KAGITUMBA',
                'sector' => 50206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 5020605,
                'name' => 'KANYONZA',
                'sector' => 50206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 5020606,
                'name' => 'MATIMBA',
                'sector' => 50206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 5020607,
                'name' => 'NYABWISHONGWEZI',
                'sector' => 50206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 5020608,
                'name' => 'RWENTANGA',
                'sector' => 50206,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 5020701,
                'name' => 'BIBARE',
                'sector' => 50207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 5020702,
                'name' => 'GAKOMA',
                'sector' => 50207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 5020703,
                'name' => 'MAHORO',
                'sector' => 50207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 5020704,
                'name' => 'MIMURI',
                'sector' => 50207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 5020705,
                'name' => 'RUGARI',
                'sector' => 50207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 5020801,
                'name' => 'BUFUNDA',
                'sector' => 50208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 5020802,
                'name' => 'GATETE',
                'sector' => 50208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 5020803,
                'name' => 'GIHENGERI',
                'sector' => 50208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 5020804,
                'name' => 'GISHORORO',
                'sector' => 50208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 5020805,
                'name' => 'KAGINA',
                'sector' => 50208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 5020806,
                'name' => 'RUGARAMA',
                'sector' => 50208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 5020901,
                'name' => 'KIBIRIZI',
                'sector' => 50209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 5020902,
                'name' => 'KIJOJO',
                'sector' => 50209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 5020903,
                'name' => 'MUSHERI',
                'sector' => 50209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 5020904,
                'name' => 'NTOMA',
                'sector' => 50209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 5020905,
                'name' => 'NYAGATABIRE',
                'sector' => 50209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 5020906,
                'name' => 'NYAMIYONGA',
                'sector' => 50209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 5020907,
                'name' => 'RUGARAMA I',
                'sector' => 50209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 5020908,
                'name' => 'RUGARAMA II',
                'sector' => 50209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 5021001,
                'name' => 'BARIJA',
                'sector' => 50210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 5021002,
                'name' => 'BUSHOGA',
                'sector' => 50210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 5021003,
                'name' => 'CYABAYAGA',
                'sector' => 50210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 5021004,
                'name' => 'GAKIRAGE',
                'sector' => 50210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 5021005,
                'name' => 'KAMAGIRI',
                'sector' => 50210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 5021006,
                'name' => 'NSHEKE',
                'sector' => 50210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 5021007,
                'name' => 'NYAGATARE',
                'sector' => 50210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 5021008,
                'name' => 'RUTARAKA',
                'sector' => 50210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 5021009,
                'name' => 'RYABEGA',
                'sector' => 50210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 5021101,
                'name' => 'GAHURURA',
                'sector' => 50211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 5021102,
                'name' => 'GASHENYI',
                'sector' => 50211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 5021103,
                'name' => 'NYAKAGARAMA',
                'sector' => 50211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 5021104,
                'name' => 'RUKOMO II',
                'sector' => 50211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 5021105,
                'name' => 'RURENGE',
                'sector' => 50211,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 5021201,
                'name' => 'CYENJONJO',
                'sector' => 50212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 5021202,
                'name' => 'GASINGA',
                'sector' => 50212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 5021203,
                'name' => 'KABARE',
                'sector' => 50212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 5021204,
                'name' => 'KAZAZA',
                'sector' => 50212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 5021205,
                'name' => 'MISHENYI',
                'sector' => 50212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 5021206,
                'name' => 'RUGARAMA',
                'sector' => 50212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 5021207,
                'name' => 'RUKOROTA',
                'sector' => 50212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 5021208,
                'name' => 'RUTARE',
                'sector' => 50212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 5021209,
                'name' => 'RWEMPASHA',
                'sector' => 50212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 5021210,
                'name' => 'RYERU',
                'sector' => 50212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 5021301,
                'name' => 'GACUNDEZI',
                'sector' => 50213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 5021302,
                'name' => 'KABEZA',
                'sector' => 50213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 5021303,
                'name' => 'KIREBE',
                'sector' => 50213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 5021304,
                'name' => 'NTOMA',
                'sector' => 50213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 5021305,
                'name' => 'NYARUPFUBIRE',
                'sector' => 50213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 5021306,
                'name' => 'NYENDO',
                'sector' => 50213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 5021307,
                'name' => 'RUTUNGU',
                'sector' => 50213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 5021308,
                'name' => 'RWIMIYAGA',
                'sector' => 50213,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 5021401,
                'name' => 'GISHURO',
                'sector' => 50214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 5021402,
                'name' => 'GITENGURE',
                'sector' => 50214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 5021403,
                'name' => 'NKOMA',
                'sector' => 50214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 5021404,
                'name' => 'NYABITEKERI',
                'sector' => 50214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 5021405,
                'name' => 'NYAGATOMA',
                'sector' => 50214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 5021406,
                'name' => 'SHONGA',
                'sector' => 50214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 5021407,
                'name' => 'TABAGWE',
                'sector' => 50214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 5030101,
                'name' => 'KIGABIRO',
                'sector' => 50301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 5030102,
                'name' => 'KIMANA',
                'sector' => 50301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 5030103,
                'name' => 'TEME',
                'sector' => 50301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 5030104,
                'name' => 'VIRO',
                'sector' => 50301,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 5030201,
                'name' => 'GATSIBO',
                'sector' => 50302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 5030202,
                'name' => 'MANISHYA',
                'sector' => 50302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 5030203,
                'name' => 'MUGERA',
                'sector' => 50302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 5030204,
                'name' => 'NYABICWAMBA',
                'sector' => 50302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 5030205,
                'name' => 'NYAGAHANGA',
                'sector' => 50302,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 5030301,
                'name' => 'BUKOMANE',
                'sector' => 50303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 5030302,
                'name' => 'CYABUSHESHE',
                'sector' => 50303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 5030303,
                'name' => 'KARUBUNGO',
                'sector' => 50303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 5030304,
                'name' => 'MPONDWA',
                'sector' => 50303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 5030305,
                'name' => 'NYAMIRAMA',
                'sector' => 50303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 5030306,
                'name' => 'RUBIRA',
                'sector' => 50303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 5030401,
                'name' => 'KABARORE',
                'sector' => 50304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 5030402,
                'name' => 'KABEZA',
                'sector' => 50304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 5030403,
                'name' => 'KARENGE',
                'sector' => 50304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 5030404,
                'name' => 'MARIMBA',
                'sector' => 50304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 5030405,
                'name' => 'NYABIKIRI',
                'sector' => 50304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 5030406,
                'name' => 'SIMBWA',
                'sector' => 50304,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 5030501,
                'name' => 'BUSETSA',
                'sector' => 50305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 5030502,
                'name' => 'GITUZA',
                'sector' => 50305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 5030503,
                'name' => 'KINTU',
                'sector' => 50305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 5030504,
                'name' => 'NYAGISOZI',
                'sector' => 50305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 5030601,
                'name' => 'AKABUGA',
                'sector' => 50306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 5030602,
                'name' => 'GAKENKE',
                'sector' => 50306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 5030603,
                'name' => 'GAKONI',
                'sector' => 50306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 5030604,
                'name' => 'NYABISINDU',
                'sector' => 50306,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 5030701,
                'name' => 'AGAKOMEYE',
                'sector' => 50307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 5030702,
                'name' => 'MBOGO',
                'sector' => 50307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 5030703,
                'name' => 'NDATEMWA',
                'sector' => 50307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 5030704,
                'name' => 'RUBONA',
                'sector' => 50307,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 5030801,
                'name' => 'BIBARE',
                'sector' => 50308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 5030802,
                'name' => 'GAKOROKOMBE',
                'sector' => 50308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 5030803,
                'name' => 'MAMFU',
                'sector' => 50308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 5030804,
                'name' => 'RUMULI',
                'sector' => 50308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 5030805,
                'name' => 'TABA',
                'sector' => 50308,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 5030901,
                'name' => 'MURAMBI',
                'sector' => 50309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 5030902,
                'name' => 'NYAMIYAGA',
                'sector' => 50309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 5030903,
                'name' => 'RWANKUBA',
                'sector' => 50309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 5030904,
                'name' => 'RWIMITERERI',
                'sector' => 50309,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 5031001,
                'name' => 'BUGAMBA',
                'sector' => 50310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 5031002,
                'name' => 'KARAMBI',
                'sector' => 50310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 5031003,
                'name' => 'KIGASHA',
                'sector' => 50310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 5031004,
                'name' => 'NGARAMA',
                'sector' => 50310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 5031005,
                'name' => 'NYARUBUNGO',
                'sector' => 50310,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 5031101,
                'name' => 'GITINDA',
                'sector' => 50311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 5031102,
                'name' => 'KIBARE',
                'sector' => 50311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 5031103,
                'name' => 'MAYANGE',
                'sector' => 50311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 5031104,
                'name' => 'MURAMBI',
                'sector' => 50311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 5031105,
                'name' => 'NYAGITABIRE',
                'sector' => 50311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 5031106,
                'name' => 'NYAMIRAMA',
                'sector' => 50311,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 5031201,
                'name' => 'BUSHOBORA',
                'sector' => 50312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 5031202,
                'name' => 'BUTIRUKA',
                'sector' => 50312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 5031203,
                'name' => 'KIGABIRO',
                'sector' => 50312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 5031204,
                'name' => 'NYAGAKOMBE',
                'sector' => 50312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 5031205,
                'name' => 'RURENGE',
                'sector' => 50312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 5031206,
                'name' => 'RWARENGA',
                'sector' => 50312,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 5031301,
                'name' => 'BUGARAMA',
                'sector' => 50313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 5031302,
                'name' => 'GIHUTA',
                'sector' => 50313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 5031303,
                'name' => 'KANYANGESE',
                'sector' => 50313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 5031304,
                'name' => 'MATARE',
                'sector' => 50313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 5031305,
                'name' => 'MATUNGURU',
                'sector' => 50313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 5031306,
                'name' => 'REMERA',
                'sector' => 50313,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 5031401,
                'name' => 'KIBURARA',
                'sector' => 50314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 5031402,
                'name' => 'MUNINI',
                'sector' => 50314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 5031403,
                'name' => 'NYAMATETE',
                'sector' => 50314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 5031404,
                'name' => 'RWIKINIRO',
                'sector' => 50314,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 5040101,
                'name' => 'JURU',
                'sector' => 50401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 5040102,
                'name' => 'KAHI',
                'sector' => 50401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 5040103,
                'name' => 'KIYENZI',
                'sector' => 50401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 5040104,
                'name' => 'URUGARAMA',
                'sector' => 50401,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 5040201,
                'name' => 'CYARUBARE',
                'sector' => 50402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 5040202,
                'name' => 'GITARA',
                'sector' => 50402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 5040203,
                'name' => 'KIREHE',
                'sector' => 50402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 5040204,
                'name' => 'RUBIMBA',
                'sector' => 50402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 5040205,
                'name' => 'RUBUMBA',
                'sector' => 50402,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 5040301,
                'name' => 'CYABAJWA',
                'sector' => 50403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 5040302,
                'name' => 'CYINZOVU',
                'sector' => 50403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 5040303,
                'name' => 'KABURA',
                'sector' => 50403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 5040304,
                'name' => 'RUSERA',
                'sector' => 50403,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 5040401,
                'name' => 'BWIZA',
                'sector' => 50404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 5040402,
                'name' => 'KAYONZA',
                'sector' => 50404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 5040403,
                'name' => 'MBURABUTURO',
                'sector' => 50404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 5040404,
                'name' => 'NYAGATOVU',
                'sector' => 50404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 5040405,
                'name' => 'RUGENDABARI',
                'sector' => 50404,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 5040501,
                'name' => 'BUNYENTONGO',
                'sector' => 50405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 5040502,
                'name' => 'MUKO',
                'sector' => 50405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 5040503,
                'name' => 'MURAMA',
                'sector' => 50405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 5040504,
                'name' => 'NYAKANAZI',
                'sector' => 50405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 5040505,
                'name' => 'RUSAVE',
                'sector' => 50405,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 5040601,
                'name' => 'BUHABWA',
                'sector' => 50406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 5040602,
                'name' => 'KARAMBI',
                'sector' => 50406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 5040603,
                'name' => 'MURUNDI',
                'sector' => 50406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 5040604,
                'name' => 'RYAMANYONI',
                'sector' => 50406,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 5040701,
                'name' => 'KAGEYO',
                'sector' => 50407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 5040702,
                'name' => 'MIGERA',
                'sector' => 50407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 5040703,
                'name' => 'NYAMUGARI',
                'sector' => 50407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 5040704,
                'name' => 'NYAWERA',
                'sector' => 50407,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 5040801,
                'name' => 'BYIMANA',
                'sector' => 50408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 5040802,
                'name' => 'ISANGANO',
                'sector' => 50408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 5040803,
                'name' => 'KARAMBI',
                'sector' => 50408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 5040804,
                'name' => 'KIYOVU',
                'sector' => 50408,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 5040901,
                'name' => 'GIKAYA',
                'sector' => 50409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 5040902,
                'name' => 'MUSUMBA',
                'sector' => 50409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 5040903,
                'name' => 'RURAMBI',
                'sector' => 50409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 5040904,
                'name' => 'SHYOGO',
                'sector' => 50409,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 5041001,
                'name' => 'KAWANGIRE',
                'sector' => 50410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 5041002,
                'name' => 'RUKARA',
                'sector' => 50410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 5041003,
                'name' => 'RWIMISHINYA',
                'sector' => 50410,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 5041101,
                'name' => 'BUGAMBIRA',
                'sector' => 50411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 5041102,
                'name' => 'NKAMBA',
                'sector' => 50411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 5041103,
                'name' => 'RUYONZA',
                'sector' => 50411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 5041104,
                'name' => 'UMUBUGA',
                'sector' => 50411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 5041201,
                'name' => 'GIHINGA',
                'sector' => 50412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 5041202,
                'name' => 'MBARARA',
                'sector' => 50412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 5041203,
                'name' => 'MUKOYOYO',
                'sector' => 50412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 5041204,
                'name' => 'NKONDO',
                'sector' => 50412,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 5050101,
                'name' => 'BUTEZI',
                'sector' => 50501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 5050102,
                'name' => 'MUHAMBA',
                'sector' => 50501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 5050103,
                'name' => 'MUREHE',
                'sector' => 50501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 5050104,
                'name' => 'NYAGASENYI',
                'sector' => 50501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 5050105,
                'name' => 'NYAKAGEZI',
                'sector' => 50501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 5050106,
                'name' => 'RUBIMBA',
                'sector' => 50501,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 5050201,
                'name' => 'CURAZO',
                'sector' => 50502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 5050202,
                'name' => 'CYUNUZI',
                'sector' => 50502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 5050203,
                'name' => 'MUGANZA',
                'sector' => 50502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 5050204,
                'name' => 'NYAMIRYANGO',
                'sector' => 50502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 5050205,
                'name' => 'RWABUTAZI',
                'sector' => 50502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 5050206,
                'name' => 'RWANTONDE',
                'sector' => 50502,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 5050301,
                'name' => 'CYANYA',
                'sector' => 50503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 5050302,
                'name' => 'KIGARAMA',
                'sector' => 50503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 5050303,
                'name' => 'KIREMERA',
                'sector' => 50503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 5050304,
                'name' => 'NYAKERERA',
                'sector' => 50503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 5050305,
                'name' => 'NYANKURAZO',
                'sector' => 50503,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 5050401,
                'name' => 'GATARAMA',
                'sector' => 50504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 5050402,
                'name' => 'RUGARAMA',
                'sector' => 50504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 5050403,
                'name' => 'RUHANGA',
                'sector' => 50504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 5050404,
                'name' => 'RWANTERU',
                'sector' => 50504,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 5050501,
                'name' => 'GAHAMA',
                'sector' => 50505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 5050502,
                'name' => 'KIREHE',
                'sector' => 50505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 5050503,
                'name' => 'NYABIGEGA',
                'sector' => 50505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 5050504,
                'name' => 'NYABIKOKORA',
                'sector' => 50505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 5050505,
                'name' => 'RWESERO',
                'sector' => 50505,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 5050601,
                'name' => 'KAMOMBO',
                'sector' => 50506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 5050602,
                'name' => 'MWOGA',
                'sector' => 50506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 5050603,
                'name' => 'SARUHEMBE',
                'sector' => 50506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 5050604,
                'name' => 'UMUNINI',
                'sector' => 50506,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 5050701,
                'name' => 'BWIYORERE',
                'sector' => 50507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 5050702,
                'name' => 'KANKOBWA',
                'sector' => 50507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 5050703,
                'name' => 'MPANGA',
                'sector' => 50507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 5050704,
                'name' => 'MUSHONGI',
                'sector' => 50507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 5050705,
                'name' => 'NASHO',
                'sector' => 50507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 5050706,
                'name' => 'NYAKABUNGO',
                'sector' => 50507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 5050707,
                'name' => 'RUBAYA',
                'sector' => 50507,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 5050801,
                'name' => 'GASARABWAYI',
                'sector' => 50508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 5050802,
                'name' => 'KABUGA',
                'sector' => 50508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 5050803,
                'name' => 'MUBUGA',
                'sector' => 50508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 5050804,
                'name' => 'MUSAZA',
                'sector' => 50508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 5050805,
                'name' => 'NGANDA',
                'sector' => 50508,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 5050901,
                'name' => 'BISAGARA',
                'sector' => 50509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 5050902,
                'name' => 'CYAMIGURWA',
                'sector' => 50509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 5050903,
                'name' => 'RUGARAMA',
                'sector' => 50509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 5050904,
                'name' => 'RWANYAMUHANGA',
                'sector' => 50509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 5050905,
                'name' => 'RWAYIKONA',
                'sector' => 50509,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 5051001,
                'name' => 'CYAMBWE',
                'sector' => 50510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cells')->insert(array (
            0 => 
            array (
                'id' => 5051002,
                'name' => 'KAGESE',
                'sector' => 50510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5051003,
                'name' => 'NTARUKA',
                'sector' => 50510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5051004,
                'name' => 'RUBIRIZI',
                'sector' => 50510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5051005,
                'name' => 'RUGOMA',
                'sector' => 50510,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5051101,
                'name' => 'BUKORA',
                'sector' => 50511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 5051102,
                'name' => 'KAGASA',
                'sector' => 50511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 5051103,
                'name' => 'KAZIZI',
                'sector' => 50511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 5051104,
                'name' => 'KIYANZI',
                'sector' => 50511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 5051105,
                'name' => 'NYAMUGARI',
                'sector' => 50511,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 5051201,
                'name' => 'MAREBA',
                'sector' => 50512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 5051202,
                'name' => 'NYABITARE',
                'sector' => 50512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 5051203,
                'name' => 'NYARUTUNGA',
                'sector' => 50512,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 5060101,
                'name' => 'CYERWA',
                'sector' => 50601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 5060102,
                'name' => 'GISERI',
                'sector' => 50601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 5060103,
                'name' => 'MUNEGE',
                'sector' => 50601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 5060104,
                'name' => 'MUTSINDO',
                'sector' => 50601,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 5060201,
                'name' => 'IHANIKA',
                'sector' => 50602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 5060202,
                'name' => 'JARAMA',
                'sector' => 50602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 5060203,
                'name' => 'KARENGE',
                'sector' => 50602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 5060204,
                'name' => 'KIBIMBA',
                'sector' => 50602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 5060205,
                'name' => 'KIGOMA',
                'sector' => 50602,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 5060301,
                'name' => 'AKAZIBA',
                'sector' => 50603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 5060302,
                'name' => 'KARABA',
                'sector' => 50603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 5060303,
                'name' => 'NYAMIRAMBO',
                'sector' => 50603,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 5060401,
                'name' => 'BIRENGA',
                'sector' => 50604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 5060402,
                'name' => 'GAHURIRE',
                'sector' => 50604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 5060403,
                'name' => 'KARAMA',
                'sector' => 50604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 5060404,
                'name' => 'KINYONZO',
                'sector' => 50604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 5060405,
                'name' => 'UMUKAMBA',
                'sector' => 50604,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 5060501,
                'name' => 'CYASEMAKAMBA',
                'sector' => 50605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 5060502,
                'name' => 'GAHIMA',
                'sector' => 50605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 5060503,
                'name' => 'GATONDE',
                'sector' => 50605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 5060504,
                'name' => 'KARENGE',
                'sector' => 50605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 5060505,
                'name' => 'MAHANGO',
                'sector' => 50605,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 5060601,
                'name' => 'AKABUNGO',
                'sector' => 50606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 5060602,
                'name' => 'MUGATARE',
                'sector' => 50606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 5060603,
                'name' => 'NTANGA',
                'sector' => 50606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 5060604,
                'name' => 'NYAMUGARI',
                'sector' => 50606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 5060605,
                'name' => 'NYANGE',
                'sector' => 50606,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 5060701,
                'name' => 'GITARAGA',
                'sector' => 50607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 5060702,
                'name' => 'KIGABIRO',
                'sector' => 50607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 5060703,
                'name' => 'MVUMBA',
                'sector' => 50607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 5060704,
                'name' => 'RURENGE',
                'sector' => 50607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 5060705,
                'name' => 'SAKARA',
                'sector' => 50607,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 5060801,
                'name' => 'KARWEMA',
                'sector' => 50608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 5060802,
                'name' => 'KIBARE',
                'sector' => 50608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 5060803,
                'name' => 'MUTENDERI',
                'sector' => 50608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 5060804,
                'name' => 'MUZINGIRA',
                'sector' => 50608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 5060805,
                'name' => 'NYAGASOZI',
                'sector' => 50608,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 5060901,
                'name' => 'BUGERA',
                'sector' => 50609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 5060902,
                'name' => 'KINUNGA',
                'sector' => 50609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 5060903,
                'name' => 'NDEKWE',
                'sector' => 50609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 5060904,
                'name' => 'NYAMAGANA',
                'sector' => 50609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 5061001,
                'name' => 'BULIBA',
                'sector' => 50610,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 5061002,
                'name' => 'KIBATSI',
                'sector' => 50610,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 5061003,
                'name' => 'NYARUVUMU',
                'sector' => 50610,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 5061004,
                'name' => 'NYINYA',
                'sector' => 50610,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 5061101,
                'name' => 'GITUZA',
                'sector' => 50611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 5061102,
                'name' => 'NTOVI',
                'sector' => 50611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 5061103,
                'name' => 'RUBAGO',
                'sector' => 50611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 5061104,
                'name' => 'RUBONA',
                'sector' => 50611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 5061105,
                'name' => 'RWINTASHYA',
                'sector' => 50611,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 5061201,
                'name' => 'AKAGARAMA',
                'sector' => 50612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 5061202,
                'name' => 'MUHURIRE',
                'sector' => 50612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 5061203,
                'name' => 'MUSYA',
                'sector' => 50612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 5061204,
                'name' => 'RUGESE',
                'sector' => 50612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 5061205,
                'name' => 'RUJAMBARA',
                'sector' => 50612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 5061206,
                'name' => 'RWIKUBO',
                'sector' => 50612,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 5061301,
                'name' => 'GAFUNZO',
                'sector' => 50613,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 5061302,
                'name' => 'KIBONDE',
                'sector' => 50613,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 5061303,
                'name' => 'NKANGA',
                'sector' => 50613,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 5061304,
                'name' => 'RUKOMA',
                'sector' => 50613,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 5061401,
                'name' => 'NYAGASOZI',
                'sector' => 50614,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 5061402,
                'name' => 'NYAGATUGUNDA',
                'sector' => 50614,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 5061403,
                'name' => 'RUHEMBE',
                'sector' => 50614,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 5061404,
                'name' => 'RUHINGA',
                'sector' => 50614,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 5070101,
                'name' => 'BIRYOGO',
                'sector' => 50701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 5070102,
                'name' => 'KABUYE',
                'sector' => 50701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 5070103,
                'name' => 'KAGOMASI',
                'sector' => 50701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 5070104,
                'name' => 'MWENDO',
                'sector' => 50701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 5070105,
                'name' => 'RAMIRO',
                'sector' => 50701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 5070201,
                'name' => 'JURU',
                'sector' => 50702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 5070202,
                'name' => 'KABUKUBA',
                'sector' => 50702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 5070203,
                'name' => 'MUGORORE',
                'sector' => 50702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 5070204,
                'name' => 'MUSOVU',
                'sector' => 50702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 5070205,
                'name' => 'RWINUME',
                'sector' => 50702,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 5070301,
                'name' => 'BIHARAGU',
                'sector' => 50703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 5070302,
                'name' => 'BURENGE',
                'sector' => 50703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 5070303,
                'name' => 'KAMPEKA',
                'sector' => 50703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 5070304,
                'name' => 'NYAKAYAGA',
                'sector' => 50703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 5070305,
                'name' => 'TUNDA',
                'sector' => 50703,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 5070401,
                'name' => 'BUSHENYI',
                'sector' => 50704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 5070402,
                'name' => 'GAKOMEYE',
                'sector' => 50704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 5070403,
                'name' => 'NYAMIGINA',
                'sector' => 50704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 5070404,
                'name' => 'RANGO',
                'sector' => 50704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 5070405,
                'name' => 'RUGARAMA',
                'sector' => 50704,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 5070501,
                'name' => 'GAKAMBA',
                'sector' => 50705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 5070502,
                'name' => 'KAGENGE',
                'sector' => 50705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 5070503,
                'name' => 'KIBENGA',
                'sector' => 50705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 5070504,
                'name' => 'KIBIRIZI',
                'sector' => 50705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 5070505,
                'name' => 'MBYO',
                'sector' => 50705,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 5070601,
                'name' => 'GICACA',
                'sector' => 50706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 5070602,
                'name' => 'MUSENYI',
                'sector' => 50706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 5070603,
                'name' => 'NYAGIHUNIKA',
                'sector' => 50706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 5070604,
                'name' => 'RULINDO',
                'sector' => 50706,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 5070701,
                'name' => 'BITABA',
                'sector' => 50707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 5070702,
                'name' => 'KAGASA',
                'sector' => 50707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 5070703,
                'name' => 'RUGUNGA',
                'sector' => 50707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 5070704,
                'name' => 'RURENGE',
                'sector' => 50707,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 5070801,
                'name' => 'GIHEMBE',
                'sector' => 50708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 5070802,
                'name' => 'MURAMA',
                'sector' => 50708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 5070803,
                'name' => 'NGERUKA',
                'sector' => 50708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 5070804,
                'name' => 'NYAKAYENZI',
                'sector' => 50708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 5070805,
                'name' => 'RUTONDE',
                'sector' => 50708,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 5070901,
                'name' => 'CYUGARO',
                'sector' => 50709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 5070902,
                'name' => 'KANZENZE',
                'sector' => 50709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 5070903,
                'name' => 'KIBUNGO',
                'sector' => 50709,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 5071001,
                'name' => 'KANAZI',
                'sector' => 50710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 5071002,
                'name' => 'KAYUMBA',
                'sector' => 50710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 5071003,
                'name' => 'MARANYUNDO',
                'sector' => 50710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 5071004,
                'name' => 'MURAMA',
                'sector' => 50710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 5071005,
                'name' => 'NYAMATA Y UMUJYI',
                'sector' => 50710,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 5071101,
                'name' => 'GIHINGA',
                'sector' => 50711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 5071102,
                'name' => 'KABUYE',
                'sector' => 50711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 5071103,
                'name' => 'MURAMBI',
                'sector' => 50711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 5071104,
                'name' => 'NGENDA',
                'sector' => 50711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 5071105,
                'name' => 'RUGANDO',
                'sector' => 50711,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 5071201,
                'name' => 'KABEZA',
                'sector' => 50712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 5071202,
                'name' => 'KARERA',
                'sector' => 50712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 5071203,
                'name' => 'KIMARANZARA',
                'sector' => 50712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 5071204,
                'name' => 'NTARAMA',
                'sector' => 50712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 5071205,
                'name' => 'NYABAGENDWA',
                'sector' => 50712,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 5071301,
                'name' => 'BIHARI',
                'sector' => 50713,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 5071302,
                'name' => 'GATANGA',
                'sector' => 50713,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 5071303,
                'name' => 'GIKUNDAMVURA',
                'sector' => 50713,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 5071304,
                'name' => 'KINDAMA',
                'sector' => 50713,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 5071305,
                'name' => 'RUHUHA',
                'sector' => 50713,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 5071401,
                'name' => 'BATIMA',
                'sector' => 50714,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 5071402,
                'name' => 'KINTAMBWE',
                'sector' => 50714,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 5071403,
                'name' => 'MAZANE',
                'sector' => 50714,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 5071404,
                'name' => 'NEMBA',
                'sector' => 50714,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 5071405,
                'name' => 'NKANGA',
                'sector' => 50714,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 5071406,
                'name' => 'SHARITA',
                'sector' => 50714,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 5071501,
                'name' => 'KABAGUGU',
                'sector' => 50715,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 5071502,
                'name' => 'KAMABUYE',
                'sector' => 50715,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 5071503,
                'name' => 'NZIRANZIZA',
                'sector' => 50715,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 5071504,
                'name' => 'REBERO',
                'sector' => 50715,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 5071505,
                'name' => 'RUTARE',
                'sector' => 50715,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
