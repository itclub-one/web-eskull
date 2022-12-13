<?php
/**
 *         $table->string('nama_kegiatan');
 * $table->string('logo')->default('default.png');
 * $table->string('penyelenggara');
 * $table->string('foto_kegiatan')->default('default.png');
 * $table->timestamps();
 */

namespace Database\Factories;

use App\Models\Dokumentasi;
use App\Models\Eskul;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DokumentasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dokumentasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_kegiatan' => $this->faker->city(),
            'penyelenggara' => $this->faker->name
        ];
    }
}
