
<section class="pt-6 pb-20 bg-white overflow-hidden" x-data="{ mobileNavOpen: false }">
	<div class="container mx-auto px-4">
		<div class="mb-6">
		<div class="flex items-center justify-between px-6 py-3.5 bg-white border border-gray-100 rounded-full">
			<div class="w-auto">
			<div class="flex flex-wrap items-center">
				<div class="w-auto">
				<a href="#">
					<img src="https://static.shuffle.dev/uploads/files/10/1089a37f6a24e785e2fcb5a6cc45dc91f84be473/logos/logo-3a7c66c5df253837de5b9a844e8e3ada.png" alt=""/>
				</a>
				</div>
			</div>
			</div>
			<div class="w-auto">
			<div class="flex flex-wrap items-center">
				<div class="w-auto hidden lg:block">
				<ul class="flex items-center justify-center">
					<li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#technologie">Strona główna</a></li>
					<li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#technologie">O mnie</a></li>
					<li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#portfolio">Portfolio</a></li>
					<li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#kontakt">Kontakt</a></li>
				</ul>
				</div>
			</div>
			</div>
			<div class="w-auto">
			<div class="flex flex-wrap items-center">
				<div class="w-auto hidden lg:block">
				<div class="flex flex-wrap -m-2">
					<div class="w-full md:w-auto p-2"><a class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full" href="#kontakt">Skontaktuj się</a></div>
				</div>
				</div>
				<div class="w-auto lg:hidden">
				<button x-on:click="mobileNavOpen = !mobileNavOpen" class="inline-block">
					<svg class="text-blue-500" width="45" height="45" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="56" height="56" rx="28" fill="currentColor"></rect>
					<path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</button>
				</div>
			</div>
			</div>
		</div>
		<div :class="{'block': mobileNavOpen, 'hidden': !mobileNavOpen}" class="hidden fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50">
			<div x-on:click="mobileNavOpen = !mobileNavOpen" class="fixed inset-0 bg-gray-800 opacity-80"></div>
			<nav class="relative z-10 px-9 pt-8 bg-white h-full overflow-y-auto">
			<div class="flex flex-wrap justify-between h-full">
				<div class="w-full">
				<div class="flex items-center justify-between -m-2">
					<div class="w-auto p-2">
					<a class="inline-block" href="#">
						<img src="https://static.shuffle.dev/uploads/files/10/1089a37f6a24e785e2fcb5a6cc45dc91f84be473/logos/logo-3a7c66c5df253837de5b9a844e8e3ada.png" alt=""/>
					</a>
					</div>
					<div class="w-auto p-2">
					<button x-on:click="mobileNavOpen = !mobileNavOpen" class="inline-block">
						<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</button>
					</div>
				</div>
				</div>
				<div class="flex flex-col justify-center py-8 w-full">
				<ul>
					<li class="mb-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#portfolio">Portfolio</a></li>
					<li class="mb-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#technologie">Technologie</a></li>
					<li><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#kontakt">Kontakt</a></li>
				</ul>
				</div>
				<div class="flex flex-col justify-end w-full pb-8">
				<div class="flex flex-wrap -m-2">
					<div class="w-full p-2"><a class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full" href="#kontakt">Skontaktuj się</a></div>
				</div>
				</div>
			</div>
			</nav>
		</div>
		</div>
		<div class="flex flex-wrap justify-center -m-4">
		<div class="w-full md:w-1/3 p-4">
			<img class="w-full object-cover rounded-3xl" style="height: 640px;" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800" alt=""/>
		</div>
		<div class="w-full md:flex-1 p-4">
			<div class="relative flex flex-col justify-center items-center p-8 h-full text-center bg-white border border-gray-100 rounded-3xl">
			<div class="absolute bottom-0 left-1/2 min-w-max transform -translate-x-1/2">
				<div class="absolute bg-gradient-radial-white w-full h-full"></div>
				<img src="zanrly-assets/images/headers/pattern-grid-gray.svg" alt=""/>
			</div>
			<div class="relative max-w-lg">
				<span class="inline-block mb-3 text-sm text-blue-500 font-bold uppercase tracking-widest">Web Developer</span>
				<h1 class="font-heading mb-6 text-5xl text-gray-900 font-black tracking-tight">
				<span>Tworzę nowoczesne</span>
				<span class="text-blue-500">strony internetowe</span>
				<span>i aplikacje</span>
				</h1>
				<p class="mb-8 text-xl font-bold">Specjalizuję się w budowaniu responsywnych, wydajnych rozwiązań webowych z wykorzystaniem najnowszych technologii.</p>
				<div class="flex flex-wrap justify-center -m-2">
				<div class="w-full md:w-auto p-2"><a class="block w-full px-4 py-2.5 text-sm text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full" href="#portfolio">Zobacz projekty</a></div>
				<div class="w-full md:w-auto p-2"><a class="block w-full px-4 py-2.5 text-sm text-center text-gray-900 font-bold bg-gray-50 hover:bg-gray-200 focus:ring-4 focus:ring-gray-200 rounded-full" href="#kontakt">Kontakt</a></div>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
</section>
