<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequestRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ContactRequestCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('View Contact Requests'))
        {
            abort(403, 'Access denied');
        }

        if (!backpack_user()->can('Manage Contact Requests'))
        {
            $this->crud->denyAccess(['create','delete','update']);
        }
        $this->crud->setModel(\App\Models\ContactRequest::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/contact-request');
        $this->crud->setEntityNameStrings('contact request', 'contact requests');
    }

    protected function setupListOperation()
    {
        $this->crud->column('name');
        $this->crud->column('email')->type('email');
        $this->crud->column('subject');
        $this->crud->column('message')->type('textarea');
        $this->crud->column('created_at');
        $this->crud->column('updated_at');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ContactRequestRequest::class);

        $this->crud->field('name');
        $this->crud->field('email')->type('email');
        $this->crud->field('subject');
        $this->crud->field('message')->type('textarea');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
