SortLibrary
===============
Library sorting arrays of numbers and arrays of strings.
Contains two standard implementations of sorting algorithms: from large to small (```DecreaseSorter```) and from small to large (```IncreaseSorter```).


Installation
------------
For creating library just execute the following command

```
$ composer create-project antindehoda/sort-library project-name
```

Usage
-----

1. Create strategy you need
```php
    $increaseStrategy = new IncreaseSorter();
```
2. Create Sorter object
```php
    $sorter = new Sorter($increaseStrategy);
```
3. If you need to change strategy
```php
    $decreaseStrategy = new DecreaseSorter();
    $sorter->setStrategy($decreaseStrategy);
```
4. Sort array
```php
    $sorter->sort($array1)
```

License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2019, Anton Degoda
