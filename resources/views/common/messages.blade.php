<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 1/19/16
 * Time: 6:47 AM
 */
?>

@if (session('status'))
    <div class="alert alert-success text-center">
        {{ session('status') }}
    </div>
@endif
