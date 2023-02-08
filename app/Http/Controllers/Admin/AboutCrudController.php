<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AboutRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class AboutCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('View About'))
        {
            abort(403, 'Access denied');
        }

        if (!backpack_user()->can('Manage About'))
        {
            $this->crud->denyAccess(['create','delete','update']);
        }
        $this->crud->setModel(\App\Models\About::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/about');
        $this->crud->setEntityNameStrings('about', 'abouts');
    }

    protected function setupListOperation()
    {
        $this->crud->column('title');
        $this->crud->column('image')->type('image');
        $this->crud->column('created_at');
        $this->crud->column('updated_at');
        $this->crud->column('description')->type('textarea');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(AboutRequest::class);

        $this->crud->field('title');
        $this->crud->field('image')->type('image');
        $this->crud->field('description')->type('CKEditor');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
