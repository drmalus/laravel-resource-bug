<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            `id` => $this->id,
            `name` => $this->name,
            `email` => $this->email,
            `phone` => $this->phone,
            `shipping_address` => $this->shipping_address,
            `billing_name` => $this->billing_name,
            `billing_address` => $this->billing_address,
            `billing_tax_number` => $this->billing_tax_number,
            `consent_accepted` => (int)$this->consent_accepted === 1,
            `coupons` => $this->coupons ?? [],
            `used_coupons` => $this->used_coupons ?? [],
            `current_coupon_points` => $this->current_coupon_points,
            `is_member` => (int)$this->is_member === 1,
            `created_at` => $this->created_at,
            `updated_at` => $this->updated_at,
        ];
    }
}
