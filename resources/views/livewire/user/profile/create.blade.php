<div>
    <b><h3>.: Create User Profile</h3></b>
    <hr>
    <div class="row bg-info">
        <div class="col-sm-12 offset-sm-0">
            <b>Name</b>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-5 offset-sm-0 text-right">
            <b>*Title</b>
        </div>
        <div class="col-sm-5 offset-sm-0">
            {{-- With prepend slot, label and data-placeholder config --}}
            <x-adminlte-select2 name="title" 
                igroup-size="sm" data-placeholder="Select an option...">
                <option/>
                @foreach($titles as $title)
                    <option value="{{$title->id}}">{{$title->code}}</option>
                @endforeach
            </x-adminlte-select2>

            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 offset-sm-0 text-right">
            <b>*First name (please spell out, i.e., Jane instead of J.)</b>
        </div>
        <div class="col-sm-7 offset-sm-0 text-left">
            <div class="form-group">
                <x-adminlte-input wire:model="firstName" name="iLabel" placeholder="please enter your first name"
                disable-feedback/>
            @error('firstName') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 offset-sm-0 text-right">
            <b>*Last name (mixed case, i.e., Smith instead of SMITH)</b>
        </div>
        <div class="col-sm-7 offset-sm-0 text-left">
            <div class="form-group">
                <x-adminlte-input wire:model="lastName" name="iLabel" placeholder="please enter your last name"
                    disable-feedback/>
                @error('lastName') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="row bg-info">
        <div class="col-sm-12 offset-sm-0">
            <b>Affiliation</b>
        </div>
    </div>
    <br>   
    <div class="row">
        <div class="col-sm-5 offset-sm-0 text-right">
            <b>*Status</b>
        </div>
        <div class="col-sm-5 offset-sm-0">
            {{-- With prepend slot, label and data-placeholder config --}}
            <x-adminlte-select2 name="status" 
                igroup-size="sm" data-placeholder="Select an option...">
                <option/>
                @foreach($statusprofiles as $status)
                    <option value="{{$status->id}}">{{$status->description}}</option>
                @endforeach
            </x-adminlte-select2>

            @error('status') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5 offset-sm-0 text-right">
            <b>*Current affiliation (e.g., University of Testing) or none - do NOT include school, department, street address or country</b>
        </div>
        <div class="col-sm-7 offset-sm-0 text-left">
            <div class="form-group">
                <x-adminlte-input wire:model="affiliation" name="iLabel" placeholder="please enter your last name"
                    disable-feedback/>
                @error('affiliation') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="row bg-info">
        <div class="col-sm-12 offset-sm-0">
            <b>Contact Information</b>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-5 offset-sm-0 text-right">
            <b>*email</b>
        </div>
        <div class="col-sm-5 offset-sm-0 text-left">
            <div class="form-group">
                <x-adminlte-input wire:model="email" name="iExtraAddress" >
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-purple">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </x-slot>
                    
                </x-adminlte-input>
                @error('lastName') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    
    <hr>
    <div class="row">
        <div class="col-sm-12 text-right">
            <x-adminlte-button wire:click="createProfile" label="Submit profile" theme="success" icon="fas fa-user-circle"/>
        </div>
    </div>
</div>
