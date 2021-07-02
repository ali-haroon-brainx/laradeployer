<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/ali-haroon-brainx/laradeployer.git');
set('php_fpm_version', '8.0');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

//host('php-dep.brainxdemo.com')
//    ->set('deploy_path', '/var/www/laradeployer');

host('13.213.156.49')
    ->set('remote_user','deployer')
    ->set('deploy_path', '/var/www/html/laradeployer');

// Tasks

//task('build', function () {
//    cd('{{release_path}}');
//    run('npm run build');
//});

after('deploy:failed', 'deploy:unlock');
