<?php
use APP\Recursion\Recursion;
use APP\Sort\Quick;
use APP\TowersOfHanoi\Tower;
use APP\Stack\Stack;

require 'vendor/autoload.php';


$recursion= new Recursion;

//  use stack data structures 
$n = 40 ;

$start = microtime(true);
echo "factorial=>";
echo $recursion->factorial($n);
$end = microtime(true);
$factorial = $start - $end;
echo " Time taken by factorial: " . $factorial . " seconds\n";
echo "<br><br>";

$start = microtime(true);
echo "fibonacci=>";
echo $recursion->fibonacci($n);
$end = microtime(true);
$fibonacci = $start - $end;
echo " Time taken by fibonacci: " . $fibonacci . " seconds\n";
echo "<br><br>";

$start = microtime(true);
echo "fibonacci=>";
echo $recursion->fibonacciDynamic($n);
$end = microtime(true);
$fibonacci = $start - $end;
echo " Time taken by fibonacci useing dynamic programing principal : " . $fibonacci . " seconds\n";
echo "<br><br><br>";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$arr = [10, 7, 8, 9, 1, 5];

$start = microtime(true);
$sortedArrRecursion = Quick::recursion($arr);
$end = microtime(true);
$recursion = $start - $end;
echo "Sorted array using recursion: [".implode(",",$sortedArrRecursion). "]\n";
echo " Time taken by recursion: " . $recursion . " seconds\n";
echo "<br><br><br>";

$start = microtime(true);
$sortedArrNunRecursion = Quick::nunRecursion($arr);
$end = microtime(true);
$nonrecursion = $start - $end;
echo "Sorted array using non-recursion:[".implode(",",$sortedArrNunRecursion). "] \n";
echo " Time taken by non-recursion: " . $nonrecursion . " seconds\n";
echo "<br><br><br>";



////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Example usage
$stack = new Stack();
$stack->push(10);
$stack->push(20);
$stack->push(30);
echo "Top element: " . $stack->top() . "\n"; // Outputs 30
echo "Popped element: " . $stack->pop() . "\n"; // Outputs 30
echo "Top element after pop: " . $stack->top() . "\n"; // Outputs 20
echo "Is stack empty? " . ($stack->isEmpty() ? "Yes" : "No") . "\n"; // Outputs No
echo "<br><br><br>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Example usage
$n = 3; // Number of disks
Tower::solve($n, 'A', 'B', 'C');
echo "<br><br><br>";