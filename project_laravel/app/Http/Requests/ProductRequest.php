<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

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
			'sltParent' => 'required',
			'txtName' => 'required|unique:products,name',
			'fImages' => 'required|image'
		];
	}
	public function messages(){
		return [
			'sltParent.required' => 'Hãy chọn Category',
			'txtName.required' => 'Hãy nhập tên sản phẩm',
			'txtName.unique' => 'Sản phẩm này đã tồn tại',
			'fImages.required' => 'Hãy chọn ảnh cho sản phẩm',
			'fImages.image' => 'Chỉ được phép chọn file hình ảnh',
		];
	}

}
