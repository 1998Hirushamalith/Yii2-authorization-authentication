<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

Yii 2 Basic Project Template is a skeleton [Yii 2](https://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![build](https://github.com/yiisoft/yii2-app-basic/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-basic/actions?query=workflow%3Abuild)

System Snap shot

Home page

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/66478e5e-6821-4a85-864a-fd3572b4e1b7)


Login page

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/5b5402f5-6855-4d48-af35-7845d8f08792)


Login page - validation

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/52195acc-d406-4c7a-a03f-dc4b5ff5acfa)


![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/1394622a-75e2-4036-8a3b-e178890126c9)


Sign up page - validation

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/f7e7db69-54d1-48f0-9c21-38615b8dd3e0)

New user creation

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/39823f29-8a9b-4abe-956d-cf27739bf5c0)


![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/6de0c27a-0001-4dfe-9615-3d2dcd04c451)


Product list

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/35e202c6-adce-4441-bc20-70042f372b2d)


Product creation

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/9b4b7675-30e1-45ad-8c9e-9130486fd45e)

Product updated

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/2eec2295-6c52-45be-aa91-4fe002fdf86f)


![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/e2814247-c92f-4f55-a111-31b43b048ae4)

Contact us page

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/076faa9d-8659-4220-a5d7-79320cc070e8)


![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/fc2f129b-fc3f-4fd8-b85c-30a2b2aa201c)


![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/86f6508a-2ef9-4166-8f1c-10bdb805d3a6)

Contact us - notification after entered and validation success

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/48a53e89-bd71-4a47-ab64-d05607d50291)

Blog page

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/2da97dcb-6830-4038-81c9-f628cabc8068)

Deleting blog

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/dd31e133-85ea-49f9-89db-e8a336c73804)


![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/fb51ac9f-2317-4235-bb29-cf39da85e2a9)

Create and update the new blog

![image](https://github.com/1998Hirushamalith/Yii2-authorization-authentication/assets/130145482/cac5a1b1-a47d-461d-a240-cdd79917cb0e)


APPLICATION STRUCTURE
-------------------

1.  Install Yii2 with composer.
2.  Configure Yii 2 application name ,id and time zone.
3.  Connect Yii 2 to database.
4.  configure Yii 2 pretty URLs - SEO friendly URLs.
5.  Yii 2 RESTful APIs setup.
6.  Yii 2 RESTful APIs Create Read Update Delete.
7.  Format Currency.
8.  Format date and time.
9.  DB Migrations Add table columns.
10. Add Menu Items.
11. User Sign up table migration.
12. Sign up user and model creation.
13. Sign up & login.

14. RESTful APIs

        HTTP Header Authentication.
        Bearer Token Authentication.
        HTTP Basic Auth.
        Query Param Authentication.
        Composite Authentication.
        exclude endpoint authentication(except).
        optional endpoint authentication.
        specific actions authentication.

15.  Install the imagick extension to use this back end. 

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 7.4.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](https://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](https://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist yiisoft/yii2-app-basic basic
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~

### Install from an Archive File

Extract the archive file downloaded from [yiiframework.com](https://www.yiiframework.com/download/) to
a directory named `basic` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://localhost/basic/web/
~~~


### Install with Docker

Update your vendor packages

    docker-compose run --rm php composer update --prefer-dist
    
Run the installation triggers (creating cookie validation code)

    docker-compose run --rm php composer install    
    
Start the container

    docker-compose up -d
    
You can then access the application through the following URL:

    http://127.0.0.1:8000

**NOTES:** 
- Minimum required Docker engine version `17.04` for development (see [Performance tuning for volume mounts](https://docs.docker.com/docker-for-mac/osxfs-caching/))
- The default configuration uses a host-volume in your home directory `.docker-composer` for composer caches


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.


TESTING
-------

Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework](https://codeception.com/).
By default, there are 3 test suites:

- `unit`
- `functional`
- `acceptance`

Tests can be executed by running

```
vendor/bin/codecept run
```

The command above will execute unit and functional tests. Unit tests are testing the system components, while functional
tests are for testing user interaction. Acceptance tests are disabled by default as they require additional setup since
they perform testing in real browser. 


### Running  acceptance tests

To execute acceptance tests do the following:  

1. Rename `tests/acceptance.suite.yml.example` to `tests/acceptance.suite.yml` to enable suite configuration

2. Replace `codeception/base` package in `composer.json` with `codeception/codeception` to install full-featured
   version of Codeception

3. Update dependencies with Composer 

    ```
    composer update  
    ```

4. Download [Selenium Server](https://www.seleniumhq.org/download/) and launch it:

    ```
    java -jar ~/selenium-server-standalone-x.xx.x.jar
    ```

    In case of using Selenium Server 3.0 with Firefox browser since v48 or Google Chrome since v53 you must download [GeckoDriver](https://github.com/mozilla/geckodriver/releases) or [ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/downloads) and launch Selenium with it:

    ```
    # for Firefox
    java -jar -Dwebdriver.gecko.driver=~/geckodriver ~/selenium-server-standalone-3.xx.x.jar
    
    # for Google Chrome
    java -jar -Dwebdriver.chrome.driver=~/chromedriver ~/selenium-server-standalone-3.xx.x.jar
    ``` 
    
    As an alternative way you can use already configured Docker container with older versions of Selenium and Firefox:
    
    ```
    docker run --net=host selenium/standalone-firefox:2.53.0
    ```

5. (Optional) Create `yii2basic_test` database and update it by applying migrations if you have them.

   ```
   tests/bin/yii migrate
   ```

   The database configuration can be found at `config/test_db.php`.


6. Start web server:

    ```
    tests/bin/yii serve
    ```

7. Now you can run all available tests

   ```
   # run all available tests
   vendor/bin/codecept run

   # run acceptance tests
   vendor/bin/codecept run acceptance

   # run only unit and functional tests
   vendor/bin/codecept run unit,functional
   ```

### Code coverage support

By default, code coverage is disabled in `codeception.yml` configuration file, you should uncomment needed rows to be able
to collect code coverage. You can run your tests and collect coverage with the following command:

```
#collect coverage for all tests
vendor/bin/codecept run --coverage --coverage-html --coverage-xml

#collect coverage only for unit tests
vendor/bin/codecept run unit --coverage --coverage-html --coverage-xml

#collect coverage for unit and functional tests
vendor/bin/codecept run functional,unit --coverage --coverage-html --coverage-xml
```

You can see code coverage output under the `tests/_output` directory.
