<?php

namespace GetCandy\Api\Core\Customers\Actions;

use GetCandy\Api\Core\Customers\Models\CustomerInvite;
use GetCandy\Api\Core\Scaffold\AbstractAction;

class FetchCustomerInvite extends AbstractAction
{
    /**
     * The fetched customer invite model.
     *
     * @var CustomerInvite
     */
    protected $customerInvite;

    /**
     * Determine if the user is authorized to make this action.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the action.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'encoded_id' => 'required|string|hashid_is_valid:'.CustomerInvite::class,
        ];
    }

    /**
     * Execute the action and return a result.
     *
     * @return \GetCandy\Api\Core\Customers\Models\CustomerInvite
     */
    public function handle(): CustomerInvite
    {
        return CustomerInvite::find((new CustomerInvite)->decodeId($this->encoded_id));
    }

}
