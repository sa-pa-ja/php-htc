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

>**Note**
>Prior to PHP 8.0.0 where the `get_debug_type()` is not available, the `getype()` function can be used instead. However, it doesn't use the canonical type names.
