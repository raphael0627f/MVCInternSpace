<?php

class Model extends Database{
    protected $table;
    public $errors = [];

    public function __construct(){

        if(!$this->table){
            $this->table = strtolower("tb_" . get_class($this));
        }
    }

    public function where(string $column, $value){
        $query = "SELECT * FROM {$this->table} WHERE $column = :value";
        return $this->query($query, ['value' => $value]);
    }

    public function findAll(){
        $query = "SELECT * FROM {$this->table}";
        return $this->query($query);
    }

    public function insert(array $data){
        if(property_exists($this, 'colunas')){
            foreach($data as $key=>$value){
                if(!in_array($key, $this->colunas)){
                    unset($data[$key]);
                }
            }
        }

        if(property_exists($this, 'antesInserir')){
            foreach($this->antesInserir as $func){
                $data = $this->$func($data);
            }
        }

        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = ':' . implode(',:', $keys);

        $query = "INSERT INTO {$this->table} ($columns) VALUES ($values)";
        return $this->query($query, $data);
    }

    public function update(int $id, array $data){
        $str = '';
        $params = ['id' => $id];

        foreach($data as $key => $value){
            $str .= $key . '=:' . $key . ',';
            $params[$key] = $value;
        }

        $str = rtrim($str, ',');

        $query = "UPDATE {$this->table} SET $str WHERE id=:id";
        return $this->query($query, $params);
    }

    public function delete(int $id){
        $query = "DELETE FROM {$this->table} WHERE id=:id";
        return $this->query($query, ['id' => $id]);
    }
}

?>
