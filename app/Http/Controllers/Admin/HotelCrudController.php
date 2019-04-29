<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\HotelRequest as StoreRequest;
use App\Http\Requests\HotelRequest as UpdateRequest;

/**
 * Class HotelCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class HotelCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Hotel');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/hotel');
        $this->crud->setEntityNameStrings('hotel', 'hotels');


        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in HotelRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->removeColumn('arrival_date');
        $this->crud->removeColumn('departure_date');
        $this->crud->removeColumn('hotel_image');

        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'Hotel ID',
            
        ])->makeFirstColumn();

        

        $this->crud->addField([ // image
            'label' => "Hotel Image",
            'name' => "hotel_image",
            'type' => 'browse',
            'allows_null' => false,
            ]);

            $this->crud->addField([   // CKEditor
                'name' => 'descrition',
                'label' => 'Description',
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
