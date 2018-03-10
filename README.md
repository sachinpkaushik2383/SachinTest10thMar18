
# List Symfony Repositories in Github
Project url: https://github.com/sachinpkaushik2383/SachinTest10thMar18

- Create a new PHP application in Symfony using **Composer** and **PHP GitHub API 2.0** as its dependency
- List all repositories in a single page 
- Symfony coding standards are to be followed

# Pre-requisites
 **Composer**
https://getcomposer.org/

**PHP GitHub API 2.0**
https://github.com/knplabs/php-github-api

**Symfony Github user repositories**
https://github.com/symfony

**Symfony Coding Standards**
http://symfony.com/doc/current/contributing/code/standards.html

**Git**
https://gitforwindows.org/

**PHP Coding Standards Fixer**
http://cs.sensiolabs.org/

## Installation Steps

**Create Symfony Project**
> $ composer create-project symfony/framework-standard-edition your-project-name "2.8.*"

> **Note**: After Symfony project is create check version of PHP mentioned in **composer.json** file. It should match with the current PHP version on your workstation.

**Get  PHP GitHub API 2.0 via composer**
> $ composer require knplabs/github-api php-http/guzzle6-adapter

**Format the code**
> php php-cs-fixer.phar fix C:\xampp\htdocs\sachinTest --rules=-full_opening_tag,-indentation_type


## Steps to run application

- Use Symfony to host the application in your workstation environement 

> $ php app/console server:run

- Open the below url in your web browser to view the listings page

> http://127.0.0.1:8000/list-symfony-github-repos

```