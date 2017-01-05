<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Usuario\Estudio' => 'App\Policies\EstudioPolicy',
        'App\Models\Usuario\Trabajo' => 'App\Policies\TrabajoPolicy',
        'App\Models\Usuario\Skill' => 'App\Policies\SkillPolicy',
        'App\Models\Usuario\Idioma' => 'App\Policies\IdiomaPolicy',
        'App\Models\Usuario\Curso' => 'App\Policies\CursoPolicy',
        'App\Models\Usuario\Estado' => 'App\Policies\EstadoPolicy',
        'App\Models\Usuario\Interes' => 'App\Policies\InteresPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
    }
}
