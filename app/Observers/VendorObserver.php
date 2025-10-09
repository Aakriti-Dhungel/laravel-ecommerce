<?php

namespace App\Observers;

use App\Mail\EmailNotification;
use App\Models\Vendor;
use Illuminate\Support\Facades\Mail;

class VendorObserver
{
    /**
     * Handle the Vendor "created" event.
     */
    public function created(Vendor $vendor): void
    {
        //
    }

    /**
     * Handle the Vendor "updated" event.
     */
    public function updated(Vendor $vendor): void
    {
        // if ($vendor->status == 'approved') {
        if ($vendor->isDirty('status') && $vendor->status == 'approved') { // only when status is approved
            $data = [
                "subject" => "New Vendor Approval",
                "to" => $vendor->name,
                "message" => "Your Vendor request has been approved. 
                \n You can login to your account. Your login credentials are: email: $vendor->email and password: diginepal123.Please change your password after login.
                 \n Login url:". asset('/vendor/login'),
            ];
            Mail::to($vendor->email)->send(new EmailNotification($data));
        }
    }

    /**
     * Handle the Vendor "deleted" event.
     */
    public function deleted(Vendor $vendor): void
    {
        //
    }

    /**
     * Handle the Vendor "restored" event.
     */
    public function restored(Vendor $vendor): void
    {
        //
    }

    /**
     * Handle the Vendor "force deleted" event.
     */
    public function forceDeleted(Vendor $vendor): void
    {
        //
    }
}
