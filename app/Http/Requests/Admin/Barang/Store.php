<?php

namespace App\Http\Requests\Admin\Barang;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_barang'=>'required|string',
            'stok'=>'required',
            'harga'=>'required',
            'kategori_id'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required|mimes:jpg,bmp,png|size:max:2048'
        ];
    }
}
