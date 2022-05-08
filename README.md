<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CRUD - LARAVEL - CSWNI - UML

CRUD sobre datos de una universidad

- Implementado con Laravel
- Integración de Livewire
- Uso de Jetstream
- Integración de Livewire Datatables

## Para instalación nueva

```
    #Crear el fichero .env desde la consola, copiando el .env.example
    cp .env.example .env
    
    #Instalar dependencias de JavaScript
    npm install && npm run dev
    
    #Instalar dependencias PHP
    composer update
    
    #Crear la base de datos en mysql
    
    #Ajustar los valores de la configuracion
    
    #Crear las migraciones
    php artisan migrate:fresh --seed
    
    #Crear la llave de la aplicación
    php artisan key:generate
    
    #Activar el servidor
    php artisan serve
    
    #Acceder al navegador y crear una nueva cuenta.
```

## Para continuar con la clase del 07/05/2022

``` 
#Crear un componente Livewire para crear el formulario
php artisan make:livewire Universidad/CrearUniversidadComponent

#Crear un componente Livewire para confirmar la eliminación de una Universidad
php artisan make:livewire Universidad/ConfirmaEliminarUniversidadComponent

```

    
