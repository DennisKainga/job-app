<div>
    <form method="POST" action="">
        {% csrf_token %}

        <!-- User Name -->
        <div class="relative mb-6">
            <input type="text" id="firstname" name="username" 
                class="peer bg-transparent h-12 w-full rounded-lg text-green-700 placeholder-transparent ring-2 px-2 pt-4 ring-green-500 focus:ring-green-800 focus:outline-none"
                placeholder="Username"/>
            <label for="firstname" class="absolute left-2 -top-2.5 text-sm text-green-600 bg-teal-100 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-green-700 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-green-800 peer-focus:text-sm transition-all">Username</label>
        </div>

        <!-- Password -->
        <div class="relative mb-6">
            <input type="password" id="password" name="password" 
                class="peer bg-transparent h-12 w-full rounded-lg text-green-700 placeholder-transparent ring-2 px-2 pt-4 ring-green-500 focus:ring-green-800 focus:outline-none"
                placeholder="Password"/>
            <label for="password" class="absolute left-2 -top-2.5 text-sm text-green-600 bg-teal-100 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-green-700 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-green-800 peer-focus:text-sm transition-all">Password</label>
        </div>

        <!-- Remember Me for 30 Days -->
        <div class="flex items-center mb-6">
            <input type="checkbox" id="remember_me" name="remember_me" class="mr-2">
            <label for="remember_me" class="text-green-700">Remember me for 30 days</label>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="submit" class="w-full h-12 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-all">Login</button>
        </div>

        <!-- Login & Cancel Links -->
        <div class="flex justify-between mt-4">
            <a href="{% url 'register' %}" class="text-green-600 hover:underline">I Don't have an account? Register</a>
            <a href="#" class="text-red-600 hover:underline">Cancel</a>
        </div>

        <!-- OR Divider -->
        <div class="flex items-center my-4">
            <hr class="w-full border-gray-300">
            <span class="mx-4 text-gray-500">OR</span>
            <hr class="w-full border-gray-300">
        </div>
    </form>
</div>
