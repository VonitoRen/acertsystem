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
use Illuminate\Database\QueryException;
    
use App\Models\AccreditationCertificationModel;
use App\Models\CertificationsOfRegistration;

use App\Models\FinalityCertificationModel;
use App\Models\PicCorCertificationModel;
use App\Models\ComplaintsCertificationModel;
use App\Models\SurrenderedDocuments;
use App\Models\FormerFilipinoCertificationModel;

use App\Models\AppearanceCertification;


class AdminController extends Controller
{
    public function dashboard(){

        $professions = Professions::all();

        return view('admin.dashboard', [
            'professions' => $professions,
        ]);
    }

    public function report(){
        // REG POH
        $accreditationCert = AccreditationCertificationModel::all();
        $certificationOfRegistrations = CertificationsOfRegistration::all();
        $formerfilipinoCert = FormerFilipinoCertificationModel::all();

        // LEGAL
        $complaintsCert = ComplaintsCertificationModel::all();
        $surrenderedCert = SurrenderedDocuments::all();
        $finalityCert = FinalityCertificationModel::all();
        $piccorCert = PicCorCertificationModel::all();

        // FAD
        $appearanceCert = AppearanceCertification::all();


        return view('admin.report', [
            'accreditationCert' => $accreditationCert,
            'certificationOfRegistrations' => $certificationOfRegistrations,
            'complaintsCert' => $complaintsCert,
            'surrenderedCert' => $surrenderedCert,
            'finalityCert' => $finalityCert,
            'piccorCert' => $piccorCert,
            'appearanceCert' => $appearanceCert,
            'formerfilipinoCert' => $formerfilipinoCert,
        ]);
    }

    // public function signatories(){

    //     $signatories = Signatories::all();
    //     $roles = Roles::all();
    //     $personRoles = PersonRole::all();

    //     return view('admin.signatories', [
    //         'signatories' => $signatories,
    //         'roles' => $roles,
    //         'personRoles' => $personRoles,
    //     ]);
    // }

    public function signatories()
    {


        
        // working function





        // Retrieve all signatories
        $signatories = Signatories::all();
        
        // Retrieve all roles
        $roles = Roles::all();

        // Retrieve distinct person_ids
        $distinctPersonIds = PersonRole::distinct()->pluck('person_id');



        // Retrieve personRoles using the distinct person_ids
        $personRoles = PersonRole::with('person', 'role')
            ->whereIn('person_id', $distinctPersonIds)
            ->get();

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

public function updateSignatories(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string',
        'position' => 'required|string',
        'selected_roles' => 'array', // Ensure roles are sent as an array
        'selected_roles.*' => 'exists:roles,id', // Ensure each role ID exists in the roles table
    ]);

    // Find the signatory
    $signatory = Signatories::findOrFail($id);

    // Update the signatory details
    $signatory->update([
        'name' => $request->input('name'),
        'position' => $request->input('position'),
    ]);

    // Sync the roles for the signatory
    $signatory->roles()->sync($request->input('selected_roles'));

    // Optionally, you can return a response indicating success
    return redirect()->back()->with('success', 'Signatory updated successfully');

}


    public function deletesignatories($id)
    {
        try {
            // Find the signatory by ID
            $signatory = Signatories::find($id);

            // Check if the signatory exists
            if (!$signatory) {
                return redirect()->back()->with('error', 'Signatory not found.');
            }

            // Find all person_role records associated with the signatory
            $personRoles = PersonRole::where('person_id', $signatory->id)->get();

            // Delete all associated person_role records
            foreach ($personRoles as $personRole) {
                $personRole->delete();
            }

            // Now, delete the signatory
            $signatory->delete();

            // If deletion is successful, display a success message directly in the view
            return redirect()->back()->with('success', 'Signatory deleted successfully');
        } catch (QueryException $e) {
            // Check if the error message contains the specific error code for a foreign key constraint violation
            if ($e->getCode() === '23000') {
                // If the signatory is used as a foreign key, it cannot be deleted
                $errorMessage = 'Cannot delete this signatory. It is associated with other records.';
            } else {
                // For other types of errors, display a generic error message
                $errorMessage = 'An error occurred while deleting the signatory.';
            }

            // Pass the error message to the Blade view
            return redirect()->back()->with('error', $errorMessage);
        }
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
