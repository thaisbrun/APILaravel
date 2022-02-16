<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InscritFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomIdDept = rand(1, 100);
    $randomIdArrondissement = null;

    if($randomIdDept == 1){
        $randomIdArrondissement = rand(1, 4);
    } else if($randomIdDept == 2) {
        $randomIdArrondissement = rand(5, 9);
    } else if($randomIdDept == 3) {
        $randomIdArrondissement = rand(10, 12);
    } else if($randomIdDept == 4) {
        $randomIdArrondissement = rand(13, 16);
    } else if($randomIdDept == 5) {
        $randomIdArrondissement = rand(17, 18);
    } else if($randomIdDept == 6) {
        $randomIdArrondissement = rand(19, 20);
    } else if($randomIdDept == 7) {
        $randomIdArrondissement = rand(21, 23);
    } else if($randomIdDept == 8) {
        $randomIdArrondissement = rand(24, 27);
    } else if($randomIdDept == 9) {
        $randomIdArrondissement = rand(28, 30);
    } else if($randomIdDept == 10) {
        $randomIdArrondissement = rand(31, 33);
    } else if($randomIdDept == 11) {
        $randomIdArrondissement = rand(34, 36);
    } else if($randomIdDept == 12) {
        $randomIdArrondissement = rand(37, 39);
    } else if($randomIdDept == 13) {
        $randomIdArrondissement = rand(40, 43);
    } else if($randomIdDept == 14) {
        $randomIdArrondissement = rand(44, 47);
    } else if($randomIdDept == 15) {
        $randomIdArrondissement = rand(48, 50);
    } else if($randomIdDept == 16) {
        $randomIdArrondissement = rand(51, 53);
    } else if($randomIdDept == 17) {
        $randomIdArrondissement = rand(54, 58);
    } else if($randomIdDept == 18) {
        $randomIdArrondissement = rand(59, 61);
    } else if($randomIdDept == 19) {
        $randomIdArrondissement = rand(62, 64);
    } else if($randomIdDept == 20) {
        $randomIdArrondissement = rand(65, 69);
    } else if($randomIdDept == 21) {
        $randomIdArrondissement = rand(70, 72);
    } else if($randomIdDept == 22) {
        $randomIdArrondissement = rand(73, 76);
    } else if($randomIdDept == 23) {
        $randomIdArrondissement = rand(77, 78);
    } else if($randomIdDept == 24) {
        $randomIdArrondissement = rand(79, 82);
    } else if($randomIdDept == 25) {
        $randomIdArrondissement = rand(83, 85);
    } else if($randomIdDept == 26) {
        $randomIdArrondissement = rand(86, 88);
    } else if($randomIdDept == 27) {
        $randomIdArrondissement = rand(89, 91);
    } else if($randomIdDept == 28) {
        $randomIdArrondissement = rand(92, 95);
    } else if($randomIdDept == 29) {
        $randomIdArrondissement = rand(96, 99);
    } else if($randomIdDept == 30) {
        $randomIdArrondissement = 100;
    } else if($randomIdDept == 31) {
        $randomIdArrondissement = rand(101, 102);
    } else if($randomIdDept == 32) {
        $randomIdArrondissement = rand(103, 105);
    } else if($randomIdDept == 33) {
        $randomIdArrondissement = rand(106, 108);
    } else if($randomIdDept == 34) {
        $randomIdArrondissement = rand(109, 114);
    } else if($randomIdDept == 35) {
        $randomIdArrondissement = rand(115, 117);
    } else if($randomIdDept == 36) {
        $randomIdArrondissement = rand(118, 121);
    } else if($randomIdDept == 37) {
        $randomIdArrondissement = rand(122, 125);
    } else if($randomIdDept == 38) {
        $randomIdArrondissement = rand(126, 128);
    } else if($randomIdDept == 39) {
        $randomIdArrondissement = rand(129, 131);
    } else if($randomIdDept == 40) {
        $randomIdArrondissement = rand(132, 134);
    } else if($randomIdDept == 41) {
        $randomIdArrondissement = rand(135, 136);
    } else if($randomIdDept == 42) {
        $randomIdArrondissement = rand(137, 139);
    } else if($randomIdDept == 43) {
        $randomIdArrondissement = rand(140, 142);
    } else if($randomIdDept == 44) {
        $randomIdArrondissement = rand(143, 145);
    } else if($randomIdDept == 45) {
        $randomIdArrondissement = rand(146, 148);
    } else if($randomIdDept == 46) {
        $randomIdArrondissement = rand(149, 151);
    } else if($randomIdDept == 47) {
        $randomIdArrondissement = rand(152, 154);
    } else if($randomIdDept == 48) {
        $randomIdArrondissement = rand(155, 156);
    } else if($randomIdDept == 49) {
        $randomIdArrondissement = rand(158, 159);
    } else if($randomIdDept == 50) {
        $randomIdArrondissement = rand(160, 163);
    } else if($randomIdDept == 51) {
        $randomIdArrondissement = rand(164, 167);
    } else if($randomIdDept == 52) {
        $randomIdArrondissement = rand(168, 171);
    } else if($randomIdDept == 53) {
        $randomIdArrondissement = 171;
    } else if($randomIdDept == 54) {
        $randomIdArrondissement = rand(143, 145);
    } else if($randomIdDept == 55) {
        $randomIdArrondissement = rand(146, 148);
    } else if($randomIdDept == 56) {
        $randomIdArrondissement = rand(149, 151);
    } else if($randomIdDept == 57) {
        $randomIdArrondissement = rand(152, 154);
    } else if($randomIdDept == 58) {
        $randomIdArrondissement = rand(155, 157);
    } else if($randomIdDept == 59) {
        $randomIdArrondissement = rand(158, 159);
    } else if($randomIdDept == 60) {
        $randomIdArrondissement = rand(160, 162);
    } else if($randomIdDept == 61) {
        $randomIdArrondissement = rand(163, 164);
    } else if($randomIdDept == 62) {
        $randomIdArrondissement = rand(165, 168);
    } else if($randomIdDept == 63) {
        $randomIdArrondissement = rand(169, 170);
    } else if($randomIdDept == 64) {
        $randomIdArrondissement = rand(171, 172);
    } else if($randomIdDept == 65) {
        $randomIdArrondissement = 173;
    } else if($randomIdDept == 66) {
        $randomIdArrondissement = rand(174, 177);
    } else if($randomIdDept == 67) {
        $randomIdArrondissement = rand(178, 180);
    } else if($randomIdDept == 68) {
        $randomIdArrondissement = rand(181, 183);
    } else if($randomIdDept == 69) {
        $randomIdArrondissement = rand(184, 187);
    } else if($randomIdDept == 70) {
        $randomIdArrondissement = 188;
    } else if($randomIdDept == 71) {
        $randomIdArrondissement = rand(189, 191);
    } else if($randomIdDept == 72) {
        $randomIdArrondissement = rand(192, 199);
    } else if($randomIdDept == 73) {
        $randomIdArrondissement = 200;
    } else if($randomIdDept == 74) {
        $randomIdArrondissement = rand(201, 203);
    } else if($randomIdDept == 75) {
        $randomIdArrondissement = rand(204, 207);
    } else if($randomIdDept == 76) {
        $randomIdArrondissement = rand(208, 209);
    } else if($randomIdDept == 77) {
        $randomIdArrondissement = rand(210, 211);
    } else if($randomIdDept == 78) {
        $randomIdArrondissement = rand(212, 214);
    } else if($randomIdDept == 79) {
        $randomIdArrondissement = rand(215, 217);
    } else if($randomIdDept == 80) {
        $randomIdArrondissement = rand(218, 220);
    } else if($randomIdDept == 81) {
        $randomIdArrondissement = rand(221, 223);
    } else if($randomIdDept == 82) {
        $randomIdArrondissement = rand(224, 226);
    } else if($randomIdDept == 83) {
        $randomIdArrondissement = rand(227, 229);
    } else if($randomIdDept == 84) {
        $randomIdArrondissement = rand(230, 232);
    } else if($randomIdDept == 85) {
        $randomIdArrondissement = rand(233, 236);
    } else if($randomIdDept == 86) {
        $randomIdArrondissement = rand(237, 239);
    } else if($randomIdDept == 87) {
        $randomIdArrondissement = rand(240, 241);
    } else if($randomIdDept == 88) {
        $randomIdArrondissement = rand(242, 243);
    } else if($randomIdDept == 89) {
        $randomIdArrondissement = rand(244, 245);
    } else if($randomIdDept == 90) {
        $randomIdArrondissement = 246;
    } else if($randomIdDept == 91) {
        $randomIdArrondissement = 247;
    } else if($randomIdDept == 92) {
        $randomIdArrondissement = 248;
    } else if($randomIdDept == 93) {
        $randomIdArrondissement = 249;
    } else if($randomIdDept == 94) {
        $randomIdArrondissement = 250;
    } else if($randomIdDept == 95) {
        $randomIdArrondissement = 251;
    } else if($randomIdDept == 96) {
        $randomIdArrondissement = 252;
    } else if($randomIdDept == 97) {
        $randomIdArrondissement = 253;
    } else if($randomIdDept == 98) {
        $randomIdArrondissement = 254;
    } else if($randomIdDept == 99) {
        $randomIdArrondissement = 255;
    } else if($randomIdDept == 100) {
        $randomIdArrondissement = rand(256, 257);
    }
         return [
            'NOM' => $this->faker->lastName,
            'PRENOM' => $this->faker->firstName,
            'DATENAISSANCE' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'EMAIL' => $this->faker->unique()->safeEmail(),
            'TELEPHONE' => $this->faker->e164PhoneNumber,
            'MOTDEPASSE' => bcrypt('1234'),
            'CREDIT' => $this->faker->numberBetween($min = 0, $max = 5000),
            'IDETAT' => $this->faker->numberBetween($min = 1, $max = 3),
            'IDDEPARTEMENT' => $randomIdDept,
            'IDARRONDISSEMENT' => $randomIdArrondissement
        ];
    }
}
