var editors = [];

var CustomGalleryButton = function(context) {
  var sumn = $.summernote;
  var ui = $.summernote.ui;
  var button = ui.button({
    contents: '<i class="fa fa-folder"/>',
    tooltip: 'Images from gallery.',
    click: function() {
      var id = context.$note[0].name;
      $('#gallery').modal('show');
      $('#gallery').addClass('from-editor');
      $('#gallery').attr('data-id',id);
      editors[id] = context;
    }
  });

  return button.render();
}




jQuery(document).ready(function() {
    $(".summernote").summernote({
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['fontname', ['fontname']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video','customgallery']],
          ['view', ['fullscreen', 'codeview', 'help']],
        ],
        height: 190,
        minHeight: null,
        maxHeight: null,
        focus: !1,
        buttons: {
          customgallery: CustomGalleryButton,
        }
    }), $(".inline-editor").summernote({
        airMode: !0
    })
}), window.edit = function() {
    $(".click2edit").summernote()
}, window.save = function() {
    $(".click2edit").summernote("destroy")
};


