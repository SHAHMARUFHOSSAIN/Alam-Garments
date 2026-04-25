<div>
    <form wire:submit.prevent="updatePassword">

    <input type="password" wire:model="old_password" placeholder="Old Password">

    <input type="password" wire:model="new_password" placeholder="New Password">

    <button type="submit">Change Password</button>

</form>

</div>
