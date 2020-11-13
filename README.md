# Deserializer Contracts

Contracts for [deserializing](https://github.com/Stratadox/Deserializer) 
input data.

A [deserializer](src/Deserializer.php) converts serialized data into objects.

Serialized input data is provided in the form of an array, either numeric or 
associative. It can come from various sources, be it a json document, a 
relational database or other source.

Deserializers can be configured and combined to transform one or more data 
schemas into specific types of object structures.

Modules that have some kind of data and need it transformed into some kind of 
object structure can simply request a `Deserializer` and focus on the task at 
hand. 
This makes the module easier to read, by not distracting with data formatting 
details, and more extensible: they can be provisioned with a new serializer 
to accept new formats without having to alter the module itself.

## Installation

Install with `composer require stratadox/deserializer-contracts`

## Why are there only interfaces in this package
This package exists to decouple the concept of a deserializer from its [default 
implementation](https://github.com/Stratadox/Deserializer).

In this setup, projects that support some kind of deserialization can opt to 
depend only on a few interfaces, instead of having to always import the default 
serializer without actually using it.
