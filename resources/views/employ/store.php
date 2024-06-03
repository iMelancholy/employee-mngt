@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Employee Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('employ.index') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="firstname">
                        </div><div class="col-md-6">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" name="lastname">
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="middlename">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" href="{{route('employ.index') }}" class="btn btn-info" value="Register">
                        </div>

                    </div>
                </form>
            </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush










<!-- git clone [url]
cd repository
git checkout master
git clone --branch [url]
cp .env.example .env
npm install
npm install @popperjs/core
npm audit fix --force
npm run dev
ctrl c
composer update
php artisan key:generate
php artisan storage:link
git status
git init 
git add .
git commit -m "try"
modify any .php in employ folder
git status
git init
git add .
git commit -m "another"
git pull
git checkout main (since ur master it will switch to main branch)
git push origin main
git branch (just to make sure if ur the master/main)


if git pull error (remote:Repository not found)
git remote set-url origin [url]
git remote -v
(if there's another error on git pull[like this: there is no tracking information for the current branch])
git branch --set-upstream-to=origin/master master
git checkout master
git pull
[alternative way on main side]
git pull origin main
git pull --set-upstream origin master


master side in pull/push
git pull
git push origin HEAD:master
git checkout master 
git push --all origin

#push the master branch if it has changes
git checkout master
git push origin master

#push the master branch if it has changes
git checkout main
git push origin main

[checking the both changes]
master side
php artisan serve
checking the main changes
git checkout main (local environment for sure there's a error here)
git add .
git commit -m "describe ur changes"
git checkout main (switch to main branch)
composer install (there's a error on php artisan cause the file can't open input file)
to fix this: git checkout master (back to master)
ls (to verify if the composer.json file exist)
composer install

git clone [url] employee-mngt-main
cd [employee-mngt-main]
git checkout main (it will default on main)
composer install
php artisan serve (could not open input file: artisan)
git checkout master
composer update
php artisan serve (fix the could not open input file: artisan)
cp .env.example .env
npm install
npm install @popperjs/core
npm audit fix --force
npm run dev
composer update
php artisan key:generate
php artisan storage:link
git status
git init
git add .
git init
git pull
git push


[if you can't see the changes on the both branch]
git status
git pull origin master (always be at master branch to pull the new file)
if i say unlink of file just answer n
git init 
git add .
git status (just to check if pumasok yung modified)
git push (rejected files but you can process)
git pull
php artisan serve -->