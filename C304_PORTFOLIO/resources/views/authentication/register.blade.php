@include("components.header")

<form action="{{ route ('register') }}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name='name' placeholder='Full name'>
    <input type='email' name='email' placeholder='Email'>
    <input type='password' name='password' placeholder='Password'>
    <label> Retype password</label>
    <input type='password' name='password_confirmation' placeholder='Retype_Password'>
    <input type='submit'>
    
</form>
    


@include('components.footer')