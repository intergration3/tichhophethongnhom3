<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use Auth;

class UserController extends Controller {

	public function getList(){
		$user=User::select('userid','username','level')->orderBy('userid','DESC')->get()->toArray();
		return view('admin.user.list',compact('user'));
	}
	public function getAdd(){
		return view('admin.user.add');
	}
	public function postAdd(UserRequest $request){
		$user = new User();
		$user->username = $request->txtUser;
		$user->password = base64_encode($request->txtPass);
		$user->email = $request->txtEmail;
		$user->level = $request->rdoLevel;
		$user->remember_token = $request->_token;
		$user->save();
		return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);

	}
	public function getDelete($userid){
		$user_current_login = Auth::user()->userid;
		$user = User::find($userid);
		if (($userid == 2)||($user_current_login !=2 && $user["level"]==1)) {
			return redirect()->route('admin.user.list')->with(['flash_level'=>'danger','flash_message'=>'Bạn không được quyền xóa']);
		}else{
			$user->delete($userid);
			return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Xóa Thành Công']);
		}
	}
	public function getEdit($userid){
		$data = User::find($userid);
		if ((Auth::user()->userid != 2) && ($userid ==2 || ($data["level"] == 1 && (Auth::user()->userid != $userid)))) {
			return redirect()->route('admin.user.list')->with(['flash_level'=>'danger','flash_message'=>'Bạn không được quyền sửa']);
		}
		return view('admin.user.edit',compact('data','userid'));
	}
	public function postEdit($userid,Request $request){
		$user = User::find($userid);
		if ($request->input('txtPass')) {
			$this->validate($request,
			[
				'txtRePass' => 'same:txtPass',
			],
			[
				'txtRePass.same' => 'Mật khẩu không khớp',
			]);
			$pass = $request->input('txtPass');
			$user->password = Hash::make($pass);
		}
		$user->email = $request->txtEmail;
		$user->level = $request->rdoLevel;
		$user->remember_token = $request->input('_token');
		$user->save();
		return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Sửa Thành Công']);
	}

}
