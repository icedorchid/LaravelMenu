# Laravel 5 Menu Generator
A simple package for laravel 5 to manage router path with menu dynamically.

# Instruction 
1.  Require this package

    =>  ```
        "Satouch/LaravelMenu": "dev-master"
        ```

2.  Added repositories

    ```json 
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/sagormax/LaravelMenu.git"
        }
    ],  
    ```
    
3.  Go to config >> app.php and add those line :

    => On 'providers' section :
    
    ```php
    Satouch\LaravelMenu\LaravelMenuServiceProvider::class,
    ```

    => On 'aliases' section :
    
    ```php
    'SatouchMenu' => Satouch\LaravelMenu\SatouchMenu::class,
    ```

    =>  On composer run couple of command :
    
        php artisan vendor:publish
        
        php artisan migrate
        

4.  Generate or call menu view (Blade):

    ```php
    {!! \SatouchMenu::generate() !!}
    ```

5.  You can change the mene style, tags and attributes. Here are the templates for customization :
    ```
    /resources/views/vendor/satouch/laravelmenu/menu-parent.blade.php
    
    /resources/views/vendor/satouch/laravelmenu/menu-child.blade.php
    ```
