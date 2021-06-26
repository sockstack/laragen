<?php


namespace Sockstack\Laragen;


use Illuminate\Support\ServiceProvider;
use Sockstack\Repository\RepositoryGeneratorCommand;
use Sockstack\Service\ServiceGeneratorCommand;

class LaragenProvider extends ServiceProvider
{
    public function register()
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                RepositoryGeneratorCommand::class,
                ServiceGeneratorCommand::class
            ]);
        }
    }

    /**
     * 获取由提供者提供的服务。
     *
     * @return array
     */
    public function provides()
    {
        return [
            RepositoryGeneratorCommand::class,
            ServiceGeneratorCommand::class
        ];
    }
}