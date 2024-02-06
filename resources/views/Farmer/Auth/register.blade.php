<x-layout>
    <div class="auth">
        <div class="container" style="height: 550px;">
            <div class="heading">
                <h2>Register</h2>
            </div>
            <div class="formcont">
                <form method="POST" action="/users/register" enctype="multipart/form-data">
                    @csrf
                    <div class="part">
                        <label for="firstname">First Name:</label>
                        <input type="text" id="firstname" name="firstname" required placeholder="Enter your first name">
                    </div>
                    <div class="part">
                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" required placeholder="Enter your last name">
                    </div>
                    <div class="part">
                        <label for="gender">Gender:</label>
                        <select name="gender" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="part">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                    <div class="part">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email">
                        @error('email')
                            <p style="font-size: 12px; color: red; margin-top: 8px; align-self:center;">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="part">
                        <label for="number">Phone Number:</label>
                        <input type="number" id="number" name="number" required placeholder="Enter your phone number">
                    </div>
                    <div class="part">
                        <label for="county">County of Residence:</label>
                        <input type="text" id="county" name="county" required placeholder="Enter your county">
                    </div>
                    <div class="part">
                        <label for="subcounty">Sub-County of Residence:</label>
                        <input type="text" id="subcounty" name="subcounty" required placeholder="Enter your sub-county">
                    </div>
                    <div class="part">
                        <label for="role">Role:</label>
                        <select name="role" id="role">
                            <option value="farmer">Farmer</option>
                            <option value="provider">Provider</option>
                        </select>
                    </div>
                    <div class="part">
                        <label for="profile">Profile Picture:</label>
                        <input type="file" id="profile" name="profile" required>
                    </div>
                    <div class="part">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required placeholder="Enter your password">
                        @error('password')
                            <p style="font-size: 12px; color: red; margin-top: 8px; align-self:center;">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="part">
                        <button type="submit" id="create-campaign-button">Register</button>
                    </div>
                    <div class="notlogin">
                        <span>Already have an account <a href="/login" alt=#>Login</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
