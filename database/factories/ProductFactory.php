<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\product;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $models = [
            'Razer' => [
                ['name' => ' DeathAdder V2 Pro', 'image' => 'razer_deathadder_v2.jpg'],
                ['name' => ' Basilisk V3', 'image' => 'razer_basilisk_v3.jpg'],
                ['name' => ' Naga X', 'image' => 'razer_naga_x.jpg'],
                ['name' => ' Viper Ultimate', 'image' => 'razer_viper_ultimate.jpg'],
                ['name' => ' Naga Trinity', 'image' => 'razer_naga_trinity.jpg'],
                ['name' => ' Basilisk Essential', 'image' => 'razer_basilisk_essential.jpg'],
                ['name' => ' DeathAdder Elite', 'image' => 'razer_deathadder_elite.jpg'],
                ['name' => ' Orochi V2', 'image' => 'razer_orochi_v2.jpg'],
                ['name' => ' Atheris', 'image' => 'razer_atheris.jpg'],
                ['name' => ' Mamba Wireless', 'image' => 'razer_mamba_wireless.jpg'],
                ['name' => ' V3 Pro', 'image' => 'razer_v3_pro.jpg'],
            ],
            'Logitech' => [
                ['name' => ' G Pro X Superlight', 'image' => 'logitech_g_pro_x_superlight.jpg'],
                ['name' => ' G502 Hero', 'image' => 'logitech_g502_hero.jpg'],
                ['name' => ' G305 Lightspeed', 'image' => 'logitech_g305_lightspeed.jpg'],
                ['name' => ' G Pro Wireless', 'image' => 'logitech_g_pro_wireless.jpg'],
                ['name' => ' G703 Lightspeed', 'image' => 'logitech_g703_lightspeed.jpg'],
                ['name' => ' G903 Lightspeed', 'image' => 'logitech_g903_lightspeed.jpg'],
                ['name' => ' G602 Wireless', 'image' => 'logitech_g602_wireless.jpg'],
                ['name' => ' G203 Lightsync', 'image' => 'logitech_g203_lightsync.jpg'],
                ['name' => ' G900 Chaos Spectrum', 'image' => 'logitech_g900_chaos_spectrum.jpg'],
                ['name' => ' G903 HERO', 'image' => 'logitech_g903_hero.jpg'],
            ],
            'SteelSeries' => [
                ['name' => ' Rival 600', 'image' => 'steelseries_rival_600.jpg'],
                ['name' => ' Sensei 310', 'image' => 'steelseries_sensei_310.jpg'],
                ['name' => ' Aerox 3', 'image' => 'steelseries_aerox_3.jpg'],
                ['name' => ' Rival 710', 'image' => 'steelseries_rival_710.jpg'],
                ['name' => ' Sensei Ten', 'image' => 'steelseries_sensei_ten.jpg'],
                ['name' => ' Rival 650', 'image' => 'steelseries_rival_650.jpg'],
                ['name' => ' Rival 500', 'image' => 'steelseries_rival_500.jpg'],
                ['name' => ' Rival 310', 'image' => 'steelseries_rival_310.jpg'],
            ],
            'Corsair' => [
                ['name' => ' Dark Core RGB', 'image' => 'corsair_dark_core_rgb.jpg'],
                ['name' => ' Scimitar RGB Elite', 'image' => 'corsair_scimitar_rgb_elite.jpg'],
                ['name' => ' M65 Elite', 'image' => 'corsair_m65_elite.jpg'],
                ['name' => ' Ironclaw RGB', 'image' => 'corsair_ironclaw_rgb.jpg'],
                ['name' => ' Katar Pro XT', 'image' => 'corsair_katar_pro_xt.jpg'],
                ['name' => ' Harpoon RGB', 'image' => 'corsair_harpoon_rgb.jpg'],
                ['name' => ' M65 Pro RGB', 'image' => 'corsair_m65_pro_rgb.jpg'],
                ['name' => ' Glaive RGB Pro', 'image' => 'corsair_glaive_rgb_pro.jpg'],
                ['name' => ' Sabre RGB Pro', 'image' => 'corsair_sabre_rgb_pro.jpg'],
                ['name' => ' Dark Core SE', 'image' => 'corsair_dark_core_se.jpg'],
            ],
            'HyperX' => [
                ['name' => ' Pulsefire FPS Pro', 'image' => 'hyperx_pulsefire_fps_pro.jpg'],
                ['name' => ' Pulsefire Haste', 'image' => 'hyperx_pulsefire_haste.jpg'],
                ['name' => ' Pulsefire Dart', 'image' => 'hyperx_pulsefire_dart.jpg'],
                ['name' => ' Pulsefire FPS', 'image' => 'hyperx_pulsefire_fps.jpg'],
                ['name' => ' Pulsefire Raid', 'image' => 'hyperx_pulsefire_raid.jpg'],
                ['name' => ' Pulsefire Haste Wireless', 'image' => 'hyperx_pulsefire_haste_wireless.jpg'],
            ],
            'Zowie' => [
                ['name' => ' EC2', 'image' => 'zowie_ec2.jpg'],
                ['name' => ' FK2', 'image' => 'zowie_fk2.jpg'],
                ['name' => ' S2', 'image' => 'zowie_s2.jpg'],
                ['name' => ' ZA12', 'image' => 'zowie_za12.jpg'],
                ['name' => ' FK1+', 'image' => 'zowie_fk1_plus.jpg'],
                ['name' => ' EC1', 'image' => 'zowie_ec1.jpg'],
                ['name' => ' S1', 'image' => 'zowie_s1.jpg'],
                ['name' => ' EC3', 'image' => 'zowie_ec3.jpg'],
                ['name' => ' EC2-A', 'image' => 'zowie_ec2_a.jpg'],
                ['name' => ' FK1', 'image' => 'zowie_fk1.jpg'],
            ],
            'Glorious' => [
                ['name' => 'Model O', 'image' => 'glorious_model_o.jpg'],
                ['name' => 'Model D', 'image' => 'glorious_model_d.jpg'],
                ['name' => 'Model O Minus', 'image' => 'glorious_model_o_minus.jpg'],
                ['name' => 'Model O Wireless', 'image' => 'glorious_model_o_wireless.jpg'],
                ['name' => 'Model D Wireless', 'image' => 'glorious_model_d_wireless.jpg'],
                ['name' => 'Model O Wireless', 'image' => 'glorious_model_o_wireless_2.jpg'],
            ],
            'Redragon' => [
                ['name' => 'M908 Impact', 'image' => 'redragon_m908_impact.jpg'],
                ['name' => 'M602 RGB', 'image' => 'redragon_m602_rgb.jpg'],
                ['name' => 'M711 Cobra', 'image' => 'redragon_m711_cobra.jpg'],
                ['name' => 'M602', 'image' => 'redragon_m602.jpg'],
                ['name' => 'M688', 'image' => 'redragon_m688.jpg'],
                ['name' => 'M607', 'image' => 'redragon_m607.jpg'],
                ['name' => 'M720', 'image' => 'redragon_m720.jpg'],
                ['name' => 'M901 Perdition', 'image' => 'redragon_m901_perdition.jpg'],
            ],
            'Sharkoon' => [
                ['name' => 'Drakonia', 'image' => 'sharkoon_drakonia.jpg'],
                ['name' => 'SKILLER SGM1', 'image' => 'sharkoon_skiller_sgm1.jpg'],
                ['name' => 'Drakonia II', 'image' => 'sharkoon_drakonia_ii.jpg'],
            ],
        ];

        // Array for descriptions
        $descriptions = [
            'Perfect for FPS games.',
            'Ultra-lightweight and ergonomic design.',
            'Precision tracking with high DPI sensitivity.',
            'Customizable RGB lighting.',
            'Comfortable grip for long gaming sessions.',
            // Add more descriptions as necessary...
        ];

        // Randomly select a brand and model
        $brand = $this->faker->randomElement(array_keys($models));
        $model = $this->faker->randomElement($models[$brand]);

        return [
            'name' => $brand . ' ' . $model['name'],
            'price' => $this->faker->numberBetween(100000, 10000000),
            'description' => $this->faker->randomElement($descriptions),
            'image' => $model['image'],
        ];
    }
}