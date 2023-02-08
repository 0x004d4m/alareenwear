<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CounterRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class CounterCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('View Counters'))
        {
            abort(403, 'Access denied');
        }

        if (!backpack_user()->can('Manage Counters'))
        {
            $this->crud->denyAccess(['create','delete','update']);
        }
        $this->crud->setModel(\App\Models\Counter::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/counter');
        $this->crud->setEntityNameStrings('counter', 'counters');
    }

    protected function setupListOperation()
    {
        $this->crud->column('counter1');
        $this->crud->column('counter1Name');
        $this->crud->column('counter2');
        $this->crud->column('counter2Name');
        $this->crud->column('counter3');
        $this->crud->column('counter3Name');
        $this->crud->column('counter4');
        $this->crud->column('counter4Name');
        $this->crud->column('created_at');
        $this->crud->column('updated_at');
        $this->crud->column('deleted_at');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CounterRequest::class);

        $this->crud->field('counter1');
        $this->crud->field('counter1Name');
        $this->crud->field('counter2');
        $this->crud->field('counter2Name');
        $this->crud->field('counter3');
        $this->crud->field('counter3Name');
        $this->crud->field('counter4');
        $this->crud->field('counter4Name');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
