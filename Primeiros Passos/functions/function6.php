<?php
//funções recursivas
//uma função chama ela mesma

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: Diretos
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                )
            ),
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gerente de Constas a Pagar',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                        )
                    ),
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'Funcionário'
                                    )
                                )
                            )
                        )
                    ),
                    array(
                        'nome_cargo' => 'Diretor de Marketing',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Gerente de Propagandas',
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'Analista de Propagandas'
                                    )
                                )
                            )
                        )
                    )

                )
            )
        )
    )
);

function exibe($cargos)
{

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);
