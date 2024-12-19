<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sidegallery;
use Illuminate\Support\Facades\Storage;


class SidegalleryController extends Controller
{
    
    public function admin_fetchall()
    {
        $gallery = Sidegallery::all();
        $output = '';
        $counter = 1;
        $urlo = url('/');
        if ($gallery->count() > 0) {
            $output .= '<table class="table productlist-tbl display dataTable cell-border" id="basicdata-tbl" style="width:100%">
            <thead>
                <tr>
                <th>ID</th>
                
                <th>Image</th>
               
                <th>page</th>
                
                <th>created date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($gallery as $rs) {
                if($rs->gal_event !=="none"){
                    $eventdata=".".$rs->gal_event;
                }
                else{
                    $eventdata=" ";
                }
                $output .= '<tr>
                
                <td>' . $counter . '</td>
                <td><img src="' . $urlo . '/storage/images/' . $rs->gal_image . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $rs->gal_title .$eventdata .'</td>
                
                <td>' . $rs->created_at->format("d-m-y") . '</td>
                <td>
                    <button id="' . $rs->id . '" class="btn btn-sm btn-info viewIcon" data-bs-toggle="modal" data-bs-target="#viewGalleryModal">view</button>
                   
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
    public function admin_store(Request $request)
    {
        $file = $request->file('avatar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);      
        if ($request->title == "event"||$request->title == "gallery") {
            $subevent = $request->event;
        } else {
            $subevent = "none";
        }
        if ($request->title == "gallery") {
            $city = $request->category;
            if (empty($request->year)) {
                $year = "none";
            } else {
                $year = $request->year;
            }
        } else {
            $city = "none";
            $year = "none";
        }
        
        $width=null;
        $height = null;
        if ($request->has('title')) {
            switch ($request->title) {
                case 1:
                    $width = "300px";
                    
                    break;
                case 2:
                    $width = "400px";
                    
                    break;
                case 3:
                    $width = "500px";
                    
                    break;
                case 4:
                    $width = "300px";
                    $height = "462px";
                    break;
                case 5:
                    $width = "300px";
                    $height = "502px";
                    break;
                case 6:
                    $width = "630px";
                    $height = "244px";
                    break;
                case 7:
                    $width = "630px";
                    break;
                default:
                    return response()->json(['error' => 'Invalid selection'], 400);
            }
        } 
        
        $galleryData = ['gal_title' =>$width, 'gal_image' => $fileName, "gal_event" => $height];
        Sidegallery::create($galleryData);
        return response()->json([
            'status' => 200,
        ]);
    }

    public function admin_edit(Request $request)
    {
        $id = $request->id;
        $gallery = Sidegallery::find($id);
        return response()->json($gallery);
    }

    // update an gallery ajax request
    public function admin_update(Request $request)
    {
        $fileName = '';
        $gallery = Sidegallery::find($request->gallery_id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($gallery->image_path) {
                Storage::delete('public/images/' . $gallery->image_path);
            }
        } else {
            $fileName = $request->gallery_avatar;
        }

        $galleryData = ['spon_title' => $request->title, 'spon_desc' => $request->description, 'sponsor' => $request->category, 'image_path' => $fileName];

        $gallery->update($galleryData);
        return response()->json([
            'status' => 200,
        ]);
    }

    
    public function admin_delete(Request $request)
    {
        $id = $request->id;
        $gallery = Sidegallery::find($id);
        if (\Storage::delete('public/images/' . $gallery->gal_image)) {
            Sidegallery::destroy($id);
        }
    }

    public function admin_show(Request $request, $id)
    {
        $gallery = Sidegallery::find($id);

        if (!$gallery) {
            return response()->json(['error' => 'Gallery not found.'], 404);
        }

        return response()->json($gallery);
    }
}
