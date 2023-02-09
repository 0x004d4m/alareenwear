<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CertificationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class CertificationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('View Certifications'))
        {
            abort(403, 'Access denied');
        }

        if (!backpack_user()->can('Manage Certifications'))
        {
            $this->crud->denyAccess(['create','delete','update']);
        }
        $this->crud->setModel(\App\Models\Certification::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/certification');
        $this->crud->setEntityNameStrings(__('sidebar.certification'), __('sidebar.certifications'));
    }

    protected function setupListOperation()
    {
        $this->crud->column('image')->type('image');
        $this->crud->column('created_at');
        $this->crud->column('updated_at');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CertificationRequest::class);

        $this->crud->field('image')->type('image');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
