/**
 * Created by Pedro Gil Ferreira on 12.06.2017.
*/
$('#holder').on({
	'dragover dragenter': function (e) {
		e.preventDefault();
		e.stopPropagation();
	},
	'drop': function (e) {
		var dataTransfer = e.originalEvent.dataTransfer;
		if (dataTransfer && dataTransfer.files.length) {
			e.preventDefault();
			e.stopPropagation();
			$.each(dataTransfer.files, function (i, file) {
				$('#fileName').text("Nom du fichier :");
				$('#fileName').append("<p>" + file.name + " <span class=\"glyphicon glyphicon-remove\" id=\"icon-del-file\"></span><p/>");
				var reader = new FileReader();
				reader.onload = $.proxy(function (file, $fileList, event) {
					event.dataTransfer.setData('text/plain', null);
					var img = file.type.match('image.*') ? "<img src='" + event.target.result + "' /> " : "";
					$fileList.prepend($("<li>").append(img + file.name));
				}, this, file, $("#fileList"));
				reader.readAsDataURL(file);
				$('#icon-del-file').click(function(){
					$("#fileName").empty();
				});
			});
		}
	}
});