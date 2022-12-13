<?php
namespace Database\Factories;

use App\Models\Eskul;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EskulFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Eskul::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /**
         *             $table->string('slug');
        $table->primary('slug');
        $table->string('nama_eskul');
        $table->string('logo');
        $table->string('pembina');
        $table->string('ketua');
        $table->string('wakilketua');
        $table->text('jadwal_kumpulan');
        $table->text('visi');
        $table->text('misi_eskul');
        $table->text('program_kerja');
        $table->string('nama_instagram');
         */
        $nama_eskul = $this->faker->words();
        $slug = Str::slug(implode(' ', $nama_eskul));
        $nama_instagram = $slug;
        return [
            'slug' => $slug,
            'nama_eskul' => implode(' ', $nama_eskul),
            'logo' => 'default.png',
            'pembina' => $this->faker->name(),
            'ketua' => $this->faker->name(),
            'wakilketua' => $this->faker->name(),
            'jadwal_kumpulan' => $this->faker->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']) . " Jumat",
            'visi' => $this->faker->paragraph(),
            'misi_eskul' => $this->faker->paragraph(),
            'program_kerja' => $this->faker->paragraph(),
            'nama_instagram' => $nama_instagram,
        ];
    }


}
