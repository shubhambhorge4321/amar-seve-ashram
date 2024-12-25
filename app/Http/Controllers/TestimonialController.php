<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Testimonial;


class TestimonialController extends Controller
{
    public function index()
    {
        return view('testimonial');
    }
    public function testimonial_show()
    {
        return view('testimonialcreate');
    }
    public function store(Request $data)
    {
        
        return view('testimonialcreate');
    }
    public function testimonial_view()
    {
        // $categories = setevent::distinct()->where("set_category","!=","event")->pluck('set_category');
        return view('admin.testimonial');
    }



    public function admin_fetchall()
    {
        $gallery = Testimonial::all();
        $output = '';
        $serialnumber=1;
        $urlo = url('/');
        if ($gallery->count() > 0) {
            $output .= '<table class="table productlist-tbl display dataTable cell-border" id="basicdata-tbl" style="width:100%">
            <thead>
                <tr>
                <th>ID</th>
                <th>Image</th>
                
                <th>Created date</th>
                
              
                
                <th>action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($gallery as $rs) {
                $displayValue=" ";
                if ($rs->tests_subtype !== 'none') {
                   
                    $displayValue = "/".$rs->tests_subtype;
                 }
                $output .= '<tr>
                <td>' . $serialnumber . '</td>
                <td><img src="' . $urlo . '/storage/images/' . $rs->volunteer_image . '" width="50" class="img-thumbnail rounded-circle"></td>
                
                <td>' . $rs->created_at->format("d-m-y"). '</td>
                

                <td>
                    <button id="' . $rs->id . '" class="btn btn-sm btn-info viewIcon" data-bs-toggle="modal" data-bs-target="#viewGalleryModal">view</button>
                    <button id="' . $rs->id . '" class="btn btn-sm btn-success editIcon" data-bs-toggle="modal" data-bs-target="#editGalleryModal">edit</button>
                    <button id="' . $rs->id . '" class="btn btn-sm btn-danger deleteIcon" data-bs-toggle="modal">delete</button>
                </td>
              </tr>';
              $serialnumber +=1;
            }
            $output .= '</tbody></table>';
            echo $output;
            
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record in the database!</h1>';
        }
    }

    // insert a new gallery ajax request
    public function admin_store(Request $request)
    {
        $event_category="none";
        if($request->category=="event"){
            $event_category=$request->sub_category;
        }
        $file = $request->file('avatar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName); 

        $galleryData = ['volunteer_designation' => $request->title, 'testst_description' => $request->description, 'volunteer_image' => $fileName, "volunteer_instlink" => $request->sub_category, "volunteer_name" => $request->name,"volunteer_fblink"=>$request->category];
        Testimonial::create($galleryData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // edit an gallery ajax request
    public function admin_edit(Request $request)
    {
        $id = $request->id;
        $gallery = Testimonial::find($id);
        return response()->json($gallery);
    }

    // update an gallery ajax request
    public function admin_update(Request $request)
    {
        $fileName = '';
        $gallery = Testimonial::find($request->gallery_id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($gallery->avatar) {
                Storage::delete('public/images/' . $gallery->avatar);
            }
        } else {
            $fileName = $request->gallery_avatar;
        }
        $subtype="none";
        if($request->category =="event"){
            $subtype=$request->sub_category;
        }
      
        $galleryData = ['testst_name' => $request->edit_name, 'testst_message' => $request->edit_message, 'testst_title' => $request->title, 'testst_description' => $request->description, 'testst_type' => $request->category, 'testst_image' => $fileName,"tests_subtype"=>$subtype];

        $gallery->update($galleryData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // delete an gallery ajax request
    public function admin_delete(Request $request)
    {
        $id = $request->id;
        $gallery = Testimonial::find($id);
        if (Storage::delete('public/images/' . $gallery->testst_image)) {
            Testimonial::destroy($id);
        }
    }

    public function admin_show(Request $request, $id)
    {
        $gallery = Testimonial::find($id);

        if (!$gallery) {
            return response()->json(['error' => 'Gallery not found.'], 404);
        }

        return response()->json($gallery);
    }
}
