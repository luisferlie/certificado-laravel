### creando un crud de profesores
## creo ecosistema
```
 php artisan make:Profesor --all

``` 
levantamos el servidor y base de datos 

```
docker compose up -d --build
```

Bases de datos
- 
 -diseñamos la tabla en

 poblamos la tabla y realizamos las migraciones con 
 ```
 php migrate:migrate --seed
 ```
 ### Rutas

 fallback->nos permite ejecutar algo si al ruta no existe
```
Route::fallback(function(){})
Route::resouces('alumnos',Alumnno::class)
```
Routes ::resources crea las rutas necesarias para hacer el crud(eliminar ,crear y almacenar en base de datos,editar un elemento base de datos)

### CSS
Al instalar breeze con

```
composer require laravel/breeze --dev
 
php artisan breeze:install blade
```
se instala tailwindcss

si lo queremos instalar sin breeze
```
npm install -D tailwindcss postcss autoprefixerc
```
instalamos daisy ui para tener componentes desarrolados en tailwind
```
npm i -D daisyui@latest
plugins: [forms,require("daisyui")], en tailwind.config
```
