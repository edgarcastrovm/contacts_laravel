 git clone https://gitlab.com/edgar.castro/soccer-league.git .
 mkdir LARABEL
 cd LARABEL
 composer create-project laravel/laravel contacts-app-larabel
 ls
 code contacts-app-larabel
 sudo xampp start
 php artisan
 php artisan serve
 curl -X POST -d "data=test" localhost:8000/ruta
 curl -X POST  localhost:8000/ruta
 curl -X POST -d "data=test" localhost:8000/ruta
 curl -X PUT -d "data=test" localhost:8000/test
 curl -X PATCH -d "data=test" localhost:8000/test
 curl -X DELETE -d "data=test" localhost:8000/test
 ls
 git clone https://github.com/mastermindac/ejercicios-aprende-laravel-desde-cero.git
 ls
 code ejercicios-aprende-laravel-desde-cero
 cd ejercicios-aprende-laravel-desde-cero
 composer install
 php artisan serve
 php artisan test
 git status
 git branch
 git branch -v
 cd ..
 rm -rf ejercicios-aprende-laravel-desde-cero
 git clone https://github.com/edgarcastrovm/test-ejercicios-laravel.git
 ls
 cd test-ejercicios-laravel
 composer install
 php artisan serve
 cs ../test-ejercicios-laravel
 php artisan serve
 cs ../test-ejercicios-laravel
 cs ../
 cd ~
 cd VSProjects/LARABEL/test-ejercicios-laravel
 php artisan serve
 git branch -a
 git checkout ejercicio1
 code .
 php artisan test
 php artisan generate:key
 cp .env.example .env
 php artisan key:generate
 php artisan test
 git status
 git commit -am "Solucion 1"
 git status
 git push
 cd ../contacts-app-larabel
 git remote add origin https://github.com/edgarcastrovm/contacts_laravel.git
 git init
 git remote add origin https://github.com/edgarcastrovm/contacts_laravel.git
 git status
 git add .
 git status
 git commit -am "Initial Commit"
 git status
 git push -u origin main

* Agregando temas bootstrapwatch
``` bash
    php artisan migrate
    composer require laravel/ui
    php artisan ui bootstrap --auth
    npm install
    npm run dev
    npm i bootswatch

    sudo xampp start
    php artisan serve
    npm run watch
    git commit -am "Agregando temas bootstrapwatch"
    ext install onecentlin.laravel5-snippets
    git status
    php artisan serve
    npm run watch
```

cd ../contacts-app-larabel
sudo xampp start
php artisan serve
npm run watch

* MIGRACIONES  -----------------------------------------------------------------------
```bash
    php artisan make --help
    php artisan make:migration --help

    php artisan help migrate
    php artisan help make:migration
    php artisan tinker
    php artisan make:migration create_contacts_table
    php artisan migrate
    php artisan make:migration update_contacts_table
    php artisan migrate
    php artisan migrate
    php artisan help make:model
    php artisan migrate:rollback
    php artisan make:migration create_Contacts_table
    php artisan make:migration create_contacts_table
    php artisan migrate
    php artisan migrate:rollback
    php artisan help make:model Contact
    php artisan make:model Contact
    php artisan make:model contact
    php artisan make:model Contact
    php artisan migrate
    php artisan make:controller --help
    php artisan make:controller -m Contact ContactController
    php artisan make:migration update_contacts_table
```
git status
git add app/Http/Controllers/ContactController.php
git add app/Models/Contact.php
git add database/migrations/2022_06_17_044603_create_contacts_table.php
git add resources/views/contact.blade.php
git status
git commit -am "Creando tabla, formulario contacto y validando"
git status
php artisan migrate
git add database/migrations/2022_06_18_132754_update_contacts_table.php

mv LARABEL LARAVEL
cd LARAVEL
cd contacts-app-larabel
code .
php artisan serve
npm run watch
sudo xampp start
cd VSProjects/LARAVEL/contacts-app-larabel
npm run watch
php artisan serve
sudo xampp start
node --version
git status
git add .
git commit -am "Completando CRUD"
git push origin main







TEST


 git status
 git add .
 git commit -am "Page Welcome"
 git push origin main
 php artisan serve
 npm run watch
 logname
 whoami
 cd VSProjects/LARABEL/test-ejercicios-laravel
 git status
 micro ~/.zshrc
 sudo pacman -S powerline-fonts
 exit
 cd VSProjects/LARABEL/test-ejercicios-laravel
 git checkout ejercicio2
 code .
 php spark serve
 php artisan serve
 micro ~/.zshrc
 curl -X POST http:localhost:8000
 cd VSProjects/LARABEL/test-ejercicios-laravel
 php artisan serve
 curl -X POST http:localhost:8000
 curl -X POST http://localhost:8000
 curl -X POST -H "Content-Type: application/json" http://localhost:8000
 curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" http://localhost:8000
 2305  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" http://localhost:8000/ejercicio2/a
 2306  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json"  \n http://localhost:8000/ejercicio2/a
 2307  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/a
 2308  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"-200"}' http://localhost:8000/ejercicio2/b
 2309  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"-200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE10
 2310  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE10
 2311  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE15
 2312  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c
 2313  php artisan test
 2314  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE5
 2315  php artisan test
 2316  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE5
 2317  php artisan test
 2318  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE10
 2319  php artisan test
 2320  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE10
 2321  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE15
 2322  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/
 2323  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c
 2324  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE15
 2325  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE5
 2326  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE10
 2327  php artisan test
 2328  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE5
 2329  php artisan test
 2330  curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"name":"p1","description":"abcd","price":"200"}' http://localhost:8000/ejercicio2/c\?discount=SAVE5
php artisan test