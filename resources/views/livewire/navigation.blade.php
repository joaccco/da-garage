<div class="navbar bg-black z-50">

    {{-- Menu Responsive --}}
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow-2xl bg-black rounded-md w-52">
          <li><a>Home</a></li>
          <li>
            <a>Responsive</a>
            <ul class="p-2">
              <li><a>Remeras</a></li>
              <li><a>Buzos</a></li>
            </ul>
          </li>
          <li><a>Nosotros</a></li>
        </ul>
      </div>
      <img class="ml-10 h-12" src="/dalogo.svg"> 
    </div>

    {{-- Menu Desktop --}}
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a>Home</a></li>
        <li tabindex="0">
          <details class="z-50">
            <summary>Colection</summary>
            <ul class="p-2 rounded-md bg-black">
              <li><a>Remeras</a></li>
              <li><a>Buzos</a></li>
            </ul>
          </details>
        </li>
        <li><a>Nosotros</a></li>
      </ul>
    </div>

    <div class="navbar-end">
        @auth
        <div id=""
            class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <div class="relative ml-3" x-data="{ open: false }">
                <div>
                    <button x-on:click="open = true" type="button"
                        class="flex rounded-full bg-gray-800 text-sm  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                            alt="">
                    </button>
                </div>
                <div x-show="open" x-on:click.away="open = false"
                    class="absolute right-0 z-50 mt-2 w-48 origin-top-right rounded-md bg-black py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"role="menu"
                    aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">

                    <div x-data>
                        @csrf
                        @auth
                            @can('admin')
                                <a href="" class="block px-4 py-2 text-sm text-white"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Panel de Administrador</a>
                            @endcan
                            <a href="" class="block px-4 py-2 text-sm text-white"
                                role="menuitem" tabindex="-1"id="user-menu-item-2">
                                Notificaciones
                            </a>
                            <a href="" class="block px-4 py-2 text-sm text-white"
                            role="menuitem" tabindex="-1"id="user-menu-item-2">
                              Mi carrito
                            </a>
                        @endauth


                    </div>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-red-500"
                            role="menuitem" tabindex="-1"id="user-menu-item-2"
                            @click.prevent="$root.submit();">
                            Cerrar Sesion
                        </a>
                    </form>
                </div>
            </div>
        </div>
        @else
            <button
                class="inline-flex items-center border-0 py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0">
                <a href="{{ route('login') }}"
                    class=" text-white px-3 py-2 rounded-md text-sm font-medium">Iniciar sesion</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
            <button
                class="inline-flex items-center border-0 py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0">
                <a href="{{ route('register') }}"
                    class="text-white px-3  py-2 rounded-md text-sm font-medium">Registrarme</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        @endauth
    </div>
  

  </div>