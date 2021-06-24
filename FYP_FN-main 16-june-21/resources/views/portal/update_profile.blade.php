<div class="products-section container-fluid" style="margin-top: 22px">
    <div class="my-profile" style="padding-top: 5px">
        <div class="products-header">
            <h1 class="stylish-heading">My Profile</h1>
        </div>

        <div>
            <form action="{{ route('user.update')}}" method="POST">
                @method('patch')
                @csrf
                <div class="">
                    <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="Name" required>
                </div>
                <br>
                <div class="">
                    <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Email" required>
                </div>
                <br>
                <div class="">
                    <input id="password" type="password" name="password" placeholder="Password">
                    <div>Leave password blank to keep current password</div>
                </div>
                <br>
                <div class="">
                    <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password">
                </div>
                <br>
                <div>
                    <button type="submit" class="my-profile-button">Update Profile</button>
                </div>
            </form>
        </div>

        <div class="spacer"></div>
    </div>
</div>
