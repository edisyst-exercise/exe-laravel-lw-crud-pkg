# CRUD rápido con Laravel livewire
https://www.youtube.com/watch?v=4YJStyb9kJA
Mi crea una piccola interfaccia su cui posso giocare, creando più CRUD con Livewire per ingrandire il progetto

https://laravel.com/docs/8.x/installation#installation-via-composer

    composer create-project laravel/laravel:^8.0 exe-laravel-lw-crud-pkg

## Livewire 
https://laravel-livewire.com/docs/2.x/installation

    composer require livewire/livewire

## Livewire Crud Generator
https://github.com/flightsadmin/livewire-crud
Genera Model e Livewire/Component a partire dalla tabella della migration
Genera anche le view e la route per accedere all'index

    composer require flightsadmin/livewire-crud

Il prossimo comando genera il tutto. 
Implementa facoltativamente anche `php artisan ui:auth` quindi avrà l'auth `laravel/ui`
In futuro farò una prova con un Larastarter e poi lancio questo comando senza sovrascrivere l'auth
    
    php artisan crud:install

Per ogni CRUD che voglio fare devo creare la migration e poi lanciare
    
    pa make:migration create_{table-name}_table
    pa migrate
    php artisan crud:generate {table-name}

## Struttura del progetto
- Project - Manual - Chapter
- Checklist - Task   
- da fare: Todo (saranno dei todo a se stanti)

