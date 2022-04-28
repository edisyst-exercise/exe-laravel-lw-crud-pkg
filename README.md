# CRUD rápido con Laravel livewire

https://www.youtube.com/watch?v=4YJStyb9kJA

    composer create-project laravel/laravel:^8.0 exe-laravel-lw-crud-pkg

## Livewire 

    composer require livewire/livewire

## Livewire Crud Generator

https://github.com/flightsadmin/livewire-crud

    composer require flightsadmin/livewire-crud

Questo comando genera il tutto. 
Implementa facoltativamente anche `php artisan ui:auth` quindi avrà l'auth `laravel/ui`
In futuro farò una prova con un Larastarter e poi lancio questo comando senza sovrascrivere l'auth
    
    php artisan crud:install

Per ogni CRUD che voglio fare devo creare la migration e poi lanciare

    php artisan crud:generate {table-name}

## Struttura del progetto
- Project - Manual - Chapter
- Checklist - Task   
- da fare: Todo (saranno dei todo a se stanti)

