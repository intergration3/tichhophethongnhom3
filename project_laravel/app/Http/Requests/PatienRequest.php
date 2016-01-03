<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PatienRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtten' => 'required',
			'txtdiachi' => 'required',
			'txtphong' => 'required',
			
		];
	}

	public function messages (){
		return [
			'txtten.required' => 'Bạn chưa nhập tên',
			'txtdiachi.required' => 'Bạn chưa nhập địa chỉ',
			'txtphong.required' => 'Bạn chưa nhập số phòng',
		];
	}

}
