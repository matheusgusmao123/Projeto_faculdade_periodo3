<?php

require ('../FPDF/fpdf.php');
include ('config.php');

$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);

$pageCounter = 0;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('../Imagens/Modavo_Logo.png', 10, 10, 100);
$pdf->Ln(20);
$pdf->SetFont('Arial', 'B', 24);
$pdf->Cell(60, 20, 'LISTA DE USUARIOS');
$pdf->Ln(20);
$pdf->SetFont('Arial', 'I', 12);
while ($user_data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    $pdf->Cell(60, 20, "-------------------------------------------------------------------------------------------------------------------------------------");

    $pdf->Ln(5);

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(60, 20, ' Nome: ' . $user_data["nome"]);

    $pdf->Ln(10);

    $pdf->SetFont('Arial', 'I', 12);
    $pdf->Cell(60, 20, ' Mae: ' . $user_data["mae"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' E-mail: ' . $user_data["email"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' CEP: ' . $user_data["cep"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' CPF: ' . $user_data["cpf"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Bairro: ' . $user_data["bairro"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Cidade: ' . $user_data["cidade"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Estado: ' . $user_data["estado"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Rua: ' . $user_data["rua"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Nascimento: ' . $user_data["datanasc"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Tel Celular: ' . $user_data["celular"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Tel Fixo: ' . $user_data["telfixo"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Login: ' . $user_data["login"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Senha: ' . $user_data["senha"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Genero: ' . $user_data["genero"]);

    $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Permissao: ' . $user_data["permissoes"]);


    $pdf->Ln(5);

    // $pdf->Cell(60, 20, ' Nome: ' . $user_data["login"] .
    //     ' Mae: ' . $user_data["senha"] .
    //     ' E-mail: ' . $user_data["permissoes"] .
    //     ' CEP: ' . $user_data["email"]);

    // $pdf->Ln(5);

    // $pdf->Cell(60, 20, ' CPF: ' . $user_data["login"] .
    // ' Bairro: ' . $user_data["senha"] .
    // ' Cidade: ' . $user_data["permissoes"] .
    // ' Estado: ' . $user_data["email"]);

    // $pdf->Ln(5);

    // $pdf->Cell(60, 20, ' Rua: ' . $user_data["login"] .
    // ' Nascimento: ' . $user_data["senha"] .
    // ' Tel Celular: ' . $user_data["permissoes"] .
    // ' Tel Fixo: ' . $user_data["email"]);

    // $pdf->Ln(5);

    // $pdf->Cell(60, 20, ' Login: ' . $user_data["login"] .
    // ' Senha: ' . $user_data["senha"] .
    // ' Genero: ' . $user_data["permissoes"] .
    // ' Permissao: ' . $user_data["email"]);

    // $pdf->Ln(5);

    $pdf->Cell(60, 20, ' Status: ' . $user_data["login"]);

    $pdf->Ln(5);


    $pdf->Cell(60, 20, "-------------------------------------------------------------------------------------------------------------------------------------");

    $pdf->Ln(5);

    $pageCounter = $pageCounter + 1;

    if ($pageCounter >= 2) {
        $pdf->AddPage();
        $pageCounter = 0;
    }

    $pdf->Ln(5);
}
$pdf->Output('D', 'usuarios.pdf');


