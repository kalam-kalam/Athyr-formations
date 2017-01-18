@if(session('notification'))
<div class="notif">
    <button class="close">x</button>
    <h4>{{session('notification')}}</h4>
</div>
@endif