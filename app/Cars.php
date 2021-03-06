<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = "cars";

    public $primaryKey = "id";

   public $fillable = [
   'title',
   'first_name',
   'middle_name',
   'sur_name',
   'birthdate',
   'house_number',
   'first_line_address',
   'postcode',
   'marital_status',
   'address_line1',
   'address_line2',
   'address_city',
   'address_postcode',
   'employment_status',
   'occupation',
   'business',
   'non_motoring_convictions',
   'business_owner',
   'business_type',
   'license_type',
   'home_owner',
   'children',
   'vehicles_how_many',
   'email',
   'phone',
   'mobile',
   'contact_via',
   'license_via',
   'date_obtained',
   'license_period_held',
   'date_provitional_license',
   'license_enter',
   'license_number',
   'dvla_medical_condition',
   'additional_qualifications',
   'qualifications_obtained',
   'born_uk',
   'became_resident',
   'date_qualifications_obtained',
   'use_other_vehicle',
   'monitoring_criminal_convictions',
   'motor_accidents',
   'motor_offences',
   'vehicle_registration',
   'vehicle_model',
   'vehicle_registration_year',
   'vehicle_alarms',
   'vehicle_number_seats',
   'vehicle_number_doors',
   'vehicle_engine_size',
   'vehicle_transmission',
   'vehicle_imported',
   'vehicle_aprox_value',
   'vehicle_modifications',
   'vehicle_dash_cam',
   'vehicle_manufacturer',
   'vehicle_modifications_made',
   'vehicle_date_purchase',
   'vehicle_registered_keeper',
   'vehicle_legal_owner',
   'vehicle_impounded',
   'usage_kept_day',
   'usage_kept_night',
   'usage_kept_same_address',
   'usage_kept_other_address',
   'drivers_insurance_imposed',
   'usage',
   'usage_annual_milage',
   'type_coverage',
   'no_claims',
   'no_claims_earned_uk',
   'no_claims_protect',
   'voluntary_excess',
   'pay_insurance',
   'policy_start',
   'additional_driver1',
   'additional_driver2',
   'heard_from_us',
   'referrer',
   'comments'];

   public function additional()
   {
      return $this->hasMany('App\Cars_additional_driver','id_cars_additional');
   }

   public function accidents()
   {
   	return $this->hasMany('App\Cars_motors_accidents','id_cars');
   }

   public function offences()
   {
      return $this->hasMany('App\Cars_motors_offences','id_cars_offences');
   }
}
