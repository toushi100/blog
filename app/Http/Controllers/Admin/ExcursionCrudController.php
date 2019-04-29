<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ExcursionRequest as StoreRequest;
use App\Http\Requests\ExcursionRequest as UpdateRequest;

/**
 * Class ExcursionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ExcursionCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Excursion');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/excursion');
        $this->crud->setEntityNameStrings('excursion', 'excursions');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in ExcursionRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->addField([ // image
            'label' => "Excursion image",
            'name' => "excursion_image",
            'type' => 'browse',
            'allows_null' => false,
            
            
        ]);

        $this->crud->addField([   // CKEditor
            'name' => 'description',
            'label' => 'Description',
            'type' => 'ckeditor',
            
        ]);
        $this->crud->addField([   // CKEditor
            'name' => 'long_description',
            'label' => 'Long Description',
            'type' => 'ckeditor',
            
        ]);
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
