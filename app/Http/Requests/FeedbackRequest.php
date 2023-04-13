<?php

	namespace App\Http\Requests;

	class FeedbackRequest extends BaseRequest
	{
		/**
		 * Get the validation rules that apply to the request.
		 *
		 * @return array<string, mixed>
		 */
		public function rules()
		{
			return [
				'fullName' => 'string|required',
				'phone' => 'string|required',
				'city' => 'string|required',
				'text' => 'string|required',
			];
		}
	}
