<?php
// VenikaStack.php
/* This program stacks strings
 * By Venika Sem
 * @version 1.0
 * @since Feb-2024
 */

class VenikaStack {
    // array to store strings
    private $strStack = [];

    // constructor
    public function __construct() {}

    // method to add string to the stack
    public function push($input) {
        array_push($this->strStack, $input);
    }

    // method to show the top of the stack
    public function peek() {
        if (count($this->strStack) > 0) {
            return $this->strStack[count($this->strStack) - 1];
        } else {
            return "Stack is empty";
        }
    }

    // method to remove a string from stack without using pop
    public function pop() {
        if (count($this->strStack) > 0) {
            $topItem = array_pop($this->strStack);
            return $topItem;
        } else {
            return "Stack is empty";
        }
    }

    // method to check if the stack is empty
    public function isEmpty() {
        return empty($this->strStack);
    }

    // method to say the size of the stack
    public function size() {
        return count($this->strStack);
    }

    // method to show the stack
    public function show() {
        return implode(", ", $this->strStack);
    }

    // method to empty stack
    public function clearStack() {
        $this->strStack = [];
    }
}
?>
