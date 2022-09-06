<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('series')->insert([
            'name' => 'Amos del Universo',
            'trailer_url' => 'videos/trailer-he-man.mp4',
            'trailer_thumbnail_url' => 'images/thumbnail-he-man.jpg',
            'logo_url' => 'images/logo-he-man.png',
            'cover_url' => 'images/he-man.jpg',
            'synopsis' => 'Después de que una calamitosa batalla destruye Eternia, Teela forma una alianza inesperada para evitar el fin del universo en esta secuela de la famosa serie de los 80.',
            'cast' => 'Mark Hamill, Lena Headey, Chris Wood, Sarah Michelle Gellar, Liam Cunningham.',
            'gender' => 'Ciencia ficción',
            'coincidence' => '98% de coincidencia',
            'rating' => '13+',
            'year' => '2021',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'DOTA',
            'trailer_url' => 'videos/trailer-dota.mp4',
            'trailer_thumbnail_url' => 'images/thumbnail-dota.jpg',
            'logo_url' => 'images/logo-dota.png',
            'cover_url' => 'images/dota.jpg',
            'synopsis' => 'Un Caballero Dragón atormentado pero valiente debe usar su poder de dragón para detener a un demonio letal en esta fantasía épica basada en el videojuego en línea.',
            'cast' => 'Yuri Lowenthal, Lara PulverKari Wahlgren, Alix Wilton Regan, Troy Baker, Freya Tingley, Tony Todd, Josh Keaton, JB Blanc,Victoria Atkin.',
            'gender' => 'Acción',
            'coincidence' => '98% de coincidencia',
            'rating' => '16+',
            'year' => '2021',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Farzar',
            'trailer_url' => '',
            'cover_url' => 'images/farzar.jpg',
            'synopsis' => 'El príncipe Fichael y su tripulación se aventuran a salir de su ciudad humana abovedada para luchar contra los malvados alienígenas que quieren matarlos. Cuando comienzan su viaje.',
            'cast' => 'David Kaye, Jerry Minor, Lance Reddick',
            'coincidence' => '98% de coincidencia',
            'rating' => '13+',
            'year' => '2022',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'One Piece',
            'trailer_url' => '',
            'cover_url' => 'images/one-piece.png',
            'synopsis' => 'La Gran Era de la Piratería: Una era empleada en la búsqueda del "One Piece". El tesoro oculto por el único "Rey de los Piratas" de la historia, Gold Roger.',
            'cast' => 'Mayumi Tanaka, Akemi, Okamura, Kazuya Nakai, Kappei, Yamaguchi, Hiroaki Hirata, Ikue, Otani, Yuriko Yamaguchi, Kazuki YaoCho',
            'coincidence' => '91% de coincidencia',
            'rating' => '13+',
            'year' => '1999',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Stranger Things',
            'trailer_url' => 'videos/trailer-stranger-things.mp4',
            'trailer_thumbnail_url' => 'images/thumbnail-stranger-things.jpg',
            'logo_url' => 'images/logo-stranger-things.png',
            'cover_url' => 'images/stranger-things.jpg',
            'synopsis' => 'Homenaje a los clásicos misterios sobrenaturales de los años 80, "Stranger Things" es la historia de un niño que desaparece en el pequeño pueblo de Hawkins, Indiana, sin dejar rastro en 1983. ',
            'cast' => 'Winona Ryder, David Harbour, Matthew Modine, Finn Wolfhard, Millie Bobby Brown, Gaten Matarazzo, Caleb McLaughlin, Natalia Dyer, Charlie Heaton, Noah Schnapp, Cara Buono, Joe Keery',
            'gender' => 'Drama',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2016',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Brooklyn Nine-Nine',
            'trailer_url' => '',
            'cover_url' => 'images/brooklyn-nine-nine.jpg',
            'synopsis' => 'Andy Samberg (como el detective Jake Peralta) y Andre Braugher (como el capitán Ray Holt) encabezan esta comedia sobre conflictos generacionales en una comisaría de Brooklyn de Nueva York.',
            'cast' => 'Andy Samberg, André Braugher, Stephanie Beatriz, Terry Crews, Melissa Fumero, Joe Lo Truglio, Chelsea Peretti, Dirk Blocker, Joel McKinnon Miller, Kyra Sedgwick, Marc Evan Jackson, Jason Mantzoukas, Nick Cannon.',
            'coincidence' => '91% de coincidencia',
            'rating' => '13+',
            'year' => '2013',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Bastard!!',
            'trailer_url' => '',
            'cover_url' => 'images/bastard.jpg',
            'synopsis' => 'Cuando fuerzas malignas amenazan con resucitar a Anthrasax, la Diosa de la Destrucción, el reino de Metallicana le pide ayuda a un voluble hechicero oscuro.',
            'cast' => 'Kisho Taniyama, Tomori, Kusuno, kiHiroki Yasumoto, Yoko, Hikasa, Kanae Ito, Tomokazu, Sugita, Kensho Ono, Nao, Toyama.',
            'coincidence' => '90% de coincidencia',
            'rating' => '18+',
            'year' => '2022',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Better Call Saul',
            'trailer_url' => '',
            'cover_url' => 'images/better-call-saul.jpg',
            'synopsis' => 'Precuela de la serie "Breaking Bad", centrada en el personaje del abogado Saul Goodman (Bob Odenkirk), seis años antes de conocer a Walter White.',
            'cast' => 'Bob Odenkirk, Jonathan Banks, Rhea Seehorn, Michael McKean, Patrick Fabian, Michael Mando, Gene N. Chavez, Julie Ann Emery, Raymond Cruz, Mel Rodriguez, Jeremy Shamos, Amy Davidson, Kerry Condon.',
            'coincidence' => '93% de coincidencia',
            'rating' => '16+',
            'year' => '2015',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Komi-san no puede comunicarse',
            'trailer_url' => '',
            'cover_url' => 'images/komi-san.jpg',
            'synopsis' => 'Hitohito Tadano es un estudiante que pasa desapercibido en clase, y él se siente muy cómodo con ello. Pero todo cambia cuando se encuentra el primer día de instituto con la "legendaria" Komi. Él descubre que no es que Komi se distancie de otros estudiantes... Es que ella es muy torpe relacionándose con los demás.',
            'cast' => 'Aoi KogaGakuto, KajiwaraRie MurakawaRin,a HidakaRumi OkuboYukiyo, FujiiAmi MaeshimaKenji, Akabane',
            'coincidence' => '91% de coincidencia',
            'rating' => '13+',
            'year' => '2021',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'BAKI',
            'trailer_url' => '',
            'cover_url' => 'images/baki.jpg',
            'synopsis' => 'Narra la historia de Baki Hanma, un prometedor luchador de artes marciales que tras superar todo entrenamiento sin complicaciones en pos de batir a su padre, Yujiro Hanma, se ve derrotado sin dificultades por este mismo.',
            'cast' => 'Shimazaki, Akio Otsuka, Takayuki, Sugo, Bin Shimada, Rikiya, Koyama, Takuya EguchiBanjo, Ginga, Takehito Koyasu.',
            'coincidence' => '89% de coincidencia',
            'rating' => '16+',
            'year' => '2018',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Recursos Humanos',
            'trailer_url' => '',
            'cover_url' => 'images/recursos-humanos.jpg',
            'synopsis' => 'Bichitos del amor, monstruos hormonales y otras criaturas viven dramas de oficina mientras cuidan a sus clientes en esta serie derivada de «Big Mouth».',
            'cast' => 'Bryant, Randall Park, Nick, KrollMaya Rudolph, Keke, Palmer, Brandon Kyle, Goodman, David Thewlis.',
            'coincidence' => '92% de coincidencia',
            'rating' => '16+',
            'year' => '2022',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Demon Slayer',
            'trailer_url' => '',
            'cover_url' => 'images/demon-slayer.jpg',
            'synopsis' => 'Tanjiro, Zenitsu e Inosuke, ayudados por el Hashira del sonido Tengen Uzui, viajan por el distrito rojo de Yoshiwara para cazar a un demonio que ha estado aterrorizando la ciudad.',
            'cast' => 'Natsuki Hanae, Akari, Shimono, Yoshitsugu Matsuoka, Takahiro, Sakurai, Hochu Otsuka, Yuki, KajiAi Kakuma',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2021',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'One-Punch Man',
            'trailer_url' => '',
            'cover_url' => 'images/one-punch-man.jpg',
            'synopsis' => 'La trama se desarrolla en Ciudad Z, Japón. Saitama es un superhéroe que, debido a varias circunstancias, puede derrotar de un puñetazo a los monstruos y villanos que asolan el lugar.',
            'cast' => 'Makoto Ishikawa, Yuki, KajiAoi Yuki, Kazuhiro, Yamaji, Kenjiro Tsuda, Minami, Takayama, Tessho Genda',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2015',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Resident Evil',
            'trailer_url' => '',
            'cover_url' => 'images/resident-evil.jpg',
            'synopsis' => 'Asi tres décadas después del descubrimiento del virus T, un brote revela los oscuros secretos de Umbrella Corporation.',
            'cast' => 'Ella Balinska, Tamara Smart, Siena Agudong, Adeline Rudolph, Lance Reddick, Paola Núñez',
            'coincidence' => '89% de coincidencia',
            'rating' => '18+',
            'year' => '2022',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Sword Art Online',
            'trailer_url' => '',
            'cover_url' => 'images/sao-alicization.jpg',
            'synopsis' => 'La historia se desarrolla en el año 2022, cuando un videojuego de rol multijugador masivo en línea de realidad virtual acaba de ser lanzado.',
            'cast' => 'Yoshitsugu Matsuoka, Haruka Tomatsu, Ayana Taketatsu, Kanae ItoRina Hidaka, Ayahi Takagaki, Hiroaki Hirata, Hiroki Yasumoto',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2012',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Black Lagoon',
            'trailer_url' => '',
            'cover_url' => 'images/black-lagoon.jpg',
            'synopsis' => 'El asesinato del jefe de la familia Lovelace en Venezuela pone a su criada, una antigua terrorista llamada Roberta, en una sanguinaria búsqueda de venganza a cualquier precio.',
            'cast' => 'Megumi Toyoguchi, Daisuke Namikawa, Tsutomu Isobe, Hiroaki Hirata, Mami Koyama, Michie Tomizawa, Tomoko Kaneda, Kazue Ikura.',
            'coincidence' => '96% de coincidencia',
            'rating' => '16+',
            'year' => '2006',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Breaking Bad',
            'trailer_url' => '',
            'cover_url' => 'images/breaking-bad.jpg',
            'synopsis' => 'Tras cumplir 50 años, Walter White, un profesor de química de un instituto de Albuquerque, Nuevo México, se entera de que tiene un cáncer de pulmón incurable.',
            'cast' => 'Bryan Cranston, Aaron Paul, Anna Gunn, Dean Norris, Betsy Brandt, RJ Mitte, Bob OdenkirkS, teven Michael Quezada',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2008',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Seinfeld',
            'trailer_url' => '',
            'cover_url' => 'images/seinfeld.jpg',
            'synopsis' => 'Nunca una serie sobre nada llegó a tanto. El cómico Jerry Seinfeld y sus excéntricos amigos viven en Nueva York y les pasan innumerables peripecias en esta genial comedia de situación donde la menor excusa sirve para regalarnos un delirante episodio.',
            'cast' => 'Jerry Seinfeld, Julia Louis-Dreyfus, Jason Alexander, Michael Richards,Wayne Knight, Heidi Swedberg',
            'coincidence' => '89% de coincidencia',
            'rating' => '13+',
            'year' => '1989',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Friends',
            'trailer_url' => '',
            'cover_url' => 'images/friends.jpg',
            'synopsis' => 'Seis jóvenes de Nueva York. Rachel, Monica, Phoebe, Ross, Chandler y Joey forman una unida pandilla de amigos que viven en Manhattan y que suelen reunirse en sus apartamentos o en su bar habitual, el Central Perk',
            'cast' => 'Jennifer Aniston, Courteney Cox, Lisa Kudrow, Matt LeBlanc, Matthew Perry, David Schwimmer, James Michael Tyler, Elliott Gould, Paul Rudd.',
            'coincidence' => '91% de coincidencia',
            'rating' => '13+',
            'year' => '1994',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        
        DB::table('series')->insert([
            'name' => 'Rick y Morty',
            'trailer_url' => 'videos/trailer-rick-and-morty.mp4',
            'trailer_thumbnail_url' => 'images/thumbnail-rick-and-morty.jpg',
            'logo_url' => 'images/logo-rick-and-morty.png',
            'cover_url' => 'images/rick-and-morty.png',
            'synopsis' => 'Rick es un brillante científico un tanto borracho que secuestra a su irritable nieto adolescente Morty para vivir aventuras en otros mundos y en dimensiones alternativas.',
            'cast' => 'Justin Roiland, Chris Parnell, Spencer Grammer, Sarah Chalke',
            'gender' => 'Comedia de situación',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2013',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'BoJack Horseman',
            'trailer_url' => '',
            'cover_url' => 'images/boJack-horseman.jpg',
            'synopsis' => 'Conoce al caballo más querido de los noventa, pero 20 años después. Un cascarrabias con un corazón no precisamente de oro, ¿quizás de cobre?',
            'cast' => 'Will Arnett, Aaron Paul, Amy Sedaris, Alison Brie, Paul F. Tompkins',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2014',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Peaky Blinders',
            'trailer_url' => '',
            'cover_url' => 'images/peaky-blinders.jpg',
            'synopsis' => '1919. Inglaterra. Thomas Shelby lidera una conocida banda de Birmingham que avanza con ferocidad por el bajo mundo.',
            'cast' => 'Cillian Murphy, Sam Neill, Helen McCrory, Paul Anderson, Iddo Goldberg, Annabelle Wallis, Sophie Rundle, Tom Hardy',
            'coincidence' => '96% de coincidencia',
            'rating' => '16+',
            'year' => '2013',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'A la caza de espíritus malignos',
            'trailer_url' => '',
            'cover_url' => 'images/a-la-caza-de-espíritus-malignos.jpg',
            'synopsis' => 'Empleados de un restaurante de día, cazadores de demonios de noche. Ellos usan sus habilidades especiales para derrotar espíritus malignos que persiguen humanos.',
            'cast' => '',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2020',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Bulgasal',
            'trailer_url' => '',
            'cover_url' => 'images/bulgasal.jpg',
            'synopsis' => 'Un hombre inmortal que carga con una maldición desde que nació está determinado a vengarse, recuperar su alma y terminar con un conflicto que lleva 600 años.',
            'cast' => 'Lee Jin-uk, Kwon Na-raLee Joon, Gong Seung-yeon, Jung Jin-young, Park Myung-sin, Kim Woo-seok',
            'coincidence' => '99% de coincidencia',
            'rating' => '16+',
            'year' => '2021',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Hotel Del Luna',
            'trailer_url' => '',
            'cover_url' => 'images/hotel-del-luna.jpg',
            'synopsis' => 'Después de recibir una oferta para administrar un hotel para almas muertas, un sofisticado hotelero llega a conocer a la dueña original del lugar y su extraño mundo.',
            'cast' => 'Lee Ji-eun, Yeo Jin-goo, Shin Jung-geun, Seo Yi-sook, Bae Hae-sun, Pyo Ji-hoon, Cho Hyun-chul, Kang Hong-suk.',
            'coincidence' => '97% de coincidencia',
            'rating' => '13+',
            'year' => '2019',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Narcos',
            'trailer_url' => '',
            'cover_url' => 'images/narcos.jpg',
            'synopsis' => 'Sé testigo del inicio de la guerra del narcotráfico mexicano en la década de 1980 en esta nueva saga de Narcos, que narra el ascenso del cártel de Guadalajara.',
            'cast' => 'Diego Luna, Michael Peña, Scoot McNairy, Tenoch Huerta, Joaquín Cosío, José María Yazpik, Matt Letscher, Alyssa Diaz',
            'coincidence' => '91% de coincidencia',
            'rating' => '18+',
            'year' => '2018',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Pablo Escobar, el patrón del mal',
            'trailer_url' => '',
            'cover_url' => 'images/pablo-escobar.jpg',
            'synopsis' => 'Esta fascinante serie narra la vida del infame Pablo Escobar, desde sus días como ratero hasta convertirse en el jefe de un imperio del narcotráfico.',
            'cast' => 'Andrés Parra, Angie Cepeda, Cecilia Navia, Vicky Hernández, Christian Tappan, Rodolfo Silva, Tommy Vásquez, Toto Vega.',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2012',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'El Chapo',
            'trailer_url' => '',
            'cover_url' => 'images/el-chapo.jpg',
            'synopsis' => 'Esta serie dramática narra la verdadera historia del ascenso, la captura y la fuga del famoso líder del narcotráfico mexicano Joaquín "el Chapo" Guzmán.',
            'cast' => 'Marco de la O, Humberto Busto, Alejandro Aguilar, Rodrigo Abed, Luis Fernando Peña, Juan Carlos Olivas, Rolf Petersen, Carlos Hernan Romo',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2017',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Memorias de un asesino',
            'trailer_url' => '',
            'cover_url' => 'images/memorias-de-un-asesino.jpg',
            'synopsis' => 'Desde su celda en la cárcel, el asesino serial Dennis Nilsen relata su vida y los atroces crímenes que cometió, y todo queda grabado en espeluznantes cintas de audio.',
            'cast' => 'Nilsen',
            'coincidence' => '91% de coincidencia',
            'rating' => '16+',
            'year' => '2021',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'Atleta A',
            'trailer_url' => '',
            'cover_url' => 'images/atleta-a.jpg',
            'synopsis' => 'Documental sobre las gimnastas víctimas de los abusos del doctor Larry Nassar de la Federación de Gimnasia de EE. UU., y los periodistas que destaparon su cultura tóxica.',
            'cast' => 'Larry Nassar ',
            'coincidence' => '93% de coincidencia',
            'rating' => '16+',
            'year' => '2020',
            'resolution' => '4K',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
            'name' => 'El asesino de mi hija',
            'trailer_url' => '',
            'cover_url' => 'images/el-asesino-de-mi-hija.jpg',
            'synopsis' => 'Tras luchar durante décadas para llevar al asesino de su hija ante la justicia en Francia y Alemania, un padre toma medidas extremas. Un documental sobre crímenes reales.',
            'cast' => ' André Bamberski',
            'coincidence' => '94% de coincidencia',
            'rating' => '16+',
            'year' => '2022',
            'resolution' => 'HD',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
