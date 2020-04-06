<?php

class Node {

    /**@var Node */
    public $next;
    /**@var Node */
    public $previous;
    /**@var int */
    public $value;
  
    public function __construct($value)
    {
        $this->value = $value;
    }
}

class LinkedList {
    /**@var Node/Null */
    public $head = null;

    public function __construct()
    {
        
    }
    public function insert($value)
    {
        $new_node = new Node($value);

        if (empty($head)) {
            $this->head = $new_node;
        } else {
            $current_node = $this ->head;
            while (!empty($current_node->next)){
                $current_node = $current_node->next;
            }
            $current_node->next = $new_node;
            $new_node->previous = $current_node;
        }
    }
    public function delete($value)
    {
        if (!empty($this->head)) {
            $current_node = $this->head;
            while (!empty($current_node) && $current_node->$value != $value){
                $current_node = $current_node->next;
            }
            if (!empty($current_node)) {
                $current_node->previous->next = $current_node->next;
                $current_node->next->previous = $current_node->previous;
            }
        }
    }
    public function search($value)
    {
        if (empty($this->head)) {
            return false;
        }
        while (!empty($current_node) && $current_node->value != $value){
            $current_node = $current_node->next;
        }
        return !empty($current_node);
    }
}  
class SingleLinkedList {
    /**@var Node/Null */
    public $head = null;

    public function __construct()
    {
        
    }
    public function insert($value)
    {
        $new_node = new Node($value);

        if (empty($head)) {
            $this->head = $new_node;
        } else {
            $current_node = $this ->head;
            while (!empty($current_node->next)){
                $current_node = $current_node->next;
            }
            $current_node->next = $new_node;
            $new_node->previous = $current_node;
        }
    }
    public function delete($value)
    {
        if (!empty($this->head)) {
            $current_node = $this->head;
            while (!empty($current_node) && $current_node->$value != $value){
                $current_node = $current_node->next;
            }
            if (!empty($current_node)) {
                $current_node->previous->next = $current_node->next;
                $current_node->next->previous = $current_node->previous;
            }
        }
    }
    public function search($value)
    {
        if (empty($this->head)) {
            return false;
        }
        while (!empty($current_node) && $current_node->value != $value){
            $current_node = $current_node->next;
        }
        return !empty($current_node);
    }
}      