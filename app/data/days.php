<?php

$days = [];

// Gerando dados para cada dia do mês
for ($dia = 1; $dia <= 6; $dia++) {
    // Formata o dia com dois dígitos (01, 02, ..., 31)
    $diaFormatado = str_pad($dia, 2, '0', STR_PAD_LEFT);

    // Data no formato 'dd/mm'
    $data = $diaFormatado . '/07'; // Supondo que seja julho, você pode ajustar o mês conforme necessário

    // Número aleatório de refeições feitas (entre 1 e 5)
    $refeicoes = rand(1, 5);

    // Calorias aleatórias consumidas (entre 500 e 2500 kcal)
    $calorias = rand(500, 2500);

    $id = $dia;

    // Adiciona os dados do dia ao array principal
    $days[] = [
        'id' => $id,
        'data' => $data,
        'refeicoes' => $refeicoes,
        'calorias' => $calorias,
    ];
}
