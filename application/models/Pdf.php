<?php
/**
 * Created by PhpStorm.
 * User: marci
 * Date: 13/04/2018
 * Time: 15:44
 */

defined('BASEPATH') OR exit('No direct script access allowed');

//require_once APPPATH . 'third_party\mpdf60\mpdf.php';

class Pdf extends CI_Model
{
    protected $tabela;

    public function __construct()
    {
        parent::__construct();
        $this->tabela = "produtos";
    }

    public function busca_produtos()
    {
        $query = $this->db->select('*')->from($this->tabela);
        return $query;
    }

    public function valores_itens_total()
    {
        $this->db->select('sum.vl_total.*');
        $this->db->from($this->tabela);
        return $this->db->get()->result();
    }

    public function valores_itens_unitario()
    {
        $this->db->select('sum.vl_unitario.*');
        $this->db->from($this->tabela);
        return $this->db->get()->result();
    }

   }