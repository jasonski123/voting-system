<?php

namespace App\Http\Livewire;

use App\Models\Election;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\Rules\Rule;
use PowerComponents\LivewirePowerGrid\Rules\RuleActions;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

final class ElectionComponent extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Election>
     */
    public function datasource(): Builder
    {
        return Election::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('school_year_start_formatted', fn (Election $model) => Carbon::parse($model->school_year_start)->format('Y'))
            ->addColumn('school_year_end_formatted', fn (Election $model) => Carbon::parse($model->school_year_end)->format('Y'))
            ->addColumn('election_start')
            ->addColumn('election_end')

            ->addColumn('election_start_formatted', fn (Election $model) => Carbon::parse($model->election_start)->format('d/m/Y'))
            ->addColumn('election_end_formatted', fn (Election $model) => Carbon::parse($model->election_end)->format('d/m/Y '))
            ->addColumn('is_election')->addColumn('is_election', function (Election $model) {
                return $model->is_election ? 'YES' : 'NO';
            })
            ->addColumn('created_at_formatted', fn (Election $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Election $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),

            Column::make('IS ELECTION', 'is_election'),

            Column::make('SCHOOL YEAR START', 'school_year_start_formatted', 'school_year_start')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('SCHOOL YEAR END', 'school_year_end_formatted', 'school_year_end')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('ELECTION START', 'election_start')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('ELECTION END', 'election_end')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            // Column::make('CREATED AT', 'created_at_formatted', 'created_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker(),

            // Column::make('UPDATED AT', 'updated_at_formatted', 'updated_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker(),

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Election Action Buttons.
     *
     * @return array<int, Button>
     */
    public function actions(): array
    {
        return [
            Button::make('edit', 'Edit')
                ->class(' btn btn-primary')
                ->route('election.edit', ['id' => 'id']),

            //     Button::make('destroy', 'Delete')
            //         ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
            //         ->route('election.destroy', ['election' => 'id'])
            //         ->method('delete')
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid Election Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($election) => $election->id === 1)
                ->hide(),
        ];
    }
    */
}
