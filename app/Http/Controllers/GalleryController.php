<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    function gallery_view()
    {   
        $successMessage = session('success');
        $deleteMessage = session('delete');
        $updateMessage = session('update');
        $carouselImages = CarouselImage::all();
        return view("gallery",compact('carouselImages',"successMessage","deleteMessage",'updateMessage'));
    }
    function carousel_delete(CarouselImage $id)
    {   
        $id->delete();
        $carouselImages = CarouselImage::all();
        return redirect()->route("gallery.view")->with("delete","carousel image deleted successfully !!");
    }


    public function index() {
        return view('admin.gallery');
    }

    public function fetchAll() {
        
        $gallery = Gallery::all();
        $output = '';
        $urlo=url('/');
        $counter = 1;
        if ($gallery->count() > 0) {
            
            $output .= '<table class="table productlist-tbl display dataTable cell-border" id="basicdata-tbl" style="width:100%">
            <thead>
                <tr>
                <th>ID</th>
                <th>Image</th>
                <th>page</th>
                <th>Created date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($gallery as $rs) {
                // $displayValue = ($rs->sub_category === 'none') ? " ": '/'. $rs->sub_category;
                $displayValue="";
                if ($rs->category === 'event') {
                   
                    $displayValue = ($rs->sub_category === 'none') ? " " : '/' . $rs->sub_category;
                 }
                $output .= '<tr>
                <td>'.$counter.'</td>
               
                <td><img src="'.$urlo.'/storage/images/' . $rs->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $rs->category .$displayValue. '</td>
                <td>' . $rs->created_at->format("d-m-y"). '</td>
                <td>
                    <button id="' . $rs->id . '" class="btn btn-sm btn-info viewIcon" data-bs-toggle="modal" data-bs-target="#viewGalleryModal">view</button>
                    <button id="' . $rs->id . '" class="btn btn-sm btn-success editIcon" data-bs-toggle="modal" data-bs-target="#editGalleryModal">edit</button>
                    <button id="' . $rs->id . '" class="btn btn-sm btn-danger deleteIcon" data-bs-toggle="modal">delete</button>
                </td>
              </tr>';
              $counter++;
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record in the database!</h1>';
        }
    }

    // insert a new gallery ajax request
   
    public function store(Request $request) {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,gif|max:10000', 
        ]);
        // Process the uploaded file
        $file = $request->file('avatar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);
    
        // Determine subcategory based on category
        $subcat = ($request->category == "event") ? $request->sub_category : "none";
    
        // Store the data in the database
        $galleryData = [
            'category' => $request->category,
            'avatar' => $fileName
        ];
        Gallery::create($galleryData);
    
        // Return response
        return response()->json([
            'status' => 200,
        ]);
    }
 

            // edit an gallery ajax request
    public function edit(Request $request) {
        $id = $request->id;
        $gallery = Gallery::find($id);
        return response()->json($gallery);
    }

    // update an gallery ajax request
    public function update(Request $request) {
          // Validate the incoming request data
          $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,gif|max:10000', 
        ]);
    
        $fileName = '';
        $gallery = Gallery::find($request->gallery_id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($gallery->avatar) {
                \Storage::delete('public/images/' . $gallery->avatar);
            }
        } else {
            $fileName = $request->gallery_avatar;
        }

      
        $galleryData = ['category' => $request->category,  'avatar' => $fileName];
    
        $gallery->update($galleryData);
        return response()->json([
            'status' => 200,
        ]);
    }

       // delete an gallery ajax request
       public function delete(Request $request) {
        $id = $request->id;
        $gallery = Gallery::find($id);
        if (\Storage::delete('public/images/' . $gallery->avatar)) {
            Gallery::destroy($id);
        }
    } 

    public function show(Request $request, $id)
    {
        $gallery = Gallery::find($id);
    
        if (!$gallery) {
            return response()->json(['error' => 'Gallery not found.'], 404);
        }
    
        return response()->json($gallery);
    }

}
