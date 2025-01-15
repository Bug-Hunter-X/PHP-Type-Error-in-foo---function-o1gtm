function foo(x) {
  if (is_numeric($x) || $x === null) {
    if ($x === null) {
      return 0; 
    }
    return $x + 1;
  } else {
    return "Invalid input"; // Or throw an exception
  }
}
//The solution adds a check using is_numeric to handle non-numeric input, returning an error message instead of throwing an error.