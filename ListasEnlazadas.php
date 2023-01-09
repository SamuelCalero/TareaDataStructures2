<?php
class Node {
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class Lista extends Node{
    public $head;
    public $_length;

    public function __construct()
    {
        $this->head = null;
        $this->_length = 0;
    }

    public function add($dato){
        $nodo = new Node($dato);
        $current = $this->head;

    if(!$current){
        $this->head = $nodo;
        $this->_length++;
        return $nodo;
    }

    while($current->next){
        $current = $current->next;
    } 
    $current->next = $nodo;
    $this->_length++ ;
    return $nodo;
    }

    public function getAll(){
        $current = $this->head;

        if(!$current){
            echo 'Tu lista está vacía, agrega un nodo por favor ';
            return;
        }
        while($current){
            print_r ($current->data);
            $current = $current->next;
        }
        return;
    }

}

$listaNueva = new Lista();
$listaNueva->add(5);
echo "\n";
$listaNueva->add(3);
echo "\n";
$listaNueva->add([3,4,5]);
echo "\n";
$listaNueva->getAll();
print_r ($listaNueva);
?>