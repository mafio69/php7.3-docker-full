# Info

You need at least:

* PHP 5.3 or higher
* A text editor or IDE of your choice
* composer or autoloader of your choice (or provided spl autoloader)

# Knowledge

You will be tested within the following areas of PHP development:

* Basic understanding of PHP's OOP implementation, including interfaces and design patterns.
* Namespaces, Closures/Anonymous functions
* Reading resources from a local file system location
* Coping with JSON as data format

# The tasks

Listed below you will find a number of tasks to resolve. Each task should not take more than 45 to 60 minutes pure working time.
Please read all task before you start.
Please remember about the 'Boy Scout rule'.

## Implement a basic ItemService

Implement the interface for the Item Service. Please use the JSON file in the data directory as your datasource. 
Your implementation must read the resultset from the datasource and pass the values from the json file into the corresponding classes from the Entity namespace. 

The entities encapsulate each other:

(Brand) -[hasMany]-> (Items) -[hasMany] -> (Price)

The JSON file has a similar but not equal structure. Please take a deep look at both structures.

## Build a basic validator for the Item Entity

Your tasks is to build a validation mechanism for the Item Entity's url property.
Place the validation class in a proper position within the given architecture and ensure the value is valid.
It is up to you how you implement it and when to call it within the application's flow.

## Implement a way to get different implementations of the BrandServiceInterface

You can accomplish this in a few ways.
Please choose the variant you feel most comfortable with or you find most suitable, not the one that you think might be the fanciest of all.
You might want to write a second implementation for the BrandServiceInterface, but you don't have to.
If you need one, you can think of a "PriceOrderedBrandService" or an "ItemNameOrderedBrandService", which sort their results after receiving it from the item service.

Good luck!
