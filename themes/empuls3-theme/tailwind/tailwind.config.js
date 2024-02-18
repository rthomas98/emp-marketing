// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				transparent: 'transparent',
				current: 'currentColor',
				white: '#ffffff',
				'mid-purple': {
					100: '#E6E4F1',
					200: '#CDC9E2',
					300: '#B3AFD4',
					400: '#9A94C5',
					500: '#1F1946',
					600: '#1B1740',
					700: '#16143A',
					800: '#121033',
					900: '#0D0C2D',
				},
				'purple': {
					100: '#E7E5F2',
					200: '#CECAE4',
					300: '#B6AFD6',
					400: '#9D94C8',
					500: '#231B53',
					600: '#1F184D',
					700: '#1A1547',
					800: '#151241',
					900: '#100E3B',
				},
				'pink': {
					100: '#F4CED4',
					200: '#E9A1AA',
					300: '#DE7581',
					400: '#D34957',
					500: '#BD1550',
					600: '#A81348',
					700: '#930F3F',
					800: '#7E0C37',
					900: '#69092E',
				},
				'yellow': {
					100: '#FFF7E0',
					200: '#FFEEC1',
					300: '#FFE5A1',
					400: '#FFDC82',
					500: '#FFC259',
					600: '#E6AF4F',
					700: '#CC9C45',
					800: '#B3893B',
					900: '#997631',
				},
				// ...
			},
			opacity: {
				'17': '.17',
			}
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		require('@tailwindcss/forms'),
		require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
