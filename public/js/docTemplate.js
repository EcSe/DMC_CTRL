function preview_image(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementsByName('output_image');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}