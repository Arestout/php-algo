<?php
// . Простые делители числа 13195 - это 5, 7, 13 и 29. Каков самый большой делитель числа 600851475143, являющийся простым числом? 

function findLargestPrime($number) {
    if (isPrime($number)) {
        return $number;
    } 

    $sqrt = floor(sqrt($number));

    if ($sqrt % 2 === 0) {
        $sqrt += 1;
    }

    for ($i = $sqrt; $i >= 1; $i -= 2) {
        if ($number % $i === 0 && isPrime($i)) {
          return $i;
        }
      }
}

function isPrime($num): boolean {
    if ($num % 2 == 0 && $num !== 2) {
        return false;
    }

    for ($i = 3; $i < sqrt($num); $i += 2) {
        if ($num % $i === 0) {
          return false;
        }
      }
      return true;
}

findLargestPrime(600851475143);

// Проверить баланс скобок в выражении

function isBalanced($string) {
    $brackets = '[]{}()<>';
    $stringArray = str_split($string);
    $stack = new SplStack();

    foreach ($stringArray as $char) {
       $charIndex = strpos($brackets, $char);
      
        echo($charIndex);
        if ($charIndex === FALSE) {
            continue;
        }

        if ($charIndex % 2 === 0) {
            $stack->push($charIndex + 1);
         } elseif ($stack->isEmpty()) {
            return 'false';
         } else {
             if ($stack->pop() !== $charIndex) {
                 return 'false';
             }
         }
    }

    return  boolval($stack->count() === 0) ? 'true' : 'false';
}
