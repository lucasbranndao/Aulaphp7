<?php

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			// inicio: Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
				// Inicio: Gerente de vendas
					array(
						'nome_cargo' => 'Gerente de vendas',
					)
					//Termino: Gerente de Vendas
				)
			),
			// Termino: Diretor Comercial
			// Inicio: Diretor Ficanceiro
			array(
				'nome_cargo' => 'Diretor Finaceiro',
				'subordinados' => array(
					//Inicio: Gerente de contas a pagar
					array(
					'nome_cargo' => 'Gerente de contas a pagar',
					'subordinados' => array(
							// inicio: supervisor de pagamentos
						'nome_cargo' => 'Supervidor de pagamentos'

							//termino supervidor de pagamentos	
						)
					),

					//Termino: Gerente de contas a pagar
					// Inicio: Gerente de compras
					array(
						'nome_cargo' => 'Gerente de compras',
						'subordinados' => array(
							//inicio: supervisor de suprimentos
							array('nome_cargo' => 'Supervidor de compras',
							'subordinados' =>array(
							)
						)
							// termino: supervisor de suprimentos

						)
					// termino: gerente de compras
										)
				)
			)
		)
	)
);

function exibe($cargos){


	$html = '<ul>';

	foreach ($cargos as $cargo) {

		$html .= "<li>";
// deu erro nessa parte, porém, funcionou!
		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) >0) {

			$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";
	}

	$html .= "</ul>";

	return  $html;
}

echo exibe($hierarquia);
?>