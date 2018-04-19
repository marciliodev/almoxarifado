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

    //busca de produtos - status (ok)
    public function busca_produtos()
    {
        $this->db->select('*')->from($this->tabela);
        $sql = $this->db->get();
        return $sql->result();
    }

    public function quantidade_itens()
    {
        $sql = "
        select COUNT(qt_total) from produtos;
        ";
        return $sql;
    }

    public function valores_itens_total()
    {
        $sql = $this->db->select('sum.vl_total')->from($this->tabela);
        return $sql;
    }

    public function valores_itens_unitario()
    {
        $this->db->select('sum.vl_unitario.*');
        $this->db->from($this->tabela);
        return $this->db->get()->result();
    }

   }