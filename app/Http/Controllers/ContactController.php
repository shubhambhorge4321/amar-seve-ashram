<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    

    public function contact_view()
    {
        return view("admin.contactus");
    }
    public function front_store(Request $request)
    {
    
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'message' => 'required|string',
    ]);

    // Create a new Contact record using the request data
    Contact::create([
        'cont_name' => $request->input('name'),
        'cont_email' => $request->input('email'),
        'cont_phone' => $request->input('phone'),    
        'cont_message' => $request->input('message'),
    ]);
    
    \Session::flash('success', 'Your form has been submitted successfully!');
    
    // return redirect()->route("message.front.show");
    return response()->json('Your contact form has  been submited succesfully !!');   
    
    }


    public function admin_fetchall() {
        $gallery = Contact::all();
        $counter = 1;

        $output = '';
        $urlo=url('/');
        if ($gallery->count() > 0) {
            $output .= '<table class="table productlist-tbl display dataTable cell-border" id="basicdata-tbl" style="width:100%">
            <thead>
                <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>mobile</th>
                <th>web</th>
                <th>contact date</th>

                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($gallery as $rs) {
                $output .= '<tr>
                <td>'.$counter.'</td>
                
              
                <td>' . $rs->cont_name . '</td>
                <td>' . $rs->cont_email . '</td>
                <td>' . $rs->cont_phone . '</td>
                <td>' . $rs->cont_web . '</td>
                
                <td>'.$rs->created_at->format("d-m-y").'</td>
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

    public function admin_delete(Request $request)
    {
        $id = $request->id;
        Contact::destroy($id);
    }
    

    public function contact_show(Request $request, $id) {
        $gallery = Contact::find($id);
        $dateshow=$gallery->created_at->format('d-m-y');

        if(!$gallery) {
            return response()->json(['error' => 'Gallery not found.'], 404);
        }
         
        $data = [
            'gallery' => $gallery,
            'formatted_date' => $dateshow,
        ];
    
        // Return the associative array as JSON
        // return response()->json($data);

        return response()->json($data);
    }
}
