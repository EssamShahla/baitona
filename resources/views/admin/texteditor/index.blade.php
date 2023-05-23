<!--Include the JS & CSS-->
<link rel="stylesheet" href="{{ asset('texteditor/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ asset('texteditor/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src='{{ asset('texteditor/richtexteditor/plugins/all_plugins.js') }}'></script>
<div id="div_editor1" style="width: 50%; margin:auto;">

</div>

<script>
	var editor1 = new RichTextEditor("#div_editor1");
</script>
