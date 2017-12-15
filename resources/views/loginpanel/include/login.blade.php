<form class="form-horizontal"  action="{{ route('login') }}" method="POST"  autocomplete="on">
    {{csrf_field()}}


    <h1>Log in</h1>
    <p>
        <label for="username" class="uname" data-icon="u" > Your email or username </label>
        <input style="height: 20px;" id="username" class="form-control" placeholder="E-mail" name="email" type="email" autofocus required="required" id="username">
    </p>
    <p>
        <label for="password" class="youpasswd" data-icon="p"> Your password </label>


        <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
    </p>
    <p class="keeplogin">
        <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
        <label for="loginkeeping">Keep me logged in</label>
    </p>
    <p class="login button">
        <input type="submit" value="Login" />
    </p>
    <p class="change_link">
        Not a member yet ?
        <a href="#toregister" class="to_register">Registration</a>
    </p>
</form>