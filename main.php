<?php
require_once 'VenikaStack.php';

$fruits = new VenikaStack();
$fruits->push("apple");
$fruits->push("banana");
$fruits->push("cherry");
echo "fruits: " . $fruits->show() . "\n";
$topFruit = $fruits->pop();
$fruitsIsEmpty = $fruits->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $fruitsIsEmpty . "\n";
$fruitSize = $fruits->size();
echo "The size of the stack is: " . $fruitSize . "\n";
echo "popped fruit: " . $topFruit . "\n";
echo "fruits: " . $fruits->show() . "\n";
$fruitsIsEmpty2 = $fruits->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $fruitsIsEmpty2 . "\n";
$topFruit2 = $fruits->peek();
echo "top fruit: " . $topFruit2 . "\n";
$fruitsSize2 = $fruits->size();
echo "The size of the stack is: " . $fruitsSize2 . "\n";
$fruits->clearStack();
echo "Emptying stack...\n";
echo "fruits: " . $fruits->show() . "\n";
$fruitIsEmpty1 = $fruits->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $fruitIsEmpty1 . "\n\n";

$colours = new VenikaStack();
$colours->push("red");
$colours->push("blue");
$colours->push("green");
echo "colours: " . $colours->show() . "\n";
$topColour = $colours->pop();
$colourSize = $colours->size();
echo "The size of the stack is: " . $colourSize . "\n";
echo "popped colour: " . $topColour . "\n";
echo "colours: " . $colours->show() . "\n";
$colourIsEmpty = $colours->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $colourIsEmpty . "\n";
$topColour2 = $colours->peek();
echo "top colour: " . $topColour2 . "\n";
$colourSize2 = $colours->size();
echo "The size of the stack is: " . $colourSize2 . "\n";
$colours->clearStack();
echo "Emptying stack...\n";
echo "colours: " . $colours->show() . "\n";
$colourIsEmpty1 = $colours->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $colourIsEmpty1 . "\n\n";


$animals = new VenikaStack();
$animals->push("dog");
echo "animals: " . $animals->show() . "\n";
$topAnimal = $animals->pop();
$animalSize = $animals->size();
echo "The size of the stack is: " . $animalSize . "\n";
echo "popped animal: " . $topAnimal . "\n";
echo "animals: " . $animals->show() . "\n";
$animalIsEmpty = $animals->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $animalIsEmpty . "\n";
$topAnimal2 = $animals->peek();
echo "top animal: " . $topAnimal2 . "\n";
$animalSize2 = $animals->size();
echo "The size of the stack is: " . $animalSize2 . "\n";
$animals->clearStack();
echo "Emptying stack...\n";
echo "animals: " . $animals->show() . "\n";
$animalIsEmpty1 = $animals->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $animalIsEmpty1 . "\n\n";

echo "\nDone.";
?>
