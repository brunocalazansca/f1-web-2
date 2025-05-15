<?php
include_once ('conexao.php');

class ManipulaDados extends Conexao {
    private $table;
    private $fields;
    private $dados;
    private $fieldPk;
    private $valuePk;

    public function getTable() {
        return $this->table;
    }

    public function setTable($table) {
        $this->table = $table;
    }

    public function getFields() {
        return $this->fields;
    }

    public function setFields($fields) {
        $this->fields = $fields;
    }

    public function getDados() {
        return $this->dados;
    }

    public function setDados($dados) {
        $this->dados = $dados;
    }

    public function getFieldPk() {
        return $this->fieldPk;
    }

    public function setFieldPk($fieldPk) {
        $this->fieldPk = $fieldPk;
    }

    public function getValuePk() {
        return $this->valuePk;
    }

    public function setValuePk($valuePk) {
        $this->valuePk = $valuePk;
    }

}