<x-layout>
    <div class="auth">
        <div class="container" style="height: 550px;">
            <div class="heading">
                <h2>Register</h2>
            </div>
            <div class="formcont">
                <form method="POST" action="/users/authenticate" enctype="multipart/form-data">
                    @csrf
                 
                    <div class="part">
                        
                        <input type="email" id="email" name="email" required placeholder="Email" value="{{old('email')}}">
                        @error('email')
                        <p style="font-size: 12px; color: red; margin-top: 8px; align-self:center;">{{$message}}</p>
                        @enderror
                    </div>
                   
                        
                        <input type="password" id="password" name="password" required placeholder="Password">
                        @error('password')
                        <p style="font-size: 12px; color: red; margin-top: 8px; align-self:center;">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="part">
                        <button type="submit" id="create-campaign-button">Login</button>
                    </div>
                    <div class="notlogin">
                        <span>Don't have an account <a href="/register" alt=#>Register</a></span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layout>