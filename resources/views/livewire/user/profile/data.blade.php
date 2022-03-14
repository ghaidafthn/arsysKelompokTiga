<div>
    <b><h3>.: My Profile</h3></b>
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
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 offset-sm-0 text-right">
            <b>*First name (please spell out, i.e., Jane instead of J.)</b>
        </div>
        <div class="col-sm-7 offset-sm-0 text-left">
            {{$profile->first_name}}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 offset-sm-0 text-right">
            <b>*Last name (mixed case, i.e., Smith instead of SMITH)</b>
        </div>
        <div class="col-sm-7 offset-sm-0 text-left">
            {{$profile->last_name}}
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
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5 offset-sm-0 text-right">
            <b>*Current affiliation (e.g., University of Testing) or none - do NOT include school, department, street address or country</b>
        </div>
        <div class="col-sm-7 offset-sm-0 text-left">
            {{$profile->affiliation}}
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
            {{$profile->email}}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 text-right">
            <x-adminlte-button wire:click="editProfile" label="Edit profile" theme="success" icon="fas fa-user-circle"/>
        </div>
    </div>
    
</div>
