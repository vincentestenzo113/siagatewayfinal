<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponser;
use DB;
use App\Services\User2Service;


Class User2Controller extends Controller {
// use to add your Traits ApiResponser
use ApiResponser;
/**
* The service to consume the User2 Microservice
* @var User2Service
*/
public $user2Service;
/**
* Create a new controller instance
* @return void
*/
public function __construct(User2Service $user2Service){
$this->user2Service = $user2Service;
}
/**
* Return the list of users
* @return Illuminate\Http\Response
*/
public function index()
{
//
return $this->successResponse($this->user2Service->obtainUsers2());
}
public function show($id)
{
return $this->successResponse($this->user2Service->obtainUser2($id));
}
public function update(Request $request,$id)
{
return $this->successResponse($this->user2Service->editUser2($request->all(),
$id));
}
public function delete($id)
{
return $this->successResponse($this->user2Service->deleteUser2($id));
}
}
   /**public function UserGetAll(){
        $users = User::all();
        return response()->json(['data' => $users], 200);
    
    }
    public function userShowID($id)
    {
        //
        $users = User::findOrFail($id);
        return response()->json(['data' => $users], 200);
        
    }
    public function userAdd(Request $request ){
        $rules = [
        'studentFname' => 'required|max:50',
        'studentLname' => 'required|max:50',
        'studentMname' => 'required|max:50',
        'birth' => 'required|date_format:Y/m/d|max:50',
        ];
        $this->validate($request,$rules);
        $users = User::create($request->all());
        return response()->json(['data' => $users], 200);
       
}
    public function userUpdate(Request $request,$id)
    {
    $rules = [
    'studentFname' => 'required|max:50',
    'studentLname' => 'required|max:50',
    'studentMname' => 'required|max:50',
    'birth' => 'required|date_format:Y/m/d|max:50',
    ];
    $this->validate($request, $rules);
    $user = User::findOrFail($id);
    $user->fill($request->all());

    // if no changes happen
    if ($user->isClean()) {
    return $this->errorResponse('At least one value must
    change', Response::HTTP_UNPROCESSABLE_ENTITY);
    }
    $user->save();
    return $user;
}
public function userDelete($id)
{

 $user = User::findOrFail($id);
 $user = User::where('studentID', $id)->first();
 $user->delete();
 return response()->json(['This user is deleted' => $user], 200);
} */
