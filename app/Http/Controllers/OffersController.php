<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use DB;
class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $offer = Offer::all();
        return view('/index')->with('offer',$offer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //for the admin panel to add offers
        return view('offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'offer_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('offer_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('offer_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('offer_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('offer_image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        $offer = new Offer;
        $offer->title = $request->input('title');
        $offer->description = $request->input('description');
        $offer->offer_image = $fileNameToStore;
        $offer->save();
        return redirect('/offers')->with('success', 'offer Created'); //for the admin panel (to be made Messages)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //retriving a certian offer
        $offer = Offer::find($id);
        return view('offers.offer')->with('offer', $offer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $offer = Offer::find($id);
        // Check for correct user
        if(auth()->user()->id !==$offer->user_id){
            return redirect('/offers')->with('error', 'Unauthorized Page');
        }
        return view('offers.edit')->with('offer', $offer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'offer_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('offer_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('offer_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('offer_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('offer_image')->storeAs('public/images', $fileNameToStore);
        }


        $offer = new Offer;
        $offer->title = $request->input('title');
        $offer->description = $request->input('description');
        $offer->offer_image = $fileNameToStore;
        $offer->save();
        return redirect('/offers')->with('success', 'offer updated'); //for the admin panel (to be made Messages)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $offer = Offer::find($id);
        // Check for correct user
        if(auth()->user()->id !==$offer->user_id){
            return redirect('/offers')->with('error', 'Unauthorized Page');
        }
        if($post->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/images/'.$offer->offer_image);
        }
        
        $post->delete();
        return redirect('/offers')->with('success', 'offer Removed');
    }
}
