<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TestimonyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class TestimonyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('View Testimonies'))
        {
            abort(403, 'Access denied');
        }

        if (!backpack_user()->can('Manage Testimonies'))
        {
            $this->crud->denyAccess(['create','delete','update']);
        }
        $this->crud->setModel(\App\Models\Testimony::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/testimony');
        $this->crud->setEntityNameStrings(__('sidebar.testimony'), __('sidebar.testimonies'));
    }

    protected function setupListOperation()
    {
        $this->crud->column('image')->type('image');
        $this->crud->column('description')->type('textarea');
        $this->crud->column('name');
        $this->crud->column('position');
        $this->crud->column('created_at');
        $this->crud->column('updated_at');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(TestimonyRequest::class);

        $this->crud->field('image')->type('image');
        $this->crud->field('description')->type('textarea');
        $this->crud->field('name');
        $this->crud->field('position');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
