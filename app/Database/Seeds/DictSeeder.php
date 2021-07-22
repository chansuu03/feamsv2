<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DictSeeder extends Seeder
{
	public function run() {
        $data = [
            [
                'first_name' => 'ED MHAR',
                'last_name' => 'APURA',
                'middle_name' => 'DELANTE',
                'username' => 'edmhar',
                'password' => password_hash('edmhar', PASSWORD_DEFAULT),
                'email' => 'mhar.apura@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9291854660',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JAYSON',
                'last_name' => 'BALATONG',
                'middle_name' => 'SENIAS',
                'username' => 'jayson',
                'password' => password_hash('jayson', PASSWORD_DEFAULT),
                'email' => 'j.balatong1999@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9291854660',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'CHRISTIAN ELVIN',
                'last_name' => 'BANGGA',
                'middle_name' => 'RILVERIA',
                'username' => strtolower('CHRISTIANELVIN'),
                'password' => password_hash(strtolower('CHRISTIANELVIN'), PASSWORD_DEFAULT),
                'email' => 'ecbangga@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9774724891',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'LAILYNETTE',
                'last_name' => 'BURTON',
                'middle_name' => 'DELA CRUZ',
                'username' => str_replace(" ", "", strtolower('LAILYNETTE')),
                'password' => password_hash(str_replace(" ", "", strtolower('LAILYNETTE')), PASSWORD_DEFAULT),
                'email' => 'llynttburton08@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9154997683',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'CHARMIE',
                'last_name' => 'CABANELA',
                'middle_name' => 'ABLON',
                'username' => str_replace(" ", "", strtolower('CHARMIE')),
                'password' => password_hash(str_replace(" ", "", strtolower('CHARMIE')), PASSWORD_DEFAULT),
                'email' => 'cabanelacharmie24@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9550838590',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JOSHUA',
                'last_name' => 'CAPALARAN',
                'middle_name' => 'ANGOB',
                'username' => str_replace(" ", "", strtolower('JOSHUA')),
                'password' => password_hash(str_replace(" ", "", strtolower('JOSHUA')), PASSWORD_DEFAULT),
                'email' => 'joshuacapalaran27@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9494271642',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'QUIEL JEREMIAH',
                'last_name' => 'CARIASO',
                'middle_name' => 'LEDESMA',
                'username' => str_replace(" ", "", strtolower('QUIEL')),
                'password' => password_hash(str_replace(" ", "", strtolower('QUIEL')), PASSWORD_DEFAULT),
                'email' => 'quieljeremiahcariaso04@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9165679982',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'KEN ZEDRIC',
                'last_name' => 'CORTES',
                'middle_name' => 'CORPUZ',
                'username' => str_replace(" ", "", strtolower('KEN ZEDRIC')),
                'password' => password_hash(str_replace(" ", "", strtolower('KEN ZEDRIC')), PASSWORD_DEFAULT),
                'email' => 'kzcortes27@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9562679248',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JOHN RUSSEL',
                'last_name' => 'DACANAY',
                'middle_name' => 'LARRAQUEL',
                'username' => str_replace(" ", "", strtolower('JOHN RUSSEL')),
                'password' => password_hash(str_replace(" ", "", strtolower('JOHN RUSSEL')), PASSWORD_DEFAULT),
                'email' => 'johnrusseldacanay@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9617030037',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'EDMON',
                'last_name' => 'DELA CRUZ',
                'middle_name' => 'MADRONIO',
                'username' => str_replace(" ", "", strtolower('EDMON')),
                'password' => password_hash(str_replace(" ", "", strtolower('EDMON')), PASSWORD_DEFAULT),
                'email' => 'rhingmakz21@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9617030037',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'ERJOHN',
                'last_name' => 'ESPUERTA',
                'middle_name' => 'SARMIENTO',
                'username' => str_replace(" ", "", strtolower('ERJOHN')),
                'password' => password_hash(str_replace(" ", "", strtolower('ERJOHN')), PASSWORD_DEFAULT),
                'email' => 'erjohn13@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9994080568',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'FROILAN',
                'last_name' => 'FERNANDEZ',
                'middle_name' => 'DUMAGUIN',
                'username' => str_replace(" ", "", strtolower('FROILAN')),
                'password' => password_hash(str_replace(" ", "", strtolower('FROILAN')), PASSWORD_DEFAULT),
                'email' => 'froilanfernandez08@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9466583458',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'RAYMOND',
                'last_name' => 'GABITO',
                'middle_name' => NULL,
                'username' => str_replace(" ", "", strtolower('RAYMOND')),
                'password' => password_hash(str_replace(" ", "", strtolower('RAYMOND')), PASSWORD_DEFAULT),
                'email' => 'gabitoraymond358@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9079897143',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JEROME',
                'last_name' => 'JALANDOON',
                'middle_name' => 'BERMUDEZ',
                'username' => str_replace(" ", "", strtolower('JEROME')),
                'password' => password_hash(str_replace(" ", "", strtolower('JEROME')), PASSWORD_DEFAULT),
                'email' => 'jerome.jalandoon@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9673104255',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'CRISOLOGO',
                'last_name' => 'LAPITAN IV',
                'middle_name' => 'PROTO',
                'username' => str_replace(" ", "", strtolower('CRISOLOGO')),
                'password' => password_hash(str_replace(" ", "", strtolower('CRISOLOGO')), PASSWORD_DEFAULT),
                'email' => 'choilapitan47@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9218088905',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'VAN JOAKHIM',
                'last_name' => 'LAUDE',
                'middle_name' => 'BALQUIN',
                'username' => str_replace(" ", "", strtolower('VAN JOAKHIM')),
                'password' => password_hash(str_replace(" ", "", strtolower('VAN JOAKHIM')), PASSWORD_DEFAULT),
                'email' => 'khimlaude@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9553295266',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'CHRISTIAN',
                'last_name' => 'LAZARO',
                'middle_name' => 'CORDERO',
                'username' => str_replace(" ", "", strtolower('CHRISTIAN')),
                'password' => password_hash(str_replace(" ", "", strtolower('CHRISTIAN')), PASSWORD_DEFAULT),
                'email' => 'lazarochan03@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9195252973',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'DAVID',
                'last_name' => 'LIMBA',
                'middle_name' => 'LAGUIAB',
                'username' => str_replace(" ", "", strtolower('DAVID')),
                'password' => password_hash(str_replace(" ", "", strtolower('DAVID')), PASSWORD_DEFAULT),
                'email' => 'davidlimba19@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9498060410',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'LENARD',
                'last_name' => 'LLACER',
                'middle_name' => 'JUNDIS',
                'username' => str_replace(" ", "", strtolower('LENARD')),
                'password' => password_hash(str_replace(" ", "", strtolower('LENARD')), PASSWORD_DEFAULT),
                'email' => 'linijin17@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9057368291',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'PAULINE JANE',
                'last_name' => 'LLAGAS',
                'middle_name' => 'SANTOS',
                'username' => str_replace(" ", "", strtolower('PAULINE JANE')),
                'password' => password_hash(str_replace(" ", "", strtolower('PAULINE JANE')), PASSWORD_DEFAULT),
                'email' => 'paulinellagas@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9560866865',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'ZAIRANIH',
                'last_name' => 'LUMABI',
                'middle_name' => 'KHUSIN',
                'username' => str_replace(" ", "", strtolower('ZAIRANIH')),
                'password' => password_hash(str_replace(" ", "", strtolower('ZAIRANIH')), PASSWORD_DEFAULT),
                'email' => 'zklumabi@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9174656426',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'NERISSA',
                'last_name' => 'MAGLENTE',
                'middle_name' => 'COPADA',
                'username' => str_replace(" ", "", strtolower('NERISSA')),
                'password' => password_hash(str_replace(" ", "", strtolower('NERISSA')), PASSWORD_DEFAULT),
                'email' => 'nerissamaglente2@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9972238770',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JAMREI',
                'last_name' => 'MANALO',
                'middle_name' => 'MARCELO',
                'username' => str_replace(" ", "", strtolower('JAMREI')),
                'password' => password_hash(str_replace(" ", "", strtolower('JAMREI')), PASSWORD_DEFAULT),
                'email' => 'jamreimanalo@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9474784309',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'MERIEL NECOLE',
                'last_name' => 'MANUEL',
                'middle_name' => 'TAGAYONG',
                'username' => str_replace(" ", "", strtolower('MERIEL NECOLE')),
                'password' => password_hash(str_replace(" ", "", strtolower('MERIEL NECOLE')), PASSWORD_DEFAULT),
                'email' => 'mnmerielmanuel@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9298661965',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JONH CARLO',
                'last_name' => 'NAVAJA',
                'middle_name' => 'WAMAR',
                'username' => str_replace(" ", "", strtolower('JONH CARLO')),
                'password' => password_hash(str_replace(" ", "", strtolower('JONH CARLO')), PASSWORD_DEFAULT),
                'email' => 'jcnavaja28@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9099997319',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'LESSA ANNE',
                'last_name' => 'PASCUBILLO',
                'middle_name' => 'PANGANIBAN',
                'username' => str_replace(" ", "", strtolower('LESSA ANNE')),
                'password' => password_hash(str_replace(" ", "", strtolower('LESSA ANNE')), PASSWORD_DEFAULT),
                'email' => 'lezzaanne@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9555801099',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JILLIAN',
                'last_name' => 'POLLESCAS',
                'middle_name' => NULL,
                'username' => str_replace(" ", "", strtolower('JILLIAN')),
                'password' => password_hash(str_replace(" ", "", strtolower('JILLIAN')), PASSWORD_DEFAULT),
                'email' => 'jillianpollescas@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9350932677',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'MARY GRACE',
                'last_name' => 'RAGPALA',
                'middle_name' => 'MALLEN',
                'username' => str_replace(" ", "", strtolower('MARY GRACE')),
                'password' => password_hash(str_replace(" ", "", strtolower('MARY GRACE')), PASSWORD_DEFAULT),
                'email' => 'grasyamallen@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9666846869',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JASMINE',
                'last_name' => 'RAKIM',
                'middle_name' => 'DEL ROSARIO',
                'username' => str_replace(" ", "", strtolower('JASMINE')),
                'password' => password_hash(str_replace(" ", "", strtolower('JASMINE')), PASSWORD_DEFAULT),
                'email' => 'rakimjasmine@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9485669008',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'SHAILYN JOYCE',
                'last_name' => 'SA-AN',
                'middle_name' => 'PILOTON',
                'username' => str_replace(" ", "", strtolower('SHAILYN JOYCE')),
                'password' => password_hash(str_replace(" ", "", strtolower('SHAILYN JOYCE')), PASSWORD_DEFAULT),
                'email' => 'shailynjoycesaan@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9354705680',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JAMIE',
                'last_name' => 'SAMAR',
                'middle_name' => 'BABARAN',
                'username' => str_replace(" ", "", strtolower('JAMIE')),
                'password' => password_hash(str_replace(" ", "", strtolower('JAMIE')), PASSWORD_DEFAULT),
                'email' => 'jamiesamar18@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9274165220',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'ALDRIN',
                'last_name' => 'SEROJE',
                'middle_name' => 'INOJALES',
                'username' => str_replace(" ", "", strtolower('ALDRIN')),
                'password' => password_hash(str_replace(" ", "", strtolower('ALDRIN')), PASSWORD_DEFAULT),
                'email' => 'serojealdrin@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9611698249',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JOHN TIMOTHY',
                'last_name' => 'SESCAR',
                'middle_name' => 'LLEGA',
                'username' => str_replace(" ", "", strtolower('JOHN TIMOTHY')),
                'password' => password_hash(str_replace(" ", "", strtolower('JOHN TIMOTHY')), PASSWORD_DEFAULT),
                'email' => 'tmbrccl@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9087896711',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'CARLITO',
                'last_name' => 'SOLLANO JR.',
                'middle_name' => 'MANALO',
                'username' => str_replace(" ", "", strtolower('CARLITO')),
                'password' => password_hash(str_replace(" ", "", strtolower('CARLITO')), PASSWORD_DEFAULT),
                'email' => 'csollanojr@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9959323097',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'BERNADETTE',
                'last_name' => 'TRADIO',
                'middle_name' => 'VILLANABA',
                'username' => str_replace(" ", "", strtolower('BERNADETTE')),
                'password' => password_hash(str_replace(" ", "", strtolower('BERNADETTE')), PASSWORD_DEFAULT),
                'email' => 'bernatrads4@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9494058830',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'IRISH',
                'last_name' => 'TRAQUENA',
                'middle_name' => 'DACUMA',
                'username' => str_replace(" ", "", strtolower('IRISH')),
                'password' => password_hash(str_replace(" ", "", strtolower('IRISH')), PASSWORD_DEFAULT),
                'email' => 'virginiatraquena@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9457607391',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'ALYSSA JOANNA',
                'last_name' => 'VILLANUEVA',
                'middle_name' => 'ORIBE',
                'username' => str_replace(" ", "", strtolower('ALYSSA JOANNA')),
                'password' => password_hash(str_replace(" ", "", strtolower('ALYSSA JOANNA')), PASSWORD_DEFAULT),
                'email' => 'alyvillanueva14@gmail.com',
                'gender' => 'Female',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9505306098',
                'role' => '2',
                'status' => 'a',
            ],
            [
                'first_name' => 'JOHN HARVEY',
                'last_name' => 'VILLEGAS',
                'middle_name' => 'CARALDE',
                'username' => str_replace(" ", "", strtolower('JOHN HARVEY')),
                'password' => password_hash(str_replace(" ", "", strtolower('JOHN HARVEY')), PASSWORD_DEFAULT),
                'email' => 'harveyjohn1926@gmail.com',
                'gender' => 'Male',
                'birthdate' => date('Y-m-d', strtotime('1999-01-01')),
                'contact_number' => '9519693667',
                'role' => '2',
                'status' => 'a',
            ],
        ];
		$this->db->table('users')->insertBatch($data);
	}
}
