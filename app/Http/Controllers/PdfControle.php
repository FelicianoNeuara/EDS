<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Dompdf\Dompdf;




class PdfControle extends Controller
{
    

    public function gerarPdf()
    {
        // Recupere os dados das consultas dos pacientes (você já está fazendo isso no código que compartilhou)
        $curso1 = Course::all();

        $data = [
            'title' => 'Gestão dos cursos',
            'date' => date('m/d/Y'),
        ];
        
           
        // Renderize a view com a tabela de consultas em formato HTML
        $html = view('livewire.curso.Relatorio', compact('curso1', 'data'))->render();

        // Crie uma nova instância do Dompdf
        $dompdf = new Dompdf();

        // Carregue o HTML do relatório no Dompdf
        $dompdf->loadHtml($html);

        // Renderize o PDF
        $dompdf->render();

        // Defina o nome do arquivo do PDF gerado
        $filename = 'Gestão_Cursos_relatorio.pdf';

        // Envie o PDF para o navegador para download
        return $dompdf->stream($filename);
    }
   
}


