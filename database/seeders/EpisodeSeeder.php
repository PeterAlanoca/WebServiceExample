<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            'season_id' => 1,
            'name' => '1. El poder de Grayskull',
            'thumbnail_url' => 'images/thumbnail-he-man-1x1.jpg',
            'video_url' => 'videos/he-man-1x1.mp4',
            'description' => 'Eternia rinde homenaje a Teela como su nueva guerrera, pero la ceremonia de nombramiento se interrumpe cuando Skeletor comanda un ataque contra Grayskull.',
            'duration' => '27 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 1,
            'name' => '2. El cáliz envenenado',
            'thumbnail_url' => 'images/thumbnail-he-man-1x2.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Convertidas en mercenarias, Teela y su compañera aceptan un trabajo que les encarga una misteriosa mujer: recuperar un cáliz de las profundidades de la Montaña Serpiente.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 1,
            'name' => '3. El hombre más peligroso de Eternia',
            'thumbnail_url' => 'images/thumbnail-he-man-1x3.jpg',
            'video_url' => 'videos/he-man-1x1.mp4',
            'description' => 'Mientras defienden a una aldea de la secta de Tri-Klops, Teela y compañía se topan con Man-At-Arms, quien lucha por mantener vivo a Orko con el agua encantada del pueblo.',
            'duration' => '24 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 1,
            'name' => '4. La tierra de los muertos',
            'thumbnail_url' => 'images/thumbnail-he-man-1x4.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Separada del grupo en Subternia, Teela se enfrenta a una entidad siniestra que le ofrece una mitad de la Espada del Poder a cambio de sus miedos.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 1,
            'name' => '5. La forja de la espada',
            'thumbnail_url' => 'images/thumbnail-he-man-1x5.jpg',
            'video_url' => 'videos/he-man-1x1.mp4',
            'description' => 'Un rostro conocido le advierte a Teela y a los demás que salir de Preternia puede ser imposible. Roboto arriesga su cuerpo para volver a forjar la Espada del Poder.',
            'duration' => '27 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 1,
            'name' => '6. Partido a la mitads',
            'thumbnail_url' => 'images/thumbnail-he-man-1x6.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Mientras la Sorceress, Adam y los demás lo miran sin poder hacer nada, Skeletor aprovecha su nuevo poder para el mal y sume Eternia en el caos.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 1,
            'name' => '7. La cordura y la sangre',
            'thumbnail_url' => 'images/thumbnail-he-man-1x7.jpg',
            'video_url' => 'videos/he-man-1x1.mp4',
            'description' => 'Adam llama al poder de Grayskull sin blandir la espada y choca con Skeletor. Luego, pone la mira en un objetivo inverosímil.',
            'duration' => '23 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 1,
            'name' => '8. Rata de alcantarilla',
            'thumbnail_url' => 'images/thumbnail-he-man-1x8.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Cuando Evil‑Lyn empieza a dudar de las intenciones de Skeletor, recuerda cómo conoció al tirano sediento de poder y finalmente decide hacer una jugada inesperada.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 1,
            'name' => '9. La esperanza de un destino',
            'thumbnail_url' => 'images/thumbnail-he-man-1x9.jpg',
            'video_url' => 'videos/he-man-1x1.mp4',
            'description' => 'Al tanto de su legado, Teela intenta manifestar sus poderes en una llamada de ayuda en su lucha contra Evil Lyn, mientras Adam se hace aliado de alguien insospechado.',
            'duration' => '23 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 1,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('episodes')->insert([
            'season_id' => 2,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 2,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 2,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 2,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 2,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 2,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 2,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 2,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 2,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 2,
            'name' => '10. Viene con todo lo que ves',
            'thumbnail_url' => 'images/thumbnail-he-man-1x10.jpg',
            'video_url' => 'videos/he-man-1x2.mp4',
            'description' => 'Teela asume su nuevo papel y Adam recupera la Espada del Poder cuando comienza la última confrontación que decidirá el destino de Eternia... y de todo el universo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '1. Buscando las semillas',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x1.jpg',
            'video_url' => 'videos/rick-and-morty-1x1.ts',
            'description' => 'Rick lleva a Morty a otra dimensión donde encuentran semillas de Mega Árbol; mientras tanto, Jerry y Beth discuten acerca de la influencia de Rick sobre su hijo.',
            'duration' => '22 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '2. Invasión canina',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x2.jpg',
            'video_url' => 'videos/rick-and-morty-1x2.ts',
            'description' => 'Rick diseña un aparato para que Snuffles sea más inteligente, pero resulta mal. Rick y Morty invaden los sueños del profesor de matemáticas de Morty.',
            'duration' => '21 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '3. Parque anatómico',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x3.jpg',
            'video_url' => 'videos/rick-and-morty-1x1.ts',
            'description' => 'Morty aparece en un extraño parque temático de enfermedades infecciosas y ubicado en el interior de un vagabundo. Los padres de Jerry presentan a su amante compartido.',
            'duration' => '22 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '4. La simulación alienígena',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x4.jpg',
            'video_url' => 'videos/rick-and-morty-1x2.ts',
            'description' => 'Extraterrestres envían a Rick, Morty y a Jerry a una realidad alterna, donde Rick intenta salvarlos mientras el distraído Jerry promueve un eslogan para vender manzanas.',
            'duration' => '22 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '5. Meeseeks destructores',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x5.jpg',
            'video_url' => 'videos/rick-and-morty-1x1.ts',
            'description' => 'Morty está cansado de las locuras de Rick, así que propone una aventura supuestamente más tranquila. Jerry conjura a una extraña criatura para ayudarlo en el golf.',
            'duration' => '22 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '6. La poción de Rick',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x6.jpg',
            'video_url' => 'videos/rick-and-morty-1x2.ts',
            'description' => 'Morty usa una poción para ser atractivo a las chicas, pero el efecto se vuelve viral y contagia a todos en la Tierra, así que queda en manos de Rick limpiar el desorden.',
            'duration' => '22 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '7. Criando un Gazorpazorp',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x7.jpg',
            'video_url' => 'videos/rick-and-morty-1x1.ts',
            'description' => 'Después de que Morty tiene un bebé con un robot sexual, Rick y Summer visitan el planeta de la mamá, donde el retoño se convierte en un adulto en cuestión de días.',
            'duration' => '22 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '8. Televisión interdimensional',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x8.jpg',
            'video_url' => 'videos/rick-and-morty-1x2.ts',
            'description' => 'Aburrido de la televisión, Rick instala una señal de cable que percibe series de otras dimensiones. Todos usan gafas para ver a sus yos alternativos.',
            'duration' => '22 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '9. Cosas necesarias',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x9.jpg',
            'video_url' => 'videos/rick-and-morty-1x1.ts',
            'description' => 'Rick tiene dudas sobre el nuevo trabajo de Summer en una tienda administrada por el diablo. Jerry y Morty discuten sobre si Plutón es o no un planeta y viajan ahí.',
            'duration' => '22 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '10. Encuentros cercanos a lo Rick',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x10.jpg',
            'video_url' => 'videos/rick-and-morty-1x2.ts',
            'description' => 'Rick intenta disfrutar de su desayuno, pero un grupo de Ricks alternativos lo secuestra y lo juzga por crímenes contra los Ricks.',
            'duration' => '22 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 3,
            'name' => '11. Es hora de la fiesta',
            'thumbnail_url' => 'images/thumbnail-rick-and-morty-1x11.jpg',
            'video_url' => 'videos/rick-and-morty-1x1.ts',
            'description' => 'Jerry y Beth salen para participar en la recreación del hundimiento del Titanic, Rick y Summer hacen una fiesta que se sale de control.',
            'duration' => '22 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

      
        DB::table('episodes')->insert([
            'season_id' => 4,
            'name' => '1. Lo que dijo el Trueno',
            'thumbnail_url' => 'images/thumbnail-dota-1x1.jpg',
            'video_url' => 'videos/dota-1x1.mp4',
            'description' => 'No hay reposo para el justo: Davion, el Caballero Dragón, descubre algo siniestro y conoce a una princesa tras un objetivo. En el ardor de la batalla, se forja un héroe.',
            'duration' => '28 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 4,
            'name' => '2. Princesa de nada',
            'thumbnail_url' => 'images/thumbnail-dota-1x2.jpg',
            'video_url' => 'videos/dota-1x2.mp4',
            'description' => 'Mirana y Marci le dan una mano a Davion, que lo ha olvidado casi todo. El mercado negro llama; Davion expulsa un anillo revelador... y desata su bestia interior.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 4,
            'name' => '3. Neverwhere Land',
            'thumbnail_url' => 'images/thumbnail-dota-1x3.jpg',
            'video_url' => 'videos/dota-1x1.mp4',
            'description' => 'Sigan soñando: las visiones guían a un turbado Caballero Dragón y una talentosa ladrona de lotos. Fymryn parte tras su hechicero, y un sendero peligroso humilla a Mirana.',
            'duration' => '28 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 4,
            'name' => '4. El monstruo al final de este libro',
            'thumbnail_url' => 'images/thumbnail-dota-1x4.jpg',
            'video_url' => 'videos/dota-1x1.mp4',
            'description' => 'El miedo invoca a una diosa; Davion acude a un hermano en busca de respuestas... o pelea. El salvador de Fymryn enfrenta a una luminaria dispuesta a declarar la guerra.',
            'duration' => '28 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 4,
            'name' => '5. El sermón de fuego',
            'thumbnail_url' => 'images/thumbnail-dota-1x5.jpg',
            'video_url' => 'videos/dota-1x2.mp4',
            'description' => 'Las chicas tienen un aterrizaje turbulento, y la Orden entra en guerra. Slyrak se enfurece, y Davion debe lidiar con los poderosos espíritus de antiguos dragones.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 4,
            'name' => '6. El Caballero, la Muerte y el Diablo',
            'thumbnail_url' => 'images/thumbnail-dota-1x6.jpg',
            'video_url' => 'videos/dota-1x1.mp4',
            'description' => 'Fymryn y Luna recurren a sus diosas. El Invocador les da noticias terribles a Davion y Mirana; más tarde, se cierra un trato.',
            'duration' => '28 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 4,
            'name' => '7. Di las palabras',
            'thumbnail_url' => 'images/thumbnail-dota-1x7.jpg',
            'video_url' => 'videos/dota-1x2.mp4',
            'description' => 'Un padre afligido invoca la memoria de su hija. Fymryn vuelve a las andadas: se precipita al nido de un dragón y deja que Davion lo arriesgue todo.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 4,
            'name' => '8. Una partida de ajedrez',
            'thumbnail_url' => 'images/thumbnail-dota-1x8.jpg',
            'video_url' => 'videos/dota-1x2.mp4',
            'description' => 'Reaparecen viejos compatriotas... y enemigos. Mirana y Fymryn intentan enmendar daños, pero una diosa tiene otros planes, y la aniquilación asoma su abominable rostro.',
            'duration' => '26 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('episodes')->insert([
            'season_id' => 5,
            'name' => '1. Capítulo uno: La desaparición de Will Byers',
            'thumbnail_url' => 'images/thumbnail-stranger-things-1x1.jpg',
            'video_url' => 'videos/stranger-things-1x1.ts',
            'description' => 'Will es testigo de algo horroroso cuando regresa a casa. Cerca de ahí, un laboratorio gubernamental esconde un terrible secreto en sus profundidades.',
            'duration' => '49 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 5,
            'name' => '2. Capítulo dos: La loca de la calle Maple',
            'thumbnail_url' => 'images/thumbnail-stranger-things-1x2.jpg',
            'video_url' => 'videos/stranger-things-1x1.ts',
            'description' => 'Lucas, Mike y Dustin intentan hablar con la niña que encontraron. Joyce, muy ansiosa, es interrogada por Hopper sobre una llamada telefónica.',
            'duration' => '49 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 5,
            'name' => '3. Capítulo tres: Todo está bien',
            'thumbnail_url' => 'images/thumbnail-stranger-things-1x3.jpg',
            'video_url' => 'videos/stranger-things-1x1.ts',
            'description' => 'Nancy, cada vez más preocupada, busca a Barb y descubre lo que Jonathan está tramando. Joyce está segura de que Will intenta comunicarse con ella.',
            'duration' => '49 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 5,
            'name' => '4. Capítulo cuatro: El cuerpo',
            'thumbnail_url' => 'images/thumbnail-stranger-things-1x4.jpg',
            'video_url' => 'videos/stranger-things-1x1.ts',
            'description' => 'Joyce se rehusa a aceptar que Will está muerto e intenta comunicarse con él, y los chicos ayudan a Once a cambiar de imagen. Nancy y Jonathan forman una alianza.',
            'duration' => '49 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 5,
            'name' => '5. Capítulo cinco: La pulga y el acróbata',
            'thumbnail_url' => 'images/thumbnail-stranger-things-1x5.jpg',
            'video_url' => 'videos/stranger-things-1x1.ts',
            'description' => 'Hopper entra al laboratorio. Nancy y Jonathan enfrentan a lo que se llevó a Will, y los chicos le preguntan al señor Clarke cómo viajar a otra dimensión.',
            'duration' => '49 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 5,
            'name' => '6. Capítulo seis: El monstruo',
            'thumbnail_url' => 'images/thumbnail-stranger-things-1x6.jpg',
            'video_url' => 'videos/stranger-things-1x1.ts',
            'description' => 'Jonathan busca a Nancy en la oscuridad y Steve hace lo mismo. Hopper y Joyce descubren la verdad sobre los experimentos del laboratorio.',
            'duration' => '49 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 5,
            'name' => '7. Capítulo siete: La bañera',
            'thumbnail_url' => 'images/thumbnail-stranger-things-1x7.jpg',
            'video_url' => 'videos/stranger-things-1x1.ts',
            'description' => 'Once intenta llegar hasta Will, y Lucas advierte sobre algo terrible que se avecina. Nancy y Jonathan le muestran a la policía lo que captó con su cámara.',
            'duration' => '49 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('episodes')->insert([
            'season_id' => 5,
            'name' => '8. Capítulo ocho: El otro lado',
            'thumbnail_url' => 'images/thumbnail-stranger-things-1x8.jpg',
            'video_url' => 'videos/stranger-things-1x1.ts',
            'description' => 'El doctor Brenner detiene a Hopper y Joyce para un interrogatorio. Los chicos esperan con Once en el gimnasio, mientras que Nancy y Jonathan se preparan para luchar.',
            'duration' => '49 min',
            'state' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}

