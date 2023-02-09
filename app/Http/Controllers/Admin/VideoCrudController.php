<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VideoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class VideoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('View Video'))
        {
            abort(403, 'Access denied');
        }

        if (!backpack_user()->can('Manage Video'))
        {
            $this->crud->denyAccess(['create','delete','update']);
        }
        $this->crud->setModel(\App\Models\Video::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/video');
        $this->crud->setEntityNameStrings(__('sidebar.video'), __('sidebar.videos'));
    }

    protected function setupListOperation()
    {
        $this->crud->column('description')->type('textarea');
        $this->crud->column('image')->type('image');
        $this->crud->column('video');
        $this->crud->column('created_at');
        $this->crud->column('updated_at');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(VideoRequest::class);

        $this->crud->field('description')->type('textarea');
        $this->crud->field('image')->type('image');
        $this->crud->field('video')->hint('upload video to VIMEO then copy link and paste here');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
