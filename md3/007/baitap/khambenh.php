<?php
    class Patient
    {
        public string $name;
        public int $code;
        public $next;
    
        /**
         * Patient constructor.
         */
        public function __construct(string $name, int $code)
        {
            $this->name = $name;
            $this->code = $code;
            $this->next = null;
        }
    
        public function __toString(): string
        {
            return "Name: " . $this->name . " , Code: " . $this->code;
        }
    
    
    }
    class QueuePatient
    {
        public $head = null;
    
        public function isEmpty(): bool
        {
            return is_null($this->head);
        }
    
        public function enqueue($name, $code)
        {
            $precedence=$this->head;
            $current = $this->head;
            $patient = new Patient($name, $code);
            if ($this->isEmpty()) {
                $this->head = $patient;
            } else {
                if ($patient->code < $this->head->code) {
                    $patient->next = $this->head;
                    $this->head = $patient;
                } else {
                    while ($current->next != null && $patient->code >= $current->code) {
                        $precedence=$current;
                        $current = $precedence->next;
                    }
                    if ($patient->code > $current->code) {
                        $patient->next = $current->next;
                        $current->next = $patient;
                    }else{
                        $patient->next = $precedence->next;
                        $precedence->next = $patient;
                    }
                }
            }
        }
    
        public function dequeue()
        {
            if($this->isEmpty()){
                return null;
            }
            $removedPatient= $this->head;
            $this->head=$this->head->next;
            return  $removedPatient;
        }
    }
    
    $queue= new QueuePatient();
    $queue->enqueue("G",2);
    $queue->enqueue("B",1);
    $queue->enqueue("C",1);
    $queue->enqueue("D",1);
    $queue->enqueue("E",3);
    $queue->enqueue("F",1);
    $queue->enqueue("A",2);

    // $queue->enqueue("F",2);
    // $queue->enqueue("G",2);
    // echo "<pre>";
    // print_r($queue);
    // echo "</pre>";
    echo "<pre>";
    print_r($queue->dequeue());
    echo "</pre>";
    
    
    
    
    
    
    
    
    
    
    
    
    
