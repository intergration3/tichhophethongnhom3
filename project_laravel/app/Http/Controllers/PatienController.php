<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PatienRequest;
//use Illuminate\Http\Request;
use Input,File;
use Request;
use Auth;
use App\Patien;

class PatienController extends Controller {
	public function getList(){
		$user=Patien::select('id','ten','diachi','sdt','ngaysinh','tenbenh','phong')->orderBy('id','DESC')->get()->toArray();
		return view('patien.list',compact('user'));
	}
	public function getAdd () {
		return view('user.master');
	}

	public function postAdd(PatienRequest $request){
		$user = new Patien();
		$user->ten = $request->txtten;
		$user->diachi = $request->txtdiachi;
		$user->sdt = $request->txtsdt;
		$user->ngaysinh = $request->txtngaysinh;
		$user->tenbenh = $request->txtloaibenh;
		$user->phong = $request->txtphong;
		$user->save();
		return redirect()->route('patien.list')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);

	}
}
