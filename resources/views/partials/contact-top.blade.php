

<section class="bg-white border-b border-gray-100 sticky top-0 z-50">
		<div class="container mx-auto px-4 py-2 flex flex-wrap items-center justify-between">
			<div class="flex items-center gap-6 text-gray-900 text-sm font-bold">
				<div class="flex items-center gap-2">
					<svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2 8.5C2 6.015 4.015 4 6.5 4h11A4.5 4.5 0 0 1 22 8.5v7A4.5 4.5 0 0 1 17.5 20h-11A4.5 4.5 0 0 1 2 15.5v-7Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M6 8l6 4 6-4"/></svg>
					<a href="mailto:{{ $settings->email }}" class="hover:text-blue-500 transition">{{ $settings->email }}</a>
				</div>
				<div class="flex items-center gap-2">
					<svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5.75C3 4.784 3.784 4 4.75 4h2.086c.414 0 .789.252.936.64l1.14 2.853a1 1 0 0 1-.217 1.09l-1.13 1.13a15.978 15.978 0 0 0 6.364 6.364l1.13-1.13a1 1 0 0 1 1.09-.217l2.853 1.14c.388.147.64.522.64.936V19.25A1.75 1.75 0 0 1 19.25 21h-1.5C10.044 21 3 13.956 3 5.75v0Z"/></svg>
					<p class="">{{ $settings->phone }}</p>
				</div>
			</div>
			<div class="sm:flex items-center gap-4 hidden">
				<a href="{{ $settings->facebook }}" target="_blank" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-600 transition">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
						<path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0"/>
					</svg>
				</a>
				<a href="{{ $settings->instagram }}" target="_blank" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 text-gray-700 hover:bg-pink-100 hover:text-pink-600 transition">
					<svg fill="currentColor" height="24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-271 273 256 256" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M-64.5,273h-157c-27.3,0-49.5,22.2-49.5,49.5v52.3v104.8c0,27.3,22.2,49.5,49.5,49.5h157c27.3,0,49.5-22.2,49.5-49.5V374.7 v-52.3C-15.1,295.2-37.3,273-64.5,273z M-50.3,302.5h5.7v5.6v37.8l-43.3,0.1l-0.1-43.4L-50.3,302.5z M-179.6,374.7 c8.2-11.3,21.5-18.8,36.5-18.8s28.3,7.4,36.5,18.8c5.4,7.4,8.5,16.5,8.5,26.3c0,24.8-20.2,45.1-45.1,45.1s-44.9-20.3-44.9-45.1 C-188.1,391.2-184.9,382.1-179.6,374.7z M-40,479.5C-40,493-51,504-64.5,504h-157c-13.5,0-24.5-11-24.5-24.5V374.7h38.2 c-3.3,8.1-5.2,17-5.2,26.3c0,38.6,31.4,70,70,70c38.6,0,70-31.4,70-70c0-9.3-1.9-18.2-5.2-26.3H-40V479.5z"></path> </g></svg>
				</a>
			</div>
		</div>
	</section>

