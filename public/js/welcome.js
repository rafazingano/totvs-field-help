$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipienttitle = button.data('whatevertitle')
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text(recipienttitle)
  modal.find('.modal-body iframe').attr('src', recipient)
});



$( function() {
  $('#exampleModal').draggable({ cursor: 'move', handle: ".modal-header" });
});