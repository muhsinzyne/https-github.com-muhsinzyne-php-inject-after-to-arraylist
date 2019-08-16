# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* This will help you to inserts a new key/value pair into an associative array at a specific position, i.e. after a specific key.
* v-1.0


### Requirements ####
* PHP 5.6^
* PHPUnit 
* composer

### How do I get set up? ###

* Clone the repository in your apache public_html directory 
```
composer install
```

### How to use this script ? ###

Auto load required dependencies in to your project file 


    <?php
	require "vendor/autoload.php";
	

Use InjectAfter Class into your project and create a new object 



```php
<?php

use app\models\InjectAfter;

// creating new object
$injectAfter = new InjectAfter();

```

```php
<?php 

$inputArray = ["foo" => 3, "bar" => 1, "cap" => 'test string'];
$afterKey = "foo";
$newKey = "test_key_11";
$newValue = "233";
$response = $injectAfter->doAction($inputArray, $afterKey, $newKey, $newValue);	
```

In your response you will have the formatted arrayList. 

# Thank you 

### Contribution guidelines ###

* Writing tests
* Code review
* Other guidelines

### Who do I talk to? ###

* Repo owner or admin
* Other community or team contact
