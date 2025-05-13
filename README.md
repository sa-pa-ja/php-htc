# Introduction

1. null
2. bool
3. int
4. float
5. string
6. array
7. object
8. callable
9. resource

PHP is a dynamically typed language, which means that by default there is no need to specify the type of a variable, as this will be determined at runtime.

However, it is possible to statically type some aspect of the language via the use of type declaration. Different types that are supported bby php's type system can be found at the type system page.

```php
$bool = false;
$integer = 500;
$floating = 50.56676;
$string = "Hello my love Lucy";

echo get_debug_type($bool), "\n";
echo get_debug_type($string), "\n"

// If this is an integer, increment it by four

if(is_int($integer)) {
    $integer += 500;
}


var_dump($integer);

```

> **Note**
> Prior to PHP 8.0.0 where the `get_debug_type()` is not available, the `gettype()` function can be used instead. However, it doesn't use the canonical type names.

## Type system

PHP uses a nominal type system with a string behavioral subtyping relation. The subtyping relation is checked at compile time whereas the verification of types is dynamically checked at run time.

### Atomic types

Some atomic types are built-in types which are tightly integrated with the language and cannot be reproduced with user defined types.

The list of base types is:

1. Built-in types
   1. Scalar types:
      1. `bool` type
      2. `int` type
      3. `float` type
      4. `string` type
   2. `array` type
   3. `object` type
   4. `resource` type
   5. `never` type
   6. `void` type
   7. `relative class types`: self, parent, and static
   8. `singleton types`
      1. false
      2. true
   9. unit types
      1. null
2. User-defined types (generally referred to as class-types)
   1. Interfaces
   2. Classes
   3. Enumerations
3. `callable` type
