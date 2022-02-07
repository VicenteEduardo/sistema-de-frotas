<?php

namespace Database\Factories;

use App\Models\Mandate;
use Illuminate\Database\Eloquent\Factories\Factory;

class MandateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mandate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => "   Mandato e posse Artigo 151º (Lei Nº 36/11, de 21 de Dezembro)",
            'information' => " 1.Os membros da Comissão Nacional Eleitoral tomam posse perante a Assembleia Nacional.
                            
                            2 A Comissão Nacional Eleitoral inicia a sua actividade com o número de membros
                            e xistentes à
                            data da tomada de posse.
                            <>3. O mandato dos membros da Comissão Nacional Eleitoral e dos seus órgãos é de cinco
                            anos,
                            renovável por igual período de tempo.
                            4O s membros das Comissões Provinciais Eleitorais e das Comissões Municipais Eleitorais
                            tomam posse perante o Presidente da Comissão Nacional Eleitoral e dos Presidentes das Comissões
                            Provinciais Eleitorais, respectivamente.."
        ];
    }
}
