# Dhii - Storage - CQRS Resource Model - Interface

[![Build Status](https://travis-ci.org/Dhii/cqrs-resource-model-interface.svg?branch=develop)](https://travis-ci.org/Dhii/cqrs-resource-model-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/cqrs-resource-model-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/cqrs-resource-model-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/cqrs-resource-model-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/cqrs-resource-model-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/cqrs-resource-model-interface/version)](https://packagist.org/packages/dhii/cqrs-resource-model-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

## Details
Interfaces for a [CQRS][] approach to resource models.

### Interfaces
- [`SelectCapableInterface`][SelectCapableInterface] - Interface for objects that can retrieve records from storage,
optionally limiting the result to only records that satisfy a given condition represented as an arbitrary tree of [expressions][dhii/expression-interface].
- [`InsertCapableInterface`][InsertCapableInterface] - Interface for objects that can insert one or more records into storage.
Various container types are supported.
- [`UpdateCapableInterface`][UpdateCapableInterface] - Interface for objects that can update records in storage,
optionally limited to records that satisfy a given condition represented as an arbitrary tree of [expressions][dhii/expression-interface].
- [`DeleteCapableInterface`][DeleteCapableInterface] - Interface for objects that can delete records from storage,
optionally limited to records that satisfy a given condition represented as an arbitrary tree of [expressions][dhii/expression-interface].

## Usage
```php
use Dhii\Storage\Resource\SelectCapableInterface;
use Dhii\Collection\MapInterface;

/* @var $select SelectCapableInterface */
$results = $select->select();

/* The below would go through each element of the result set, and,
 * if the 'age' field is greater than 18, output all of the names
 * and values of all fields.
 */
foreach ($results as $_result) {
  /* @var $_result MapInterface */
  if ((int) $_result->get('age') < 18) {
    continue;
  }
  
  foreach ($_result as $_field => $_value) {
    echo sprintf('%1$s: %2$s', $_field, $_value) . "\n";
  }
  
  echo "---' . "\n";
}
```


[Dhii]:                                                   https://github.com/Dhii/dhii
[CQRS]:                                                   https://martinfowler.com/bliki/CQRS.html
[dhii/expression-interface]:                              https://packagist.org/packages/dhii/expression-interface

[SelectCapableInterface]:                                 src/SelectCapableInterface.php
[InsertCapableInterface]:                                 src/InsertCapableInterface.php
[UpdateCapableInterface]:                                 src/UpdateCapableInterface.php
[DeleteCapableInterface]:                                 src/DeleteCapableInterface.php
