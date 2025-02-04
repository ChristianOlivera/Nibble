<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('news')->insert([
            [
                'news_id' => 1,
                'title' => 'Colaboración Especial con el Chef Juan Pérez',
                'resume' => '¡Presentamos una colaboración exclusiva con el reconocido Chef Juan Pérez!',
                'content' => 'En NIBBLE, siempre estamos buscando maneras de innovar y ofrecerte lo mejor. Nos emociona anunciar nuestra colaboración especial con el aclamado Chef Juan Pérez. Juntos hemos creado una hamburguesa gourmet que fusiona ingredientes de alta calidad y técnicas culinarias de vanguardia. Ven y prueba esta exclusiva creación, disponible solo por tiempo limitado.',
                'image' => 'imgs/news_1.jpg',
                'description_image' => 'Chef Juan Pérez',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 2,
                'title' => 'Nueva Sucursal en Zona Norte',
                'resume' => '¡Nos expandimos a la Zona Norte!',
                'content' => 'Estamos emocionados de anunciar la apertura de nuestra nueva sucursal en la Zona Norte. A partir del próximo mes, podrás disfrutar de nuestras deliciosas hamburguesas en nuestro nuevo local ubicado en San Isidro. ¡Te esperamos con nuestras creaciones más populares y nuevas sorpresas!',
                'image' => 'imgs/news_2.jpg',
                'description_image' => 'Nueva Sucursal en Zona Norte',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 3,
                'title' => 'Hamburguesa Edición Limitada',
                'resume' => 'Presentamos la Hamburguesa "1UP"',
                'content' => 'Nos complace anunciar el lanzamiento de nuestra nueva hamburguesa exclusiva: la "Sabor Nibble". Esta creación única combina ingredientes frescos y de calidad, ofreciendo una explosión de sabores en cada bocado. Ven y disfruta de esta experiencia culinaria solo en NIBBLE.',
                'image' => 'imgs/news_3.jpg',
                'description_image' => 'Hamburguesa "1UP"',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 4,
                'title' => 'Promoción Especial de Fin de Semana',
                'resume' => '¡Disfruta de un 2x1 en todas nuestras hamburguesas este fin de semana!',
                'content' => 'Este fin de semana, NIBBLE te invita a disfrutar de una promoción especial: ¡2x1 en todas nuestras hamburguesas! Ven con un amigo o familiar y aprovecha esta increíble oferta. Solo válido en nuestras sucursales durante el sábado y domingo. ¡No te lo pierdas!',
                'image' => 'imgs/news_4.jpg',
                'description_image' => '2x1 en todas nuestras hamburguesas',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
