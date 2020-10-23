<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    public function Booking($owner_id){
        try {
            $Data['Shop_Details']=Owner::findorfail($owner_id);
            return view('customer.Booking.Add_Booking',$Data);
        } catch (\Exception $e) {
            return back()->with('danger', 'Something went wrong!');
        }
    }
}
