<div>
	@if (config('filament.dark_mode'))
	<div
		x-data="{ 
			mode: null,

			theme: null,

			init: function () {
				this.theme = localStorage.getItem('theme') || (this.isSystemDark() ? 'dark' : 'light')
				this.mode = localStorage.getItem('theme') ? 'manual' : 'auto'

				window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
					if (this.mode === 'manual') return

					if (event.matches && (! document.documentElement.classList.contains('dark'))) {
						this.theme = 'dark'

						document.documentElement.classList.add('dark')
					} else if ((! event.matches) && document.documentElement.classList.contains('dark')) {
						this.theme = 'light'

						document.documentElement.classList.remove('dark')
					}
				})

				$watch('theme', () => {
					if (this.mode === 'auto') return

					localStorage.setItem('theme', this.theme)

					if (this.theme === 'dark' && (! document.documentElement.classList.contains('dark'))) {
						document.documentElement.classList.add('dark')
					} else if (this.theme === 'light' && document.documentElement.classList.contains('dark')) {
						document.documentElement.classList.remove('dark')
					}

					$dispatch('dark-mode-toggled', this.theme) // dispatch event
				})
			},

			isSystemDark: function () {
				return window.matchMedia('(prefers-color-scheme: dark)').matches
			},
		}"
		x-on:dark-mode-toggled.window="mode = $event.detail"
	>
		<span x-show="theme === 'light'">
			<x-filament::layouts.app.topbar.toogle-button>
				<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
					<path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
				</svg>
			</x-filament::layouts.app.topbar.toogle-button>
		</span> 
		
		<span x-show="theme === 'dark'">
			<x-filament::layouts.app.topbar.toogle-button>
				<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white"
                    viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            clip-rule="evenodd" />
                </svg>
			</x-filament::layouts.app.topbar.toogle-button>
		</span>
	</div>
	@endif
</div>