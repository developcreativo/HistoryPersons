<?php

namespace Developcreativo\HistoryPersons;

use Developcreativo\HistoryPersons\Nova\PersonsUpdatesResource;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class HistoryPersons extends Tool
{
    public $personsUpdateResource = PersonsUpdatesResource::class;
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::resources([
            $this->personsUpdateResource,
        ]);
        Nova::script('history-persons', __DIR__.'/../dist/js/tool.js');
        Nova::style('history-persons', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('history-persons::navigation');
    }
}
