<template>
	<ckeditor
		:id="id"
		:editor="editor"
		v-model="editorData"
		:tag-name="tagName"
		:name="name"
		:class="classes"
		:config="editorConfig"
		placeholder="Type the content here!"
	></ckeditor>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

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
		return {
			editor: ClassicEditor,
			editorData: this.oldValue,
			editorConfig: {
				// The configuration of the editor.
			},
		};
	},
};
</script>
