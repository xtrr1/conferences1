<nav class="bg-gray-800 p-4">
    <ul class="flex space-x-6 justify-center text-white">
        <li>
            <a href="{{ route('home') }}" class="hover:text-gray-400">{{ __('messages.home') }}</a>
        </li>
        <li>
            <a href="{{ route('conferences.index') }}" class="hover:text-gray-400">{{ __('messages.conferences') }}</a>
        </li>
        @auth
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-gray-400">{{ __('messages.logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </li>
        @else
            <li>
                <a href="{{ route('login') }}" class="hover:text-gray-400">{{ __('messages.login') }}</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="hover:text-gray-400">{{ __('messages.register') }}</a>
            </li>
        @endauth
    </ul>
</nav>
