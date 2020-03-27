<script>
import slug from 'slug';

export default {
	data() {
		return {
			title: '',
			slug: '',
		};
	},

	computed: {
		generatedSlug() {
			return slug(this.title);
		},
	},
};
</script>
