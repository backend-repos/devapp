<?php

namespace App\Repositories;

use App\Story;

/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 1/17/16
 * Time: 10:15 AM
 */
class StoryRepository
{


    /**
     * get s list of recent stories
     * @return mixed
     */
    public function recentStories()
    {
        return Story::orderBy('created_at', 'desc')
            ->limit(20)
            ->get();
    }


}
