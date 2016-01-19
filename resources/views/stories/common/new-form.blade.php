<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 1/17/16
 * Time: 2:04 PM
 */

$story_placeholder = "Today's #meeting was great or #remind me to get milk, #plan a trip";
?>

{!! Form::open([
                'action' => 'StoryController@store',
                'method' => 'post'
                ]) !!}
<div class="form-group">
    <p>
        <label for="description">
                  <span class="lead">
                      Lets start with a description, what is it about
                  </span>
        </label>
        <small>
            (#meeting @9:00am, #Reminder, new project, an event, #plan #vacation trip to @Tobago...)
        </small>
    </p>

    {{ Form::textarea('description', null, [
    'class' => 'form-control',
     'placeholder' => "$story_placeholder",
     'rows' => 5
     ]) }}
</div>

<p class="text-right">
    {!! Form::submit('Save and Continue', ['class' => 'btn btn-primary']) !!}
</p>
{!! Form::close() !!}
