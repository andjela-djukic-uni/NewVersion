<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('update');
    }

    public function update(Request $request)
    {
        $updateType = $request->input('update_type');

        if ($updateType === 'projects') {
            return $this->handleProjectUpdate($request);
        } elseif ($updateType === 'testimonials') {
            return $this->handleTestimonialUpdate($request);
        } elseif ($updateType === 'gallery') {
            // Handle gallery update logic
        }

        return redirect()->route('admin.update')->with('error', 'Invalid update type.');
    }

    private function handleProjectUpdate(Request $request)
    {
        $projectAction = $request->input('project_action');

        if ($projectAction === 'upload') {
            // Handle project upload logic
            $newProjectTitle = $request->input('project_title');

            // Save the uploaded picture
            $newProjectPicture = $request->file('project_picture');

            $picturePath = $newProjectPicture->store('public/img');
            $pictureUrl = Storage::url($picturePath);


            Projects::create([
                'title' => $newProjectTitle,
                'pictureUrl' => $pictureUrl,
            ]);

            return redirect()->route('admin.update')->with('success', 'Project added successfully!');
        } elseif ($projectAction === 'delete') {
            // Handle project deletion logic
            // You can delete a project by title
            $projectTitleToDelete = $request->input('project_title');
            $projectToDelete = Projects::where('title', $projectTitleToDelete)->first();

            if ($projectToDelete) {
                $projectToDelete->delete();
                return redirect()->route('admin.update')->with('success', 'Project deleted successfully!');
            } else {
                return redirect()->route('admin.update')->with('error', 'Project with the specified title not found.');
            }
        }

        return redirect()->route('admin.update')->with('error', 'Invalid project update action.');
    }

    private function handleTestimonialUpdate(Request $request)
    {
        $testimonialName = $request->input('testimonial_name');
        $testimonialText = $request->input('testimonial_text');
        $testimonialLocation = $request->input('testimonial_location');

        // You can perform validation here if needed

        // Save the testimonial to the database
        Testimonials::create([
            'name' => $testimonialName,
            'testimonial' => $testimonialText,
            'location' => $testimonialLocation,
        ]);

        return redirect()->route('admin.update')->with('success', 'Testimonial added successfully!');
    }
}

