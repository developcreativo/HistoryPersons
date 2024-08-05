<?php

namespace Developcreativo\HistoryPersons\Nova;

use App\Nova\Cliente;
use App\Nova\Puesto;
use App\Nova\Resource;
use App\Nova\Ubicacion;
use App\Nova\User;
use Developcreativo\HistoryPersons\Models\PersonsUpdates;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class PersonsUpdatesResource extends Resource
{
    public static $model = PersonsUpdates::class;

    public static $title = 'id';

    public static $search = [
        'id', 'id_usuario'
    ];

    public static $displayInNavigation = false;

    public static function label() {
        return __("Histórial de Personas");
    }
    public static function singularLabel() {
        return  __("Histórial de Personas");
    }

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make(__('Id Usuario'), 'id_usuario')
                ->sortable()
                ->rules('required'),

            Date::make(__('Initial Date'), 'initial_date')
                ->sortable()
                ->rules('required', 'date'),

            Date::make(__('Final Date'), 'final_date')
                ->sortable()
                ->rules('required', 'date'),

            BelongsTo::make(__('Customer'), 'cliente', Cliente::class)->sortable(),

            BelongsTo::make(__('Location'), 'ubicacion', Ubicacion::class)->sortable(),

            BelongsTo::make(__('Position'), 'puesto', Puesto::class)->sortable(),

            BelongsTo::make(__('User'), 'user', User::class),
        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }

    public function authorizedToDelete(Request $request)
    {
        return false;
    }

    public function authorizedToUpdate(Request $request)
    {
        return false;
    }
}
