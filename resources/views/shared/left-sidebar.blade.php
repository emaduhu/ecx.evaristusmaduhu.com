<div class="card overflow-hidden">
    <!--    <div class="card-header">{{ __('Elements') }}</div>-->
    <div class="card-body py-10">
        <ul class="nav nav-link flex-column fw-bold gap-3">
            <li class="nav-item">
                <a class="{{ (request()->is('home')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('home')}}"><span>Home</span></a>
            </li>
            <li class="nav-item">
                <a class="{{ (request()->is('dashboard*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('admin.dashboard')}}"><span>Dashboard</span></a>


            <li class="nav-item">
                <a class="{{ (request()->is('membership*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('participants.index')}}"><span>Membership</span></a>
            </li>

            <li class="nav-item">
                <a class="{{ (request()->is('registration-information-on-entity*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('participants.index')}}"><span>Registration Information on Entity</span></a>
            </li>

            <li class="nav-item">
                <a class="{{ (request()->is('membership-type-related-details*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('participants.index')}}"><span>Membership Type Related Details</span></a>
            </li>

            <li class="nav-item">
                <a class="{{ (request()->is('verification-and-clearance-of-registration*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('participants.index')}}"><span>Verification and Clearance of Registration</span></a>
            </li>

            <li class="nav-item">
                <a class="{{ (request()->is('ecs-membership-id-and-certificate-issued*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('participants.index')}}"><span>ECX Membership ID and Certificate Issued</span></a>
            </li>

            <li class="nav-item">
                <a class="{{ (request()->is('registration-information-on-entity*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('participants.index')}}"><span>Participants</span></a>
            </li>

            <li class="nav-item">
                <a class="{{ (request()->is('roles*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('roles.index')}}"><span>Roles</span></a>
            </li>

            <li class="nav-item">
                <a class="{{ (request()->is('permissions*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('participants.index')}}"><span>Permissions</span></a>
            </li>

            <li class="nav-item">
                <a class="{{ (request()->is('participants*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('participants.index')}}"><span>Participants</span></a>
            </li>

            <li class="nav-item">
                <a class="{{ (request()->is('users*')) ? 'text-white bg-primary rounded' : ''}} nav-link"
                   href="{{route('users.index')}}"><span>Users</span></a>
            </li>
        </ul>
    </div>

    <div class="card-footer py-2">
        <ul class="nav nav-link flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="{{ (request()->is('profile')) ? 'text-white bg-primary rounded' : '' }} nav-link"
                   href="{{route('profile.index')}}"><span>My Profile</span></a>
            </li>
        </ul>
    </div>
</div>
