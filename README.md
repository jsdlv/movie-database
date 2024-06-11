# Movie Database

Movie Database ir vienkārša Laravel aplikācija, kas parāda filmu informāciju un dod iespēju pievienot vai dzēst informāciju.

## Lejupielāde un uzstādīšana ar Docker

Lai lietotu šo aplikāciju izmantojot Docker, ievērojiet šos soļus:

1. **Lejupielādējiet vai noklonējiet repozitoriju**: Izmantojot `git`, noklonējiet repozitoriju ar komandu:

    ```bash
    git clone https://github.com/jsdlv/movie-database.git
    ```

   Vai arī lejupielādējiet repozitoriju kā ZIP arhīvu un izpakojot to.

2. **Konfigurējiet .env failu**: Dublējiet `.env.example` failu un saglabājiet to kā `.env`. Pēc tam konfigurējiet savu datu bāzi un citus vides mainīgos pēc nepieciešamības.

    ```bash
   cp .env.example .env
    ```

3. **Palaidiet Docker konteinerus**: Pārliecinieties, vai Docker ir uzstādīts un darbojas jūsu sistēmā. Tad izpildiet šo komandu, lai palaistu Docker konteinerus:

    ```bash
    docker-compose up -d
    ```

   Tas palaidīs MySQL un PHP serverus.
4. **Pārbaudied Docker konteinerus**: Lai pārbaudītu, vai Docker konteineri darbojas izpildiet šo komandu:
    ```bash
    docker-compose ps
    ```

5. **Izveidojiet datu bāzi**: Izmantojot Docker, ir nepieciešams izpildīt migrācijas un datubāzes aizpildīšanu iekš konteinera. Izpildiet šādas komandas:

    ```bash
    docker-compose exec app php artisan migrate
    ```

   Datubāzes aizpildīšanai izmantojiet:

    ```bash
    docker-compose exec app php artisan db:seed
    ```

6. **Piekļūstiet aplikācijai**: Pēc tam, kad visi konteineri ir startēti un migrācijas ir izpildītas, jūs varat piekļūt savai aplikācijai pārlūkprogrammā, ievadot adresi:

    ```bash
    http://localhost:8000
    ```

## Lietošana

