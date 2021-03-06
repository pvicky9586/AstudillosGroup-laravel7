<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAula extends Model
{
    protected $table = 'user_aulas';
    protected $fillable = ['part_id', 'curso_id', 'email', 'usuario', 'password'];  



    public function part()
	{
		return $this->belongsTo(Participant::class);
	}

	public function curso()
    {
       	 return $this->belongsTo(Curso::class);
    }

    public function visitas()
    {
          return $this->hasMany(UserVisitAula::class);
    }













}
