<?php

namespace App\Models\Client;

use App\Models\Admin\Country;
use App\Models\Admin\Industry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
    public function industry()
    {
        return $this->belongsTo(Industry::class, 'sector_id', 'id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
    public function phases()
    {
        return $this->hasMany(ProjectPhase::class);
    }

    public function cases()
    {
        return $this->hasMany(SupportCase::class);
    }

    public function supports()
    {
        return $this->hasMany(ClientSupport::class);
    }
}
