<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),

    ];
});

$factory->define(App\Member::class, function (Faker\Generator $faker) {
    return [
        'lastname' => $faker->lastName,
        'firstname' => $faker->firstName,
        'birthdate' => $faker->dateTimeThisCentury,
        'address' => $faker->address,
        'zip_code' => $faker->postcode,
        'city' => $faker->city,
        'email' => $faker->safeEmail,
        'phone_number' =>$faker ->phoneNumber,
        'user_comment' =>$faker->text,
        'status' => $faker->randomElement(array('prospect', 'inscrit','en_formation','ancien')),
        'funding_option' =>$faker->sentence(),
        'inscription' =>$faker->dateTimeBetween($startDate= 'now',$endDate='+1 years'),

    ];
});

$factory->define(App\Formation::class, function (Faker\Generator $faker) {
    return [
        'titre' => $faker->word,
        'objectifs' => $faker->sentence(),
        'présentation' => $faker->paragraph(),
        'formateur' => $faker->firstName,
        'pré_requis' =>$faker->sentence(),
        'moyens_techniques' =>$faker->sentence(),
        'effectif_max' =>$faker->randomDigitNotNull,
        'price' =>$faker->numberBetween($min = 500, $max = 4000),
        'financement' =>$faker->sentence(),
        'evaluations' =>$faker->sentence(),
        'lieu' =>$faker->city,
        'statut' => $faker->randomElement(array('publishé', 'non publié')),

    ];
});

$factory->define(App\Articles::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->text,
        'content' => $faker->text,
        'abstract' => $faker->text,
        'status' => $faker->randomElement(array('published', 'unpublished')),
        'published_on' => $faker->dateTime->format('d,M,Y'),
        'date' =>$faker->dateTimeBetween($startDate= 'now',$endDate='+1 years'),

    ];


});

$factory->define(App\Session::class, function (Faker\Generator $faker) {
    return [
        'session_start' =>$faker->dateTime->format('d,M,Y'),
        'session_end' =>$faker->dateTime->format('d,M,Y'),


    ];


});


