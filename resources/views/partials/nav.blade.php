
<section class="pt-6 bg-white overflow-hidden" x-data="{ mobileNavOpen: false }">
	<div class="container mx-auto px-4">
		<div class="mb-6">
		<div class="flex items-center justify-between px-6 py-3.5 bg-white border border-gray-100 rounded-full">
			<div class="w-auto">
			<div class="flex flex-wrap items-center">
				<div class="w-auto">
					<x-logo />
				</div>
			</div>
			</div>
			<div class="w-auto">
			<nav class="flex flex-wrap items-center">
				<div class="w-auto hidden lg:block">
				<ul class="flex items-center justify-center">
					<li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="{{ route('home') }}">Strona główna</a></li>
					<li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#portfolio">Portfolio</a></li>
					<li class="mr-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#kontakt">Kontakt</a></li>
				</ul>
				</div>
			</nav>
			</div>
			<div class="w-auto">
			<div class="flex flex-wrap items-center">
				<div class="w-auto hidden lg:block">
				<div class="flex flex-wrap -m-2">
					<x-button-main title="Skontaktuj się" url="#kontakt" />
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
						<x-logo />
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
				<nav class="flex flex-col justify-center py-8 w-full">
				<ul>
					<li class="mb-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="{{ route('home') }}">Strona główna</a></li>
					<li class="mb-9"><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#portfolio">Portfolio</a></li>
					<li><a class="inline-block text-sm font-bold text-gray-900 hover:text-gray-700" href="#kontakt">Kontakt</a></li>
				</ul>
				</nav>
				<div class="flex flex-col justify-end w-full pb-8">
				<div class="flex flex-wrap -m-2">
					<x-button-main title="Skontaktuj się" url="#portfolio" />
				</div>
				</div>
			</div>
			</nav>
		</div>
		</div>

	</div>
</section>
