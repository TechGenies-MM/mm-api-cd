<?php

namespace Deployer;

require 'recipe/laravel.php';

set('application', 'api-cd');
set('repository', 'git@github.com:TechGenies-MM/mm-api-cd.git');
set('git_tty', true);
add('shared_files', []);

task('build', function () {
    run('cd {{release_path}} && build');
});
task('artisan:optimize', function () {
});
after('deploy:failed', 'deploy:unlock');
set('writable_mode', 'chmod');

host('3.128.80.108')
    ->stage('dev')
    ->user('web')
    ->port(22)
    ->forwardAgent(true)
    ->set('branch', 'main')
    ->set('deploy_path', '/var/www/{{application}}.erpbucket.com');
