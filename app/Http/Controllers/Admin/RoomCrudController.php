<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\RoomRequest as StoreRequest;
use App\Http\Requests\RoomRequest as UpdateRequest;

/**
 * Class RoomCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class RoomCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Room');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/room');
        $this->crud->setEntityNameStrings('room', 'rooms');

       
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in RoomRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

        $this->crud->addField([   // CKEditor
            'name' => 'long_description',
            'label' => 'Long Description',
            'type' => 'ckeditor',
            
        ]);

        $this->crud->addField([   // CKEditor
            'name' => 'type',
            'label' => "Type",
            'type' => 'select_from_array',
            'options' => ['Single' => 'Single', 'Double' => 'Double', 'Triple' => 'Triple', 'Quad' => 'Quad', 'Queen' => 'Queen', 'King' => 'King'
                            , 'Twin' => 'Twin', 'Double-double' => 'Double-double', 'Studio' => 'Studio', 'Master Suite' => 'Master Suite', 'Mini-Suite' => 'Mini-Suite'],
                    
        ]);

        $this->crud->addField([   // CKEditor
            'name' => 'option_per_type',
            'label' => "Option per type",
            'type' => 'select_from_array',
            'options' => ['Full board' => 'Full board', 'Half Board' => 'Half Board', 'Bed and breakfast' => 'Bed and breakfast','All inclusive ' => 'All inclusive'],
        ]);
    
        $this->crud->addField([
         // Select2
            'label' => "Hotel",
            'type' => 'select2',
            'name' => 'hotel_id', // the db column for the foreign key
            'entity' => 'hotel', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Hotel" // foreign key model
         ]
    );

            

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
