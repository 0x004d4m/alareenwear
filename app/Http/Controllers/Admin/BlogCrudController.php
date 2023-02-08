<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BlogRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class BlogCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('View Blogs'))
        {
            abort(403, 'Access denied');
        }

        if (!backpack_user()->can('Manage Blogs'))
        {
            $this->crud->denyAccess(['create','delete','update']);
        }
        $this->crud->setModel(\App\Models\Blog::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/blog');
        $this->crud->setEntityNameStrings('blog', 'blogs');
    }

    protected function setupListOperation()
    {
        $this->crud->column('image')->type('image');
        $this->crud->column('title');
        $this->crud->column('description')->type('textarea');
        $this->crud->column('created_at');
        $this->crud->column('updated_at');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(BlogRequest::class);

        $this->crud->field('image')->type('image');
        $this->crud->field('title');
        $this->crud->field('description')->type('textarea');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
