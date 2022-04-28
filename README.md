# CRUD rápido con Laravel livewire

https://www.youtube.com/watch?v=4YJStyb9kJA

    composer create-project laravel/laravel:^8.0 exe-laravel-lw-crud-pkg

## Livewire 

    composer require livewire/livewire

## Livewire Crud Generator

https://github.com/flightsadmin/livewire-crud

    composer require flightsadmin/livewire-crud

Questo comando genera il tutto. Implementa anche `php artisan ui:auth` quindi avrà l'autenticazione `laravel/ui`
    
    php artisan crud:install

Per ogni CRUD che voglio fare devo creare la migration e poi lanciare

    php artisan crud:generate {table-name}


