<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professions;
use App\Models\Signatories;
use App\Models\Roles;
use App\Models\User;
use App\Models\PersonRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;

class AdminController extends Controller
{
    public function dashboard(){

        $professions = Professions::all();

        return view('admin.dashboard', [
            'professions' => $professions,
        ]);
    }

    public function signatories(){

        $signatories = Signatories::all();
        $roles = Roles::all();
        $personRoles = PersonRole::all();

        return view('admin.signatories', [
            'signatories' => $signatories,
            'roles' => $roles,
            'personRoles' => $personRoles,
        ]);
    }

    public function users(){

        $users = User::all();

        return view('admin.users', [
            'users' => $users,
        ]);
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'profession' => 'required|string|max:255',
        ]);

        // Create a new Certificate instance
        $certificate = new Professions();

        // Assign values from the validated data
        $certificate->profession = $validatedData['profession'];

        // Save the Certificate
        $certificate->save();

        // Redirect the user after successfully saving the certificate
        return redirect()->route('admin.dashboard')->with('success', 'Profession added successfully.');
    }
    public function updateProfession(Request $request, $id)
    {
        $professions = Professions::findOrFail($id);

        // dd($request->all());
        $validatedData = $request->validate([
            'profession' => 'required|string|max:255',
        ]);
        // Update the professions with the validated data
        $professions->update($validatedData);

        return redirect()->route('admin.dashboard')->with('success', 'Certificate updated successfully');
    }
    public function deleteProfession($id)
    {
        // Find the certification by ID
        $professions = Professions::findOrFail($id);

        // Delete the certification
        $professions->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }



    // public function storesignatory(Request $request)
    // {
    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'position' => 'required|string|max:255',
    //     ]);

    //     // Create a new Certificate instance
    //     $signatories = new Signatories();

    //     // Assign values from the validated data
    //     $signatories->name = $validatedData['name'];
    //     $signatories->position = $validatedData['position'];

    //     // Save the Certificate
    //     $signatories->save();

    //     // Redirect the user after successfully saving the certificate
    //     return redirect()->route('admin.signatories')->with('success', 'Profession added successfully.');
    // }

    // public function storesignatory(Request $request)
    // {
    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'position' => 'required|string|max:255',
    //     ]);

    //     // Create a new Signatories instance
    //     $signatory = new Signatories();

    //     // Assign values from the validated data
    //     $signatory->name = $validatedData['name'];
    //     $signatory->position = $validatedData['position'];

    //     // Save the signatory
    //     $signatory->save();

    //     // Attach roles to the signatory
    //     $signatory->roles()->attach($validatedData['roles']);

    //     // Redirect the user after successfully saving the signatory
    //     return redirect()->route('admin.signatories')->with('success', 'Signatory added successfully.');
    // }

    public function storesignatory(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'roles' => 'required|array', // Make sure roles are provided as an array
        'roles.*' => 'exists:roles,id', // Validate each role ID exists in the roles table
    ]);

    // Create a new Signatories instance
    $signatory = new Signatories();

    // Assign values from the validated data
    $signatory->name = $validatedData['name'];
    $signatory->position = $validatedData['position'];

    // Save the signatory
    $signatory->save();

    // Retrieve the newly created signatory's ID
    $signatoryId = $signatory->id;

    // Iterate through the roles and insert into person_roles table
    foreach ($validatedData['roles'] as $roleId) {
        // Create a new PersonRole instance
        $personRole = new PersonRole();

        // Assign values for the person_roles table
        $personRole->person_id = $signatoryId;
        $personRole->role_id = $roleId;

        // Save the person_role
        $personRole->save();
    }

    // Redirect the user after successfully saving the signatory
    return redirect()->route('admin.signatories')->with('success', 'Signatory added successfully.');
}




    // public function storesignatory(Request $request)
    // {
    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'position' => 'required|string|max:255',
    //         'roles' => 'required|array', // Make sure roles are provided as an array
    //         'roles.*' => 'exists:roles,id', // Validate each role ID exists in the roles table
    //     ]);

    //     // Create a new Signatories instance
    //     $signatory = new Signatories();

    //     // Assign values from the validated data
    //     $signatory->name = $validatedData['name'];
    //     $signatory->position = $validatedData['position'];

    //     // Save the signatory
    //     $signatory->save();

    //     // Attach roles to the signatory
    //     $signatory->roles()->attach($validatedData['roles']);

    //     // Redirect the user after successfully saving the signatory
    //     return redirect()->route('admin.signatories')->with('success', 'Signatory added successfully.');
    // }
    public function updatesignatories(Request $request, $id)
    {
        $signatories = Signatories::findOrFail($id);

        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);
        // Update the professions with the validated data
        $signatories->update($validatedData);

        return redirect()->route('admin.signatories')->with('success', 'Certificate updated successfully');
    }
    public function deletesignatories($id)
    {
        // Find the certification by ID
        $signatories = Signatories::findOrFail($id);

        // Delete the certification
        $signatories->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }




    public function storeusers(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required'],
            'role' => ['required', 'numeric'], // Add validation for role
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Assign role
        ]);

        return redirect()->route('admin.users')->with('success', 'User added successfully.');
    }
    public function updateusers(Request $request, $id)
    {
        $users = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'email' => 'string', 'max:255', 'unique:users',
            'role' => 'numeric'
        ]);

        // Update the user with the validated data
        $users->update($validatedData);

        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    public function deleteusers($id)
    {
        // Find the certification by ID
        $users = User::findOrFail($id);

        // Delete the certification
        $users->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }
}
