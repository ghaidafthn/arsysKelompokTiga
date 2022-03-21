<div>
    <div class="row">
        <div class="col-sm-12 offset-sm-0">
            @if($profileMenu == 'create')
                @livewire('user.profile.create')
            @elseif($profileMenu == 'view')
                @livewire('user.profile.data')
            @elseif($profileMenu == 'edit')
                @livewire('user.profile.edit')
            @endif
        </div>
    </div>
</div>
