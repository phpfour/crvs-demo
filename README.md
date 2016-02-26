IslamKosh Core
==============

This is the core platform of IslamKosh. It will provide the following services to different user groups:

* Content creation
* Content entry
* Content proof-reading
* Content categorization
* Content editing
* Content publishing
* Task distribution
* ...etc

**Installation**

1. Clone the repository to your local

    ```
    git clone git@github.com:IslamKosh/core.git islamkosh
    ```

2. Create a VirtualHost:

    ```
    <VirtualHost *:80>

        ServerName islamkosh.dev

        <Directory "/var/www/islamkosh/web">
           Options Indexes FollowSymLinks MultiViews
           AllowOverride All
           Order allow,deny
           Allow from all
        </Directory>

        DocumentRoot "/var/www/islamkosh/web"

    </VirtualHost>
    ```

3. Create `.htaccess` file and modify to match your environment:

    ```
    cp web/.htaccess.dist web/.htaccess
    ```

5. Download the vendor libraries:

    ```
    composer install --prefer-dist
    bower install
    ```

6. Prepare the database:

    ```
    php app/console doctrine:database:create
    php app/console doctrine:schema:create
    ```

7. Create an admin user (enter ROLE_SUPER_ADMIN when asked):

    ```
    php app/console fos:create:user
    php app/console fos:user:promote
    ```

7. Run the app by visiting: http://islamkosh.dev

Enjoy!
