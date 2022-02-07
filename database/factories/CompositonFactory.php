<?php

namespace Database\Factories;

use App\Models\Compositon;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompositonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compositon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => "     Composição da Comissão Nacional Eleitoral – Artigo 143º (Lei Nº 36/11, de 21 de Dezembro)",
            'information' => "     1. A Comissão Nacional Eleitoral é composta por dezassete membros, sendo:
                     
                    
                           a) Um magistrado judicial, que a preside, oriundo de qualquer órgão, escolhido na base de
                            concurso
                            curricular e designado pelo Conselho Superior da Magistratura Judicial, o qual suspende as suas
                            funções judiciais após a designação;
                         
                           b) Dezasseis cidadãos designados pela Assembleia Nacional, por maioria absoluta dos
                            Deputados
                            em
                            efectividade de funções, sob proposta dos partidos políticos e coligações de partidos políticos
                            com
                            assento parlamentar, obedecendo aos princípios da maioria e do respeito pelas minorias
                            parlamentares; 
                       
                       2. Os membros da Comissão Nacional Eleitoral referidos na alínea b) do número anterior são
                        designados na base dos critérios de idoneidade cívica e moral, probidade, competência técnica, não
                        podendo pertencer a órgão de direcção, a qualquer nível de qualquer partido político ou coligação de
                        partidos políticos.
                       3. A fixação do número de membros da Comissão Nacional Eleitoral propostos pelos partidos
                        políticos ou coligação de partidos políticos com assento parlamentar é fixada por Resolução da
                        Assembleia Nacional, no final do mandato dos membros em funções, de acordo com os resultados
                        eleitorais, nos termos da presente lei.

                    "
        ];
    }
}
