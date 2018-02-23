# Dhii - Storage - CQRS Resource Model - Interface

[![Build Status](https://travis-ci.org/Dhii/cqrs-resource-model-interface.svg?branch=develop)](https://travis-ci.org/Dhii/cqrs-resource-model-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/cqrs-resource-model-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/cqrs-resource-model-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/cqrs-resource-model-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/cqrs-resource-model-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/cqrs-resource-model-interface/version)](https://packagist.org/packages/dhii/cqrs-resource-model-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

Interfaces for a CQRS approach to resource models.

[Dhii]: https://github.com/Dhii/dhii

## Details

[`SelectCapableInterface`] - Interface for objects that can retrieve records from storage.

[`InsertCapableInterface`] - Interface for objects that can insert records into storage.

[`UpdateCapableInterface`] - Interface for objects that can update records in storage.

[`DeleteCapableInterface`] - Interface for objects that can delete records from storage.

[`SelectCapableInterface`]: src/SelectCapableInterface.php
[`InsertCapableInterface`]: src/InsertCapableInterface.php
[`UpdateCapableInterface`]: src/UpdateCapableInterface.php
[`DeleteCapableInterface`]: src/DeleteCapableInterface.php
