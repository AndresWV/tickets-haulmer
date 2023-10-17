<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    public function run(): void
    {
        $eventosData = [
            [
                'id' => 1,
                'nombre_evento' => 'Concierto de Rock en Vivo',
                'fecha' => '2023-11-15',
                'hora' => '20:00',
                'lugar' => 'Estadio Principal',
                'precio' => 40.0,
                'disponibilidad' => 500,
                'categoria' => 'Concierto de Música',
                'descripcion' => 'Un emocionante concierto de rock en vivo con bandas populares.',
                'url_entradas' => 'https://example.com/entradas/concierto-rock'
            ],
            [
                'id' => 2,
                'nombre_evento' => 'Exhibición de Arte Moderno',
                'fecha' => '2023-12-01',
                'hora' => '18:30',
                'lugar' => 'Galería de Arte Contemporáneo',
                'precio' => 20.0,
                'disponibilidad' => 100,
                'categoria' => 'Exhibición de Arte',
                'descripcion' => 'Una muestra de arte moderno con obras innovadoras.',
                'url_entradas' => 'https://example.com/entradas/exhibicion-arte'
            ],
            [
                'id' => 3,
                'nombre_evento' => 'Recital de Piano Clásico',
                'fecha' => '2023-11-20',
                'hora' => '19:00',
                'lugar' => 'Teatro Municipal',
                'precio' => 30.0,
                'disponibilidad' => 200,
                'categoria' => 'Recital de Música',
                'descripcion' => 'Una velada de música clásica interpretada por un virtuoso pianista.',
                'url_entradas' => 'https://example.com/entradas/recital-piano'
            ],
            [
                'id' => 4,
                'nombre_evento' => 'Festival de Jazz al Aire Libre',
                'fecha' => '2023-11-25',
                'hora' => '16:00',
                'lugar' => 'Parque Central',
                'precio' => 25.0,
                'disponibilidad' => 300,
                'categoria' => 'Festival de Música',
                'descripcion' => 'Un festival de jazz al aire libre con músicos talentosos.',
                'url_entradas' => 'https://example.com/entradas/festival-jazz'
            ],
            [
                'id' => 5,
                'nombre_evento' => 'Exposición de Fotografía',
                'fecha' => '2023-12-10',
                'hora' => '14:00',
                'lugar' => 'Museo de Fotografía',
                'precio' => 15.0,
                'disponibilidad' => 150,
                'categoria' => 'Exposición de Arte',
                'descripcion' => 'Una exposición de fotografía con imágenes impactantes.',
                'url_entradas' => 'https://example.com/entradas/exposicion-fotografia'
            ],
            [
                'id' => 6,
                'nombre_evento' => 'Obra de Teatro Clásica',
                'fecha' => '2023-11-18',
                'hora' => '19:30',
                'lugar' => 'Teatro Antiguo',
                'precio' => 35.0,
                'disponibilidad' => 180,
                'categoria' => 'Obra de Teatro',
                'descripcion' => 'Una emocionante obra de teatro clásica en un teatro histórico.',
                'url_entradas' => 'https://example.com/entradas/obra-teatro'
            ],
            [
                'id' => 7,
                'nombre_evento' => 'Concierto de Música Latina',
                'fecha' => '2023-12-05',
                'hora' => '21:00',
                'lugar' => 'Auditorio Latino',
                'precio' => 50.0,
                'disponibilidad' => 250,
                'categoria' => 'Concierto de Música',
                'descripcion' => 'Un vibrante concierto de música latina con artistas populares.',
                'url_entradas' => 'https://example.com/entradas/concierto-latino'
            ],
            [
                'id' => 8,
                'nombre_evento' => 'Exposición de Esculturas',
                'fecha' => '2023-12-20',
                'hora' => '15:00',
                'lugar' => 'Museo de Esculturas',
                'precio' => 10.0,
                'disponibilidad' => 50,
                'categoria' => 'Exposición de Arte',
                'descripcion' => 'Una exposición de esculturas que muestran la creatividad de los artistas.',
                'url_entradas' => 'https://example.com/entradas/exposicion-esculturas'
            ],
            [
                'id' => 9,
                'nombre_evento' => 'Concierto de Jazz en el Parque',
                'fecha' => '2023-11-30',
                'hora' => '17:30',
                'lugar' => 'Parque Municipal',
                'precio' => 20.0,
                'disponibilidad' => 300,
                'categoria' => 'Concierto de Música',
                'descripcion' => 'Un concierto de jazz al aire libre en un entorno tranquilo.',
                'url_entradas' => 'https://example.com/entradas/concierto-jazz-parque'
            ],
            [
                'id' => 10,
                'nombre_evento' => 'Exposición de Arte Digital',
                'fecha' => '2023-12-15',
                'hora' => '16:00',
                'lugar' => 'Galería de Arte Digital',
                'precio' => 15.0,
                'disponibilidad' => 120,
                'categoria' => 'Exposición de Arte',
                'descripcion' => 'Una muestra de arte digital que explora la tecnología y la creatividad.',
                'url_entradas' => 'https://example.com/entradas/exposicion-arte-digital'
            ],
            [
                'id' => 11,
                'nombre_evento' => 'Concierto de Ópera Clásica',
                'fecha' => '2023-11-28',
                'hora' => '19:00',
                'lugar' => 'Teatro de la Ópera',
                'precio' => 60.0,
                'disponibilidad' => 150,
                'categoria' => 'Concierto de Música',
                'descripcion' => 'Un impresionante concierto de ópera clásica con cantantes de renombre.',
                'url_entradas' => 'https://example.com/entradas/concierto-opera'
            ],
            [
                'id' => 12,
                'nombre_evento' => 'Festival de Danza Contemporánea',
                'fecha' => '2023-12-08',
                'hora' => '20:30',
                'lugar' => 'Centro de Artes Escénicas',
                'precio' => 25.0,
                'disponibilidad' => 200,
                'categoria' => 'Festival de Danza',
                'descripcion' => 'Un festival de danza contemporánea con coreografías innovadoras.',
                'url_entradas' => 'https://example.com/entradas/festival-danza'
            ],
            [
                'id' => 13,
                'nombre_evento' => 'Concierto de Jazz Fusion',
                'fecha' => '2023-11-22',
                'hora' => '18:30',
                'lugar' => 'Club de Jazz',
                'precio' => 30.0,
                'disponibilidad' => 80,
                'categoria' => 'Concierto de Música',
                'descripcion' => 'Un concierto de jazz fusion que combina elementos de jazz y rock.',
                'url_entradas' => 'https://example.com/entradas/concierto-jazz-fusion'
            ],
            [
                'id' => 14,
                'nombre_evento' => 'Exposición de Pintura Clásica',
                'fecha' => '2023-12-18',
                'hora' => '17:00',
                'lugar' => 'Museo de Arte Clásico',
                'precio' => 12.0,
                'disponibilidad' => 100,
                'categoria' => 'Exposición de Arte',
                'descripcion' => 'Una exposición de pintura clásica con obras maestras de la historia del arte.',
                'url_entradas' => 'https://example.com/entradas/exposicion-pintura'
            ],
            [
                'id' => 15,
                'nombre_evento' => 'Concierto de Música Electrónica',
                'fecha' => '2023-11-29',
                'hora' => '22:00',
                'lugar' => 'Club de Música Electrónica',
                'precio' => 35.0,
                'disponibilidad' => 150,
                'categoria' => 'Concierto de Música',
                'descripcion' => 'Un emocionante concierto de música electrónica con DJs famosos.',
                'url_entradas' => 'https://example.com/entradas/concierto-electronica'
            ],
            [
                'id' => 16,
                'nombre_evento' => 'Exhibición de Esculturas Modernas',
                'fecha' => '2023-12-12',
                'hora' => '15:30',
                'lugar' => 'Galería de Esculturas',
                'precio' => 18.0,
                'disponibilidad' => 80,
                'categoria' => 'Exposición de Arte',
                'descripcion' => 'Una exhibición de esculturas modernas que desafían los límites del arte.',
                'url_entradas' => 'https://example.com/entradas/exhibicion-esculturas'
            ],
            [
                'id' => 17,
                'nombre_evento' => 'Concierto de Pop en Vivo',
                'fecha' => '2023-11-27',
                'hora' => '19:30',
                'lugar' => 'Arena de Conciertos',
                'precio' => 45.0,
                'disponibilidad' => 300,
                'categoria' => 'Concierto de Música',
                'descripcion' => 'Un concierto de música pop en vivo con artistas populares del momento.',
                'url_entradas' => 'https://example.com/entradas/concierto-pop'
            ],
            [
                'id' => 18,
                'nombre_evento' => 'Exposición de Fotografía de Naturaleza',
                'fecha' => '2023-12-05',
                'hora' => '16:30',
                'lugar' => 'Centro de Naturaleza',
                'precio' => 15.0,
                'disponibilidad' => 120,
                'categoria' => 'Exposición de Arte',
                'descripcion' => 'Una exposición de fotografías de la belleza natural del mundo.',
                'url_entradas' => 'https://example.com/entradas/exposicion-fotografia-naturaleza'
            ],
            [
                'id' => 19,
                'nombre_evento' => 'Concierto de Orquesta Sinfónica',
                'fecha' => '2023-11-23',
                'hora' => '19:30',
                'lugar' => 'Teatro de la Sinfonía',
                'precio' => 55.0,
                'disponibilidad' => 250,
                'categoria' => 'Concierto de Música',
                'descripcion' => 'Un majestuoso concierto de música clásica interpretado por una orquesta sinfónica.',
                'url_entradas' => 'https://example.com/entradas/concierto-orquesta'
            ],
            [
                'id' => 20,
                'nombre_evento' => 'Festival de Arte Urbano',
                'fecha' => '2023-12-20',
                'hora' => '14:00',
                'lugar' => 'Zona Urbana',
                'precio' => 10.0,
                'disponibilidad' => 500,
                'categoria' => 'Festival de Arte',
                'descripcion' => 'Un festival que celebra el arte urbano con grafitis, música y danza callejera.',
                'url_entradas' => 'https://example.com/entradas/festival-arte-urbano'
            ],
        ];

        Evento::insert($eventosData);
    }
}
