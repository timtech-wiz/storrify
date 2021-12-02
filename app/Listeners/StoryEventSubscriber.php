<?php

namespace App\Listeners;
use Illuminate\Support\Facades\Log;
    
class StoryEventSubscriber{
    
    
    
public function handleStoryCreated($event){
     Log::info('from subsciber A new story with the title '. $event->title .' was added' );
}
    
    public function handleStoryEdited($event){
     Log::info('edited from subscriber A new story with the title '. $event->title .' was edited' );
}
    
    
    
    public function subscribe($events){
        $events->listen(
        'App\Events\StoryCreated',
        'App\Listeners\StoryEventSubscriber@handleStoryCreated'
        );
        
        
        $events->listen(
        'App\Events\StoryEdited',
        'App\Listeners\StoryEventSubscriber@handleStoryEdited'
        );
    }
    
}