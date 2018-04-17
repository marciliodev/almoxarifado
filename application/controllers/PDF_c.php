<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once __DIR__ . '/vendor/autoload.php';

class PDF_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pdf');
    }

    //Seta qual será as página correspondentes para usar na construção do pdf
    public function get_html($value)
    {
        switch ($value) {
            case 1:
                return $this->load->view('pdf/html_material_escritorio', '', TRUE);
            case 2:
                return $this->load->view('pdf/html_material_almoxarifado', '', TRUE);
            case 3:
                return $this->load->view('pdf/html_material_almoxarifado', '', TRUE);
            case 4:
                return $this->load->view('pdf/html_material_servico_vascular', '', TRUE);
            default:
                break;
        }
    }

    //Seta qual será as página correspondentes para usar na construção do pdf
    public function get_header($value)
    {
        switch ($value) {
            case 1:
                return $this->load->view('pdf/header_material_escritorio', '', TRUE);
            case 2:
                return $this->load->view('pdf/header_material_almoxarifado', '', TRUE);
            case 3:
                return $this->load->view('pdf/header_material_almoxarifado', '', TRUE);
            case 4:
                return $this->load->view('pdf/header_material_servico_vascular', '', TRUE);
            default:
                break;
        }
    }

    public function gerar_pag_pdf() {
        //$dados['documento'] = $documento;
        //$dados['data_cadastro'] = $data;
        $html = [];
        $html[0] = $this->load->view('pdf/html_material_escritorio', '', TRUE);
        $footer = 'Página';
        $header = $this->load->view('pdf/header_material_escritorio', '', TRUE);

        return $this->html_to_pdf($html, $footer, $header);
    }

    public function html_to_pdf($html, $footer, $header, $destino = 'F', $titulo = '') {
//        $cont = $this->contador_pag + 1;
        $this->load->library("mpdf");
        $pdf = $this->mpdf->load(['tempDir' => '/tmp', 'setAutoTopMargin' => 'stretch', 'setAutoBottomMargin' => 'stretch', 'autoMarginPadding' => 5, 'default_font' => 'arial']);
//        print_r($html);return;
        if ($footer == null) {
            foreach ($html as $page) {
                $pdf->SetHTMLHeader($header);
                $pdf->AddPage('', // L - landscape, P - portrait
                    '', '', //inicio da contagem do numero de páginas
                    '', '', 5, // margin left
                    5, // margin right
                    0, // margin top
                    0, // margin bottom
                    10, // margin header
                    10  // margin footer
                );
                $pdf->WriteHTML($page);
            }
        } else {
            foreach ($html as $page) {
                $pdf->SetHTMLHeader($header);
                $pdf->AddPage('P');
//                $pdf->AddPage('P', '', "$this->contador_pag");
                $pdf->SetHTMLFooter($footer);
                $pdf->WriteHTML($page);
//                $this->contador_pag += $pdf->page;
            }
        }
        $pdf->setTitle($titulo);

        if ($destino == 'F') {
            $filename = FCPATH . "uploads/" . uniqid() . ".pdf";
            $pdf->Output("$filename", $destino);
            return $filename;
        } else {
            $filename = $titulo . ".pdf";
            $pdf->Output("$filename", $destino);
        }
    }

    public function index()
    {
     $this->gerar_pag_pdf();
    }

}
