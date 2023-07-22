<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TeamRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class TeamCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('View Team'))
        {
            abort(403, 'Access denied');
        }

        if (!backpack_user()->can('Manage Team'))
        {
            $this->crud->denyAccess(['create','delete','update']);
        }
        $this->crud->setModel(\App\Models\Team::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/team');
        $this->crud->setEntityNameStrings(__('sidebar.team'), __('sidebar.teams'));
    }


    protected function setupListOperation()
    {
        $this->crud->column('image')->type('image');
        $this->crud->column('name');
        $this->crud->column('position');
        $this->crud->column('twitter');
        $this->crud->column('facebook');
        $this->crud->column('instagram');
        $this->crud->column('created_at');
        $this->crud->column('updated_at');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(TeamRequest::class);

        $this->crud->field('image')->type('image');
        $this->crud->field('name');
        $this->crud->field('position');
        $this->crud->field('twitter');
        $this->crud->field('facebook');
        $this->crud->field('instagram');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
