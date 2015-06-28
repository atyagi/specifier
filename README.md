# Specifier
[![Build Status](https://travis-ci.org/atyagi/specifier.svg)](https://travis-ci.org/atyagi/specifier)

Provides a basic set of classes to utilize the specification
design pattern.

# Usage

The included tests provide common usage of the classes. 

## Basic Usage
Upon creating your specification classes, simply extend the `AbstractSpecification` class
and implement the `isSatisfiedBy` method. 


Any specifications that you create are flexible enough to take in any arguments
in the constructor, such as repositories or services.


In addition, an `isNotSatisfiedBy` method is provided to provide a logical not if
needed.


## Composite Usage
When you need to chain multiple specifications on the same object, you can leverage the
`AbstractSpecification` chain methods `plus` and `either`.


For example:

```php
(new CustomerIsPremium())
    ->either(new CustomerRegisteredBeforeLastWeek())
    ->isSatisfiedBy($customer);
```

or

```php
(new CustomerIsPremium())
    ->plus(new CustomerRegisteredBeforeLastWeek())
    ->isSatisfiedBy($customer);
```

