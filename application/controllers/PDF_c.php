<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

    public function contItens()
    {
        $cont = 1;
        $this->itens = $this->itens + $cont;
        return $this->itens;
    }

    public function gerar_pag_pdf()
    {
        $dados['produtos'] = $this->pdf->busca_produtos();
        //$dados['contador'] = $this->contItens();
        //$dados['data_cadastro'] = $data;
        $html = [];
        $html[0] = $this->load->view('pdf/html_material_escritorio', $dados, TRUE);
        $footer = $this->load->view('pdf/footer_material_escritorio', '', TRUE);
        $header = $this->load->view('pdf/header_material_escritorio', '', TRUE);

        return $this->html_to_pdf($html, $footer, $header, 'F', 'Relatório Teste');
    }

    public function html_to_pdf($html, $footer, $header, $destino = 'F', $titulo = '')
    {
//        $cont = $this->contador_pag + 1;
        $this->load->library("mpdf");
        $mypdf = $this->mpdf->load(['tempDir' => '/tmp', 'setAutoTopMargin' => 'stretch', 'setAutoBottomMargin' => 'stretch', 'autoMarginPadding' => 5, 'default_font' => 'arial']);
//        print_r($html);return;
        if ($footer == null) {
            foreach ($html as $page) {
                $mypdf->SetHTMLHeader($header);
                $mypdf->AddPage('', // L - landscape, P - portrait
                    '', '', //inicio da contagem do numero de páginas
                    '', '', 5, // margin left
                    5, // margin right
                    0, // margin top
                    0, // margin bottom
                    5, // margin header
                    5  // margin footer
                );
                $mypdf->WriteHTML($page);
            }
        } else {
            foreach ($html as $page) {
                $mypdf->SetHTMLHeader($header);
                $mypdf->AddPage('P');
//                $pdf->AddPage('P', '', "$this->contador_pag");
                $mypdf->SetHTMLFooter($footer . '
                <b>Página {PAGENO}</b>
                ');
                $mypdf->WriteHTML($page);
//                $this->contador_pag += $pdf->page;
            }
        }
        $mypdf->setTitle($titulo);
        ob_end_clean(); //limpar objeto antes da geração do PDF
        $mypdf->Output();


        //Implementar depois
        /*
        if ($destino == 'F') {
            $filename = FCPATH . "uploads/" . uniqid() . ".pdf";
            $pdf->Output("$filename", $destino);
            return $filename;
        } else {
            $filename = $titulo . ".pdf";
            $pdf->Output("$filename", $destino);
        }
        */
    }

    public function teste()
    {
        $dados['valores'] = $this->pdf->busca_produtos();
        $this->load->view('teste', $dados, TRUE);
    }

    public function index()
    {
        $this->teste();
        //$this->gerar_pag_pdf();
    }
}
