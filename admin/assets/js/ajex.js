$('.delete').click(function(data) {
  var id = $(this).data('id');
  $("#w3s").attr("href", function(i, origValue){
    return origValue + "/jquery/"; 
})
