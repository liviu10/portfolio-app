<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Log;

class ResumeSkill extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'resume_skills';

    /**
     * The primary key associated with the table.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The foreign key associated with the table.
     * 
     * @var string
     */
    protected $foreignKey = 'resume_id';
    
    /**
     * The data type of the database table foreign key.
     *
     * @var string
     */
    protected $foreignKeyType = 'int';

    /**
     * The attributes that are mass assignable.
     * 
     * @var string
     */
    protected $fillable = [
        'resume_id',
        'name',
        'is_active'
    ];

    /**
     * The attributes that are mass assignable.
     * 
     * @var string
     */
    protected $attributes = [
        'is_active' => false,
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function scopeIsActive ($query) 
    {
        return $query->where('is_active', true);
    }

    public function scopeIsNotActive ($query) 
    {
        return $query->where('is_active', false);
    }

    /**
     * Eloquent relationship between resume_skills and resume_skill_contents.
     */
    public function resume_skill_contents()
    {
        return $this->hasMany('App\Models\ResumeSkillContent');
    }

    /**
     * Eloquent relationship between resumes and resume_skills.
     */
    public function resume()
    {
        return $this->belongsTo('App\Models\ResumeSkill');
    }

    /**
     * Eloquent polymorphic relationship between resume_skills and logs.
     *
     */
    public function log()
    {
        return $this->morphOne(Log::class, 'logable');
    }
}