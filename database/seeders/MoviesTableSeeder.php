<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'Zaļā Enigma',
                'rating' => 8.5,
                'age_restriction' => '13',
                'description' => 'Piedzīvojumu filma par jaunieti, kas atklāj noslēpumainu zaļu akmeni ar maģiskām spējām. Viņam ir jāaizsargā šis dārgums no ļaunprātīgiem spēkiem.',
            ],
            [
                'title' => 'Kosmosa Pionieri',
                'rating' => 9.0,
                'age_restriction' => '',
                'description' => 'Stāsts par pirmo cilvēku misiju uz Marsu, kurā astronauti saskaras ar negaidītiem izaicinājumiem un atklāj jaunas dzīves formas.',
            ],
            [
                'title' => 'Nakts detektīvs',
                'rating' => 7.8,
                'age_restriction' => '',
                'description' => 'Krimināldrāma par detektīvu, kurš mēģina atrisināt noslēpumainu slepkavību sēriju tumšajā un bīstamajā lielpilsētā.',
            ],
            [
                'title' => 'Zudušā karaļa noslēpums',
                'rating' => 8.2,
                'age_restriction' => '13',
                'description' => 'Vēsturiska piedzīvojumu filma par grupu arheologu, kuri meklē leģendārā viduslaiku karaļa pazudušo dārgumu.',
            ],
            [
                'title' => 'Sirds ritms',
                'rating' => 7.5,
                'age_restriction' => '16',
                'description' => 'Romantiska drāma par diviem mūziķiem, kuri iemīlas, mēģinot iekarot mūzikas industriju.',
            ],
            [
                'title' => 'Aiz stikla sienas',
                'rating' => 8.7,
                'age_restriction' => '16',
                'description' => 'Psiholoģisks trilleris par jaunu sievieti, kura atklāj, ka viņas dzīvoklis ir slepenas valdības uzraudzības objekts.',
            ],
            [
                'title' => 'Cīņas klubā',
                'rating' => 7.9,
                'age_restriction' => '',
                'description' => 'Drāma par cīkstoni, kurš pēc traģēdijas dzīvē cenšas atgūt savu godu un kļūt par čempionu.',
            ],
            [
                'title' => 'Ledus sirds',
                'rating' => 8.0,
                'age_restriction' => '',
                'description' => 'Animēta filma par princesi ar ledus spējam, kas cenšas glābt savu karalisti no mūžīgā sala.',
            ],
            [
                'title' => 'Digitālā revolūcija',
                'rating' => 8.1,
                'age_restriction' => '13',
                'description' => 'Zinātniskās fantastikas filma par mākslīgo intelektu, kurš pārņem kontroli pār pasauli un cilvēcei jāatrod veids, kā to apturēt.',
            ],
            [
                'title' => 'Slepenā misija',
                'rating' => 7.6,
                'age_restriction' => '13',
                'description' => 'Spiegu trilleris par aģentu, kurš uzdevumā atklāj sazvērestību, kas draud ar pasaules mēroga katastrofu.',
            ],
            [
                'title' => 'Melnā roze',
                'rating' => 8.3,
                'age_restriction' => '16',
                'description' => 'Filma par sērijveida slepkavu, kurš atstāj melnas rozes pie saviem upuriem, un detektīva mēģinājumiem viņu noķert.',
            ],
            [
                'title' => 'Neaizmirstamie ceļojumi',
                'rating' => 8.4,
                'age_restriction' => '',
                'description' => 'Filma par ģimeni, kura ceļo pa pasauli un piedzīvo dažādas kultūras un piedzīvojumus.',
            ],
            [
                'title' => 'Mākslas spēks',
                'rating' => 7.7,
                'age_restriction' => '13',
                'description' => 'Drāma par jaunu mākslinieku, kurš cenšas atrast savu vietu mākslas pasaulē un pārvarēt personīgās grūtības.',
            ],
            [
                'title' => 'Eņģeļa pieskāriens',
                'rating' => 8.6,
                'age_restriction' => '13',
                'description' => 'Fantastikas filma par eņģeli, kurš nonāk uz Zemes, lai palīdzētu cilvēkiem, bet iemīlas mirstīgajā.',
            ],
            [
                'title' => 'Gaismas vēstnieki',
                'rating' => 8.0,
                'age_restriction' => '13',
                'description' => 'Zinātniskā fantastika par grupu zinātnieku, kuri atklāj citplanētiešu sūtītus gaismas signālus un mēģina sazināties ar viņiem.',
            ],
            [
                'title' => 'Meža pasaka',
                'rating' => 7.8,
                'age_restriction' => '',
                'description' => 'Animācijas filma par meža dzīvniekiem, kuri cenšas aizsargāt savu mājvietu no ļauna burvja.',
            ],
            [
                'title' => 'Laika ceļotājs',
                'rating' => 8.2,
                'age_restriction' => '16',
                'description' => 'Zinātniskās fantastikas filma par cilvēku, kurš spēj ceļot laikā un cenšas labot pagātnes kļūdas.',
            ],
            [
                'title' => 'Noslēpumu sala',
                'rating' => 7.9,
                'age_restriction' => '',
                'description' => 'Piedzīvojumu filma par grupu draugu, kuri atklāj noslēpumainu salu ar senām civilizācijas drupām un apslēptiem dārgumiem.',
            ],
            [
                'title' => 'Nāves ēna',
                'rating' => 8.1,
                'age_restriction' => '18',
                'description' => 'Trilleris par slepkavu, kurš medī savus upurus naktī, un izmeklētāju, kurš cenšas viņu apturēt pirms nākamā uzbrukuma.',
            ],
            [
                'title' => 'Zvaigžņu ceļš',
                'rating' => 8.5,
                'age_restriction' => '13',
                'description' => 'Episkā kosmosa opera par zvaigžņu kuģa apkalpi, kura pēta nezināmās galaktikas un saskaras ar citplanētiešu rasēm un kosmosa draudiem.',
            ],
        ];

        foreach ($movies as $movie) {
            $movie['premieres_at'] = Carbon::now()->addDays(rand(2, 30)); // Random date between 2 to 30 days from now
            Movie::create($movie);
        }
    }
}
