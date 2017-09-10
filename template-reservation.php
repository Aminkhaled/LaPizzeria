<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 9/9/2017
 * Time: 8:21 PM
 */
?>
<form method="post" class="form-reservation">
    <div class="field">
        <input type="text" name="name" placeholder="Name" required>
    </div>
    <div class="field">
        <input type="datetime-local" name="date" placeholder="Date" required>
    </div>
    <div class="field">
        <input type="email" name="email" placeholder="E-mail" required>
    </div>
    <div class="field">
        <input type="tel" name="phone" placeholder="Phone Number" required>
    </div>
    <div class="field">
        <textarea name="message" placeholder="Message" id="message" cols="30" rows="10" required></textarea>
    </div>
    <input type="submit" name="submit" class="btn btn-danger">
    <input type="hidden" name="hidden" value="1">
</form>

