<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
    
    public function forums()
    {
        return $this->hasMany(Forum::class,'cat_id','id');
    }
    
    public function filteredForums($g_id)
    {
        $query = $this->forums();
        $groupID = intval($g_id);
        if(!in_array($groupID,[1,4,13])) {
            $query->whereNotIn('id',[32,21,15]);
        }
        if($groupID == 13) {
            $query->whereNotIn('id',[21,15]);
        }
        
        return $query->orderBy('forums.disp_position','ASC');
    }

}