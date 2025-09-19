/**
 * Created by DEVSCREENCAST on 3/4/2017.
 */

Dropzone.options.uploads = {
    maxFilesize: 5000,
    acceptedFiles: ".png, .jpg, .jpeg, .bmp, .psd, .txt, .pdf, .html, .csv, .svg, .gif",
    success:function (file, response) {
        if(file.status === 'success') {
            //do this
            handleResponse.handleSuccess(response);
        }else{
            //do this
            handleResponse.handleError(response);
        }
    }
};
var handleResponse = {
  handleError: function (response) {
      console.log(response);
  },
  handleSuccess: function (response) {
       var msg = document.getElementById('msg');
       msg.innerHTML = 'uploaded successfully.';

  }
};