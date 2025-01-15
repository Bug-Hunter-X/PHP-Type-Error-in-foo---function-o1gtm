function foo(x) {
  if (x === null) {
    return 0; 
  }
  return x + 1;
}

//This function has a potential bug: it does not handle the case where x is not a number or null, thus causing a type error.