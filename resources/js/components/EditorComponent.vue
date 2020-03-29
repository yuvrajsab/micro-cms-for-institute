<template>
	<div>
		<ckeditor
			:tag-name="tagName"
			v-model="editorData"
			:config="editorConfig"
		></ckeditor>
		<textarea
			v-show="false"
			v-model="editorData"
			:class="classes"
			:name="name"
			:id="id"
		></textarea>
	</div>
</template>

<script>
export default {
	props: {
		id: String,
		tagName: {
			type: String,
			default: 'textarea',
		},
		name: String,
		classes: String,
		oldValue: String,
	},

	data() {
		let route_prefix = '/admin/filemanager';
		let csrf_token = document
			.querySelector('meta[name="csrf-token"]')
			.getAttribute('content');

		return {
			editorData: this.oldValue,
			editorConfig: {
				// The configuration of the editor.
				filebrowserImageBrowseUrl: route_prefix + '?type=Images',
				filebrowserImageUploadUrl:
					route_prefix + '/upload?type=Images&_token=' + csrf_token,
				filebrowserBrowseUrl: route_prefix + '?type=Files',
				filebrowserUploadUrl:
					route_prefix + '/upload?type=Files&_token=' + csrf_token,
			},
		};
	},
};
</script>
