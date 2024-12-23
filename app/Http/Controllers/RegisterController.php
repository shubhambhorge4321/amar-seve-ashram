<?php

namespace App\Http\Controllers;


use App\Models\Register;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller {
    public function register_show() {
        return view("admin.register");
    }
    
    public function volunteer_store(Request $req) {
        
        $req->validate([
            'name' => 'required|string|max:255',
            'mobile_no' => 'required|numeric',
            'email' => 'required|email|max:255',
        ]);
        
        Register::create([
            'reg_name' => request('name'),
            'reg_mobile' => request('mobile_no'),
            'reg_email' => request('email'),
            'reg_address'=> request('reg_address'),
            'reg_message'=> request('reg_message'),
            'reg_occupation'=> request('reg_occupation'),
        ]);
        \Session::flash('success', 'Your form has been submitted successfully!');

        return response()->json('Your volunteer form has  been submited succesfully !!');   
        
    }
    public function front_store(Request $req) {
        // dd($req);
        $req->validate([
            'name' => 'required|string|max:255',
            'mobile_no' => 'required|numeric',
            'email' => 'required|email|max:255',
        ]);
        // dd($req);
        Register::create([
            'reg_type' => request('hidden_name'), 
            'reg_name' => request('name'),
            'reg_mobile' => request('mobile_no'),
            'reg_email' => request('email'),
        ]);
        Session::flash('success', 'Your form has been submitted successfully!');

        return back()->with('success', 'Your form has been submitted successfully!');
    }

    public function subscribe_store()
    {
        return back();
    }



    public function mahagame_store(Request $req) {
        
        $req->validate([
            'name' => 'required|string|max:255',
            'mobile_no' => 'required|numeric',
            'email' => 'required|email|max:255',
        ]);
        Register::create([
            'reg_type' => request('hidden_name'), 
            'reg_name' => request('name'),
            'reg_mobile' => request('mobile_no'),
            'reg_email' => request('email'),
        ]);
        Session::flash('success', 'Your form has been submitted successfully!');

        // return redirect()->route("registerpage");
        return back()->with('success', 'Your form has been submitted successfully!');
    }


    public function admin_fetchall() {
        $gallery = Register::all();
        $output = '';
        $urlo = url('/');
        $counter = 1;
        if($gallery->count() > 0) {
            $output .= '<table class="table productlist-tbl display dataTable cell-border" id="basicdata-tbl" style="width:100%">
            <thead>
                <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>mobile</th>
                <th>profesion</th>
                <th>register date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach($gallery as $rs) {
                $output .= '<tr>
                
                <td>'.$counter.'</td>

              
                <td>'.$rs->reg_name.'</td>
                <td>'.$rs->reg_email.'</td>
                <td>'.$rs->reg_mobile.'</td>
                <td>'.$rs->reg_occupation.'</td>
                <td>'.$rs->created_at->format("d-m-y").'</td>
                <td>
                    <button id="'.$rs->id.'" class="btn btn-sm btn-info viewIcon" data-bs-toggle="modal" data-bs-target="#viewGalleryModal">view</button>
                    
                    <button id="'.$rs->id.'" class="btn btn-sm btn-danger deleteIcon" data-bs-toggle="modal">delete</button>
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
    public function admin_store(Request $request) {
        $file = $request->file('avatar');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName); //php artisan storage:link

        $galleryData = ['spon_title' => $request->title, 'spon_desc' => $request->description, 'sponsor' => $request->category, 'image_path' => $fileName];
        Sponsor::create($galleryData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // edit an gallery ajax request
    public function admin_edit(Request $request) {
        $id = $request->id;
        $gallery = Sponsor::find($id);
        return response()->json($gallery);
    }

    // update an gallery ajax request
    public function admin_update(Request $request) {
        $fileName = '';
        $gallery = Sponsor::find($request->gallery_id);
        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if($gallery->avatar) {
                Storage::delete('public/images/'.$gallery->avatar);
            }
        } else {
            $fileName = $request->gallery_avatar;
        }

        $galleryData = ['spon_title' => $request->title, 'spon_desc' => $request->description, 'sponsor' => $request->category, 'sub_category' => $request->sub_category, 'image_path' => $fileName];

        $gallery->update($galleryData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // delete an gallery ajax request
    public function admin_delete(Request $request) {

        $id = $request->id;
        Register::destroy($id);
    }

    public function admin_show(Request $request, $id) {
        $gallery = Register::find($id);

        $dateshow=$gallery->created_at->format('d-m-y');

        if(!$gallery) {
            return response()->json(['error' => 'Gallery not found.'], 404);
        }

        $data = [
            'gallery' => $gallery,
            'formatted_date' => $dateshow,
        ];

        return response()->json($data);
    }
}

