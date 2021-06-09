#Technical Test AR24
The following project is a solution to consume AR24 API. It was built under PHP 7.2 using Symfony 5 as a Framework.
##Getting started
In order to run the solution you need:
- PHP 7.2 or more
- composer
- symfony ([install symfony](https://symfony.com/download))


###1. Clone repository
Start by cloning github repository:
````bash
git clone https://github.com/elkolotfi/technical_test_ar24.git
````

###2. Download dependencies
Before you run the application you'll need to bring all dependencies using composer. Get to the project folder and run:
 ````bash
 composer install
 ````
 
 ###3. Add private keys to your project
 Your application needs some private keys in order to fetch AR24 API token and secret keys.
 Thus, you need to provide the necessary private keys:
 -  dev.decrypt.private.php
 -  prod.decrypt.private.php
 
 And put them in their respective folders:
 - config/secrets/dev
 - config/secret/prod
 
 ###4. Run application
  ````bash
  symfony server:start
  ````
  
  ##Test your app
  In order to perform some tests, you have a set of API calls under a postman folder of the project.