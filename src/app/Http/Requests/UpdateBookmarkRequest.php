<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateBookmarkRequest
 * @package App\Http\Requests
 *
 * TIPS このようにコメントを書くと、利用しているControllerのほうで型の補完が効きます
 * @property-read string comment
 * @property-read int category
 */
class UpdateBookmarkRequest extends FormRequest
{
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
            'comment' => 'required|string|min:10|max:1000',
            'category' => 'required|integer|exists:bookmark_categories,id',
        ];
    }
}