<?php
class LinkedList {
    public $firstNode = null;

    public function insert($item){
        // Tao ra node chua item
        $node = new Node($item);
        if( $this->firstNode == null ){
            $this->firstNode = $node;
        }else{
            // Phong
            $currentNode = $this->firstNode;
            /*
            Node Object
            (
                [data] => Huyen
                [next] => Node Object
                    (
                        [data] => Phong
                        [next] => 
                    )
            )
            */
            while( $currentNode->next !== null ){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $node;
            /*
            Node Object
            (
                [data] => Huyen
                [next] => Node Object
                    (
                        [data] => Phong
                        [next] => Node Object
                            (
                                [data] => NHo
                                [next] => 
                            )
                    )
            )
            */
        }
    }
}

$objLinkedList = new LinkedList();
$objLinkedList->insert('Huyen');
$objLinkedList->insert('Phong');
$objLinkedList->insert('Nho');

echo '<pre>';
print_r($objLinkedList);
echo '</pre>';