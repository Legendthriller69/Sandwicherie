$(document).ready(function() {

	$("#goThoughtFile").click(function(event) {
		$("#fileName").click();
	});
	$("#fileName").change(function(event) {
		var l = $("#fileName").val().split("\\");
		$("#nameFileDrop").html(l[l.length-1]);
	});

    $(document).on('dragover', '#holderMax', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).css('border', '3px dashed #26a65b');
    });
    $(document).on('dragleave', '#holderMax', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).css('border', '3px dashed red');
        return false;
    });

    $(document).on('drop', '#holderMax', function(e) {
        if (e.originalEvent.dataTransfer) {
            if (e.originalEvent.dataTransfer.files.length) {
                // Stop the propagation of the event
                e.preventDefault();
                e.stopPropagation();
                // Main function to upload
                //upload(e.originalEvent.dataTransfer.files);
                $("#nameFileDrop").html(e.originalEvent.dataTransfer.files[0].name.replace(' ', '_'));
            }
        }
        $(this).css('border', '3px dashed #26a65b');
        return false;
    });
})