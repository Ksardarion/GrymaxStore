$('#picture-input').click(function(evt) {
	this.value = null;
});

$('#picture-input').change(function (evt) {
    let path = URL.createObjectURL(event.target.files[0]);
    
    files = evt.target.files;

    // FileReader support
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
        	// let img = document.createElement('img');
            // img.src = fr.result;
            // $('#image').replaceWith(img);
             $('#image').prop('src', fr.result);
            $('#modal').modal('show');
            // startCroping();
        }
        fr.readAsDataURL(files[0]);
        console.log(files[0]);
    }

    // Not supported
    else {
		alert("Error, FileReader is not supported");
    }
});

 // function getRoundedCanvas(sourceCanvas) {
 //        var canvas = document.createElement('canvas');
 //        var context = canvas.getContext('2d');
 //        var width = sourceCanvas.width;
 //        var height = sourceCanvas.height;

 //        canvas.width = width;
 //        canvas.height = height;

 //        context.imageSmoothingEnabled = true;
 //        // context.drawImage(sourceCanvas, 0, 0, width, height);
 //        // context.globalCompositeOperation = 'destination-in';
 //        // context.beginPath();
 //        // context.arc(width / 2, height / 2, Math.min(width, height) / 2, 0, 2 * Math.PI, true);
 //        // context.fill();

 //        return canvas;
 //      }

window.addEventListener('DOMContentLoaded', function () {
  var image = document.getElementById('image');
  var cropBoxData;
  var canvasData;
  var cropper;

  $('#modal').on('shown.bs.modal', function () {
    cropper = new Cropper(image, {
      aspectRatio: 16 / 9,
      // autoCropArea: 0.5,
      ready: function () {

        // Strict mode: set crop box data first
        cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
      }
    });
  }).on('hidden.bs.modal', function () {
    cropBoxData = cropper.getCropBoxData();
    canvasData = cropper.getCanvasData();
    cropper.destroy();
  });
});

$('#btn-crop').click(function(evt) {
	
});

// function startCroping() {
// 	var image = document.getElementById('image');
// 	// var button = document.getElementById('button');
// 	var result = $('result');
// 	var croppable = false;
// 	var cropper = new Cropper(image, {
// 	aspectRatio: 16/9,
// 	viewMode: 1,
// 	ready: function () {
// 	croppable = true;
// 	}
// 	});

// 	// button.onclick = function () {
// 	var croppedCanvas;
// 	var roundedCanvas;
// 	var roundedImage;

// 	if (!croppable) {
// 	return;
// 	}

// 	// Crop
// 	croppedCanvas = cropper.getCroppedCanvas();

// 	// Round
// 	roundedCanvas = getRoundedCanvas(croppedCanvas);

// 	// Show
// 	roundedImage = document.createElement('img');
// 	roundedImage.src = roundedCanvas.toDataURL()
// 	result.innerHTML = '';
// 	result.appendChild(roundedImage);
// 	// };
// }
