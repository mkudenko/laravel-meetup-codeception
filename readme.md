# Catch Software

## After you clone the repo

### Install all the packages

    composer install
    
### Create environment files

    cp .env.example .env
    
Specify the correct connection details in the new files.

### Create database tables

    artisan migrate

Testing database will be populated before running tests and wiped out after.
    
## Running tests

Setup Codeception.

    cp example.codeception.yml codeception.yml
    mkdir tests/_output

Run the tests.

    vendor/bin/codecept run [unit, functional, acceptance]
    
Or, if you have codeception installed globally, you can run

    codecept run [unit, functional, acceptance]
    
If you don't specify the test suite (unit, functional or acceptance), all of them will be executed.

Optionally, you can add the following line to your .bashrc file:

    alias t='vendor/bin/codecept run'
    
That way you can run you tests by running the following command from the root of the project:

    t [unit, functional, acceptance]
    
